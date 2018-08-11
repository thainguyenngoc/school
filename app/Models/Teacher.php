<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Teacher extends Model implements Authenticatable
{
	use AuthenticableTrait;
	
   protected $table='teachers'; 
   protected $fillable = ['id', 'email', 'password','name','department_id','role', 'remember_token'];
   public $timestamps = false;
   public $incrementing = false;

    public function question()
    {
        return $this->hasMany(Question::class,'teacher_id','question_id');
    }
}
