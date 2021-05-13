<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Direccione;

class Usuario extends Model
{
    use HasFactory;

    public function direcciones()
    {
    	return $this->hasMany(Direccione::class);
    }
}
