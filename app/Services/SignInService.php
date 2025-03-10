<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class SignInService
{
    public static function signSubmit(Request $request)
    {
        $userExists = User::where('email', $request['email'])->get()->toArray();
        error_log(json_encode(User::where('email', $request['email'])->get()->toArray()));

        if (!empty($userExists)) {
            error_log($request['email']);
            return [
                'status' => false,
                'msg' => 'EMAIL ALREADY EXISTS!',
                'data' => null
            ];
        }

        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['pass']);
        $user->save();


        return [
            'status' => true,
            'msg' => 'ACCOUNT CREATED SUCCESFULLY',
            'data' => null
        ];
    }
}
