<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name','class_id','author','publication'];

    public function grade() {
    	return $this->belongsTo(Grade::class,'class_id','id');
    }
}
