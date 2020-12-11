<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenagaKesehatan extends Model
{
    use HasFactory;

    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}
