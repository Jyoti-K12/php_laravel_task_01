<?php

namespace App\Http\Controllers;

use App\Models\MyClass;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function list()
    {
        $students = User::where('role', 'student')->get();
        $classes = MyClass::all();
        return view('students.list', ['students' => $students, 'classes' => $classes]);
    }

    public function add()
    {
        $classes = MyClass::all();
        return view('students.add', ['classes' => $classes]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional file upload validation
            'class_id' => 'required',
            'roll_number' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $student = new User();
        // Handle file upload if image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $student['image'] = 'images/' . $imageName;
        }
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->roll_number = $request->roll_number;
        $student->class_id = $request->class_id;
        $student->password = '12345678';
        $student->role = 'student';
        //print_r($student);
        //die;
        $student->save();

        return redirect()->route('students.list')->with('success', 'Student record added successfully.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $class_id = $request->input('class');
        $classes = MyClass::all();
        $condition = [];
        if (!empty($query)) {
            $condition[] = ['name', 'like', '%' . $query . '%'];
        }
        if (!empty($class_id)) {
            $condition[] = ['class_id',  $class_id];
        }
        if (!empty($condition)) {
            $students = User::where($condition)->where('role', 'student')->get();
        } else {
            $students = User::where(['role' => 'student'])->get();
        }


        return view('students.list', compact('students', 'classes'));
    }
}
