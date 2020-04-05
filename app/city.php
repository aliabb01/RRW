<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $fillable = [
        'city_name', 'zip_code', 'description', 'distance',
    ];
        protected $table="cities";
       protected $primarykey='id';
        public $timestamps=false;
        
        public function trips()
        {
            return $this->hasMany('App\trip');
        }
}
