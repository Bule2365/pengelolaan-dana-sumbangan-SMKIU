<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenggalanganDanasTable extends Migration
{
    public function up()
    {
        Schema::create('penggalangan_danas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->decimal('target_dana', 15, 0);
            $table->date('tanggal_selesai');
            $table->string('gambar')->nullable();
            $table->bigInteger('total_donation')->default(0);
            $table->enum('status', ['ongoing', 'achieved'])->default('ongoing');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penggalangan_danas');
    }
}
