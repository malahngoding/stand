<?php

namespace App\Http\Controllers;

use App\Models\TaxonomiesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaxonomiesController extends Controller
{
    private function array_flatten($arr, $out = array())
    {
        foreach ($arr as $item) {
            if (is_array($item)) {
                $out = array_merge($out, $this->array_flatten($item));
            } else {
                $out[] = $item;
            }
        }
        return $out;
    }

    public function taxonomies()
    {
        $taxonomy = TaxonomiesModel::getData();

        return response()->json(
            [
                "message" => ["Data Berhasil didapatkan"],
                "success" => true,
                "taxonomy" => $taxonomy,

            ]
        );
    }

    public function taxonomiesItems(Request $request, $id)
    {

        $cek = DB::table('taxonomies')->where('id', $id)->first();

        if ($cek === null) {
            return response()->json(
                [
                    "message" => ["Silakan masukkan id yang sesuai"],
                    "success" => false,

                ],
            );
        }
        $taxonomyItems = TaxonomiesModel::getDataItems($id);
        return response()->json(
            [
                "message" => ["Data Berhasil didapatkan"],
                "success" => true,
                "taxonomy" => $taxonomyItems,

            ]
        );
    }
}
