<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function AddEmployee(){
        return view('addEmployee');
    }

    public function PostAddEmployee(Request $request){
        return $request->name;
    }

    public function masterTable(){
        return view('masterTable');
    }
}
