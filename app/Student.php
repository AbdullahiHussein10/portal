<?php

namespace App;
use school;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table= 'students';


    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'enrollment_date',
        'home_address'
    ];

    public function subjects(){
        return $this->hasMany('Student');
    }

    public function grade(){
        return $this->hasOne('Grade');
    }

    public function attendance(){
        return $this->hasOne('Attendance');
    }

    public function parent(){
        return $this->hasOne('parent');
    }

    public function fee(){
        return $this->hasMany('feess');
    }

}
