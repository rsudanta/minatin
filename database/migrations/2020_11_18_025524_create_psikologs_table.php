<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePsikologsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikologs', function (Blueprint $table) {
            $table->id('idPsikolog');
            $table->string('emailPsikolog');
            $table->string('pwdPsikolog');
            $table->char('noKTP', 16); 
            $table->string('namaPenyelenggara');
            $table->string('namaPsikolog');
            $table->string('bidangPsikolog');
            $table->integer('lamaKerja');
            $table->string('edukasiPsikolog');
            $table->longText('deskripsiPsikolog');
            $table->string('namaAvaPsikolog');
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
        Schema::dropIfExists('psikologs');
    }
}
