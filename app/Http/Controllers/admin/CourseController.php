<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('admin.course.index', compact('courses'));
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function createStore(Request $request)
    {
        if(!$request->hasFile('image') || !$request->file('image')->isValid()) {
            return redirect()->back()->withInput();
        }

        $input = $request->all();
        $filePath = $request->file('image')->store('uploads');

        Course::create([
            'title' => $input['title'],
            'text' => $input['text'],
            'price' => $input['price'],
            'student_count' => $input['student_count'],
            'lesson_count' => $input['lesson_count'],
            'week_count' => $input['week_count'],
            'image' => $filePath
        ]);

        return redirect()->back()->with('status-success', 'Course item is successfully created.');

    }


    public function update($id)
    {
        $course = Course::find($id);

        return view('admin.course.update', compact('course'));
    }

    public function updateStore(Request $request, $id)
    {
        $course = Course::find($id);
        $course->fill($request->except('image'));

        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $course->image = $request->file('image')->store('uploads');
        }

        $course->save();

        return redirect()->back()->withInput()->with('status-success', 'Course item is successfully updated.');
    }

    public function delete($id)
    {
        Course::destroy($id);

        return redirect()->back()->with('status-success', 'Course item is successfully deleted.');
    }
}
