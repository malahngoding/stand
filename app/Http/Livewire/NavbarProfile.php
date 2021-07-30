<?php

namespace App\Http\Livewire;

use App\Models\UserListModel;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavbarProfile extends Component
{
    public $getemail;

    public function mount()
    {
        $this->getemail = Auth::user()->email;
    }


    public function render()
    {
        return view('livewire.navbar-profile', [
            'users' => $this->getemail,
        ]);
    }
}
