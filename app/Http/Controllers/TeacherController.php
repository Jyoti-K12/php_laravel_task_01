<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function list()
    {
        $teachers = User::where('role', 'teacher')->get();
        return view('teachers.list', ['teachers' => $teachers]);
    }

    public function add()
    {
        $classes = MyClass::all();
        $subjects = Subject::all();
        return view('teachers.add', ['classes' => $classes, 'subjects' => $subjects]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'classes' => 'required|array',
            'my_classes.*' => 'exists:classes,id',
            'subjects' => 'required|array',
            'subjects.*' => 'exists:subjects,id',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $teacher = new User();
        // Handle file upload if image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $teacher['image'] = 'images/' . $imageName;
        }
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->age = $request->age;
        $teacher->sex = $request->sex;
        $teacher->class_id = '1';
        $teacher->password = '12345678';
        $teacher->role = 'teacher';

        if (isset($request->classes) && isset($request->subjects)) {
            $teacher->save();
            $teacher->classes()->attach($request->classes);
            $teacher->subjects()->attach($request->subjects);
        }
        return redirect()->route('teachers.list')->with('success', 'Teacher information added successfully.');
    }
}
