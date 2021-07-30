<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class ContentTypesItem extends Component
{
    public $form = [];
    public $content_id;
    public $input;
    public $type_id;
    public $updatemodal = false;
    public $updated;
    // public $name;
    // public $show;
    // public $options;

    public function updateModal($id)
    {
        $this->type_id = $id;
        $this->updatemodal = true;
    }

    public function closeModal()
    {
        $this->updatemodal = false;
    }

    public function addOptions($key)
    {
        array_push($this->form[$key]['options'], "");
    }

    public function deleteItem($id)
    {
        DB::table('contenttypes_items')
            ->where('id', $id)
            ->update(['isDelete' => 'FALSE']);
        $this->type_id = $id;
    }

    public function updateItem()
    {
        $this->validate([
            'updated' => 'required'
        ], [
            'updated.required' => 'Kolom harus di isi'
        ]);

        DB::table('contenttypes_items')
            ->where('id', $this->type_id)
            ->update([
                'name' => $this->updated,
                'created_at' => now(),
                'updated_at' => now()

            ]);

        $this->updatemodal = false;
    }

    public function text()
    {

        foreach ($this->form as $key => $value) {

            if ($value['type'] === 'CHOICE') {
                $meledak = implode("|", $value['options']);

                DB::table('contenttypes_items')
                    ->insert([
                        'name' => $value['name'],
                        'type' => $value['type'],
                        'show' => $value['show'],
                        'content_id' => $this->content_id,
                        'options' => $meledak,
                        'created_at' => now(),
                        'updated_at' => now()

                    ]);
            } else {

                DB::table('contenttypes_items')
                    ->insert([
                        'content_id' => $this->content_id,
                        'name' => $value['name'],
                        'type' => $value['type'],
                        'created_at' => now(),
                        'updated_at' => now()

                    ]);
            }
        }
        $this->form = [];
    }

    public function handle_text()
    {
        array_push($this->form, ['type' => "TEXT", 'value' => ""]);
    }
    public function handle_choice()
    {
        array_push($this->form, ['type' => "CHOICE", 'value' => "", 'options' => [""]]);
    }
    public function render()
    {
        $data = DB::table('contenttypes_items')
            ->where('content_id', $this->content_id)
            ->get();

        $this->list = $data;

        // dd($this->list);

        return view('livewire.content-types-item', [
            'list' => $this->list,
        ]);
    }
}
