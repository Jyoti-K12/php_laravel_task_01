<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MyClassController extends Controller
{
    public function list()
    {
        $classes = MyClass::all();
        return view('Classes.list', ['classes' => $classes]);
    }

    public function add()
    {
        return view('classes.add');
    }

    public function store(Request $request)
    {
        // print_r($request->name);
        //die;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $studentClass = new MyClass();
        $studentClass->name = $request->name;
        $studentClass->save();
        return redirect()->route('classes.list')->with('success', 'Student class created successfully.');
    }
}
