<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Models\Reg;

class RegController extends Controller
{
    public function Registering(Request $request)
    {
        $user = $request->session()->get('user');
        if($user !== null) return redirect()->route('main-shop');
        else return view('reg', [
            'name' => '',
            'email' => '',
            'phone' => '',
            'pass' => '',
            'passRepeat' => '',
            'error_log' => ''
        ]);
    }

    public function CheckRegistering(RegRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $pass = $request->input('pass');
        $passRepeat = $request->input('passRepeat');

        if($pass === $passRepeat)
        {
            $register = new Reg();

            $register->name = $name;
            $register->email = $email;
            $register->phone = $phone;
            $register->pass = $pass;

            $register->setTable('users');



            $register->save();
            return 'Hello, '.$name;
        }

        else return view('reg')->with([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'pass' => $pass,
            'passRepeat' => $passRepeat,
            'error_log' => 'Пароли не совпадают'
        ]);
    }
}
