<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //
    public function index()
    {
        return view('admin.authors.list',['authors'=> Author::orderBy('id', 'DESC')->paginate(5)]);
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    public function store(Request $request)
    {
        $path='uploads/images/authors/'. date("Y/m/d");
        $fileName= date("H_i_s").$request->file('avatar')->getClientOriginalName();
        $request->file('avatar')->move($path,$fileName);

        $author = Author::create([
            'name' => $request['name'],
            'information'=> $request['information'],
            'avatar' => $path.'/'.$fileName,
        ]);
        
        return redirect()->to('/admin/authors/list');
    }

    public function edit($id)
    {
        return view('admin.authors.update',['author'=> Author::where('id', $id)->firstOrFail()]);
    }

    public function update($id,Request $request)
    {
        $author = Author::find($id);
        if($request->hasFile('avatar')){
            $path='uploads/images/authors/'. date("Y/m/d/H/i/s");
            $fileName= date("H_i_s").$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move($path,$fileName);
            $author->avatar=$path.'/'.$fileName;
        }
        $author->name=$request->name;
        $author->information=$request->information;
        $author->save();
        return redirect()->to('/admin/authors/list');
    }

    public function detroy($id)
    {
        Author::where('id',$id)->delete();

        return redirect()->back();
    }
}
