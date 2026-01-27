<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    protected $guarded = ['id'];

    public function siswa(): HasOne
    {
        return $this->hasOne(Siswa::class);
    }
    public function tanggapan(): HasMany
    {
        return $this->hasMany(Tanggapan::class);
    }
}
