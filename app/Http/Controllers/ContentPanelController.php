<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentPanelController extends Controller
{
    public function list()
    {
        return view('pages.content-panel');
    }
}
