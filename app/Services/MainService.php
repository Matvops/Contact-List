<?php
namespace App\Services;

use App\Models\User;

class MainService {
    public static function getContacts($id){
        return User::where('id', '<>', $id)->get()->toArray();
    }
}