<?php

namespace App\Services;


use App\Teacher;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class TeacherService
 * @package App\Http\Services
 */
class TeacherService 
{

    /**
     * @return Model|string
     */
    public function model()
    {
        return new Teacher();
    }

    /**
     * @return Model|string
     */
    public function userModel()
    {
        return new User();
    }

    public function store($storeData)
    {
        $userData['name'] = $storeData['name'];
        $userData['email'] = $storeData['email'];
        $userData['password'] = bcrypt('password');
        $userData['role_id'] = 2;
        DB::beginTransaction();
        	$user = $this->userModel()->updateOrCreate($userData);
            $teacher = $user->teacher()->updateOrCreate(['user_id'=>$user->id],$storeData);
            $teacher->sections()->attach($storeData['section_id']);
        DB::commit();
    }
}
