<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        
        return view('login');
    }

    public function loginSubmit(Request $request) { 
        $identify = filter_var($request['email'], FILTER_VALIDATE_EMAIL);
        $request->validate(
            [
                "email" => ['required', 'email:rfc', $identify],
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

        echo "a";
    }
}
