<?php

namespace App\Http\Livewire;

use App\Models\QuizViewModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\CodeQuestionModel;


class QuizView extends Component
{
    public $progress;
    public $quiz_group;
    public $question_name;
    public $no_quiz;

    public $TotalScore;
    public $questiongroupid;
    public $questiongroupflow;
    public $progressbutton = false;
    public $finishbutton = false;
    public $get_code_question;
    public $code_no_quiz;

    public function code_flow()
    {
        $this->get_code_question = CodeQuestionModel::getCodeQuiz();

        if (count($this->get_code_question) === 0) {
            return redirect('/code-question/'  . 1);
        } else {
            return redirect('/code-question/'  . $this->get_code_question[0]->noQuiz);
        }
    }

    public function mantap()
    {
        $id = Auth::id();
        $cek = DB::table('questions_flow')
            ->where('users_id', $id)
            ->get();

        $this->questiongroupflow = $cek->QuizGroup;

        if (count($cek) === 0) {
            return redirect('/quiz/'  . 1 . '/' . 1);
        } else {
            return redirect('/quiz/'  . $cek[0]->QuizGroup . '/' . $cek[0]->noQuiz);
        }

        // if ($cek[0]->QuizGroup !== NULL) {
        //     return redirect('/quiz/'  . $cek[0]->QuizGroup . '/' . $cek[0]->noQuiz);
        // } else {
        //     return redirect('/quiz/'  . 1 . '/' . 1);
        // }
    }
    public function mount()
    {

        $this->ids = Auth::id();
        // $this->dataDammy = 1;
        //query quiz group
        $db_quizgroup = DB::table('users')->where('id', $this->ids)->select('isQuizGroup', 'TotalScore')->get()->first();
        $this->checkQuizGroup = $db_quizgroup->isQuizGroup;
        $this->TotalScore = $db_quizgroup->TotalScore;

        $db_quizgroupidfromquizquestion = QuizViewModel::quizGroupIDFromDBQuizQuestion();
        $this->questiongroupid = $db_quizgroupidfromquizquestion->quizgroup_id;

        // $db_quizgroupidfromquizflow = QuizViewModel::quizGroupIDFromDBQuizFlow();


        $id = Auth::id();
        $data = DB::table('questions_flow')
            ->where('users_id', $id)
            ->get();



        if (count($data) === 0) {
            $quizgroup = 1;
            $dataa = DB::table('questions')
                ->where('id', 1)
                ->get();

            // $this->progressbutton = true;
            $this->quiz_group = 1;
            $this->no_quiz = 1;
            $this->question_name = $dataa[0]->groupname;
        } else {
            $dataa = DB::table('questions_flow')
                ->join('questions', 'questions_flow.QuizGroup', '=', 'questions.id')
                ->where('isActive', 'TRUE')
                ->get();


            if ($this->questiongroupflow > $this->questiongroupid) {
                $this->finishbutton = true;
                $this->progressbutton = false;

                $this->quiz_group = null;
                $this->question_name = null;
                $this->no_quiz = null;
            } else {
                $this->progressbutton = true;
                $this->finishbutton = false;

                $this->quiz_group = $dataa[0]->QuizGroup;
                $this->question_name = $dataa[0]->groupname;
                $this->no_quiz = $dataa[0]->noQuiz;
            }
        }
        // CODE QUESTION
        $this->get_code_question = CodeQuestionModel::getCodeName();
        if (count($this->get_code_question) === 0) {
            $data = DB::table('code_question')
                ->where('id', 1)
                ->get()
                ->first();
            $this->get_code_question = $data->title;
        } else {
            $data = CodeQuestionModel::getCodeName()
                ->first();
            $this->get_code_question = $data->title;
        }


        // $this->progress = $dataa[0]->groupname;
    }
    public function render()
    {

        $data =  DB::table('users')
            ->where('isActive', 'TRUE')
            ->orderBy('TotalScore', 'desc')
            ->take(3)
            ->get();


        // dd($data);
        return view('livewire.quiz-view', [
            'quiz' => $data,
        ]);
    }
}
