<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use TCPDF;


class HomeController extends Controller
{

    public function checkresponsiveness()
    {
        return view('responsiveness');
    }

    public function convertImage(Request $request)
    {
        // Get the uploaded image file
        $imageFile = $request->file('image');
        // Define the desired image format
        $format = strtolower($request->input('format'));
         // Generate a unique filename
         $img_name = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
         $filename = $img_name . '-' . time() . '.' . $format;

         $allowedImageFormats = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
         $fileExtension = strtolower($imageFile->getClientOriginalExtension());
         $convertedImagePath = public_path('converted/'.$filename);
         
         if ((in_array($format, $allowedImageFormats)) && (in_array($fileExtension,$allowedImageFormats))) {
            // Compress and convert the image
            $convertedImage = Image::make($imageFile)->encode($format, 90);
            // Save the converted image to the public disk
            $convertedImage->save($convertedImagePath);
         }
         elseif ($format == 'pdf' && (in_array($fileExtension,$allowedImageFormats)) || $fileExtension == 'docx'){
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
         }
     
        return response()->json([
            'success' => true,
            'url' => asset('converted/'.$filename),
            'filename' => $filename,
        ]);
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
    public function login()
    {
        return view('login');
    }

    
 
}
