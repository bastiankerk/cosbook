<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $this->update($user);

        return view('home', compact('user'));
    }

    public function update(User $user)
    {

        $request = request();

        $validatedData = $request->validate([
            'user_name' => 'required',
            'email' => 'required|email',
            'fname' => 'required',
            'name' => 'required'
        ]);

        $user->user_name = request('user_name');
        $user->fname = request('fname');
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));

        $user->save();

//        return back();
    }

//    public function update(Request $request, User $user)
//    {
//        $data = $request->validate(
//            [
//                'user_name' => 'required',
//                'email' => 'required|email|unique:users',
//                'fname' => 'required',
//                'name' => 'required',
//                ]
//        );
//
//        dd($user);
//
//        $user->update($data);
//    }
}