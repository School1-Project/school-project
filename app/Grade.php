<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name'];

    public function sections()
    {
        return $this->hasMany(Section::class,'class_id','id');
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class,'class_id','id');
    }
    public function classRoutines()
    {
    	return $this->hasMany(ClassRoutine::class,'class_id','id');
    }
}
