<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use PDOException;

class MainService {
    public static function getContacts($id){
        return User::where('id', '<>', $id)->get()->toArray();
    }

    public static function getContact($id){
        try {
            return User::find(Crypt::decrypt($id));
        } catch (DecryptException $e) {
            return redirect()->route('home');
        }
    }

    public static function updateContact(Request $request){
        try {
            $user = User::find(Crypt::decrypt($request['id']));
            $user->username = $request['username'];
            $user->email = $request['email'];

            $user = $user->save();
            
            if($user) {
                return [
                    'status' => true,
                    'msg' => null,
                    'data' => $user
                ];
            }
        } catch (DecryptException $e) {
            return redirect()->route('home');
        } catch (PDOException $e) {
            return [
                'status' => false,
                'msg' => 'O email já esta em uso',
                'data' => null
            ];
        }
    }
}