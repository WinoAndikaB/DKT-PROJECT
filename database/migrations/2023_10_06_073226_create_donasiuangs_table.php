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
        Schema::create('donasiuangs', function (Blueprint $table) {
            $table->id();
            $table->string('jenisDonor');
            $table->string('idJenisDonor');
            $table->string('email')->unique();
            $table->string('donatur');
            $table->string('nominalDonasi');
            $table->string('pesan');
            $table->timestamps();

            // 'id','jenisDonor','idJenisDonor','email','donatur', 'nominalDonasi', 'pesan'];
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donasiuangs');
    }
};
