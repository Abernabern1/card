<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advantage;

class AdvantageController extends Controller
{
    public function index()
    {
        $advantages = Advantage::all();

        return view('admin.advantage.index', compact('advantages'));
    }

    public function create()
    {
        return view('admin.advantage.create');
    }

    public function createStore(Request $request, Advantage $advantage)
    {
        $advantage->fill($request->all())->save();

        return redirect()->back()->with('status-success', 'Advantage item is successfully created.');
    }

    public function update($id)
    {
        $advantage = Advantage::find($id);

        return view('admin.advantage.update', compact('advantage'));
    }

    public function updateStore(Request $request, Advantage $advantage, $id)
    {
        $advantage->find($id)->fill($request->all())->save();

        return redirect()->back()->withInput()->with('status-success', 'Advantage item is successfully updated.');
    }

    public function delete($id)
    {
        Advantage::destroy($id);

        return redirect()->back()->with('status-success', 'Advantage item is successfully deleted.');
    }
}
