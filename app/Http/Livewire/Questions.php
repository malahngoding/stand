<?php

namespace App\Http\Livewire;

use App\Models\QuestionsModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Questions extends Component
{
    use WithPagination;
    public $termss;

    public $query;

    public $deleteModal;
    public $ID_query;

    public $check_data;
    public $get_count;


    public function close_modal()
    {
        $this->deleteModal = false;
    }

    public function delete_wall($users_id)
    {
        $this->ID_query = $users_id;
        $this->deleteModal = true;
    }

    public function accept_modal()
    {
        $user = DB::table('quiz_question')
            ->join('questions', 'quiz_question.quizgroup_id', '=', 'questions.id')
            ->where('questions.id', $this->ID_query)
            ->update([
                'questions.isActive' => 'FALSE',
                'quiz_question.isDelete' => 'TRUE'
            ]);
        $this->deleteModal = false;
    }

    public function getTaxon($id)
    {
        return redirect('/quizitem/' . $id);
    }

    public function render()
    {

        $count_data = QuestionsModel::countQuestions();

        // $this->check_data = $count_data;



        // if (count($this->check_data) === 0) {
        //     $this->get_count = 0;
        // } else {
        //     $this->get_count = $this->check_data[0]->total;
        // }

        $data = QuestionsModel::questionsModel();


        // $this->termss = $data;

        return view('livewire.questions', [
            'taxonomies' => $count_data,
            'counts' => $this->get_count,
        ]);
    }
}
