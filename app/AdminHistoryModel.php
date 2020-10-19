<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminHistoryModel extends Model
{
    protected $fillable = [
        'name', 'email', 'password','admin'
    ];
}
