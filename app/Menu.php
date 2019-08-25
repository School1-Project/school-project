<?php

namespace App;

use App\Menu;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	public $fillable = ['name','routes','parent_id','icon','order'];
    public function childrens()
    {
    	return $this->hasMany(Menu::class,'parent_id','id');
    }

    public function parent()
    {
    	return $this->belongsTo(Menu::class);
    }
}
