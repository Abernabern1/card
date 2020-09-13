<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function index()
    {
        $subscribers = Subscriber::all();

        return view('admin.subscriber.index', compact('subscribers'));
    }

    public function delete($id)
    {
        Subscriber::destroy($id);

        return redirect()->back()->with('status-success', 'Subscriber item is successfully deleted.');
    }
}
