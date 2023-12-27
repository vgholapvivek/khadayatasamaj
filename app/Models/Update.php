<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Update extends Model
{
    protected $guarded = []; // Add other fields as needed
     protected $table = 'updates';
     public function updateImages()
     {
         return $this->hasMany('App\Models\UpdateImage');
     }
}