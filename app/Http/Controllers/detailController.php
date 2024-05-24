<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Detail;
use Carbon\Carbon;

class detailController extends Controller
{
    public function detail(Request $request, $id)
    {
        $user = Auth::user()->id;
        $product = Product::find($id);
        return view('detailProduct', ['product' => $product, 'user' => $user]);
    }

    public function invoice(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $harga = Product::where('id',$id)->first();
        $dt = Carbon::now();
        $formattedDateTime = $dt->format('dmHis');
        $admin_fee = '2500';
        $kode_unik = (int) Detail::max('kode_unik') + 1;
        $total = (int) $admin_fee + $kode_unik + $harga->harga;
        Detail::create([
            'no_invoice' => $formattedDateTime,
            'admin_fee' => $admin_fee,
            'kode_unik' => Detail::max('kode_unik') + 1,
            'total' => $total,
            'payement' => 'VA BRI',
            'status' => 'UNPAID',
            'tgl_expired' => $dt->addHours(3),
            'id_user' => Auth::user()->id
        ]);
        $product = Product::find($id);
        $invoice = Detail::find($user_id);
        $user = User::find($user_id);
        return view('invoice', ['product' => $product, 'user' => $user , 'i' => $invoice]);
    }
}
