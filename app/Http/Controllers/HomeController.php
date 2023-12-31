<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ConvertedImagesEmail;
use App\Models\Blog;
use App\Models\ContactUs;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Process\Process;
use TCPDF;
use GuzzleHttp\Client;
use FFMpeg\FFMpeg;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Yajra\DataTables\Facades\DataTables;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;
use Dompdf\Dompdf;
use Smalot\PdfParser\Parser;
use Imagick;
use ImagickPixel;


class HomeController extends Controller
{

    public function checkresponsiveness()
    {
        return view('responsiveness');
    }

    public function convertImage(Request $request)
    {
        error_reporting(E_ALL);
        ini_set('memory_limit', '1024M');

        // Get the uploaded image file
        $imageFile = $request->file('image');
        // Define the desired image format
        $format = strtolower($request->input('format'));
         // Generate a unique filename
         $img_name = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
         $filename = $img_name . '.' . $format;

         $allowedImageFormats = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
         $fileExtension = strtolower($imageFile->getClientOriginalExtension());
         $convertedImagePath = public_path('converted/'.$filename);

         $fileSize = $imageFile->getSize();
         $maximumFileSize = 5 * 1024 * 1024;
         
         if ((in_array($format, $allowedImageFormats)) && (in_array($fileExtension,$allowedImageFormats))) {
           if($fileSize > $maximumFileSize){
            $convertedImage = Image::make($imageFile)->encode($format, 60);
            $convertedImage->save($convertedImagePath);
           }
           else{
                // Compress and convert the image
                $convertedImage = Image::make($imageFile)->encode($format, 80);
                // // Save the converted image to the public disk
                $convertedImage->save($convertedImagePath);
            }
         }
         elseif ($format == 'pdf' && (in_array($fileExtension,$allowedImageFormats))){
                    // Create a new TCPDF instance
                    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                    // Set document information
                    $pdf->SetCreator('PixConvertify');
                    $pdf->SetAuthor('PixConvertify');
                    $pdf->SetTitle('Image to PDF Conversion');
                    $pdf->SetSubject('Converted PDF Document');
                    $pdf->SetKeywords('Image, PDF, Conversion');

                    // Add a page
                    $pdf->AddPage();

                    // Set image DPI and size
                    $dpi = 150;
                    $width = 0;
                    $height = 0;

                    // Load the image using GD library
                    $image = imagecreatefromstring(file_get_contents($imageFile->getRealPath()));
                    $width = imagesx($image);
                    $height = imagesy($image);

                    // Calculate the size for TCPDF
                    $ratio = $width / $height;
                    $maxWidthPt = 180; // Maximum width in points (adjust as needed)
                    $maxHeightPt = $maxWidthPt / $ratio;

                    // Calculate the position to center the image on the page
                    $x = ($pdf->getPageWidth() - $maxWidthPt) / 2;
                    $y = ($pdf->getPageHeight() - $maxHeightPt) / 2;

                    $pdf->SetFillColor(255, 255, 255);
                    $pdf->Rect(0, 0, $pdf->getPageWidth(), $pdf->getPageHeight(), 'F');
                    // Place the image on the PDF
                    $pdf->Image($imageFile->getRealPath(), $x, $y, $maxWidthPt, $maxHeightPt, '', '', '', false, $dpi, '', false, false, 0);

                    // Save the converted PDF to the public disk
                    $pdfFilePath = public_path('converted/' . $filename);
                    $pdf->Output($pdfFilePath, 'F');
         } elseif ($format == 'docx' && (in_array($fileExtension,$allowedImageFormats))){

            if ($imageFile->getClientOriginalExtension() != 'jpg') {
                $convertedImage = Image::make($imageFile)->encode('jpg');
                $imagePath = public_path('converted/') . uniqid() . '.jpg';
                $convertedImage->save($imagePath);
            } else {
                $imagePath = $imageFile->getPathname();
            }

            $phpWord = new PhpWord();
            $section = $phpWord->addSection();

            $maxWidth = 540; 
            $maxHeight = 720;
            list($imgWidth, $imgHeight) = getimagesize($imagePath);
            $aspectRatio = $imgWidth / $imgHeight;
            $newWidth = $maxWidth;
            $newHeight = $newWidth / $aspectRatio;

            if ($newHeight > $maxHeight) {
                $newHeight = $maxHeight;
                $newWidth = $newHeight * $aspectRatio;
            }


            $section->addImage($imagePath, ['width' => $newWidth, 'height' => $newHeight]);

            $img_name = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $docxFilePath = public_path('converted/' . $filename);
            $phpWord->save($docxFilePath, 'Word2007');
        }
        elseif ($format == 'pdf' && $fileExtension === 'docx'){

            $dompdf = new Dompdf();
            $phpWord = new PhpWord();
            $phpWord = IOFactory::load($imageFile->getPathname());
            $tempDir = 'temp'; // Define your temporary directory name here
            $tempHtmlFilePath = storage_path('app/' . $tempDir . '/' . uniqid() . '.html');
            $phpWord->save($tempHtmlFilePath , 'HTML');

            $htmlContent = file_get_contents($tempHtmlFilePath );
            $dompdf->loadHtml($htmlContent);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $pdfFilePath = public_path('converted/' . $filename);
            file_put_contents($pdfFilePath, $dompdf->output());

            unlink($tempHtmlFilePath );

        }
        elseif ($format == 'docx' && $fileExtension === 'pdf'){ 

            $pdfParser = new Parser();
            $pdf = $pdfParser->parseFile($imageFile->getRealPath());
            $text = $pdf->getText();
            $phpWord = new PhpWord();

            $section = $phpWord->addSection();
            $section->addText($text);
            
            $docxFilePath = public_path('converted/' . $filename);
            $phpWord->save($docxFilePath, 'Word2007');
        }
     
        return response()->json([
            'success' => true,
            'url' => asset('converted/'.$filename),
            'filename' => $filename,
        ]);
    }


