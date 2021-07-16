<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class ContactModel extends Model implements AuthenticatableContract 
{
    use Authenticatable;       
    protected $fillable = ['firstName', 'lastName', 'email', 'phone', 'message'];
}



