<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\Auth;

class AuthController extends Controller
{
    public function Authorizing(Request $request)
    {
        $user = $request->session()->get('user');
        if($user !== null) return redirect()->route('main-shop');
        else return view('auth', [
            'log' => '',
            'pass' => '',
            'error_log' => ''
        ]);
    }

    public function CheckAuthorizing(AuthRequest $request)
    {
        $log = $request->input('log');
        $pass = $request->input('pass');

        $auth = new Auth();
        $user = $auth->getUser($log, $pass);

        if($user !== null)
        {
            $request->session()->put([
                'user' => $user
            ]);

            return redirect()->route('main-shop');
        }

        else return view('auth')->with([
            'log' => $log,
            'pass' => $pass,
            'error_log' => 'Неверный логин или пароль'
        ]);
    }
}
