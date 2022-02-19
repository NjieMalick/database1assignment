<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productkey extends Model
{
    use HasFactory;

    protected $table = 'productkeys';

    protected $fillable = [
        'key',
    ];
}
