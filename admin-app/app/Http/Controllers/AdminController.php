<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\SubAdmin;
use App\Models\Users;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
       
    public function view()
    {
        $users = Admin::all();
        $subs = SubAdmin::all();
        $us = Users::all();
        return view('admin_page', compact('users','subs','us'));
    }

              
    public function createSubpage(){
        return view('create_sub');
    }    


    public function createSubadmin(Request $data)
    {
        $subs = new SubAdmin();
        $subs->id = $data->input('id');
        $subs->name = $data->input('name');
        $subs->password = $data->input('password');
        $subs->save();
        
        return redirect()->back();
    }


    public function accept()
    {
        dd("ffffffffff");
        // $us = Users::find($id);
        // if ($us) {
        //     $us->status = 'accepted';
        //     $us->save();
        // }
        // return redirect()->back();
    }

    public function reject($id)
    {
        // dd($id);
        $us = Users::find($id);
        if ($us) {
            $us->status = 'rejected';
            $us->save();
        }
        return redirect()->back();
    }
    
    
}
