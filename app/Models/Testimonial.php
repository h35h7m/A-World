<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $guarded = ['id'];  

    protected $casts =[
        // 'status'=> Status::class,
    ];

    const UPLOADPATH = 'images/';

    const UPLOADFIELDS = [];


}
