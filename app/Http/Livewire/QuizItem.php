<?php

namespace App\Http\Livewire;

use App\Models\QuizItemModel;
use App\Models\TaxonItemModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class QuizItem extends Component
{
    public $show;
    public $taxonitem;
    public $cek;
    public $id_query;
    public $text;
    public $ids;
    public $taxonitem_id;
    public $validasi;
    public $term;
    public $count;
    public $query_count;
    // public $cek;
    // public $taxon;
    public $url;
    public $deleteModal;
    public $ID_query;

    public function mount()
    {
        $this->show = false;
        $this->url = URL::full();
        $urldecode = urldecode($this->url);
        $this->ids = substr($urldecode, strpos($urldecode, "m/") + 2);
    }

    public function create($id)
    {
        return redirect('/create-quiz-question/' . $id);
    }

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
        $data =  DB::table('quiz_question')
            ->where('id', $this->ID_query)
            ->select('groupname')
            ->update(['isDelete' => 'TRUE']);

        $count = DB::table('quiz_question')
            ->where('isDelete', "FALSE")
            ->selectRaw('quiz_question.*,count(isDelete) as total')
            ->groupBy('isDelete')
            ->get();

        $this->query_count = $count->first()->total;

        DB::table('questions')
            ->where('id', $this->ids)
            ->update([
                'questionscount' => $this->query_count,
            ]);

        $this->deleteModal = false;
    }

    // public function createTerm()
    // {

    //     $this->validate([
    //         'term' => 'required'
    //     ], [
    //         'term.required' => 'Kolom harus di isi'
    //     ]);

    //     DB::table('taxon_items')
    //         ->insert([
    //             'taxongroup_id' => $this->taxonitem_id,
    //             'term' => $this->term
    //         ]);

    //     $count = DB::table('taxonomies')
    //         ->leftJoin('taxon_items', 'taxonomies.id', '=', 'taxon_items.taxongroup_id')
    //         ->selectRaw('taxonomies.*,count(taxongroup_id) as total')
    //         ->groupBy('taxonomies.id')
    //         ->latest('updated_at')
    //         ->get();
    //     $this->query_count = $count->first()->total;

    //     DB::table('taxonomies')
    //         ->where('id', $this->ids)
    //         ->update([
    //             'terms' => $this->query_count,
    //         ]);

    //     $this->show = false;
    //     $this->term = null;
    // }
    public function render()
    {
        $modol = QuizItemModel::getTerm(
            $this->ids
        );
        $this->cek = $modol;
        $this->id_query = $this->ids;

        return view('livewire.quiz-item');
    }
}
