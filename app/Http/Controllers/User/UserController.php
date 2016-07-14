<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use App\Models\User;
use Image;
use DateTime;


class UserController extends Controller
{
    public function getEditProfile($name) {
    	return view('users.profile', array('user' => Auth::user()));
    }

    public function postEditProfile(UserRequest $request, $name) {
        $user = Auth::user();

        if($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $filecover = time() . '.' . $cover->getClientOriginalExtension();
            Image::make($cover)->resize(1600, 1200)->save(public_path('/uploads/covers/' . $filecover));
            $user->cover = $filecover;
        }

    	if($request->hasFile('avatar')) {
    		$avatar = $request->file('avatar');
    		$fileavatar = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $fileavatar));
    		$user->avatar = $fileavatar;
    	}

        $user->save();

    	return view('users.profile', array('user' => Auth::user()));
    }

}
