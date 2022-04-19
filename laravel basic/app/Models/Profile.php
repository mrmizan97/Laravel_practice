<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [ 'email', 'phone'];   

    // public function students(){
    //     return $this->belongsToMany(Student::class,'student_id','id');
    // }
    public function detail(){
        return $this->hasOne(ProfileDetails::class);
    }
    public function profileable(){
        return $this->morphTo();
    }

}
