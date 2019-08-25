<?php

namespace App\Http\Controllers\Admin\Section;

use App\Grade;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Section;
use App\Services\SectionService;
use App\Teacher;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $sectionService;

    public function __construct(SectionService $sectionService)
    {
        $this->sectionService = $sectionService;
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $sections = Section::all();
        return view('backend.section.index',compact('menus','sections'));
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
         $teachers = Teacher::with('user')->get()->pluck('user.name','id');

        return view('backend.section.create',compact('menus','grades','teachers'));
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
        $this->sectionService->store($storeData);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
