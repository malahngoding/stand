<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentTypesItemController extends Controller
{

    public function  get(Request $request, $id)
    {
        return view('pages.content-types-item')->with("id", $id);;
    }
}
