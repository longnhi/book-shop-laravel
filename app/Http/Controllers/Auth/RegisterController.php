<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{

    public function store(Request $request)
    {
        $user_check = User::where('email',$request->email)->get();
        if($user_check->count()!=0){
            Session::flash('error', 'Sai Email hoặc Password');
            return redirect()->back();
        }
        
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role'=>'customer',
            'password' => Hash::make($request['password']),
        ]);
        
        auth()->login($user);
        
        return redirect()->to('/');
    }

}