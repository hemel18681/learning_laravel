<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class UserController extends Controller
{
    public function index(){
        // using eloquent

        $data = [
            'name' => 'hudai1',
            'email' => 'hudai1@gmail.com',
            'password' => 'aaaaaa'
        ];
        User::create($data);

        // $user = new User();
        // $user->name = 'hemel18681';
        // $user->email = 'hemel18103112@gmail.com';
        // $user->password = bcrypt('aaaaa');
        // $user->save();

        // User::where('id',3)->update(['name'=> 'hemel']);

        $user = User::all();
        return $user;

        // User::where('id',2)->delete();


        // without eloquent, in traditional sql format

        // DB::insert('insert into users(name,email,password) values(?,?,?)',[
        //     'hemel','hemel18103112@gmail.com','aaaaaa'
        // ]);
        // $users = DB::select('select * from users');
        // return $users;
        // DB::update('update users set name = ? where id = 1',[
        //     'hemel18681'
        // ]);
        // DB::delete('delete from users where id = 1');
        // $users = DB::select('select * from users');
        // return $users;
        return view('home');
    }
}
