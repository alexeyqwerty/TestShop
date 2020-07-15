<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Auth extends Model
{
    public function getUser($log, $pass)
    {
        $result = DB::table('users')->
            where('phone', '=', $log)->orWhere('email', '=', $log)->get();

        $user = $result[0];

        if($user !== null)
        {
            if($pass === $user->pass) return $user;
        }
        return null;
    }
}
