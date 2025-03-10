<?php

namespace App\Http\Controllers;

use App\Services\SignInService;
use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function signIn(){

        return view('SignIn');
    }

    public function SignInSubmit(Request $request){
        filter_var($request['email'], FILTER_VALIDATE_EMAIL);
        $request->validate(
            [
                "username" => ['required', 'min:6', 'max:16'],
                "email" => ['required', 'email:rfc'],
                "pass" => ['required', 'min:6', 'max:16']
            ],
            [
                "email.required" => "EMAIL OBRIGATÓRIO",
                "email.email" => "EMAIL INVÁLIDO",
                "pass.required" => "SENHA OBRIGATÓRIA",
                "pass.min" => "O NÚMERO MINIMO DE CARACTERES É :min",
                "pass.max" => "O NÚMERO MÁXIMO DE CARACTERES É :max",
                "username.required" => "USERNAME OBRIGATÓRIO",
                "username.min" => "O NÚMERO MINIMO DE CARACTERES É :min",
                "username.max" => "O NÚMERO MÁXIMO DE CARACTERES É :max"
            ]
        );

        $result = SignInService::signSubmit($request);

        error_log(json_encode($result));
        error_log('oi');
        if($result['status']) {
            return redirect()->route('login');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('SignInError', $result['msg']);
    }
}
