<?php

namespace App\Http\Controllers;

use App\Models\FlashCardModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashCardController extends Controller
{

    public function get(Request $request)
    {
        $array_question = [];
        // $id=1;
        $id=$request->id;
        $getQuestion = FlashCardModel::getData($id);
        foreach ($getQuestion as $item) {
            array_push($array_question,['groupname' => $item->groupname,
            'quizgroup_id' => $item->quizgroup_id, 'picture' => $item->picture,
            'score' => $item->score,
            'question' => $item->question,
            'correct_answer' => $item->correct_answer,
            'incorrect_answer' => explode("|", $item->incorrect_answer)]);
        }

        return response()->json($array_question);







        // if ($email === null) {
        //     return response()->json(
        //         [
        //             "message" => ["Silakan masukkan email"],
        //             "success" => false,

        //         ],
        //     );
        // }
        // if (filter_var($email, FILTER_VALIDATE_EMAIL) && $cek !== null) {
        //     return response()->json(
        //         [
        //             "message" => ["Data Berhasil didapatkan"],
        //             "success" => true,
        //             "profile" => $getQuestion,

        //         ]
        //     );
        // } elseif ($cek === null && $email !== null && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     return response()->json(
        //         [
        //             "message" => ["Email tidak terdaftar"],
        //             "success" => false,

        //         ],
        //     );
        // } else {
        //     return response()->json(
        //         [
        //             "message" => ["Maaf email yang kamu tidak lolos validasi"],
        //             "success" => false,
        //         ],
        //     );
        // }
    }
}
