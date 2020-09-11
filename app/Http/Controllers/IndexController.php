<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Advantage;
use App\Models\Course;
use App\Models\Message;
use App\Models\Subscriber;
use App\Models\Teacher;


class IndexController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $advantages = Advantage::all();
        $mainAdvantages = Advantage::limit(2)->get();

        return view('index', compact('advantages', 'courses', 'teachers', 'mainAdvantages'));
    }

    public function register(Request $request, User $user)
    {
        $user->fill($request->all())->save();

        return redirect()->route('index');
    }

    public function message(Request $request, Message $message)
    {
        $message->fill($request->all())->save();

        return redirect()->route('index');
    }

    public function subscribe(Request $request, Subscriber $subscriber)
    {
        $subscriber->fill($request->all())->save();

        return redirect()->route('index');
    }
}
