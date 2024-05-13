<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumbanganTable extends Migration
{
    public function up()
    {
        Schema::create('sumbangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penggalangan_dana_id');
            $table->unsignedBigInteger('user_id');
            $table->decimal('jumlah_uang', 15, 0)->nullable();
            $table->timestamps();

            $table->foreign('penggalangan_dana_id')->references('id')->on('penggalangan_danas')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sumbangan');
    }
}
