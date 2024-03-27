<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\MyClass;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch counts of students and teachers
        $students = User::where('role', 'student')->count();
        $teachers = User::where('role', 'teacher')->count();
        $classes = MyClass::count();
        $languages = Language::count();
        $subjects = Subject::count();

        // Pass the counts to the view
        return view('welcome', compact('students', 'teachers', 'classes', 'languages'));
    }
}
