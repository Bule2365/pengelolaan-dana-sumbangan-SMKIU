<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sumbangan extends Model
{
    protected $table = 'sumbangan';

    protected $fillable = [
        'penggalangan_dana_id', 'user_id', 'jumlah_uang'
    ];

    // Relasi dengan tabel PenggalanganDana
    public function penggalanganDana()
    {
        return $this->belongsTo(PenggalanganDana::class);
    }

    // Relasi dengan tabel User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi dengan tabel Feedback
    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }
}
