<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Book;
use App\Models\Author;

class AdminController extends Controller
{
    public function index()
    {
        $orders=Order::orderBy('id','DESC')->limit(10)->get();
        $count_order=Order::all()->count();
        $count_book=Book::all()->count();
        $count_user=User::all()->count();
        $count_author=Author::all()->count();
        return view('admin.home',[
            'orders'=>$orders,
            'count_order'=>$count_order,
            'count_user'=>$count_user,
            'count_book'=>$count_book,
            'count_author'=>$count_author
        ]);
    }
}
