<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Book;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('admin.products.list',['books'=> Book::orderBy('id', 'DESC')->paginate(5)]);
    }

    public function create()
    {
        return view('admin.products.create',['categorys' => Category::all(),'publishers' => Publisher::all(),'authors' => Author::all()]);
    }

    public function store(Request $request)
    {
        $path='uploads/images/books/'. date("Y/m/d");
        $fileName= date("H_i_s").$request->file('image')->getClientOriginalName();
        $request->file('image')->move($path,$fileName);

        $book = Book::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'quantity' => $request['quantity'],
            'id_category' => $request['id_category'],
            'id_publisher' => $request['id_publisher'],
            'id_author' => $request['id_author'],
            'information'=> $request['information'],
            'image' => $path.'/'.$fileName,
        ]);
        
        return redirect()->to('/admin/products/list');
    }

    public function show($id)
    {
        return view('admin.products.detail',['book'=> Book::where('id', $id)->with('category','publisher','author')->firstOrFail()]);
    }

    public function edit($id)
    {
        return view('admin.products.update',['book'=> Book::where('id', $id)->firstOrFail(),'categorys' => Category::all(),'publishers' => Publisher::all(),'authors' => Author::all()]);
    }

    public function update($id,Request $request)
    {
        $book = Book::find($id);
        if($request->hasFile('image')){
            $path='uploads/images/books/'. date("Y/m/d");
            $fileName= date("H_i_s").$request->file('image')->getClientOriginalName();
            $request->file('image')->move($path,$fileName);
            $book->image=$path.'/'.$fileName;
        }
        $book->name=$request->name;
        $book->price=$request->price;
        $book->quantity=$request->quantity;
        $book->id_category=$request->id_category;
        $book->id_publisher=$request->id_publisher;
        $book->id_author=$request->id_author;
        $book->information=$request->information;
        $book->save();
        return redirect()->to('/admin/products/list');
    }

    public function detroy($id)
    {
        Book::where('id',$id)->delete();

        return redirect()->back();
    }
}
