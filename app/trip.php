<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trip extends Model
{
    protected $fillable = [
        'trip_date', 'from','to', 'time_depart','time_arrive','train_number'
    ];
    public function tickets()
    {
        return $this->hasMany('App\ticket');
    }
    public function trains()
{
    return $this->belongsTo('App\train');
}
public function cities()
{
    return $this->belongsTo('App\city');
}
}
