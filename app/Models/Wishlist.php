<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'wishlists';
    protected $fillable = [
        'id_book',
        'id_user',
    ];

    public function book()
    {
        return $this->hasOne(Book::class,'id','id_book');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
}
