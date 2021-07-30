<?php

namespace App\Http\Livewire;

use App\Models\TaxonomiesModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;


class ContentModel extends Component
{
    use WithPagination;
    public $termss;

    public $query;

    public $deleteModal;
    public $ID_query;



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
        $user = DB::table('taxon_items')
            ->join('taxonomies', 'taxon_items.taxongroup_id', '=', 'taxonomies.id')
            ->where('taxonomies.id', $this->ID_query)
            ->update([
                'taxonomies.isActive' => 'FALSE',
                'taxon_items.isDelete' => 'FALSE'
            ]);
        $this->deleteModal = false;
    }

    public function getTaxon($id)
    {
        return redirect('/taxonitem/' . $id);
    }
    public function render()
    {
        $data = DB::table('taxonomies')
            ->leftJoin('taxon_items', 'taxonomies.id', '=', 'taxon_items.taxongroup_id')
            ->selectRaw('taxonomies.*,count(taxongroup_id) as total')
            ->groupBy('taxonomies.id')
            ->latest('updated_at')
            ->paginate(5);

        // $this->termss = $data;

        return view('livewire.content-model', [
            'taxonomies' => $data,
        ]);
    }
}
