<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train extends Model
{
    
    protected $fillable = [
        'train_number', 'driver_name','driver_info', 'seats_number','passengers_number',
    ];
    public function trips()
    {
        return $this->hasMany('App\trip');
    }
}
