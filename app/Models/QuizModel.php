<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class QuizModel extends Model
{
    use HasFactory;

    public static function getQuizGroupName()
    {
        $get = DB::table('quiz_question_group')
            ->get();

        return $get;
    }
}
