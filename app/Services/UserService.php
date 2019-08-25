<?php

namespace App\Services;


use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StudentService
 * @package App\Http\Services
 */
class UserService 
{

    /**
     * @return Model|string
     */
    public function model()
    {
        return new User();
    }

    public function store($storeData)
    {
    	$studentData['parent_id'] = $storeData['parent_id'];    	
    	$studentData['gender'] = $storeData['gender'];
    	$studentData['address'] = $storeData['address'];
    	$studentData['rank'] = $storeData['rank'];
    	$studentData['scholarship_criteria_id'] = $storeData['scholarship_criteria_id'];
    	$studentData['class_id'] = $storeData['class_id'];
    	$studentData['section_id'] = $storeData['section_id'];
		$studentData['is_bus'] = $storeData['is_bus'];  
		$studentData['is_hostel'] = $storeData['is_hostel']; 	
    	unset($storeData['parent_id']);	
    	unset($storeData['address']);		
    	unset($storeData['rank']);
    	unset($storeData['scholarship_criteria_id']);
    	unset($storeData['class_id']);
    	unset($storeData['section_id']);
    	unset($storeData['is_bus']);
    	unset($storeData['is_hostel']);
    	unset($storeData['gender']);
    	$storeData['password'] = bcrypt('password');
    	$storeData['role_id'] = 1;


    	$user = $this->model()->updateOrCreate($storeData);
    	$user->student()->updateOrCreate($studentData);

    }
}
