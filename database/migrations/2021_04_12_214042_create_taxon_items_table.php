<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxonItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxon_items', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('users_id');
            $table->string('term')->nullable();
            $table->string('taxongroup_id');
            $table->string('isDelete')->default('TRUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxon_items');
    }
}
