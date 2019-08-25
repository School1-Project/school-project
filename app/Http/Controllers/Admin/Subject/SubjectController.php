<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Grade;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Services\SubjectService;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    private $subjectService;

    public function __construct(SubjectService $subjectService)
    {
        $this->subjectService = $subjectService;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $subjects = Subject::with('grade')->get();
        
        return view('backend.subject.index',compact('menus','subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $grades = Grade::pluck('name','id');

        return view('backend.subject.create',compact('menus','grades'));
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
        $this->subjectService->store($storeData);

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
        $subjects = Subject::findOrFail($id);
        $grades = Grade::pluck('name','id');
        return view('backend.subject.edit',compact('menus','subjects','grades'));
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
        $this->subjectService->update($updateData,$id);

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
        $this->subjectService->destroy($id);

        return redirect()->back();
    }
}
