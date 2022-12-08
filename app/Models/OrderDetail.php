<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';
    protected $fillable = [
        'id_book',
        'quantity',
        'price',
        'id_order',
    ];

    public function order()
    {
        return $this->hasOne(Order::class,'id','id_order');
    }

    public function book()
    {
        return $this->hasOne(Book::class,'id','id_book');
    }
}
