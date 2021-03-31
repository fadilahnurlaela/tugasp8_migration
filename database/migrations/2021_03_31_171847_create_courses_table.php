<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->char('kode_matkul', 8)->unique();
            $table->foreign('kode_matkul')->references('kode_matkul')->on('forms');
            $table->string('nama_matkul');
            $table->integer('sks');
            $table->char('kode_prodi', 5);
            $table->timestamps();
            $table->foreign('kode_prodi')->references('kode_prodi')->on('studyprograms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
