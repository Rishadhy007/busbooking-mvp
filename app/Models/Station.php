<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function arrivalReservations()
    {
        return $this->hasMany(Reservation::class,'arrival');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departureReservations()
    {
        return $this->hasMany(Reservation::class,'departure');
    }
}
