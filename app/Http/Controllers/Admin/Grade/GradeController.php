<?php

namespace App\Http\Controllers\Admin\Grade;

use App\Grade;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Services\GradeService;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    private $gradeService;

    public function __construct(GradeService $gradeService)
    {
        $this->gradeService = $gradeService;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $grades = Grade::all();

        return view('backend.grade.index',compact('menus','grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id','=',null)->get();

        return view('backend.grade.create',compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->except(['_token']);
        $this->gradeService->store($storeData);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $grade = Grade::findOrFail($id);
        return view('backend.grade.edit',compact('menus', 'grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->except(['_token']);
        $this->gradeService->update($updateData,$id);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->gradeService->destroy($id);

        return redirect()->back();
    }
}
