<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List1 extends Model
{
    use HasFactory;
    protected $table ="list1";

    protected $fillable = [
        'desc',

    ];
}
