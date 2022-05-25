<?php
 
namespace App\Http\Controllers;
use App\Models\students;
use Illuminate\Http\Request;
 
class studentsController extends Controller
{
  
    public function index()
    {
        $students = students::all();
      return view ('students.index')->with('students', $students);
    }
 
    
    public function create()
    {
        return view('students.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        students::create($input);
        return redirect('students')->with('flash_message', 'students Addedd!');  
    }
 
    
    public function show($id)
    {
        $students = students::find($id);
        return view('students.show')->with('students', $students);
    }
 
    
    public function edit($id)
    {
        $students = students::find($id);
        return view('students.edit')->with('students', $students);
    }
 
  
    public function update(Request $request, $id)
    {
        $students = students::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message', 'students Updated!');  
    }
 
  
    public function destroy($id)
    {
        students::destroy($id);
        return redirect('students')->with('flash_message', 'students deleted!');  
    }
}
