<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MyClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Subject;
use Database\Seeders\MyClassSeeder;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [UserController::class, 'index'])->name('welcome');
Route::get('/languages', [LanguageController::class, 'list'])->name('languages.list');
Route::get('/languages-add', [LanguageController::class, 'add'])->name('languages.add');
Route::post('/languages-store', [LanguageController::class, 'store'])->name('languages.store');

Route::get('/classes', [MyClassController::class, 'list'])->name('classes.list');
Route::get('/classes-add', [MyClassController::class, 'add'])->name('classes.add');
Route::post('/classes-store', [MyClassController::class, 'store'])->name('classes.store');

Route::get('/subjects', [SubjectController::class, 'list'])->name('subjects.list');
Route::get('/subjects-add', [SubjectController::class, 'add'])->name('subjects.add');
Route::post('/subjects-store', [SubjectController::class, 'store'])->name('subjects.store');

Route::get('/students', [StudentController::class, 'list'])->name('students.list');
Route::any('/students-add', [StudentController::class, 'add'])->name('students.add');
Route::post('/students-store', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');

Route::get('/teachers', [TeacherController::class, 'list'])->name('teachers.list');
Route::any('/teachers-add', [TeacherController::class, 'add'])->name('teachers.add');
Route::post('/teachers-store', [TeacherController::class, 'store'])->name('teachers.store');
