<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthAdmin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AdminAuthController extends Controller
{
    public function loginShow() {
    return view('dashboard.admin.login');
}

public function login(LoginRequest $request) {
    if(auth('admin')->attempt(['phone_number' => $request->phone_number,'password' => $request->password])) {
        return redirect()->route('dashboard.admin.index')->with([
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
    Session::flush();
    auth('admin')->logout();
    return redirect()->route('admin.login')->with([
        'success' => true,
        'message' => 'Successfully Logout'
    ]);
}
}
