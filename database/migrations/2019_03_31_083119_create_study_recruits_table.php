<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudyRecruitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_recruits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('name_id')->unsigned();
            $table->string('pendidikan', 100);
            $table->string('jurusan', 100);

            $table->timestamps();
        });

        Schema::table('study_recruits', function (Blueprint $table){
            $table->foreign('name_id')->references('id')->on('form_recruit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study_recruits');
    }
}
