<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthService
{

    public static function loginSubmit(Request $request)
    {
        try {
            $user = User::where('email', $request['email'])->first();

            if (!$user) {
                error_log('first');
                return [
                    'status' => false,
                    'msg' => 'Email or password invalid!',
                    'data' => null
                ];
            }

            if (!password_verify($request['pass'], $user->password)) {
                return [
                    'status' => false,
                    'msg' => 'Email or password invalid!',
                    'data' => null
                ];
            }

            return [
                'status' => true,
                'msg' => null,
                'data' => $user
            ];
        } catch (Exception $e) {
            return [
                'status' => false,
                'msg' => 'Unespected error',
                'data' => null
            ];
        }
    }
}
