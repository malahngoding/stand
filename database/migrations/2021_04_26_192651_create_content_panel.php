<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPanel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_panel', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->enum('workflow', ['published', 'draft', 'review'])->default('draft');
            $table->integer('type_id');
            $table->date('due')->nullable();
            $table->date('published');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_panel');
    }
}
