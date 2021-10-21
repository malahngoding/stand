<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaidContentController extends Controller
{
    //
    public function getUserDataHikingContent(Request $request)
    {
        $who = $request->who;
        $content = $request->content;
        $cek = DB::table('paid_content')
            ->where('uuid', $who)
            ->where('content', $content)
            ->get();
        return response()->json($cek);
    }
    public function postDataHikingContent(Request $request)
    {
        $who = $request->who;
        $content = $request->content;
        $barcode = $request->barcode;
        $status = $request->status;
        $buy_date = $request->buy_date;
        $payment_date = $request->payment_date;
        $updated_date = $request->payment_date;

        $get = DB::table('paid_content')
            ->updateOrInsert([
                'uuid' => $who,
                'content' => $content,
                'barcode' => $barcode,
                'status' => $status,
                'buy_date' => $buy_date,
                'payment_date' => $payment_date,
                'updated_date' => $updated_date
            ]);
        return response()->json('Hasil', $get);
    }
}
