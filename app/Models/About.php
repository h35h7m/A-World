<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $guarded = ['id'];  

    protected $casts =[
        // 'status'=> Status::class,
    ];

    const UPLOADPATH = 'images/';

    const UPLOADFIELDS = [];


}
