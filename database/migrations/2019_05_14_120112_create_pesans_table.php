<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('pesans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('compani_id');
            $table->foreign('compani_id')->references('id')->on('companies');
            $table->unsignedbigInteger('dirver_id');
            $table->foreign('dirver_id')->references('id')->on('drivers');
            $table->unsignedbigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('tgl_pesan');
            $table->unsignedbigInteger('jam_id');
            $table->foreign('jam_id')->references('id')->on('jams');
            $table->string('address', 250);
            $table->string('deskripsi_pesan', 250);
            $table->string('bukti_pembayaran', 250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesans');
    }
}
