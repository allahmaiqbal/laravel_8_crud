<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class UserController extends Controller
{
    function index(){
        return view('welcome');
    }

    function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:100',
            'roll' => 'required|max:100',
            'phone' => 'nullable|max:15',
            'class' => 'required',
            'email' => 'nullable|email|max:100',
            'address' => 'nullable',
            'balance' => 'required|numeric',
        ]);
                
        Student::create($data);

        return back();
    }

}
