<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function is_admin(){
        if($this->admin=="admin"){    //for admin vioew
            return "admin";
        }
        elseif($this->admin=="doctor") //for patient view
        {
            return "doctor";
        }
        elseif($this->admin=="patient"){    //for doctorv view
            return "patient";
        }
        elseif($this->admin=="accountant"){    //for accountant view
            return "accountant";
        }
        elseif($this->admin=="nurse"){    //for nurse view
            return "nurse";
        }
        else{
            return "zero"; //for conformation view
        }
    }
}