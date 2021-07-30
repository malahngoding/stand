<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;


class TaxonItemModel extends Model
{
    use HasFactory;
    public $link;

    public static function getTerm($url)
    {
        $data =  DB::table('taxon_items')
            ->join('taxonomies', 'taxon_items.taxongroup_id', '=', 'taxonomies.id')
            ->where('taxongroup_id', $url)
            ->select('taxon_items.term', 'taxon_items.id', 'taxon_items.taxongroup_id', 'taxon_items.isDelete')
            ->get();

        return $data;
    }
}
