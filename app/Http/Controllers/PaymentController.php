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
            $getData = PaymentModel::insertEmail($request->who);
            return response()->json($getData);
        } else {
            return response()->json($insert);
        }
    }
}
