<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    use HasFactory;

    protected $table = 'signups';

    protected $fillable = ['fname','lname','birthday','number','state','gender','image','email','check'];
}
