<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Members extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $guard = 'members'; 
    protected $guarded = [];

}
