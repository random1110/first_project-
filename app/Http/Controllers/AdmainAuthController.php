<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
class AdmainAuthController extends Controller
{
    public function loginShow() {
        return view('dashboard.admain.login');
    }

    public function login(LoginRequest $request) {
        if(auth()->attempt(['phone_number' => $request->phone_number,'password' => $request->password])) {
            return redirect()->route('dashboard.admain.index')->with([
                'success' => true,
                'message' => 'Successfully Login'
            ]);
        } else{
            return redirect()->back()->withInput($request->only('phone_number'))->with([
                'success' => false,
                'message' => 'The Password And The phonenumber Is Not Identical'
            ]);
        }
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('login')->with([
            'success' => true,
            'message' => 'Successfully Logout'
        ]);
    }
}
