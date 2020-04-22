<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'name_user', 'comment',
    ];
    protected $table="comments";
    protected $primarykey='name';
     public $timestamps=false;
}
