<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'path', 'penggalangan_dana_id'
    ];

    // Relasi dengan tabel PenggalanganDana
    public function penggalanganDana()
    {
        return $this->belongsTo(PenggalanganDana::class);
    }
}
