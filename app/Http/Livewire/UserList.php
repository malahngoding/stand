<?php

namespace App\Http\Livewire;

use App\Models\UserListModel;
use Livewire\Component;


class UserList extends Component
{
    public $ngeng;
    public function mount()
    {
        $this->ngeng = UserListModel::listing_data();
    }

    public function render()
    {

        return view('livewire.list-user');
    }
}
