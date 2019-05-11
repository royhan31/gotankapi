<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_tanggapans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ratting');
            $table->string('komentar',250);
            // $table->unsignedBigInteger('admin_id');
            // $table->foreign('admin_id')->references('id')->on('admins');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('pesan_id');
            // $table->foreign('pesan_id')->references('id')->on('pesans');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_tanggapans');
    }
}
