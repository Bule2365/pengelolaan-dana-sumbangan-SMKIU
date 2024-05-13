<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('path');
            $table->unsignedBigInteger('penggalangan_dana_id');
            $table->timestamps();

            $table->foreign('penggalangan_dana_id')->references('id')->on('penggalangan_danas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('images');
    }
}
