<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    protected $fillable = [
        'passenger_id', 'first_name','second_name', 'gender','bith_year'
    ];
    public function tickets()
    {
        return $this->hasMany('App\ticket');
    }
    
}
