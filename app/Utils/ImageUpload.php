<?php
namespace App\Utils;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;

class ImageUpload{
    
    public static function uploadImage($request,$height=null,$width=null,$path = null){
        $imagename = Str::uuid(). date('Y-M-D').'.' . $request->extension();
        [$widthDefault,$heightDefault]=getimagesize($request);
        $height = $height ?? $heightDefault;
        $width = $width ?? $widthDefault;
        $image = Image::make($request->path());
        $image->fit($height, $width, function ($constraint) {
            $constraint->upsize();
        })->stream();
        Storage::disk('public')->put($path.$imagename, $image);
        return 'public/'.$path.$imagename;
    }
}
