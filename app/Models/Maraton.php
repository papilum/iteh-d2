<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Takmicar;
use App\Models\Rezultat;

class Maraton extends Model
{
    use HasFactory;

    public function takmicari()
    {
        return $this->hasMany(Takmicar::class);
    }

    public function rezultati()
    {
        return $this->hasMany(Rezultat::class);
    }
}
