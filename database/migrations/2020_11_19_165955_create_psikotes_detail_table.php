<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsikotesDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_psikotest', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('judul');
            $table->string('deskripsi_psikotest');
            $table->integer('harga');
            $table->integer('jumlah_soal');
            $table->string('slug');
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
        Schema::dropIfExists('detail_psikotest');
    }
}
