<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function students(){
        return $this->belongsToMany(Student::class,'pivot_student_subject');
     }
}
