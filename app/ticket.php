<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $fillable = [
        'ticket_number','passenger_id', 'ticket_date', 'trip_number',
    ];
    public function passengers()
    {
        return $this->belongsTo('App\passenger');
    }
    public function trips()
    {
        return $this->belongsTo('App\trip');
    }
}
