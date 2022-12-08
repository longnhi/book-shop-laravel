<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $fillable = [
        'name',
        'image',
        'information',
        'price',
        'quantity',
        'id_category',
        'id_publisher',
        'id_author',
    ];

    public function author()
    {
        return $this->hasOne(Author::class,'id','id_author');
    }

    public function category()
    {
        return $this->hasOne(Category::class,'id','id_category');
    }

    public function publisher()
    {
        return $this->hasOne(Publisher::class,'id','id_publisher');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
