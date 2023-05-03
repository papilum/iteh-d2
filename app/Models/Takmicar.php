<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maraton;
use App\Models\Rezultat;

class Takmicar extends Model
{
    use HasFactory;

    public function maratoni()
    {
        return $this->hasMany(Maraton::class);
    }

    public function rezultati()
    {
        return $this->hasMany(Rezultat::class);
    }
}
