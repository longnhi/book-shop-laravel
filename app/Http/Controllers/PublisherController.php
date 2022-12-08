<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    //
    public function index()
    {
        return view('admin.publishers.list',['publishers'=> Publisher::orderBy('id', 'DESC')->paginate(10)]);
    }

    public function create()
    {
        return view('admin.publishers.create');
    }

    public function store(Request $request)
    {
        $publisher = Publisher::create([
            'name' => $request['name'],
        ]);
        
        return redirect()->to('/admin/publishers/list');
    }

    public function edit($id)
    {
        return view('admin.publishers.update',['publisher'=> Publisher::where('id', $id)->firstOrFail()]);
    }

    public function update($id, Request $request)
    {
        $publisher = Publisher::find($id);
        $publisher->name=$request->name;
        $publisher->save();
        return redirect()->to('/admin/publishers/list');
    }

    public function detroy($id)
    {
        Publisher::where('id',$id)->delete();

        return redirect()->back();
    }
}
