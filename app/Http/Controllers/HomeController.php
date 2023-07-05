<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function convertImage(Request $request)
    {
        // Get the uploaded image file
        $imageFile = $request->file('image');
        // Define the desired image format
        $format = $request->input('format');
    
        // Compress and convert the image
        $convertedImage = Image::make($imageFile)->encode($format, 75);
    
        // Generate a unique filename
        $filename = uniqid().'.'.$format;
    
        // Save the converted image to the public disk
        $convertedImagePath = public_path('converted/'.$filename);
        $convertedImage->save($convertedImagePath);
    
        // Return the downloadable link for the converted image
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
    public function checkresponsiveness()
    {
        return view('responsiveness');
    }
}
