<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Message;
use Illuminate\Support\Str;

class ConvertedImagesEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $convertedImages;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $convertedImages)
    {
        $this->convertedImages = $convertedImages;
    }

    public function build()
    {
        $email = $this->subject('PixConvertify| Images Converted')->view('emails.converted_images');
        foreach ($this->convertedImages as $imageUrl) {
            $imageName = basename($imageUrl);
            $filePath = public_path('converted/' . $imageName);
    
            if (file_exists($filePath)) {
                $email->attach($filePath);
            }
        }

        return $email;
    }

    public function attachImages()
    {
        foreach ($this->convertedImages as $imageUrl) {
            $imageData = file_get_contents($imageUrl);
            $attachmentName = basename($imageUrl);
    
            // Generate a unique temporary file name
            $temporaryFileName = Str::random(40) . '.' . pathinfo($attachmentName, PATHINFO_EXTENSION);
    
            // Store the image data in a temporary file
            Storage::disk('local')->put($temporaryFileName, $imageData);
    
            // Attach the temporary file to the email
            $temporaryFilePath = storage_path('app/' . $temporaryFileName);
            $this->attach($temporaryFilePath, ['as' => $attachmentName]);
    
            // Delete the temporary file after attaching
            Storage::disk('local')->delete($temporaryFileName);
        }
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
   
    

}
