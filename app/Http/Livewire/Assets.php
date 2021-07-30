<?php

namespace App\Http\Livewire;

use App\Models\AssetsModel;
use Error;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\IFTTTHandler;

use function PHPUnit\Framework\isEmpty;

class Assets extends Component
{
    use WithFileUploads;
    // public $files;
    public $uploadModal = false;
    public $db_assets;
    public $add_db;

    public $ID_query = [];

    public $deleteModal;
    public $delete_allModal;
    public $ids = [];
    public $result;

    public $files;
    public $form;

    public $get_files;
    public $cek_files;

    public $check_data;
    public $get_count;
    public $cek;


    public function upload_assets()
    {
        $this->uploadModal = true;
    }

    public function addPhotos()
    {
        $this->validate([
            'files' => 'required|image|max:2048|mimes:png,jpg',
        ]);
    }
    public function upload()
    {
        $created_at = now();
        $updated_at = now();

        if ($this->files === null) {
            $this->validate(['files' => 'required'], ['required' => 'Silakan isikan foto terlebih dahulu']);
        }

        if (($this->files)) {
            $this->validate([
                'files' => 'required|image|max:2048|mimes:png,jpg',
            ]);
            $this->cek_files = $this->files->store('public/photos');
            $this->get_files = substr($this->cek_files, strpos($this->cek_files, "s/") + 2);
        }

        $this->add_db = DB::table('assets_content')->insert([
            'file' => $this->get_files,
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ]);


        if ($this->add_db !== null) {
            $this->get_files = null;
            $this->cek_files = null;
            $this->files = null;
            $this->uploadModal = false;
            $this->resetErrorBag();
            $this->resetValidation();
        }



        //


        // $this->query_photo->store('photos');

        // $this->check = $this->query_photo;
        // $this->uploadModal = true;
    }

    // public function delete_wall($users_id)
    // {

    //     $this->ID_query = $users_id;
    //     $this->deleteModal = true;
    // }

    public function delete_checkbox()
    {
        $this->ID_query = $this->ids;

        if ($this->ID_query !== []) {
            $this->delete_allModal = true;
        } else {
            $this->delete_allModal = false;
            $this->cek = "oke";
        }
    }

    public function delete_all()
    {

        $this->deleteModal = true;
    }

    public function close_modal()
    {
        $this->deleteModal = false;
        $this->uploadModal = false;
        $this->get_files = null;
        $this->cek_files = null;
        $this->files = null;
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function accept_modal()
    {
        // $user = DB::table('assets_content')
        //     ->where('id', $this->ID_query)
        //     ->update(['isDelete' => 'FALSE']);

        $finalArray = array();
        foreach ($this->ID_query as $key => $value) {
            array_push(
                $finalArray,
                array(
                    $user = DB::table('assets_content')
                        ->where('id', $value)
                        ->update(['isDelete' => 'TRUE'])
                )
            );
        };

        $this->ID_query = [];
        $this->ids = [];
        $this->deleteModal = false;
        $this->delete_allModal = false;
    }

    public function mount()
    {
        // $db_assets = AssetsModel::assetsModel();
        // $this->files = $db_assets->file;
    }
    public function render()
    {

        $count_data = AssetsModel::countAssets();
        $this->check_data = $count_data;

        if (count($this->check_data) === 0) {
            $this->get_count = 0;
        } else {
            $this->get_count = $this->check_data[0]->total;
        }


        $db_assets = AssetsModel::assetsModel();

        return view('livewire.assets', [
            'assets' => $db_assets,
            'counts' => $this->get_count,
        ]);
    }
}
