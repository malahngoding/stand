<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxonItemController extends Controller
{

    public function add(Request $request, $id)
    {
        return view('pages.taxon-item')->with("id", $id);
    }
}
