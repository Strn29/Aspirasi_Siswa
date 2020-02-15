<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuarasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suarasiswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namalengkap')->unique();
            $table->string('keluh');
            $table->string('kelas');
            $table->string('nomorhp');
            $table->string('jeniskelamin');
            $table->string('kategori');
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
        Schema::dropIfExists('suarasiswa');
    }
}
