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
    public function updateDataHikingContent(Request $request)
    {
        $who = $request->who;
        $external_id = $request->external_id;
        $content = $request->content;
        $qr_string = $request->qr_string;
        $status = $request->status;
        $buy_date = $request->buy_date;
        $payment_date = $request->payment_date;
        $updated_date = $request->payment_date;

        $get = DB::table('paid_content')
            ->where('uuid',$who)
            ->where('content',$content)
            ->update([
                'uuid' => $who,
                'external_id' => $external_id,
                'content' => $content,
                'qr_string' => $qr_string,
                'status' => $status,
                'buy_date' => $buy_date,
                'payment_date' => $payment_date,
                'updated_date' => $updated_date
            ]);
        return response()->json('Hasil', $get);
        //fixed
    }
    public function postDataHikingContent(Request $request)
    {
        $who = $request->who;
        $external_id = $request->external_id;
        $content = $request->content;
        $qr_string = $request->qr_string;
        $status = $request->status;
        $buy_date = $request->buy_date;
        $payment_date = $request->payment_date;
        $updated_date = $request->payment_date;

        $get = DB::table('paid_content')
            ->insert([
                'uuid' => $who,
                'external_id' => $external_id,
                'content' => $content,
                'qr_string' => $qr_string,
                'status' => $status,
                'buy_date' => $buy_date,
                'payment_date' => $payment_date,
                'updated_date' => $updated_date
            ]);
        return response()->json('Hasil', $get);
        //fixed
    }
    public function getDataHikingCSS(Request $request)
    {
        $who = $request->who;
        $content = 'CSS_HIKE';

        $get = DB::table('paid_content')
            ->where('uuid', $who)
            ->where('content', $content)
            ->get();
        return response()->json($get);
    }
    public function getDataHikingHTML(Request $request)
    {
        $who = $request->who;
        $content = 'HTML_HIKE';

        $get = DB::table('paid_content')
            ->where('uuid', $who)
            ->where('content', $content)
            ->get();
        return response()->json($get);
    }
    public function getDataHikingJS(Request $request)
    {
        $who = $request->who;
        $content = 'JS_HIKE';

        $get = DB::table('paid_content')
            ->where('uuid', $who)
            ->where('content', $content)
            ->get();
        return response()->json($get);
    }
}
