<?php

namespace App\Http\Traits;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;

trait FileUploadTrait
{

    public function uploadSingleFile($file): string
    {
        if ($file) {
            $img_name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $img_name = $img_name . '-' . time() . '.' . $file->getClientOriginalExtension();
            $ext = $file->getClientOriginalExtension();
            if ($ext == 'jpeg' || $ext == 'png' || $ext == 'jpg' || $ext == 'webp' || $ext == 'svg') {
                $url = url('blog') . '/' . $img_name;
                $image = Image::make($file->getRealPath());
                $image->save('blog' . '/' . $img_name, Config::get('custom.image_quality'), Config::get('custom.image_encode'));
            }
            // if ($ext == 'pdf' || $ext == 'docx') {
            //     $path = 'documents/' . $img_name;
            //     Storage::disk('s3')->put($path, file_get_contents($file));
            //     $url = Storage::disk('s3')->url($path);
            // }
            return $url;
        }
    }

    public function uploadMultipleFiles($file)
    {
        $url = [];
        if ($file) {
            foreach ($file as $key => $image) {
                $img_name = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $img_name = $img_name . '-' . $key . time() . '.' . $image->getClientOriginalExtension();
                $ext = $image->getClientOriginalExtension();
                if ($ext == 'jpeg' || $ext == 'png' || $ext == 'jpg' || $ext == 'webp') {
                    $url[$key] = url('blog') . '/' . $img_name;
                    $image = Image::make($image->getRealPath());
                    $image->save('blog/' . $img_name, Config::get('custom.image_quality'), Config::get('custom.image_encode'));
                }
                // if ($ext == 'pdf' || $ext == 'docx') {
                // $path = 'documents/' . $img_name;
                // Storage::disk('s3')->put($path, file_get_contents($image));
                // $url[$key] = Storage::disk('s3')->url($path);
                // }
            }
        }
        return $url;
    }
}
