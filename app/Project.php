<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    function service(){
        return $this->belongsTo(Service::class,'service_id','id');
    }   
}
