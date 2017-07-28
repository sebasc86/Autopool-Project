<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id', 'trademark', 'model','year', 'color', 'license_plate', 'capacity'
    ];

    public function user(){
		return $this->hasOne('App\Car', 'user_id');
  	}

    


}
