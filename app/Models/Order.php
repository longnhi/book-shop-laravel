<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'total',
        'status',
        'id_user',
    ];

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
