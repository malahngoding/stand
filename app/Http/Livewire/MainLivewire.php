<?php

namespace App\Http\Livewire;

use App\Models\ProfileModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MainLivewire extends Component
{
    public $users;
    public $event;


    public function get()
    {
        $this->users =  DB::table('users')->get();
    }
    public function mount()
    {
        $this->users = DB::table('users')->select('id')->count();
        $this->event = DB::table('event')->select('id')->count();
    }
    public function render()
    {
        return view('livewire.main-livewire');
    }
}
