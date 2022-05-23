<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fromStation()
    {
        return $this->belongsTo(Station::class,'from_station');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toStation()
    {
        return $this->belongsTo(Station::class,'to_station');
    }

    public function buses()
    {
        return $this->hasMany(Bus::class);
    }


}
