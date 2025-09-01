<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    protected $table='chirps';
    protected $fillable=['chirp'];
}
