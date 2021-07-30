<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ConfigController extends Controller
{
    public function storage($filename)
    {
        //check image exist or not
        $exists = Storage::disk('local')->exists('public/photos/' . $filename);
        if ($exists) {
            $content = Storage::get('public/photos/' . $filename);
            $mime = Storage::mimeType('public/photos/' . $filename);
            $response = Response::make($content, 200);
            $response->header("Content-Type", $mime);
            return $response;
        } else {
            abort(404);
        }
    }
}
