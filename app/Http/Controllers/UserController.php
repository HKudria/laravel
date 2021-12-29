<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user($id)
    {
        if(isset($id))
        {
            echo $id . ' Is correct';
        } else echo "not register";
    }

    public function index()
    {
        $user = DB::table('users')->where('name','Ola')->get();
        //$user = DB::table('users')->get();

        //when I do request in BD I need use ->get(); if I wanna use another operator as = I can use where('name','operator','Ola')
        //if I use double where it will be AND, if I want OR I should use orWhere
        dump($user);
    }
}
