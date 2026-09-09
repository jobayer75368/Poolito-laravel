<?php

namespace App\Http\Controllers;

use Cloudinary\Cloudinary;
use Illuminate\Support\Facades\Storage;

abstract class Controller
{
    protected function uploadImage($file, $folder)
    {
        if (app()->environment('local')) {
            return $file->store($folder, 'public');
        }

        $upload = (new Cloudinary())->uploadApi()->upload(
            $file->getRealPath(),
            ['folder' => $folder]
        );

        return $upload['secure_url'];
    }

    protected function deleteImage($path)
    {
        if (!$path) {
            return;
        }

        if (app()->environment('local')) {
            Storage::disk('public')->delete($path);
        }
    }
}
