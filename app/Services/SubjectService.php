<?php

namespace App\Services;


use App\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class SectionService
 * @package App\Http\Services
 */
class SubjectService 
{

    /**
     * @return Model|string
     */
    public function model()
    {
        return new Subject();
    }

    public function store($storeData)
    {
        $this->model()->updateOrCreate(['class_id' => $storeData['class_id'], 'name' =>$storeData['name']],$storeData);
    }

    public function update($updateData,$id)
    {
        $this->model()->updateOrCreate(['id' => $id], $updateData);
    }

    public function destroy($id)
    {
        $this->model()->destroy($id);
    }

}
