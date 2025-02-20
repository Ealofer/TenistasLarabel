<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    /** @use HasFactory<\Database\Factories\TorneoFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['nombre', 'ciudad', 'superficie'];
    public function titulos()
    {
    return $this->hasMany(Titulo::class);
    }

}