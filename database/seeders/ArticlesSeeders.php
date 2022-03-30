<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('article_quiz')->insert(
            [
                'url' => null,
                'question' => 'Apakah anda sudah mengerti?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'csr-vs-ssr',
                'question' => 'Metode rendering yang diproses oleh browser adalah?',
                'incorrect_answer' => 'SSR',
                'correct_answer' => 'CSR',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'next-js',
                'question' => 'Mana yang merupakan salah satu fitur pada Nextjs?',
                'incorrect_answer' => 'Client Side Rendering',
                'correct_answer' => 'Static File Serving',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'cara-membuat-button-dengan-tailwind',
                'question' => 'h-[50px] merupakan arti dari?',
                'incorrect_answer' => 'Heavy 50px',
                'correct_answer' => 'Height 50px',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'gambar-dari-emoji',
                'question' => 'Apakah menurut kamu artikel lebih menarik jika terdapat sebuah emoji?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'variabel-dan-tipe-data-javascript',
                'question' => 'Mana yang merupakan sintaks variabel yang benar?',
                'incorrect_answer' => '$malahngoding',
                'correct_answer' => 'var malahngoding',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'sintaks-dasar-php',
                'question' => 'Mana yang merupakan sintaks variabel yang benar?',
                'incorrect_answer' => 'var malahngoding',
                'correct_answer' => '$malahngoding',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'php-vs-javascript',
                'question' => 'Apakah Javascript dan PHP adalah kompetitor?',
                'incorrect_answer' => 'Betul',
                'correct_answer' => 'Tidak',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'sejarah-javascript',
                'question' => 'Apa nama awal bahasa pemrograman Javascript?',
                'incorrect_answer' => 'Mona',
                'correct_answer' => 'Mocha',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'sejarah-php',
                'question' => 'Apa nama awal bahasa pemrograman PHP?',
                'incorrect_answer' => '_Hypertext_ _Preprocessor_',
                'correct_answer' => '_Personal Home Page_',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'php-framework',
                'question' => 'Salah satu framework pada PHP?',
                'incorrect_answer' => 'Vue',
                'correct_answer' => 'Laravel',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'php-dan-mysql',
                'question' => 'Jika ada permintaan dari browser ke web server, PHP akan menghubungi?',
                'incorrect_answer' => 'Web Socket',
                'correct_answer' => 'MYSQL',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'perbedaan-php-dengan-javascript',
                'question' => 'PHP bekerja di sisi?',
                'incorrect_answer' => 'User',
                'correct_answer' => 'Server',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'perbedaan-javascript-dengan-java',
                'question' => 'Apakah JavaScript mengikuti sebagian besar syntax ekspresi Java?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'macam-macam-tipe-data-php',
                'question' => 'Apakah Float dan Double merupakan tipe data yang sama?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'manfaat-dan-contoh-javascript',
                'question' => 'Apakah Javascript berfungsi membuat sebuah halaman website lebih interaktif dan dinamis?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'macam-macam-library-dan-framework-pada-javascript',
                'question' => 'Salah satu framework/library pada Javascript adalah?',
                'incorrect_answer' => 'Laravel',
                'correct_answer' => 'React',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'kelebihan-dan-kekurangan-javascript',
                'question' => 'Tidak semua browser dan perangkat selalu mendukung bahasa pemrograman ini merupakan kekurangan javascript?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'kekurangan-php',
                'question' => 'Apakah tidak dapat memisahkan antara tampilan dengan logik dengan baik merupakan kekurangan dari PHP?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'pengenalan-php',
                'question' => 'Apakah singkatan dari PHP?',
                'incorrect_answer' => 'Hypertext Processor',
                'correct_answer' => 'Hypertext Preprocessor',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'belajar-javascript',
                'question' => 'Langkah awal jika ingin belajar Javascript adalah?',
                'incorrect_answer' => 'Membuat PC mahal',
                'correct_answer' => 'Web browser terbaru',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'aturan-penulisan-javascript',
                'question' => 'Apakah Javascript bersifat case-sensitivity?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Betul',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'API-pada-javascript',
                'question' => 'DOM merupakan singkatan dari?',
                'incorrect_answer' => 'Documentation Object Model',
                'correct_answer' => 'Document Object Model',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'apa-saja-yang-dapat-javascript-lakukan-di-website-kamu',
                'question' => 'Apakah Server-side dan Client-side Code bisa dilakukan di Javascript?',
                'incorrect_answer' => 'Tidak',
                'correct_answer' => 'Ya',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'apa-itu-php',
                'question' => 'File php harus diberi ekstensi?',
                'incorrect_answer' => '.net',
                'correct_answer' => '.php',
            ]
        );
        DB::table('article_quiz')->insert(
            [
                'url' => 'react-state-management',
                'question' => 'Bagaimana cara memperbarui state dengan value yang bergantung pada state saat ini?',
                'incorrect_answer' => 'updateState',
                'correct_answer' => 'setState',
            ]
        );
    }
}
