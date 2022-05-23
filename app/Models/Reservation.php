<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = [
      'id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function arrivalStation()
    {
        return $this->belongsTo(Station::class,'arrival');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departureStation()
    {
        return $this->belongsTo(Station::class,'departure');
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
//     */
//    public function busRouteFrom()
//    {
//        return $this->belongsTo(BusRoute::class);
//    }
//
//    public function busRouteTo()
//    {
//        return $this->belongsTo(BusRoute::class);
//    }
}
