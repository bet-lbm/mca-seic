<?php

namespace App\Http\Controllers;
use App\Subject;
use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
    	$subjects = Subject::paginate(10);
    	return view('subjects/index')->with(['subjects'=>$subjects]);
    }

    public function show(Subject $subject){

    	return view('subjects.index')->with(['subject'=>$subject]);
    }

    public function create(){

    	$subject= new subject;
    	return view('subjects.create')->with(['subject'=>$subject]);
    }
    public function store(CreateSubjectRequest $request){
    	$subject = new Subject;
    	$subject =fill(
    		$request->only('name_subject','hours','max_students')
    	);
    	$subject->save();
    	return redirect()->route('subject_path',['subject'=>$subject->id]);
    }

    public function edit(Subject $subject){
    	return view('subjects.edit')->with(['subject'=>$subject]);
    }
    public function update(Subject $subject, UpdateSubjectRequest $request){
    	$subject ->update(
    		$request->only('name_subject','hours','max_students')
    	);
    	return redirect()->route('subject_path',['subject'=>$subject->id]);
    }

    public function delete(Subject $subject){
    	$subject->delete();
    	return redirect()->route('subject_path');
    }


}

