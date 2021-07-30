<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ContentTypesController extends Controller
{
    public function  list()
    {
        return view('pages.content-types');
    }
}
