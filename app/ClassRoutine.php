<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassRoutine extends Model
{
    public function grade() {
    	return $this->belongsto(Grade::class,'class_id','id');
    }
}
