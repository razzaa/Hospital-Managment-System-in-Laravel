<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminAccountantModel extends Model
{
    protected $fillable = [
        'name', 'email', 'password','address','avatar','admin','contact_no'
    ];
}
