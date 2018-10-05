<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class admin extends Model
{
    use Authenticatable;
	protected $table = 'admin';
	protected $fillable = ['username','password'];
}
