<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'feedbacks';

    protected $guarded = [];

    public function member()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }
}
