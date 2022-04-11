<?php

namespace App\Models;

use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_propriete extends Model
{
    use HasFactory;

    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }
}