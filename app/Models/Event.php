<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public function workshops(){
        $this->hasMany('App\Models\Workshop', 'id','event_id');
    }
}
