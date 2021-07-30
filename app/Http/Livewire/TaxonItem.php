<?php

namespace App\Http\Livewire;

use App\Models\TaxonItemModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;


class TaxonItem extends Component
{
    public $show;
    public $taxonitem;
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

    public function mount()
    {
        $this->show = false;
        $this->url = URL::full();
        $urldecode = urldecode($this->url);
        $this->ids = substr($urldecode, strpos($urldecode, "m/") + 2);
    }
    public function openModal()
    {
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
    }

    public function deleteTerm($id)
    {
        DB::table('taxon_items')
            ->where('id', $id)
            ->update([
                'isDelete' => 'FALSE',
            ]);
    }
    public function createTerm()
    {
        $this->validate([
            'term' => 'required'
        ], [
            'term.required' => 'Kolom harus di isi'
        ]);

        DB::table('taxon_items')
            ->insert([
                'taxongroup_id' => $this->taxonitem_id,
                'term' => $this->term
            ]);

        $count = DB::table('taxonomies')
            ->leftJoin('taxon_items', 'taxonomies.id', '=', 'taxon_items.taxongroup_id')
            ->selectRaw('taxonomies.*,count(taxongroup_id) as total')
            ->groupBy('taxonomies.id')
            ->latest('updated_at')
            ->get();
        $this->query_count = $count->first()->total;

        DB::table('taxonomies')
            ->where('id', $this->ids)
            ->update([
                'terms' => $this->query_count,
            ]);

        $this->show = false;
        $this->term = null;
    }



    public function render()
    {
        $modol = TaxonItemModel::getTerm(
            $this->taxonitem_id
        );
        $this->taxonitem = $modol;

        return view('livewire.taxon-item');
    }
}
