<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CodeQuestionModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CodeQuestion extends Component
{
    public $title;
    public $text;
    public $score;
    public $answer;

    public function mount()
    {
        $id = Auth::id();
        $db = CodeQuestionModel::getCodeQuiz()->first();
        if ($db !== null) {
            $this->title = $db->title;
            $this->score = $db->score;
            $this->text = htmlspecialchars($db->text);
            $this->answer =  explode("|", $db->answer);
        } else {
            $data = DB::table('code_question')
                ->where('id', 1)
                ->get()
                ->first();

            $this->title = $data->title;
            $this->score = $data->score;
            $this->text = htmlspecialchars($data->text);
            $this->answer =  explode("|", $data->answer);
        }
    }
    public function back()
    {
        return redirect()->to('/quiz-user-dashboard/');
    }
    public function render()
    {


        return view('livewire.code-question');
    }
}
