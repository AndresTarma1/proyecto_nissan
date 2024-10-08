<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vehicle extends Model
{
    use HasFactory;

    public function sales(): HasMany{
        return $this->hasMany(Sale::class);
    }

    public function setModelAttribute($value){
        $this->attributes['model'] = strtolower($value);
    }

    public function getModelAttribute($value){
        return ucwords($value);
    }


    public function scopeAvailable($query)
    {
        return $query->where('quantity', '>', 0);
    }
}
