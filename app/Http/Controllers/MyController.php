<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    

public function index(){
    return view('index');
}

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
