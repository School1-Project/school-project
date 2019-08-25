<?php

namespace App\Services;


use App\Grade;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GradeService
 * @package App\Http\Services
 */
class GradeService 
{

    /**
     * @return Model|string
     */
    public function model()
    {
        return new Grade();
    }

    public function store($storeData)
    {
    	$this->model()->updateOrCreate(['name' => $storeData['name']],$storeData);
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
