<?php

namespace App\Http\Livewire;

use App\Models\ProfileModel;
use Livewire\Component;

class AdminProfile extends Component
{
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
            $this->names = "Data Kosong";
            $this->photos = "Data Kosong";
            $this->emails = "Data Kosong";
            $this->bio = "Data Kosong";
            $this->phone_numbers = "Data Kosong";
            $this->interest_areas = "Data Kosong";
            $this->date_of_births = "Data Kosong";
        }
    }
    public function render()
    {
        return view('livewire.admin-profile');
    }
}
