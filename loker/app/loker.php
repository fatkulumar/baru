<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loker extends Model
{
    protected $fillable = [
        'id_user',
        'judul',
        'perusahaan',
        'alamat',
        'email',
        'hp',
        'exp',
        'loker',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
