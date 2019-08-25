<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id','address','gender','salary','contact','bonus_id','date_of_joining'];

    /**
     * Set the teacher's date of joining.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateOfJoiningAttribute($value)
    {
        $this->attributes['date_of_joining'] = (new Carbon($value))->format('Y-m-d');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    public function sections()
    {
    	return $this->belongsToMany(Section::class,'section_teachers','teacher_id','section_id');
    }
}
