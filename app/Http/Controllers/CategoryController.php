<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return view('admin.categorys.list',['categorys'=> Category::orderBy('id', 'DESC')->paginate(10)]);
    }

    public function create()
    {
        return view('admin.categorys.create');
    }

    public function store(Request $request)
    {   
        $category = Category::create([
            'name' => $request['name'],
        ]);
        
        return redirect()->to('/admin/categorys/list');
    }

    public function edit($id)
    {
        return view('admin.categorys.update',['category'=> Category::where('id', $id)->firstOrFail()]);
    }

    public function update($id,Request $request)
    {
        $category = Category::find($id);
        $category->name=$request->name;
        $category->save();
        return redirect()->to('/admin/categorys/list');
    }

    public function detroy($id)
    {
        Category::where('id',$id)->delete();

        return redirect()->back();
    }
}
