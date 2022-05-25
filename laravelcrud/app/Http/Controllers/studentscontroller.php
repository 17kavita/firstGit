<?php

namespace App\Http\Controllers;
use App\Models\students;

use Illuminate\Http\Request;

class studentscontroller extends Controller
{
     public function index()
     {
         
       $students = students::all();
      //  echo "abcd";
      //  print_r($students);
       return view('students',compact('students'));
     }
       public function add(){
        return view('add');}

    //for add command 
    public function update(Request $request,$id)
    {
       $students = students::find($request->id);
        $students->first_name = $request->first_name;
        $students->last_name = $request->last_name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->created_by = $request->input('created_by');
        $post->save();

        return redirect('/')->route('students.index')->with('success','student has been added');

    }
 }
