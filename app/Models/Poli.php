<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    public function pasien()
    {
        return $this->hasMany(Pasien::class);
    }

    public function antrian()
    {
        return $this->hasMany(Antrian::class);
    }

    public function tenagaKesehatan()
    {
        return $this->hasMany(TenagaKesehatan::class);
    }
}
