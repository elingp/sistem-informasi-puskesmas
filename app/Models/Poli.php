<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    public function pasien()
    {
        return $this->hasOne(Pasien::class);
    }

    public function antrians()
    {
        return $this->hasMany(Antrian::class);
    }
}
