<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admins extends Authenticatable
{
    protected $table='admin';
    protected $guarded =['id'];
}
