<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function stu_email_datas(){
        return $this->hasOne(Email::class,'stu_id');
    }

    public function stu_location_datas(){
        return $this->hasMany(Location::class,'stu_id');
    }
}
