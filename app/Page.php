<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    function modules() {
        return $this->belongsToMany(Module::class,"page_modules",'page_id','module_id');
     }
}
