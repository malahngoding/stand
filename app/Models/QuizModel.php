<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuizModel extends Model
{
    use HasFactory;

    public static function quizGroup($qg, $questionnumber)
    {

        $db_quizgroup = DB::table('quiz_question')
            ->where('isDelete', '=', 'FALSE')
            ->where('quizgroup_id', $qg)
            ->where('no_quiz', $questionnumber)
            ->select('quizgroup_id', 'text', 'answer', 'no_quiz', 'picture', 'correct_answer')->get();

        return $db_quizgroup;
    }
    public static function updateGroupQuestion($ids, $qg)
    {
        $db_quizfinish = DB::table('questions_flow')
            ->where('users_id', $ids)
            ->update([
                'users_id' => $ids,
                'QuizGroup' => $qg + 1,
                'noQuiz' => 1,
                'soaldilewati' => 0,
                'jumlahbenar' => 0,
                'CurrentScore' => 0,
                'TotalCurrent' => 0,
            ]);


        return $db_quizfinish;
    }

    public static function quizFlowTrueAnswer($ids, $qg, $questionnumber)
    {

        $db_currentscore = DB::table('quiz_question')
            ->where('quizgroup_id', $qg)
            ->where('no_quiz', $questionnumber)
            ->select('score')->get()->first();
        $cs = $db_currentscore->score;

        $db_users = DB::table('users')
            ->where('id', $ids)
            ->select('TotalScore')
            ->get()->first();
        $totalscoredidbusers = $db_users->TotalScore;

        $countjumlahsoal = DB::table('quiz_question')
            ->where('isDelete', '=', 'FALSE')
            ->where('quizgroup_id', $qg)
            ->count();

        $db_totalscore = DB::table('questions_flow')
            ->where('users_id', $ids)
            ->select('TotalCurrent', 'jumlahbenar', 'soaldilewati')
            ->first();

        $total = 0;
        $jumlahbenar = 0;
        $soaldilewati = 0;

        if ($db_totalscore !== null) {
            $total = $db_totalscore->TotalCurrent;
            $jumlahbenar = $db_totalscore->jumlahbenar;
            $soaldilewati = $db_totalscore->soaldilewati;
        }


        if ($db_totalscore === null) {
            $db_quizflow = DB::table('questions_flow')
                ->insert([
                    'users_id' => $ids,
                    'QuizGroup' => $qg,
                    'noQuiz' => $questionnumber + 1,
                    'jumlahbenar' => 1,
                    'soaldilewati' => 0,
                    'CurrentScore' => $cs,
                    'TotalCurrent' => $cs,
                ]);
            $db_quizflow = DB::table('quiz_finish')
                ->insert([
                    'users_id' => $ids,
                    'soal_dilewati' => 0,
                    'jawaban_benar' => $jumlahbenar + 1,
                    'akurasi' => (1 / $countjumlahsoal) * 100,
                    'rata_rata' => intval($cs) / intval($countjumlahsoal),
                    'nilai' => intval($total) + intval($cs),
                ]);
            $db_quizflow = DB::table('users')
                ->where('id', $ids)
                ->update([
                    'TotalScore' => $cs,
                ]);
        } else {
            $db_quizflow = DB::table('questions_flow')
                ->where('users_id', $ids)
                ->update([
                    'users_id' => $ids,
                    'QuizGroup' => $qg,
                    'noQuiz' => intval($questionnumber) + 1,
                    'jumlahbenar' => intval($jumlahbenar) + 1,
                    'CurrentScore' => intval($cs),
                    'soaldilewati' => intval($soaldilewati),
                    'TotalCurrent' => intval($total) + intval($cs),
                ]);

            $db_quizflow = DB::table('quiz_finish')
                ->where('users_id', $ids)
                ->update([
                    'users_id' => $ids,
                    'jawaban_benar' => intval($jumlahbenar) + 1,
                    'akurasi' => ((intval($jumlahbenar) + 1) / intval($countjumlahsoal)) * 100,
                    'rata_rata' => (intval($total) + intval($cs)) / intval($countjumlahsoal),
                    'nilai' => intval($total) + intval($cs),
                ]);
            $db_quizflow = DB::table('users')
                ->where('id', $ids)
                ->update([
                    'TotalScore' => intval($totalscoredidbusers) + intval($cs),
                ]);
        }
    }

    public static function quizFlowFalseAnswer($ids, $qg, $nq)
    {
        $db_currentscore = DB::table('quiz_question')
            ->where('quizgroup_id', $qg)
            ->where('no_quiz', $nq)
            ->select('score')->get()->first();
        $cs = $db_currentscore->score;

        $db_totalscore = DB::table('questions_flow')
            ->where('users_id', $ids)
            ->select('TotalCurrent')
            ->first();

        $total = 0;
        if ($db_totalscore !== null) {
            $total = $db_totalscore->TotalCurrent;
        }

        if ($db_totalscore === null) {
            $db_quizflow = DB::table('questions_flow')
                ->insert([
                    'users_id' => $ids,
                    'QuizGroup' => $qg,
                    'noQuiz' => $nq + 1,
                    'soaldilewati' => 0,
                    'jumlahbenar' => 0,
                    'CurrentScore' => 0,
                    'TotalCurrent' => 0,
                ]);
            $db_quizflow = DB::table('quiz_finish')
                ->insert([
                    'users_id' => $ids,
                    'jawaban_benar' => 0,
                    'akurasi' => 0,
                    'rata_rata' => 0,
                    'soal_dilewati' => 0,
                    'nilai' => 0,
                ]);
        } else {
            $db_quizflow = DB::table('quiz_finish')
                ->where('users_id', $ids)
                ->update([
                    'users_id' => $ids,
                    // 'QuizGroup' => $qg,
                    // 'noQuiz' => $nq,
                    // 'CurrentScore' => $cs,
                    // 'nilai' => $total,
                ]);

            $db_quizflow = DB::table('questions_flow')
                ->where('users_id', $ids)
                ->update([
                    'users_id' => $ids,
                    'QuizGroup' => $qg,
                    'noQuiz' => $nq + 1,
                ]);
        }



        return $db_quizflow;
    }
    public static function quizDisplayGroupName($qg)
    {

        $db_quizflow = DB::table('questions')
            ->where('id', $qg)
            ->select('groupname')
            ->get()->first();


        return $db_quizflow;
    }
    public static function quizDisplayPicture($qg)
    {
        $db_quizflow = DB::table('questions')
            ->where('id', $qg)
            ->select('groupname')
            ->get()->first();


        return $db_quizflow;
    }
    public static function quizDisplayScore($qg, $nq)
    {
        $db_quizflow = DB::table('quiz_question')
            ->where('isDelete', '=', 'FALSE')
            ->where('quizgroup_id', $qg)
            ->where('no_quiz', $nq)
            ->select('score')->get();


        return $db_quizflow;
    }

    public static function quizFlowSkip($ids, $qg, $nq)
    {
        $db_totalscore = DB::table('questions_flow')
            ->where('users_id', $ids)
            ->select('TotalCurrent', 'jumlahbenar', 'soaldilewati')
            ->first();

        $total = 0;
        $jumlahbenar = 0;
        $soaldilewati = 0;

        if ($db_totalscore !== null) {
            $total = $db_totalscore->TotalCurrent;
            $jumlahbenar = $db_totalscore->jumlahbenar;
            $soaldilewati = $db_totalscore->soaldilewati;
        }
        if ($db_totalscore === null) {
            $db_questionsflow = DB::table('questions_flow')
                ->insert([
                    'users_id' => $ids,
                    'QuizGroup' => $qg,
                    'noQuiz' => $nq,
                    'soaldilewati' => 0,
                    'jumlahbenar' => 0,
                    'CurrentScore' => 0,
                    'TotalCurrent' => 0,
                ]);
            $db_quizflow = DB::table('quiz_finish')
                ->insert([
                    'users_id' => $ids,
                    'jawaban_benar' => 0,
                    'akurasi' => 0,
                    'rata_rata' => 0,
                    'soal_dilewati' => 0,
                    'nilai' => 0,
                ]);
        } else {
            $db_quizfinish = DB::table('questions_flow')
                ->where('users_id', $ids)
                ->update([
                    'users_id' => $ids,
                    'soaldilewati' => $soaldilewati + 1,
                ]);

            $db_quizfinish = DB::table('quiz_finish')
                ->where('users_id', $ids)
                ->update([
                    'users_id' => $ids,
                    'soal_dilewati' => $soaldilewati + 1,
                ]);
        }

        return $db_totalscore;
    }
}
