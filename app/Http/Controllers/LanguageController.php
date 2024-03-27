<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use Illuminate\Support\Facades\Validator;

class LanguageController extends Controller
{
    public function list()
    {
        $languages = Language::all();
        return view('languages.list', ['languages' => $languages]);
    }
    public function add()
    {
        return view('languages.add');
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
        $language = new Language();
        $language->name = $request->name;
        $language->save();
        return redirect()->route('languages.list')->with('success', 'Language created successfully.');
    }
}
