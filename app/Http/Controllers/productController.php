<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function productData(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $product = Product::all();
        return view('product', ['product' => $product, 'user' => $user]);
    }

    public function filter(Request $request)
    {
        $query = Product::query();

        if ($request->filled('kondisi')) {
            $query->where('kondisi', $request->kondisi);
        }

        $products = $query->get();

        return view('filter-data', compact('product'));
    }
}
