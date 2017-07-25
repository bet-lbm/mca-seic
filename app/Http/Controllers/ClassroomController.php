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
    	return view('classrooms.index')->with(['classrooms'=>$classrooms]);
    }
    public function show(Classroom $classroom)
    {
        return view('classrooms.show')->with(['classroom'=>$classroom]);
    }
    public function create()
    {
    	$classroom = new Classroom;
    	return view('classrooms.create')->with(['classroom'=>$classroom]);
    }
    public function store(CreateClassroomRequest $request)
    {
    	$classroom = new Classroom;
    	$classroom-> fill(
            $request->only('num_class','description')
        );
    	$classroom->save();

        session()->flash('message','Classroom Created!');
    	return redirect()->route('classrooms_path');
    }
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit')->with(['classroom'=>$classroom]);
    } 
    public function update(Classroom $classroom, UpdateClassroomRequest $request)
    {
        $classroom->update(
            $request->only('num_class','description')
        );
        session()->flash('message','Classroom Updated!');
        return redirect()->route('classroom_path',['classroom'=>$classroom->id]);
    }
    public function delete(Classroom $classroom)
    {
        $classroom->delete();
        session()->flash('message','Classroom Deleted!');
        return redirect()->route('classrooms_path');
    }
}