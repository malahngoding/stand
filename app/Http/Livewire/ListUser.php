<?php

namespace App\Http\Livewire;

use App\Models\UserListModel;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Livewire\WithFileUploads;

use function PHPUnit\Framework\isEmpty;

class ListUser extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $ngeng;
    public $getemail;
    public $getname;
    public $user;
    public $form;
    public $deleteuser;
    public $updateuser;
    public $request;
    public $avatar;
    public $photo;
    // public $users;

    public $showmodal = FALSE;
    public $updatemodal = FALSE;

    public $botram = null;


    public function mount()
    {
        $this->ngeng = UserListModel::listing_data();
        $this->getemail = UserListModel::getEmail();
        $this->getname = UserListModel::getName();
        $this->users = UserListModel::addData();
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:2048|mimes:png,jpg',
        ]);
    }

    public function submitform()
    {
        if ($this->form === null && $this->photo === null) {
            $this->validate(['botram' => 'required'], ['required' => 'Mohon isi salah satu kolom']);
        }

        $this->validate(
            [
                // 'photo' => 'sometimes|image',
                'form.phone_number' => 'sometimes|numeric|min:10|starts_with:08',
                'form.date_of_birth' => 'sometimes|date_format:Y-m-d',
                'form.interest_area' => ['sometimes', Rule::in(['Back End', 'Front End', 'Mobile', 'Data Engineer'])],
                'form.bio' => 'sometimes|min:0|max:500',

            ],
            [
                // 'photo.image' => 'IMAGE Foto yang diupload tidak sesuai dengan format(jpg, jpeg, png).',
                // 'photo.uploaded' => 'Foto yang diupload tidak sesuai dengan format(jpg, jpeg, png).',
                // 'photo.mimes' => 'MIMES Foto yang diupload tidak sesuai dengan format(jpg, jpeg, png).',
                // 'photo.max' => 'MAX Maaf batas maksimal photo 2 MB.',
                'form.phone_number.min' => 'Nomor handphone yang kamu masukkan kurang dari 10 karakter.',
                'form.phone_number.numeric' => 'Nomor handphone harus berupa angka',
                'form.phone_number.starts_with' => 'Mohon isikan kolom nomor handphone dengan awalan 08- .',
                'birth_of_day.required' => 'Silakan isi kolom tanggal lahir.',
                'date_format' => 'Silakan isikan tanggal lahir dengan format (dd-mm-YYYY).',
                'form.interest_area.in' => 'Data enum tidak sesuai.',
                'form.bio.max' => 'Maaf batas pengisian kolom bio 500 karakter.',
            ]
        );

        if (($this->photo)) {
            $this->validate([
                'photo' => 'image|max:2040',
            ]);
            $this->form['photo'] = $this->photo->store('photos');
        }

        $db = DB::table('users')
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->where('email', $this->updateuser)
            ->update($this->form);

        if ($db) {
            $this->updatemodal = false;
            $this->form = null;
            $this->photo = null;
        }
    }

    public function delete()
    {

        $user = DB::table('users')
            ->join('profile', 'users.id', '=', 'profile.users_id')
            ->where('email', $this->deleteuser)
            ->update(['isActive' => 'FALSE']);

        $this->showmodal = FALSE;
    }
    public function showModal($email)
    {
        $this->showmodal = TRUE;
        $this->deleteuser = $email;
    }

    public function close()
    {
        $this->showmodal = FALSE;
        $this->updatemodal = false;
        $this->form = null;
        $this->photo = null;
    }
    public function updateModal($email)
    {
        $this->updatemodal = TRUE;
        $this->updateuser = $email;
    }

    public function render()
    {
        return view('livewire.list-user', [
            'users' => UserListModel::addData(),
        ]);
    }
}
