<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('auth.login');
    }
    public function loginAction(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        dd(Hash::make($request->password));
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('data.index');
        }
        return redirect()->back();
    }
}
