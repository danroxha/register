<?php

namespace App\Http\Controllers;

use App\Models\Model\UserModel;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
        echo view('user.register');
    }

    public function save(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        UserModel::register($request);

        return view('user.sucess');
    }
}
