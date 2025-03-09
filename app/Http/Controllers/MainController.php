<?php

namespace App\Http\Controllers;

use App\Services\MainService;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $contacts = MainService::getContacts(session('user.id'));
        return view('home', ['contacts' => $contacts]);
    }

    public function update($id)
    {
        $contact = MainService::getContact($id);
        return view('update_contact', ['contact' => $contact]);
    }

    public function updateSubmit(Request $request)
    {
        filter_var($request['email'], FILTER_VALIDATE_EMAIL);

        $request->validate(
            [
                "email" => ['required', 'email:rfc'],
                "username" => ['required', 'min:6', 'max:16']
            ],
            [
                "email.required" => "EMAIL OBRIGATÓRIO",
                "email.email" => "EMAIL INVÁLIDO",
                "username.required" => "SENHA OBRIGATÓRIA",
                "username.min" => "O NÚMERO MINIMO DE CARACTERES É :min",
                "username.max" => "O NÚMERO MÁXIMO DE CARACTERES É :max"
            ]
        );

        $result = MainService::updateContact($request);

        if($result['status']) {
            return redirect()->route('home');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('updateError', $result['msg']);
    }

    public function delete($id)
    {
        MainService::deleteContact($id);

        return redirect()->route('home');
    }
}
