<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Welcome(Request $request)
    {
        $user = $request->session()->get('user');
        if($user !== null) return redirect()->route('main-shop');
        else return view('welcome');
    }

    public function Quit(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('welcome');
    }
}
