<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class manageTableController extends Controller
{
    public function table(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $product = Product::all();
        return view('managementtable', ['product' => $product, 'user' => $user]);
    }
}
