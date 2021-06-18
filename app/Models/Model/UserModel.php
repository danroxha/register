<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserModel extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'user';

    public static function list(int $limit) {
        $sql = self::select([
            'id',
            'name',
            'email',
            'password',
            'at_create'
        ])
        ->limit($limit);

        dd($sql->toSql());
    }

    public static function register(Request $request) {
        $sql = self::insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
    }

}
