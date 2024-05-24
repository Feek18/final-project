<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'no_invoice',
        'admin_fee',
        'kode_unik',
        'total',
        'payement',
        'status',
        'tgl_expired'
    ];
}
