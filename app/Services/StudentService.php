<?php

namespace App\Services;


use App\Student;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentService
 * @package App\Http\Services
 */
class StudentService 
{

    /**
     * @return Model|string
     */
    public function model()
    {
        return new Student();
    }

    public function store($storeData)
    {
    	$this->model()->updateOrCreate($storeData);
    }
}
