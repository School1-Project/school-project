<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Bonus;
use App\Section;
use App\Services\TeacherService;
use App\Services\UserService;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    private $teacherService;

    private $userService;

    public function __construct(TeacherService $teacherService, UserService $userService)
    {
        $this->teacherService = $teacherService;
        $this->userService = $userService;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $teachers = Teacher::with(['sections','sections.grade'])->get();
        return view('backend.teacher.index',compact('menus','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('parent_id','=',null)->get();
        $sections = Section::pluck('name','id');
        return view('backend.teacher.create',compact('menus','sections'));
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
        $this->teacherService->store($storeData);
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
        $menus = Menu::where('parent_id','=',null)->get();
        $teacher = Teacher::findOrFail($id);
        $bonuses = Bonus::where('date_to_receive','>=',$teacher->date_of_joining)->get();
        $teacher->load(['sections','sections.grade','user']);
        return view('backend.teacher.details',compact('menus','teacher','bonuses'));
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
        $teacher = Teacher::findOrFail($id);
        $teacher->load(['sections','sections.grade','user']);
        $sections = Section::pluck('name','id');
        return view('backend.teacher.edit',compact('menus','teacher','sections'));
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
