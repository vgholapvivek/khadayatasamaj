<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Connection extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

    protected $fillable = ['sender_id', 'receiver_id', 'status'];

    public function sender()
    {
        return $this->belongsTo(Member::class, 'sender_id', 'id');
    }

    public function receiver()
    {
        return $this->belongsTo(Member::class, 'receiver_id', 'id');
    }

}
