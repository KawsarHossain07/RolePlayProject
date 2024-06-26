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
class LogController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);


        $user = Admin::where('name', $request->input('name'))->first();

        if ($user && $request->input('password') === $user->password) {
            // Auth::login($user);
            return redirect()->route('all');
        }


        $user = SubAdmin::where('name', $request->input('name'))->first();
        if ($user && $request->input('password') === $user->password) {
            return redirect()->route('usertable');
        }


        $user = Users::where('name', $request->input('name'))->first();
        if ($user && $request->input('password') === $user->password && $user->status === 'accepted') {
            return redirect()->route('userall');
        }

        return redirect()->back()->with(['msg' => 'Invalid Information']);
        
    }
}
