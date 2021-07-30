<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Example4 extends Component
{
    public $ids;
    public $quizgroup;
    public $quizquestions;
    public $updatequizgroup;

    public $answer1;
    public $answer2;
    public $answer3;
    public $answer4;
    public $answer5;
    public $p1;
    public $p2;
    public $p3;
    public $p4;
    public $p5;
    public $displayCurrentScore;

    public $trueAnswer;
    public $falseAnswer;

    public $currentScore;

    public $check;
    public $checkCurrentScore;
    public $checkQuizGroup;
    public $checkQuestions;
    public $checkTotalScore;

    public $a;
    public $b;
    public $form;


    public function mount()
    {
        $this->ids = Auth::id();
        // $this->dataDammy = 1;

        //query quiz group
        $db_quizgroup = DB::table('users')->where('id', $this->ids)->select('isQuizGroup')->get()->first();
        $this->checkQuizGroup = $db_quizgroup->isQuizGroup;


        //query soal
        $db_questions = DB::table('questions_flow')->where('users_id', $this->ids)->where('QuizGroup', $this->checkQuizGroup)->select('QuizQuestions')->get()->first();
        $this->checkQuestions = $db_questions->QuizQuestions;

        //query current score
        $db_currentscore = DB::table('questions_flow')->where('users_id', $this->ids)->where('QuizGroup', $this->checkQuizGroup)->select('CurrentScore')->get()->first();
        $this->checkCurrentScore = $db_currentscore->CurrentScore;

        //query total score
        $db_totalscore = DB::table('total_current')->where('users_id', $this->ids)->select('TotalCurrent')->get()->first();
        $this->checkTotalScore = $db_totalscore->TotalCurrent;


        //query jawaban
        // $cek = DB::table('questions_flow')->where('users_id', $this->ids)->where('QuizGroup', $this->checkQuizGroup)->select('Answer1', 'Answer2', 'Answer3', 'Answer4')->get()->first();
        // $this->answer1 = $cek->Answer1;
        // $this->answer2 = $cek->Answer2;
        // $this->answer3 = $cek->Answer3;
        // $this->answer4 = $cek->Answer4;

        $cek1 = DB::table('questions_flow')->where('users_id', $this->ids)->where('QuizGroup', $this->checkQuizGroup)->get()->first();
        $this->uhuy = explode("|", $cek1->answer, 5);
        $this->answer1 = $this->uhuy[0];
        $this->answer2 = $this->uhuy[1];
        $this->answer3 = $this->uhuy[2];
        $this->answer4 = $this->uhuy[3];
        $this->answer5 = $this->uhuy[4];
    }

    public function trueResult()
    {
        $checkScore = DB::table('questions_flow')->where('users_id', $this->ids)->where('QuizGroup', $this->checkQuizGroup)
            ->update([
                'CurrentScore' => $this->checkCurrentScore + 20,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        $this->updatequizgroup = $this->checkQuizGroup + 1;
        $grp = DB::table('users')->where('id', $this->ids)
            ->update([
                'isQuizGroup' => $this->updatequizgroup,
            ]);

        $total = DB::table('total_current')->where('users_id', $this->ids)
            ->update([
                'TotalCurrent' => $this->checkTotalScore + 20,
            ]);


        $this->a = 0;
        if ($this->checkQuizGroup + $this->a === 4) {
            return redirect('/example5/');
        }
    }

    public function falseResult()
    {
        $checkScore = DB::table('questions_flow')->where('users_id', $this->ids)->where('QuizGroup', $this->checkQuizGroup)
            ->update([
                'CurrentScore' => $this->checkCurrentScore + 0,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        $this->updatequizgroup = $this->checkQuizGroup + 1;
        $grp = DB::table('users')->where('id', $this->ids)
            ->update([
                'isQuizGroup' => $this->updatequizgroup,
            ]);

        $total = DB::table('total_current')->where('users_id', $this->ids)
            ->update([
                'TotalCurrent' => $this->checkTotalScore + 0,
            ]);

        $this->a = 0;
        if ($this->checkQuizGroup + $this->a === 4) {
            return redirect('/example5/');
        }
    }


    public function back()
    {
        return redirect('/user/');
    }

    public function render()
    {
        $this->quizgroup = $this->checkQuizGroup;
        $this->quizquestions = $this->checkQuestions;
        $this->p1 = $this->answer1;
        $this->p2 = $this->answer2;
        $this->p3 = $this->answer3;
        $this->p4 = $this->answer4;
        $this->p5 = $this->answer5;
        $this->displayCurrentScore = $this->checkTotalScore;

        return view('livewire.example4');
    }
}
