<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Member::class, 'created_by', 'id');
    }

    // Define a relationship to itself (child records)
    public function children()
    {
        return $this->hasMany(Member::class, 'created_by', 'id');
    }

}
