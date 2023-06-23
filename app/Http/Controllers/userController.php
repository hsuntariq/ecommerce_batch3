<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function SignUp(Request $req){
        $formFields = $req->validate([
            'username' => ['required'],
            'email' => ['required','email'], 
            'password' => ['required','min:6'], 
            'image' => ['required'],
        ]);

        $formFields['image'] = $req->file('image')->store('images','public');
        $formFields['password'] = bcrypt($formFields['password']);
        // send the data to the database
        $user = User::create($formFields);
        // starts the user session
        auth()->login($user);
        return redirect('/')->with('message','Welcome ' . auth()->user()->username);

    }

    public function SignOut(Request $req){
        $req->session()->invalidate();
        auth()->logout();
        return back()->with('message','Hoping to see you again');
    }


    public function SignIn(Request $req){
        $formFields = $req->validate([
            'email' => ['required','email'], 
            'password' => ['required','min:6'], 
        ]);

        if(auth()->attempt($formFields)){
            $req->session()->regenerate();
            return redirect('/')->with('message','Welcome');
        }else{
            return back()->with('message','Invalid Credentials');
        }


    }


}