<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();

        return view('admin.message.index', compact('messages'));
    }

    public function delete($id)
    {
        Message::destroy($id);

        return redirect()->back()->with('status-success', 'Message item is successfully deleted.');
    }
}
