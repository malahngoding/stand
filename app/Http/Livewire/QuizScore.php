<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class QuizScore extends Component
{
    public $totalpoints;
    public $selesai;

    public function finish()
    {
        return redirect()->to('/quiz-user-dashboard/');
    }
    public function render()
    {
        $id = Auth::id();
        $total =
            DB::table('quiz_finish')
            ->join('users', 'quiz_finish.users_id', '=', 'users.id')
            ->where('users_id', $id)
            ->select('users_id', 'TotalScore', 'jawaban_benar', 'rata_rata', 'akurasi', 'soal_dilewati', 'nilai')
            ->get();
        // dd($total);
        $this->totalpoints = $total;

        return view('livewire.quiz-score');
    }
}
