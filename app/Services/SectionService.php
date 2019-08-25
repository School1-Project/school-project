<?php

namespace App\Services;


use App\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class SectionService
 * @package App\Http\Services
 */
class SectionService 
{

    /**
     * @return Model|string
     */
    public function model()
    {
        return new Section();
    }

    public function store($storeData)
    {
        $this->model()->updateOrCreate($storeData);
    }
}
