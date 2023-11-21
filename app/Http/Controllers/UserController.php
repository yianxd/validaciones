<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        //
        $request->validate([
            'id'=>'required|string|min:2|max:11',
            'name'=>'required|string|min:2|max:60',
            'email'=>'required|string|min:2|max:250',
            'password'=>'required|string|min:2|max:250',
            'rol_code'=>'required|id|min:2|max:10'


        ]);
        return redirect()->back()->with('mensaje','Usuario creado...');
/*        User::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'rol_code'=>$request->rol_code

        ]);*/
    }
    public function create(){
        return view('auth.register');
    }


}
