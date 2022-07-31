<?php

use Intervention\Image\Facades\Image;

if (! function_exists('upload_image')) {
    function upload_image($image, $path)
    {
        $new_image_name = date('YmdHis').$image->getClientOriginalName();
        $img = Image::make($image);
        $img->save($path.$new_image_name);
        return $new_image_name;
    }
}