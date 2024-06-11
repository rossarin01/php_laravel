<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class system extends Model
{
    use HasFactory;
    protected $fillable = ['ss_id', 'ss_name','ss_codecourse', 'ss_course', 'ss_credit', 'ss_namethec', 
    ];
}
