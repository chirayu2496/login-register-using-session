<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function verify(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)){
                Session::put('user_id', $user->id);
                return redirect()->route('dashboard');
            }
        }

        
        return redirect()->back()->with('error', 'Invalid credentials');
    }

    public function logout(){
        Session::forget('user_id');
        return redirect()->route('login-show')->with('success', 'Logged out successfully');
    }
}
