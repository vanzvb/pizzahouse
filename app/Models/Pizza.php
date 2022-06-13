<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    //procted $table = 'table_name';
    protected $casts = [
        'toppings' => 'array'
    ];

}
