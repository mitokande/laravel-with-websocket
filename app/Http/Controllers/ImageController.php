<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public static function getImage($number)
    {
        $originalImagePath = public_path('nft1.png');
        $img = imagecreatefrompng($originalImagePath);
        return 'nft1.png?v=' . rand(1, 123124);
    }
}
