<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Employee;

class Employeecontroller extends Controller
{
     public function index(){
           return view('employee');

    }

     public function add(){
           return view('add');

    }
}
