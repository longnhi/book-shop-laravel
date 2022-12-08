<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderDetail;

class CartController extends Controller
{
    //
    public function show()
    {
        $carts = Session::get('carts');
        if(is_null($carts))
        {
            return view('shop.carts.index');
        }
        $product_id = array_keys($carts);
        $book_carts = Book::whereIn('id', $product_id)->get();
        return view('shop.carts.index',['book_carts'=>$book_carts,'carts'=> Session::get('carts')]);
    }

    public function addToCarts(Request $request)
    {
        $product_id=$request->id;
        $carts = Session::get('carts');
        if(is_null($carts)){
            Session::put('carts', [
                $product_id => 1
            ]);
        }else{
            $exists = Arr::exists($carts, $product_id);
            if ($exists) {
                $carts[$product_id]= $carts[$product_id]+1;
                Session::put('carts', $carts);
            }else{
                $carts[$product_id] = 1;
                Session::put('carts', $carts);
            }
        }
        return redirect()->back();
    }

    public function updateCarts(Request $request)
    {
        Session::put('carts', $request->input('quantity'));

        return redirect()->back();
    }

    public function deleteFromCarts($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);
        Session::put('carts', $carts);

        return redirect()->back();
    }

    public function checkout()
    {
        return view('shop.checkout.index');
    }

    public function placeOrder(Request $request)
    {

        if(!Auth::check()){
            return redirect()->to('login');
        }else{
            $carts = Session::get('carts');
            if(is_null($carts) || count($carts)==0){
                return redirect()->to('carts');
            }else{
                $name = $request['name'];
                $address = $request['address'];
                $phone = $request['phone'];
                $status ="Đang xử lý";
                $id_user = Auth::user()->id;
                $total=0;

                $product_id = array_keys($carts);
                $book_carts = Book::whereIn('id', $product_id)->get();
                foreach ($book_carts as $key=>$book_cart){
                    $price = $book_cart->price * $carts[$book_cart->id];
                    $total += $price;
                }
                $order = Order::create([
                    'name' => $name,
                    'address' => $address,
                    'phone' => $phone,
                    'total' => $total,
                    'status' => $status,
                    'id_user' => $id_user,
                ]);
                
                foreach ($book_carts as $key=>$book_cart){
                    $orderDetail = OrderDetail::create([
                        'id_book' => $book_cart->id,
                        'quantity' => $carts[$book_cart->id],
                        'price' => $book_cart->price * $carts[$book_cart->id],
                        'id_order'=> $order->id,
                    ]);
                }
            }
        }
        return redirect()->to('home');
        
    }
}
