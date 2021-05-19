<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tells', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name_ar');
            $table->string('name_en');
            $table->string('work_ar');
            $table->string('work_en');
            $table->longText('description_ar');
            $table->longText('description_en');
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
        Schema::dropIfExists('tells');
    }
}
