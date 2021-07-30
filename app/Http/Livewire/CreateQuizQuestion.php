<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\WithFileUploads;

use function PHPUnit\Framework\isEmpty;

class CreateQuizQuestion extends Component
{
    use WithFileUploads;
    public $form;
    public $picture;
    public $photo;
    public $get_files;
    public $cek_files;
    public $count;
    public $query_count;
    public $no_quiz;
    public $ids;
    public $url;
    public $query_id;
    public $A;
    public $no_soal = 1;


    public function create_quiz($id)
    {
        dd($id);
    }
    public function mount()
    {
        $this->url = URL::full();
        $urldecode = urldecode($this->url);
        $this->ids = substr($urldecode, strpos($urldecode, "n/") + 2);
    }
    public function save($id)
    {
        $this->validate(
            [
                'form.text' => 'required',
                'form.answer1' => 'required',
                'form.answer2' => 'required',
                'form.answer3' => 'required',
                'form.answer4' => 'required',
                'form.answer5' => 'required',
                'form.correct_answer' => 'required',
                'picture' => 'required|image|max:2048|mimes:png,jpg',
                'form.score' => 'required|numeric',
            ],
            [
                'required' => 'Kolom Harus Di Isi',
                'form.picture.required' => 'Gambar Tidak Boleh Kosong',
                'form.score.numeric' => 'Kolom Harus Berupa Angka',
                'picture.image' => 'Format File Harus Berupa Image',
                'picture.mimes' => 'Format File Harus Berupa Image',
                'picture.max' => 'Ukuran File Maksimal 2MB',
            ]
        );
        $this->cek_files = $this->picture->store('public/photos');
        $this->get_files = substr($this->cek_files, strpos($this->cek_files, "s/") + 2);

        $answer = [
            $this->form['answer1'],
            $this->form['answer2'],
            $this->form['answer3'],
            $this->form['answer4'],
            $this->form['answer5'],
        ];
        $meledak = implode("|", $answer);

        $counter = DB::table('quiz_question')
            ->where('quizgroup_id', $this->ids)
            ->select('no_quiz')
            ->count();

        $this->no_quiz = $counter + 1;

        if ($counter === null) {
            $cek = DB::table('quiz_question')
                ->insert([
                    'quizgroup_id' => $this->ids,
                    'text' => $this->form['text'],
                    'answer' => $meledak,
                    'no_quiz' => 1,
                    'picture' => $this->get_files,
                    'score' => $this->form['score'],
                    'correct_answer' => $this->form['correct_answer'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);;
        } else {
            $cek = DB::table('quiz_question')
                ->insert([
                    'quizgroup_id' => $this->ids,
                    'text' => $this->form['text'],
                    'answer' => $meledak,
                    'no_quiz' => $this->no_quiz,
                    'picture' => $this->get_files,
                    'score' => $this->form['score'],
                    'correct_answer' => $this->form['correct_answer'],
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        }

        $count = DB::table('questions')
            ->leftJoin('quiz_question', 'questions.id', '=', 'quiz_question.quizgroup_id')
            ->selectRaw('questions.*,count(quizgroup_id) as total')
            ->groupBy('questions.id')
            ->latest('updated_at')
            ->get();
        $this->query_count = $count->first()->total;
        DB::table('questions')
            ->where('id', $this->ids)
            ->update([
                'questionscount' => $this->query_count,
            ]);
        $this->form = null;
        return redirect('/quizitem/' . $id);
    }

    public function render()
    {
        $this->query_id = $this->ids;
        return view('livewire.create-quiz-question');
    }
}
