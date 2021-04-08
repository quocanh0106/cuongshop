<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $casts = [
        'gia_niem_yet' => 'float',
        'gia_dai_ly' => 'float'
    ];

    protected $fillable = [
        'ten_san_pham',
        'kich_thuoc',
        'so_rang',
        'ban_luoi',
        'do_day',
        'truc',
        'do_vi',
        'gia_niem_yet',
        'gia_dai_ly',
        'description',
        'created_at'
    ];
}
