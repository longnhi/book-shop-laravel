<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Book;

class OrderController extends Controller
{
    //
    public function index()
    {
        return view('admin.orders.list',['orders'=>Order::orderBy('id','DESC')->paginate(10)]);
    }

    public function detail($id)
    {
        $order_details = OrderDetail::where('id_order',$id)->with('book')->get();
        return view('admin.orders.detail',['order_details'=>$order_details,'order'=>Order::where('id',$id)->firstOrFail()]);
    }

    public function handle($id, Request $request)
    {
        $order = Order::find($id);
        $handle = $request->handle;
        $order_details = OrderDetail::where('id_order',$order->id)->get();
        if($handle == 'delivery')
        {
            $order->status = 'Đang vận chuyển';
            foreach($order_details as $key=>$order_detail)
            {
                $book = Book::find($order_detail->id_book);
                $book->quantity = $book->quantity - $order_detail->quantity;
                $book->save();
            }
        }
        else if($handle == 'completed')
        {
            $order->status = 'Đã giao';
        }
        else if($handle == 'cancel')
        {
            if($order->status == 'Đang vận chuyển')
            {
                foreach($order_details as $key->$order_detail)
                {
                    $book = Book::find($order_detail->id_book);
                    $book->quantity = $book->quantity + $order_detail->quantity;
                    $book->save();
                }
            }
            $order->status = 'Đã hủy';
        }
        $order->save();

        return redirect()->back();

    }

}
