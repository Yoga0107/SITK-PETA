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
        Schema::create('report_medicals', function (Blueprint $table) {
            $table->id();
            $table->string('Nomor_Pasien');
            $table->string('Dokter');
            $table->string('Kode_Ruangan');
            $table->string('Keluhan');
            $table->string('Diagnosa');
            $table->string('Tanggal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_medicals');
    }
};
