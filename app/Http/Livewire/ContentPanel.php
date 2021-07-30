<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Livewire\WithPagination;
use App\Models\ContentPanelModel;

class ContentPanel extends Component
{
    use WithPagination;

    public $item;
    public $comment;
    // public $set;

    public function mount()
    {
        $this->set = ContentPanelModel::getData();
    }
    public function render()
    {

        // $data = DB::table('content_panel')
        //     ->join('contenttypes', 'content_panel.type_id', '=', 'contenttypes.id')
        //     ->select(
        //         'contenttypes.name as name',
        //         'content_panel.name as names',
        //         'content_panel.type_id',
        //         'content_panel.workflow',
        //         'content_panel.due',
        //         'content_panel.published',
        //         'content_panel.updated_at'
        //     )
        //     ->paginate($perPage = 5, $columns = ['*'], $pageName = 'page', $page = null);


        // $setdate = [];

        // foreach ($data as $key => $value) {
        //     $start = Carbon::parse($value->due);
        //     $end = Carbon::now();
        //     $difference = $start->diffInDays($end, false);


        //     $dataa = [
        //         'name' => $value->name,
        //         'names' => $value->names,
        //         'type_id' => $value->type_id,
        //         'workflow' => $value->workflow,
        //         'due' => $difference,
        //         'published' => $value->published,
        //         'updated_at' => $value->updated_at,

        //     ];
        //     array_push($setdate, $dataa);
        // }
        // $this->set = $setdate;
        // $setdate = ContentPanelModel::getData();

        return view(
            'livewire.content-panel',
            [
                'set' => ContentPanelModel::getData(),
            ]
        );
    }
}
