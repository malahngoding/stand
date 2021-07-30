<?php

namespace App\Http\Livewire;

use App\Models\ProfileModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DetailProfileLivewire extends Component
{
    public $tes;
    public $detail_profile;
    public $names;
    public $bio;
    public $date_of_births;
    public $emails;
    public $photos;
    public $phone_numbers;
    public $interest_areas;



    public function mount()
    {
        if ($detail_profile = ProfileModel::detailProfile()->first() !== null) {
            $detail_profile = ProfileModel::detailProfile()->first();
            $this->photos = substr($detail_profile->photo, strpos($detail_profile->photo, "s") + 2);
            $this->names = $detail_profile->name;
            $this->emails = $detail_profile->email;
            $this->bio = $detail_profile->bio;
            $this->phone_numbers = $detail_profile->phone_number;
            $this->interest_areas = $detail_profile->interest_area;
            $this->date_of_births = $detail_profile->date_of_birth;
        } elseif ($this->names === null) {
            $this->names = "Malah Ngoding";
            $this->photos = "1IZgUebpNnm7MfY39xdZlv0tXlMztM4ZM9KRUemO.jpg";
            $this->emails = "malahngoding@gmail.com";
            $this->bio = "Malah Ngoding merupakan platform pembelajaran praktis untuk para pengembang situs web dan aplikasi mobile.";
            $this->phone_numbers = "081212212112";
            $this->interest_areas = "Hellow";
            $this->date_of_births = "20-02-2021";
        }
    }
    public function render()
    {
        return view('livewire.detail-profile-livewire');
    }
}
