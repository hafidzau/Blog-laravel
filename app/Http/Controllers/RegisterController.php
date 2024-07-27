<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class RegisterController extends Controller
{
    public function index (){
        return view('register.register',[
            'title'=>'register'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'username'=>'required|min:5|max:255|unique:users',
            'email'=>'required|email:dns|unique:users',
            // 'password' =>'required|min:8|mixedCase|letters|numbers|symbols'
            'password' => [ 'required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()]
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        
        // $this->$request->session()->flash('success', 'gollll');
        return redirect('/')->with('success', 'RORRRR');
    }
}
