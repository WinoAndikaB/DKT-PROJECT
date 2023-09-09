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
        Schema::create('tambahDonasi', function (Blueprint $table1) {
            $table1->id();
            $table1->string('jenisDonor');
            $table1->string('namaDonasi');
            $table1->string('deskripsi');
            $table1->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambahDonasi');
    }
};
