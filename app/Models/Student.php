<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Student extends Model implements Authenticatable
{
	use AuthenticableTrait;
	
   protected $table='students'; 
   protected $fillable = ['id', 'email', 'password','name', 'birthday', 'remember_token','gender'];
   public $timestamps = false;
   public $incrementing = false;
}
