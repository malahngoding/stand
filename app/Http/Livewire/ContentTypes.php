<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ContentTypes extends Component
{
    public $show;
    public $data;
    public $name;
    public $list;
    public $modal = false;
    public $user_id;
    public $updatemodal = false;
    public $updated;

    public function updateModal($id)
    {
        $this->user_id = $id;
        $this->updatemodal = true;
    }
    public function updateButton()
    {
        $this->validate([
            'updated' => 'required'
        ], [
            'updated.required' => 'Kolom harus di isi'
        ]);

        DB::table('contenttypes')
            ->where('id', $this->user_id)
            ->update([
                'name' => $this->updated,
                'created_at' => now(),
                'updated_at' => now()

            ]);

        // dd($this->user_id);
        $this->updatemodal = false;
    }

    public function closeButton()
    {
        $this->modal = false;
        $this->updatemodal = false;
    }
    public function deleteButton()
    {
        $data = DB::table('contenttypes')
            ->where(
                'contenttypes.id',
                $this->user_id
            )
            ->update(['isDelete' => 'FALSE']);

        DB::table('contenttypes_items')
            ->where(
                'contenttypes_items.content_id',
                $this->user_id
            )
            ->update(['isDelete' => 'FALSE']);

        $this->modal = false;
    }
    public function deleteModal($id)
    {
        $this->user_id = $id;
        $this->modal = true;
    }

    public function createType()
    {
        $this->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Kolom harus di isi'
        ]);

        DB::table('contenttypes')
            ->insert([
                'name' => $this->name,
                'created_at' => now(),
                'updated_at' => now()

            ]);

        $this->show = false;
        $this->name = null;
    }
    public function getType($id)
    {
        return redirect('/contenttypesitem/' . $id);
    }
    public function openModal()
    {
        $this->show = true;
    }

    public function closeModal()
    {
        $this->show = false;
        $this->name = null;
    }


    public function render()
    {

        $data = DB::table('contenttypes')
            ->leftJoin('contenttypes_items', 'contenttypes.id', '=', 'contenttypes_items.content_id')
            ->selectRaw('contenttypes.*,count(content_id) as total')
            ->groupBy('contenttypes.id')
            ->latest('updated_at')

            ->get();

        $this->list = $data;
        return view('livewire.content-types', [
            'list' => $this->list,
        ]);
    }
}
