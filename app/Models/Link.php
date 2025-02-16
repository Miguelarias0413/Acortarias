<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //

    protected $fillable = [
        'url',
        'short_url',
        'user_id',
        'message',
        'clicks'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
