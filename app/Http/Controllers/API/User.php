<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Model\UserModel;
use Illuminate\Http\Request;

class User extends Controller
{
    public static function save(Request $request) {

        if(!UserModel::register($request)) {
            return response(['register' => 'fail', 'status' => 'Internal Server Error'], 500);
        }

        return response(['register' => 'sucess', 'status' => 'created'], 201);
    }
}
