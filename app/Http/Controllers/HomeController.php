<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Wishlist;
use App\Models\Order;
use App\Models\OrderDetail;

class HomeController extends Controller
{
    public function index()
    {
        return view('shop.home',['newBooks'=> Book::orderBy('id', 'DESC')->limit(8)->get()]);
    }

    public function contact()
    {
        return view('shop.contact.index');
    }

    public function productList()
    {
        return view('shop.products.list',[
            'books'=> Book::orderBy('id', 'DESC')->paginate(9),
            'categorys' => Category::all(),
            'publishers' => Publisher::all(),
            'authors' => Author::all()
        ]);
    }

    public function productsByCategory($id)
    {
        return view('shop.products.list_by_category',[
            'books'=> Book::orderBy('id', 'DESC')->where('id_category',$id)->paginate(9),
            'categorys' => Category::all(),
            'publishers' => Publisher::all(),
            'authors' => Author::all(),
            'i_category' => Category::find($id)
        ]);
    }

    public function productsByPublisher($id)
    {
        return view('shop.products.list_by_publisher',[
            'books'=> Book::orderBy('id', 'DESC')->where('id_publisher',$id)->paginate(9),
            'categorys' => Category::all(),
            'publishers' => Publisher::all(),
            'authors' => Author::all(),
            'i_publisher' => Publisher::find($id)
        ]);
    }

    public function productsByAuthor($id)
    {
        return view('shop.products.list_by_author',[
            'books'=> Book::orderBy('id', 'DESC')->where('id_author',$id)->paginate(9),
            'categorys' => Category::all(),
            'publishers' => Publisher::all(),
            'authors' => Author::all(),
            'i_author' => Author::find($id)
        ]);
    }

    public function productDetail($id)
    {
        $book = Book::where('id', $id)->firstOrFail();
        return view('shop.products.detail',[
            'book'=> $book,
            'categorys' => Category::all(),
            'publishers' => Publisher::all(),
            'authors' => Author::all(),
            'books_category' => Book::where('id_category', $book->id_category)->where('id','<>',$id)->inRandomOrder()->limit(4)->get(),
            'books_publisher' => Book::where('id_publisher', $book->id_publisher)->where('id','<>',$id)->inRandomOrder()->limit(4)->get(),
            'books_author' => Book::where('id_author', $book->id_author)->where('id','<>',$id)->inRandomOrder()->limit(4)->get(),
        ]);
    }

    public function searchProduct(Request $request)
    {
        $book = Book::where('name', 'like','%'. $request->name .'%')->get();
        return view('shop.products.search_products',[
            'books'=> $book,
            'name'=>$request->name
        ]);
    }

    public function login()
    {
        if (Auth::user()) {
            return redirect()->to('/home');
        }
        return view('auth.login');
    }

    public function register()
    {
        if (Auth::user()) {
            return redirect()->to('/home');
        }
        return view('auth.register');
    }

    public function authorList()
    {
        return view('shop.authors.list',['authors'=> Author::paginate(8)]);
    }

    public function authorDetail($id)
    {
        return view('shop.authors.detail',['author'=> Author::find($id),'books'=> Book::where('id_author',$id)->get()]);
    }

    public function showWishlist()
    {
        if(!Auth::check()){
            return redirect()->to('login');
        }
        return view('shop.user.wishlist', ['books_wishlist'=>Wishlist::where('id_user',Auth::user()->id)->with('book')->get()]);
    }

    public function addToWishlist(Request $request)
    {
        if(!Auth::check()){
            return redirect()->to('login');
        }
        $wishlist = Wishlist::create([
            'id_book' => $request['id_book'],
            'id_user' => Auth::user()->id
        ]);
        return redirect()->back();
    }

    public function removeFromWishlist($id)
    {
        Wishlist::where('id',$id)->delete();

        return redirect()->back();
    }

    public function showMyOrders()
    {
        if(!Auth::check()){
            return redirect()->to('login');
        }

        $orders = Order::orderBy('id','DESC')->where('id_user',Auth::user()->id)->get();
        $orders_id = Order::select('id')->where('id_user',Auth::user()->id)->get();
        $books_order = OrderDetail::whereIn('id_order',$orders_id)->with('book')->get();

        return view('shop.orders.index', ['orders'=>$orders,'books_order'=>$books_order]);
    }
}
