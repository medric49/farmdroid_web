<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Managers\FileManager;
use App\Model\Distributor;
use App\Model\Productor;
use App\Model\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(){
        return view('guest.register');
    }

    public function store(RegisterRequest $request) {
        $logo = FileManager::storeAvatar($request->avatar);

        $user = User::create([
            'name' => $request->input('name'),
            'first_name' => $request->input('first_name'),
            'email' =>$request->input('email'),
            'avatar' => $logo,
            'tel' => $request->input('tel'),
            'password' => Hash::make($request->input('password'))
        ]);

        Property::create([
            'user_id' => $user->id,
        ]);
        Auth::login($user,true);
        return redirect()->route('welcome');
    }
}
