<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TaxonomiesModel extends Model
{
    use HasFactory;

    public static function getDataItems($id)
    {

        $taxonomies = DB::table('taxonomies')
            ->join('taxon_items', 'taxonomies.id', '=', 'taxon_items.taxongroup_id')
            ->where('taxonomies.id', $id)
            ->select('taxonomies.id', 'taxonomies.name', 'taxon_items.term')
            ->latest('updated_at')
            ->get();

        return $taxonomies;
    }

    public static function getData()
    {

        $taxonomies = DB::table('taxonomies')
            ->latest('updated_at')
            ->get();

        return $taxonomies;
    }
}
