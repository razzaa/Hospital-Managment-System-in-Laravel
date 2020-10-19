<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeboardModel extends Model
{
    protected $fillable = [
        'title', 'notice','date'
    ];
}
