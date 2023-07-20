<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait UploadTrait
{
    public function upload(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $name = null, $type = null)
    {
        $name = !is_null($name) ? $name : Str::random(25);
        $file = $uploadedFile->storeAs($folder, $name . '.' . $uploadedFile->getClientOriginalExtension(), $disk);
        $upload = new Image();
        $upload->path = $file;
        $upload->type = $type;
        $upload->save();
        return $upload->id;
    }
}
