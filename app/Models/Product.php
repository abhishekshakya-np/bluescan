<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_description',
        'image_url',
        'quantity',
        'code',
        'codeType',
        'region',
        'item_form',
        'liquid_volume',
        'scent',
        'category',
        'category_path',
        'upc',
        'ean',
        'barcode_url',
        'added_date',
    ];
}
