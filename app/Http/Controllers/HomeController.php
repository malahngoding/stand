<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        $data = ['message' => 'Welcome to Malah Ngoding!'];
        return response()->json($data, 200);
    }

    public function keep_awake()
    {
        $wake = Home::awake();
        $data = ['message' => 'Successfully woke!', 'data' => $wake];
        return response()->json($data, 200);
    }
}
