<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name','class_id','class_teacher_id'];

    public function grade()
    {
        return $this->belongsTo(Grade::class,'class_id','id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class,'id','class_teacher_id');
    }

    public function teachers()
    {
    	return $this->belongsToMany(Teacher::class,'section_teachers','section_id','teacher_id');
    }
}
