<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $guarded = [];  

    protected $casts =[
        // 'status'=> Status::class,
    ];

    const UPLOADPATH = 'images/';

    const UPLOADFIELDS = [];


}
