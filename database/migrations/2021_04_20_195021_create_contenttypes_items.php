<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenttypesItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenttypes_items', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('content_id');
            $table->string('name');
            $table->string('show');
            $table->string('options');
            $table->string('type')->default(NULL);
            $table->string('isDelete')->default('TRUE');
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
        Schema::dropIfExists('contenttypes_items');
    }
}
