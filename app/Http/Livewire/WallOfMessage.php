<?php

namespace App\Http\Livewire;

use App\Models\UserListModel;
use App\Models\WallOfMessageModel;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;


class WallOfMessage extends Component
{
    use WithPagination;

    public $deleteModal;
    public $search_query;
    public $ID_query;
    public $check;
    public $sugesstion;
    // public $user;

    public function search_wall()
    {
        $this->check = $this->search_query;
        // $this->sugesstion = true;
    }

    public function delete_wall($users_id)
    {
        $this->ID_query = $users_id;
        $this->deleteModal = true;
    }

    // public function sugesstion_close()
    // {
    //     if ($this->sugesstion = true) {
    //         $this->sugesstion = false;
    //     }
    // }
    public function close_modal()
    {
        $this->deleteModal = false;
    }

    public function accept_modal()
    {
        $user = DB::table('message')
            ->where('id', $this->ID_query)
            ->update(['isHidden' => 'FALSE']);
        $this->deleteModal = false;
    }

    public function mount()
    {
        // $this->search = WallOfMessageModel::searchImproper();
        // dd($this->search);
    }
    public function render()
    {
        $this->check = $this->search_query;
        return view('livewire.wall-of-message', [
            'searchs' => WallOfMessageModel::searchImproper($this->check),
            // 'users' => WallOfMessageModel::addData(),
        ]);
    }
}
