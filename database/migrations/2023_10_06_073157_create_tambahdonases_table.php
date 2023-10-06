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
        Schema::create('tambahdonases', function (Blueprint $table) {
            $table->id();
            $table->string('jenisDonor');
            $table->string('foto');
            $table->string('namaDonasi');
            $table->string('deskripsi');
            $table->string('nominalDonasi');
            $table->string('targetDonasi');
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
        Schema::dropIfExists('tambahdonases');
    }
};
