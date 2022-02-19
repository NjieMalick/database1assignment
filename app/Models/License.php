<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $table = 'licenses';

    protected $fillable = [
        'name',
        'version',
        'status_id',
        'manufacturer_id',
        'product_key_id',
        'start_date',
        'end_date',
        'customer_id',
    ];
}
