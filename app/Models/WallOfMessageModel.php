<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Symfony\Component\Console\Input\Input;
use Laravel\Scout\Searchable;

class WallOfMessageModel extends Model
{

    use HasFactory;

    public static function addMessage($request, $input)
    {
        $created_at = now();
        $updated_at = now();

        $input = [
            'users_id' => $request->users_id,
            'name' => $request->name,
            'title' => $request->title,
            'message' => $request->message,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ];
        $addmessage = DB::table('message')->insert(
            array_filter($input, 'strlen')
        );
        return $addmessage;
    }

    // public static function addData()
    // {

    //     $user = DB::table('users')
    //         ->join('message', 'users.id', '=', 'message.users_id')
    //         ->latest('message.created_at')
    //         ->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page = null);

    //     return $user;
    // }


    public static function searchImproper($check)
    {
        $search = DB::table('users')
            ->join('message', 'users.id', '=', 'message.users_id')
            ->latest('message.created_at')
            ->where('message.title',  'like', "%" . $check . "%")
            ->orWhere('message.message',  'like', "%" . $check . "%")
            ->orWhere('message.name',  'like', "%" . $check . "%")
            ->orWhere('message.created_at',  'like', "%" . $check . "%")
            ->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page = null);

        return $search;
    }
}
