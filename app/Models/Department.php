<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    public function staff_datas(){
        return $this->belongsToMany(Staff::class,StaffDepartment::class);
    }
}
