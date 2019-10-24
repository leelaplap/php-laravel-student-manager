<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('show_all',compact('student'));
    }

    public function getAdd(){
        return view('add');
    }

    public function add(Request $request){
        $student = new Student();
        $student->name= $request->name;
        $student->phone = $request->phone;
        $student->save();

        return redirect()->route('student');
    }

    public function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student');
    }

    public function getEdit($id){
        $student = Student::findOrFail($id);
        return view('edit',compact('student'));
    }

    public function edit(Request $request ,$id ){
        $student = Student::findOrFail($id);
        $student->name= $request->name;
        $student->phone = $request->phone;
        $student->save();
        return redirect()->route('student');

    }


}
