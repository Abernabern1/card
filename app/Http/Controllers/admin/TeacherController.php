<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('admin.teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

    public function createStore(Request $request, Teacher $teacher)
    {
        if(!$request->hasFile('image') || !$request->file('image')->isValid()) {
            return redirect()->back()->withInput();
        }

        $teacher->fill($request->except('image'));
        $teacher->image = $request->file('image')->store('uploads');
        $teacher->save();

        return redirect()->back()->with('status-success', 'Teacher item is successfully created.');

    }


    public function update($id)
    {
        $teacher = Teacher::find($id);

        return view('admin.teacher.update', compact('teacher'));
    }

    public function updateStore(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->fill($request->except('image'));

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $teacher->image = $request->file('image')->store('uploads');
        }

        $teacher->save();

        return redirect()->back()->withInput()->with('status-success', 'Teacher item is successfully updated.');
    }

    public function delete($id)
    {
        Teacher::destroy($id);

        return redirect()->back();
    }
}
