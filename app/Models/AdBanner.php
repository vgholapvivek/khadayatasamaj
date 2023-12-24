<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdBanner extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function statusflag()
    {
        return $this->belongsTo('App\Models\Status','admin_status','status');
    }

    public function memberStatusflag()
    {
        return $this->belongsTo('App\Models\Status','member_status',);
    }

}
