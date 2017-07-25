<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
    	$subjects = Subject::paginate(10);
    	return view('subjects/index')->with(['subjects'=>$subjects]);
    }
}
