<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $guarded = ['id'];  

    protected $casts =[
        // 'status'=> Status::class,
    ];

    const UPLOADPATH = 'images/';

    const UPLOADFIELDS = [];


}
