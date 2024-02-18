<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
Use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function logout(Request $request):RedirectResponse
    {
         Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
