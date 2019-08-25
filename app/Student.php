<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['user_id','parent_id','address','gender','rank','scholarship_criteria_id','class_id','section_id','is_bus','is_hostel'];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
