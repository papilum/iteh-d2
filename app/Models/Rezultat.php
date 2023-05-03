<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maraton;
use App\Models\Takmicar;


class Rezultat extends Model
{
    use HasFactory;

    public function maraton()
    {
        return $this->belongsTo(Maraton::class);
    }

    public function takmicar()
    {
        return $this->belongsTo(Takmicar::class);
    }
}
