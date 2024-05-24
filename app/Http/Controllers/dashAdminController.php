<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class dashAdminController extends Controller
{
    public function dashUser(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user_id = User::where('id', $user)->get();
        if ($user->hasRole('admin')) {
            return view('dashboarduser', ['u' => $user]);
        } else {
            return view('dashboarduser', ['u' => $user]);
        }
        
        
    }
}
