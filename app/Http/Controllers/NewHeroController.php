<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewHeroController extends Controller
{
    public function hero()
    {
        return view('pages.new-hero');
    }
    //
}
