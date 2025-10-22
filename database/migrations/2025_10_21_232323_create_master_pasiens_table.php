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
        Schema::create('master_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique(); // untuk kode pasien, misal "00001"
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable(); // L = Laki-laki, P = Perempuan
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_hp')->nullable();
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
        Schema::dropIfExists('master_pasiens');
    }
};
