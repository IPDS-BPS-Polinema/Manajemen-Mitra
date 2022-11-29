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
        Schema::create('pendaftar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users')->nullable();
            $table->foreign('id_users')->references('id')->on('users');
            $table->unsignedBigInteger('id_kegiatan');
            $table->foreign('id_kegiatan')->references('id')->on('kegiatan');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('id_kecamatan');
            $table->foreign('id_kecamatan')->references('id')->on('kecamatan');
            $table->unsignedBigInteger('id_sub_kecamatan');
            $table->foreign('id_sub_kecamatan')->references('id')->on('sub_kecamatan');
            $table->integer('gaji')->nullable();
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
        Schema::dropIfExists('pendaftar');
    }
};