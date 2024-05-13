<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'user_id',
        'feedback_text',
        'sumbangan_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sumbangan()
    {
        return $this->belongsTo(Sumbangan::class);
    }

    public function penggalangan()
    {
        return $this->belongsTo(PenggalanganDana::class, 'penggalangan_dana_id');
    }
}
