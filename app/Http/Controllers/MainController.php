<?php

namespace App\Http\Controllers;

use App\Services\MainService;

class MainController extends Controller
{
    public function home() {
        $contacts = MainService::getContacts(session('user.id'));

        return view('home', ['contacts' => $contacts]);
    }
}
