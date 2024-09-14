<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Cambia esta línea
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class Seller extends Authenticatable // Cambia esta línea
{
    use HasFactory;

    public function sales(): HasMany{
        return $this->hasMany(Sale::class);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }

    // protected $fillable = [
    //     'name', 'email', 'password', 'phone'
    // ];

    public function getNameAttribute($value){
        return ucwords($value);
    }

    protected $hidden = [
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
