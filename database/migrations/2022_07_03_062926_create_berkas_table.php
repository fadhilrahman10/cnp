<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->string('cv');
            $table->string('ktp');
            $table->string('ijazah');
            $table->string('transkip');
            $table->string('sertifikat');
            $table->string('sertifikat_vaksin');
            $table->string('foto');
            $table->string('foto_full_body');
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
        Schema::dropIfExists('berkas');
    }
};
