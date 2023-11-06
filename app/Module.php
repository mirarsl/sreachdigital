<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Module extends Model
{
    function data() {
        $module = $this->belongsTo(\TCG\Voyager\Models\DataType::class,'table','id')->first()->model_name;
        $data = app($module)->orderBy('id','desc');
        if($this->data_limit != 0) $data = $data->limit($this->data_limit,0)->get(); else $data = $data->get();
        if(empty($data)) return false;
        return $data;
    }
}
