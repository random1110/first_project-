<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class WebAuthController extends Controller
{
    public function loginShow() {
        return view('dashboard.auth.login');
    }


    public function login(LoginRequest $request) {
        if(auth()->attempt(['phone_number' => $request->phone_number,'password' => $request->password])) {
            return redirect()->route('dashboard.users.index')->with([
                'success' => true,
                'message' => 'Successfully Login'
            ]);
        } else{
            return redirect()->back()->withInput($request->only('phone_number'))->with([
                'success' => false,
                'message' => 'The Password And The Username Is Not Identical'
            ]);
        }
    }

    public function registerShow() {
        return view('dashboard.users.register');
    }

    public function register(RegisterUserRequest $request)  {
        $user = new User(array_merge(
            $request->validated(),
            ['password' => Hash::make($request->password)]
        ));
        if($user->save()) {
            return redirect()->route('dashboard.user.index')->with(
                [
                    'success' => true,
                    'message' => 'Account Register Successfully'
                ]
                );
        }else{
            return redirect()->back()->with([
                'success' => false,
                'message' => 'There Is Something Wrong'
            ]);
        }
    }


    public function logout() {
        Session::flush();
        auth()->logout();
        return redirect()->route('login')->with([
            'success' => true,
            'message' => 'Successfully Logout'
        ]);
    }

    public function pro() {
        return auth()->user();
    }
}
