<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('admin.users.list',['users'=> User::orderBy('id', 'DESC')->paginate(10)]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function detroy()
    {
        
    }
}
