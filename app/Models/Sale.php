<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::created(function ($venta) {
            $vehicle = Vehicle::find($venta->vehicle_id);
            if ($vehicle) {
                $vehicle->quantity -= 1;
                $vehicle->save();
            }
        });
    }
    
    public function seller(): BelongsTo{
        return $this->belongsTo(Seller::class);
    }

    public function customer(): BelongsTo{
        return $this->belongsTo(Customer::class);
    }

    public function vehicle(): BelongsTo{
        return $this->belongsTo(Vehicle::class);
    }
}
