<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggalanganDana extends Model
{
    protected $table = 'penggalangan_danas';

    protected $fillable = [
        'judul', 'deskripsi', 'target_dana', 'tanggal_selesai', 'gambar', 'total_donation', 'status'
    ];

    protected $dates = [
        'tanggal_selesai', // Menyatakan bahwa kolom tanggal_selesai harus di-parse sebagai objek Carbon
    ];

    // Relasi dengan tabel lain
    public function donations()
    {
        return $this->hasMany(Sumbangan::class);
    }
}
