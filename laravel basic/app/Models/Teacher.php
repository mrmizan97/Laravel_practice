<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function profile(){
        return $this->morphOne(Profile::class,'profileable');
     }
}
