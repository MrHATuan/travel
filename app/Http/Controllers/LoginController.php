<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DateTime;

class LoginController extends Controller
{

    public function postLogin(LoginRequest $request) {
    	$login = [
    		'email' => $request->LoEmail,
    		'password' => $request->LoPass,
    	];
    	if (Auth::attempt($login)) {
    		return redirect()->route('getHome');
    	} else {
    		return redirect()->back();
    	}
    }


    public function postRegister(RegisterRequest $request) {
    	$user = new User;
    	$user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->created_at = new DateTime();
        $user->save();
        Auth::login($user);
        return redirect()->route('getHome');
    }

    public function getLogout() {
    	Auth::logout();
    	return redirect()->route('getHome');
    }

}
