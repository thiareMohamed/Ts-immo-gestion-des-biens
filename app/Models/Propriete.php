<?php

namespace App\Models;

use App\Models\Quartier;
use App\Models\Type_propriete;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function proprietaire() 
    {
        return $this->belongsTo(Proprietaire::class);
    }

    public function quartier() 
    {
        return $this->belongsTo(Quartier::class);
    }

    public function type_propriete() 
    {
        return $this->belongsTo(Type_propriete::class);
    }
}
