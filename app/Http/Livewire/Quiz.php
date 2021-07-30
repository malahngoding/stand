<?php

namespace App\Http\Livewire;

use App\Http\Controllers\QuizController;
use App\Models\QuizModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class Quiz extends Component
{
    public $ids;
    public $qg;
    public $nq;
    public $url;
    public $quizgroup;
    public $quizquestions;
    public $saveData;

    public $displayScore;
    public $displayPicture;
    public $displayGroupName;

    public $questionnumber;

    public $trueAnswer;
    public $falseAnswer;

    public $currentScore;

    public $check;
    public $checkCurrentScore;
    public $checkTotalScore;

    public $checkQuizGroup;
    public $checkNoQuiz;
    public $checkQuestions;
    public $checkAnswer;

    public $present;
    public $key_numberquiz;
    public $array_number_quiz = [];
    public $finish_click;



    public function mount()
    {

        $this->url = URL::full();
        $urldecode = urldecode($this->url);

        $this->ids = Auth::id();

        $this->qg = substr($urldecode, strpos($urldecode, "z/") + 2, -2);

        $this->nq = substr($urldecode, strpos($urldecode, "z/") + 4);

        $data =  DB::table('quiz_question')
            ->join('questions', 'quiz_question.quizgroup_id', '=', 'questions.id')
            ->where('quizgroup_id', $this->qg)
            ->where('isDelete', '=', 'FALSE')
            ->select()
            ->orderBy('quizgroup_id', 'asc')
            ->orderBy('no_quiz', 'asc')
            ->get();


        $this->present = false;
        foreach ($data as $item) {
            if ($item->no_quiz === $this->nq) {
                $this->present = true;
            }
        }

        $this->questionnumber = null;

        if ($this->present === true) {
            $this->questionnumber = $this->nq;
        } else {
            $this->questionnumber = $data[0]->no_quiz;
        }


        foreach ($data as $item) {
            array_push($this->array_number_quiz, $item->no_quiz);
        }
        $this->key_numberquiz = array_search($this->questionnumber, $this->array_number_quiz);

        $this->finish_click = count($this->array_number_quiz);






        //DB
        $db_quizgroup = QuizModel::quizGroup($this->qg, $this->questionnumber)->first();
        //cek quiz group
        $this->checkQuizGroup = $db_quizgroup->quizgroup_id;
        //cek nomor quiz
        $this->checkNoQuiz = $db_quizgroup->no_quiz;

        //cek soal
        $this->checkQuestions = $db_quizgroup->text;

        //cek jawaban
        $this->checkAnswer = explode("|", $db_quizgroup->answer, 5);

        //cek jawaban benar
        $this->trueAnswer = $db_quizgroup->correct_answer;

        //cek picture
        $this->displayPicture = $db_quizgroup->picture;

        //cek display groupname
        $db_displaygroupname = QuizModel::quizDisplayGroupName($this->qg);
        $this->displayGroupName = $db_displaygroupname->groupname;

        //cek display score
        $db_displayscore = QuizModel::quizDisplayScore($this->qg, $this->questionnumber)->first();
        $this->displayScore = $db_displayscore->score;
    }


    public function check_answer($id)
    {
        if ($this->trueAnswer === $id) {

            if ($this->finish_click - 1 === $this->key_numberquiz) {
                $db_savedata = QuizModel::quizFlowTrueAnswer($this->ids, $this->qg, $this->questionnumber);
                $db_update_group_question = QuizModel::updateGroupQuestion($this->ids, $this->qg);
                return redirect()->to('/quiz2/');
            } else {
                $db_savedata = QuizModel::quizFlowTrueAnswer($this->ids, $this->qg, $this->questionnumber);
                return redirect()->to('/quiz/' . $this->qg . '/' . $this->array_number_quiz[$this->key_numberquiz + 1]);
            }
        } else {
            if ($this->finish_click - 1 === $this->key_numberquiz) {
                $db_savedata = QuizModel::quizFlowFalseAnswer($this->ids, $this->qg, $this->questionnumber);
                $db_update_group_question = QuizModel::updateGroupQuestion($this->ids, $this->qg);
                return redirect()->to('/quiz2/');
            } else {
                $db_savedata = QuizModel::quizFlowFalseAnswer($this->ids, $this->qg, $this->questionnumber);
                return redirect()->to('/quiz/' . $this->qg . '/' . $this->array_number_quiz[$this->key_numberquiz + 1]);
            }
        }
    }

    public function back()
    {
        // $controller = QuizController::toNext();
        $db_savedata = QuizModel::quizFlowSkip($this->ids, $this->qg, $this->questionnumber);
        return redirect()->to('/quiz-user-dashboard/');
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
