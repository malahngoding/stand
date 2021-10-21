<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaidContentController extends Controller
{
    //
    public function getUserData(Request $request)
    {
        $who = $request->who;
        $content = $request->content;
        $cek = DB::table('paid_content')
            ->where('uuid', $who)
            ->where('content', $content)
            ->get();

        return response()->json($cek);
    }
}
