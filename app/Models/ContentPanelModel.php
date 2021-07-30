<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;


class ContentPanelModel extends Model
{
    use HasFactory;

    public static function getData()
    {
        $data = DB::table('content_panel')
            ->join('contenttypes', 'content_panel.type_id', '=', 'contenttypes.id')
            ->select(
                'contenttypes.name as name',
                'content_panel.name as names',
                'content_panel.type_id',
                'content_panel.workflow',
                'content_panel.due',
                'content_panel.published',
                'content_panel.updated_at'
            )
            ->paginate(5);

        return $data;
    }
}
