<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class service extends Model
{
    protected $fillable = [ 
        'userid', 'services_name', 'rate_price' 
    ];
}
