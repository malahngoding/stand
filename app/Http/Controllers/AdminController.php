<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.main', compact('user'));
    }
}
