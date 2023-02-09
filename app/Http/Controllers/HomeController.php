<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Student;

class HomeController extends Controller

{
    public function index()
    {

        $students = Student::all();
        // dd($students);
        return view('welcome', compact('students'));
    }

    //  Student Remove/delete
    public function removeStudent($id)
    {
        $students = Student::find($id);
        $students->delete();
        //    dd($students);
        return back();
        //    return redirect("/student");
    }

    //post data to database
    public function Save(Request $request)
    {
        // dd($request->all());
        $newStudent = new Student();
        $newStudent->name = $request->name;
        $newStudent->dob =  $request->dob;
        // $newStudent->fatherName = $request->address;
        $newStudent->gender = $request->gender;
        // $postData = $request->all();
        // $newStudent->fill($postData);
        $newStudent->save();
        return redirect('/student');
    }

    public function Edit($id){
        $EditStudent=Student::find($id);
        return view('editform',compact('EditStudent'));

    }

    // save changes
    public function saveChanges(Request $request,$id){
        // dd($id);

        $EditStudent= Student::find($id);
        $EditStudent->name = $request->name;
        $EditStudent->dob = $request->dob;
        $EditStudent->gender = $request->gender;
        $EditStudent->save();
        $message="Student Updated successfully";
        return view('editform',compact('EditStudent','message'));



    }
}
