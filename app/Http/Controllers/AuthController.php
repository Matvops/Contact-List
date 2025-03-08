<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        
        return view('login');
    }

    public function loginSubmit(Request $request) { 
        
        filter_var($request['email'], FILTER_VALIDATE_EMAIL);

        $request->validate(
            [
                "email" => ['required', 'email:rfc'],
                "pass" => ['required', 'min:6', 'max:16']
            ],
            [
                "email.required" => "EMAIL OBRIGATÓRIO",
                "email.email" => "EMAIL INVÁLIDO",
                "pass.required" => "SENHA OBRIGATÓRIA",
                "pass.min" => "O NÚMERO MINIMO DE CARACTERES É :min",
                "pass.max" => "O NÚMERO MÁXIMO DE CARACTERES É :max"
            ]
        );

        $result = AuthService::loginSubmit($request);

        if($result['status']) {
            session([
                'user' => [
                    'user.id' => $result['data']->id,
                    'user.username' => $result['data']->username,
                    'user.created' => $result['data']->created_at,
                    'user.updated' => $result['data']->updated_at,
                ]
            ]);

            return redirect()->route('login');
        }

        
        return redirect()
            ->back()
            ->withInput()
            ->with('loginError', $result['msg']);
    }
}
