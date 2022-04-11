<?php

namespace App\Models;

use App\Models\Propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietaire extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }
}