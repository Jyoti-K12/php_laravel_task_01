<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    public function list()
    {
        $subjects = Subject::all();
        return view('subjects.list', ['subjects' => $subjects]);
    }

    public function add()
    {
        $classes = MyClass::all();
        return view('subjects.add', ['classes' => $classes]);
    }

    public function store(Request $request)
    {
        // print_r($request->name);
        //die;
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'class_id' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $subject = new Subject();
        $subject->name = $request->name;
        $subject->class_id = $request->class_id;
        $subject->save();
        return redirect()->route('subjects.list')->with('success', 'Student subject created successfully.');
    }
}
