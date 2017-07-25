<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Http\Requests\CreateClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use Illuminate\Http\Request;


class ClassroomController extends Controller
{
    public function index()
    {
    	$classrooms = Classroom::paginate(10);
    	return view('class.index')->with(['classrooms'=>$classrooms]);
    }
    public function show(Classroom $classroom)
    {
        return view('class.show')->with(['classroom'=>$classroom]);
    }
    public function create()
    {
    	$classroom = new Classroom;
    	return view('class.create')->with(['classroom'=>$classroom]);
    }
    public function store(CreateClassroomRequest $request)
    {
    	$classroom = new Classroom;
    	$classroom-> fill(
            $request->only('num_class','description')
        );
    	$classroom->save();

    	return redirect()->route('classrooms_path');
    }
    public function edit(Classroom $classroom)
    {
        return view('class.edit')->with(['classroom'=>$classroom]);
    } 
    public function update(Classroom $classroom, UpdateClassroomRequest $request)
    {
        $classroom->update(
            $request->only('num_class','description')
        );
        return redirect()->route('classroom_path',['classroom'=>$classroom->id]);
    }
    public function delete(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms_path');
    }
}