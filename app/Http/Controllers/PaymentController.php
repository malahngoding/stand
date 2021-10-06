<?php

namespace App\Http\Controllers;

use App\Models\PaymentModel;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getUserUUID(Request $request)
    {
        $insert = PaymentModel::checkUsersUUID($request->who);
        if (count($insert) === 0) {
            PaymentModel::insertEmail($request->who);
        }
        return response()->json($insert);
    }
    public function updatePayment(Request $request)
    {
        $who = $request->who;
        $status_pembayaran = $request->status_pembayaran;
        $postdata = PaymentModel::updatePayment($who, $status_pembayaran);
        return response()->json($postdata);
    }
}
