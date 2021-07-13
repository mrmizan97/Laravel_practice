<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   public function profile(){
      return $this->hasOne(Profile::class);
   }
    public function comments(){
       return $this->hasMany(Comment::class);
    }
    public function recomended(){
        return $this->hasMany(Comment::class,'student_id')->orderBy('id','desc');
     }
     public function subjects(){
        return $this->belongsToMany(Subject::class,'pivot_student_subject')->withPivot('marks')->withTimestamps();
     }
     public function profileDetail(){
        return $this->hasOneThrough(ProfileDetails::class,Profile::class,'student_id','profile_id','id','id');
     }

}