    public function compressImage(Request $request)
    {

        // Get the uploaded image file
        $imageFile = $request->file('image');
        $ext = strtolower($imageFile->getClientOriginalExtension());

         // Generate a unique filename
         $img_name = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
         $filename = $img_name .'.' . $ext;

         $convertedImagePath = public_path('compressed/'.$filename);

         $fileSize = $imageFile->getSize();
         $maximumFileSize = 5 * 1024 * 1024;
         
         $convertedImage = Image::make($imageFile->getRealPath());

         if ($fileSize > $maximumFileSize) {
            // Large file, apply higher compression
        $convertedImage->save($convertedImagePath,50,'webp');
 
        } else {
            // Smaller file, apply lower compression
        $convertedImage->save($convertedImagePath,70,'webp');
        }
       

        return response()->json([
            'success' => true,
            'url' => asset('compressed/'.$filename),
            'filename' => $filename,
        ]);
    }


    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $convertedImages = $request->input('converted_images');
        // try {
            Mail::to($email)->send(new ConvertedImagesEmail($convertedImages));
        // } catch (\Exception $e) {
            // Handle any exception occurred during email sending
            // return response()->json(['success' => false, 'message' => 'Failed to send email.']);
        // }
        return response()->json(['success' => true, 'message' => 'Email sent successfully.']);
    }

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function justcompress()
    {
        return view('compress');
    }
    public function blogs(Request $request)
    {
        $searchTerm = $request->input('search');
        // Retrieve all blog posts or search results based on the search term
        $blogs = Blog::with('images')
            ->when($searchTerm, function ($query, $searchTerm) {
                return $query->where('title', 'like', "%$searchTerm%")
                    ->orWhere('content', 'like', "%$searchTerm%");
            });
        $blogs = $blogs->latest()->paginate(12);
        return view('convertify-blogs.blog',['blogs' => $blogs, 'searchTerm' => $searchTerm]);
    }
    public function blogsdetail(Request $request,$slug)
    {
        $blog = Blog::where('slug', $slug)->with('images')->first();
        $latestPosts = Blog::with('images')->where('id', '!=', $blog->id)->where('status', 1)->latest()->take(5)->get();
        return view('convertify-blogs.blog-detail',['blog' => $blog, 'latestPosts' => $latestPosts]);
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function adminHome(){
        return view('admin.home');
    }


    public function howWorks()
    {
        return view('how-its-work');
    }
    public function privacyPolicies()
    {
        return view('privacy-policies');
    }
    public function term()
    {
        return view('term-and-condition');
    }
    public function support()
    {
        return view('support');
    }
    public function contact()
    {
        return view('contact-us');
    }

    public function contactUs(Request $request)
    {
        $validator = FacadesValidator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            // 'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message,
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message,
        ];
        Mail::to('usamayaqub302@gmail.com')->bcc('danishkhurshid333@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('success','Contact message submitted succssfully');
    }


    public function runCleanup()
    {
        $convertedFolderPath = public_path('converted');

        $files = File::allFiles($convertedFolderPath);

        $currentTimestamp = Carbon::now();

        foreach ($files as $file) {
            $fileTimestamp = Carbon::createFromTimestamp($file->getMTime());

            if ($currentTimestamp->diffInMinutes($fileTimestamp) > 30) {
                File::delete($file->getPathname());
            }
        }

        return response()->json(['message' => 'Cleanup process completed.']);
    }
    

    public function indexContact(Request $request)
    {
        $data = ContactUs::latest()->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->editColumn('created_at', function ($item) {
                    return Carbon::parse($item->created_at)->format('d-m-Y, h:i A');
                })
                ->addColumn('message', function ($item) {
                    $trimmedMessage = strlen($item->message) > 100 ? substr($item->message, 0, 100) . '...' : $item->message;
                    $showMoreButton = strlen($item->message) > 100 ? '<button class="btn btn-link show-more-btn" data-full-message="' . htmlspecialchars($item->message, ENT_QUOTES) . '">Show More</button>' : '';
                    return '<div class="message">' . $trimmedMessage . '</div>' . $showMoreButton;
                })
                ->rawColumns(['created_at','message'])
                ->make(true);
        }
        return view('admin.contact.index');
    }

 
}
