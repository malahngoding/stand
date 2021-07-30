<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CreateQuestions extends Component
{

    public $deleteModal;
    public $search_query;
    public $check;
    public $term_query;
    public $check_term;
    /** @var string */
    public $term = '';

    // public $errorModal;
    // public $usersID_query;
    // public $check_usersID;
    public $inputModal;
    public $createModal = true;
    public $listModal;
    public $user;
    public $delete_confirm;

    public $taxonitem;
    // public $data;
    public $input_term;

    public $getTotalTerm;

    public $mantap;




    public function create_taxom($id)
    {
        // $data = DB::table('taxonomies')
        //     ->leftJoin('taxon_items', 'taxonomies.id', '=', 'taxon_items.taxongroup_id')
        //     ->selectRaw('taxonomies.*,count(taxongroup_id) as total')
        //     ->groupBy('taxonomies.id')
        //     ->latest('updated_at')
        //     ->get();

        // $this->mantap = $data->first()->total;

        $this->check = $this->search_query;
        if ($this->check === null) {
            $this->check = "Untitled questions group";
        }

        $this->user = DB::table('questions')->insertGetId([
            'groupname' => $this->check,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $id = $this->user;

        return redirect('/quizitem/' . $id);
    }

    // public function create_taxom_term()
    // {
    //     $this->createModal = false;
    //     $this->inputModal = true;
    //     $this->term_query = null;
    // }
    // public function back_create_term()
    // {
    //     $this->createModal = true;
    //     $this->inputModal = false;
    // }

    // public function input_taxom_term()
    // {

    //     if ($this->term_query  === null) {

    //         $this->validate(
    //             [
    //                 'term' => ['required'],
    //             ],
    //             [
    //                 'term.required' => 'Silakan isi kolom term.',
    //             ]
    //         );
    //     }


    //     $this->check_term = $this->term_query;

    //     if ($this->user === null) {
    //         $this->user = MYSQLI_AUTO_INCREMENT_FLAG;
    //     }
    //     $this->tes = DB::table('taxon_items')->insertGetId([
    //         'users_id' => $this->user,
    //         'taxongroup_id' => $this->user,
    //         'term' => $this->check_term,
    //     ]);


    //     $this->createModal = true;
    //     $this->inputModal = false;
    // }

    public function mount()
    {
        //
    }

    public function render()
    {
        $data =  DB::table('quiz_question')
            ->join('questions', 'quiz_question.quizgroup_id', '=', 'questions.id')
            ->where('quizgroup_id', $this->user)
            ->select('questions.isActive', 'questions.id', 'quiz_question.isDelete', 'questions.groupname', 'questions.updated_at', 'quiz_question.quizgroup_id', DB::raw('count(*) as total'))
            ->get();

        $this->taxonitem = $data;

        return view('livewire.create-questions', [
            'taxoncreate' => $this->taxonitem,
        ]);
    }
}
