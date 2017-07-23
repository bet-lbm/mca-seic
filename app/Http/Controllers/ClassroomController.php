<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
    	$classrooms = \App\Classroom::paginate(10);
    	return view('class.index',compact('classrooms'));
    }
    public function delete(Request $request, $id)
    {
    	
    }
}
