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
        Schema::create('riwayat_diri', function (Blueprint $table) {
            $table->id();
            $table->string('Pengalaman_pekerjaan');
            $table->string('Pengalaman_organisasi');
            $table->string('Perguruan_tinggi');
            $table->string('SMA');
            $table->string('SMP');
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
        //
    }
};
