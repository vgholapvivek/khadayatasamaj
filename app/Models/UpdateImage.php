<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UpdateImage extends Model
{
    protected $table = 'update_images';
    protected $fillable = ['event_id', 'event_image','mobile_event_image'];
    public function event()
    {
         return $this->belongsTo(Event::class);
    }
}