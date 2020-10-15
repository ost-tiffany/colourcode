<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Zip;

class ZipController extends Controller
{
    public function export(){

    //$zip = Zip::create('colourcode.zip'); // create zip
    //$zip->add('css/color.css');
    //$zip->add('css/text.css'); // add public path to the zip file

    
    return Response::download(public_path('カラーコード.zip'));
    }
}
