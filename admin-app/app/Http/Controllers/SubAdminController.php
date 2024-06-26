<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\SubAdmin;
use App\Models\Users;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SubAdminController extends Controller
{
    public function userTable(){
        $us = Users::all();
        return view('subadmin_page', compact('us'));
    }

    // public function view(){
    //     return view('/subadmin_page');
    // }

    public function createUserPage(){
        return view('create_user');
    }    

    public function createUser(Request $data)
    {
        $us = new Users();
        $us->name = $data->input('name');
        $us->password = $data->input('password');
        $us->save();
        
        return redirect()->back();
    }
}
