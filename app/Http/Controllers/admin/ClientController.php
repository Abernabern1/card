<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('admin.client.index', compact('clients'));
    }

    public function delete($id)
    {
        Client::destroy($id);

        return redirect()->back()->with('status-success', 'Client item is successfully deleted.');
    }
}
