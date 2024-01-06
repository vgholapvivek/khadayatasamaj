<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Achivementbymember extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(AchievementImage::class, 'achievement_id', 'id');
    }

    public function adstatus()
    {
        return $this->belongsTo(Status::class, 'status', 'member_status');
    }

}
