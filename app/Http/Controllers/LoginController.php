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
    // public function getLogin() {
    //     if (!Auth::check()) {
    //        return view('home');
    //     } else {
    //         return redirect('user');
    // }

    public function postLogin(LoginRequest $request) {
    	$login = [
    		'email' => $request->LoEmail,
    		'password' => $request->LoPass,
    	];
    	if (Auth::attempt($login)) {
    		return redirect()->back();
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
        return redirect()->back();
    }

    public function getLogout() {
    	Auth::logout();
    	return redirect()->route('getHome');
    }

}
