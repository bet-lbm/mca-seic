<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
    	$subjects = Subject::paginate(10);
    	return view('subjects/index')->with(['subjects'=>$subjects]);
    }

    public function show(Subject $subject){

    	return view('subjects.show')->with(['subject'=>$subject]);
    }

    public function create(){

    	$subject= new subject;
    	return view('subjects.create')->with(['subject'=>$subject]);
    }
    public function store(CreateSubjectRequest $request){
        $subject =Subject::create(
            $request->only('name_subject','hours','max_students')
        );
    	$subject->save();
        session()->flash('message','Curso creado!');
    	return redirect()->route('subject_path', ['subject'=>$subject->id]);
    }

    public function edit(Subject $subject){
    	return view('subjects.edit')->with(['subject'=>$subject]);
    }
    public function update(Subject $subject, UpdateSubjectRequest $request){
    	$subject ->update(
    		$request->only('name_subject','hours','max_students')
    	);
        session()->flash('message','Curso actualizado!');
    	return redirect()->route('subject_path',['subject'=>$subject->id]);
    }

    public function delete(Subject $subject){
    	$subject->delete();
        session()->flash('message','Classroom Deleted!');
    	return redirect()->route('subjects_path');
    }


}

