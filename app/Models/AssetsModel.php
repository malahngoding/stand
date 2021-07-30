<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class AssetsModel extends Model
{
    use HasFactory;
    public static function assetsModel()
    {
        $user = DB::table('assets_content')
            ->get();
        return $user;
    }

    public static function countAssets()
    {
        $user = DB::table('assets_content')
            ->where('isDelete', "FALSE")
            ->selectRaw('assets_content.*,count(isDelete) as total')
            ->groupBy('isDelete')
            ->get();
        return $user;
    }
    public static function addAssets($request, $input)
    {
        $created_at = now();
        $updated_at = now();

        $input = [
            'photo' => ($request->photo === null ? $request->photo  : $request->file('photo')->store('public/photos')),
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];

        // $user = DB::table('assets_content')->
        // return $user;
    }
}
