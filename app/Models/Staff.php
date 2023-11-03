<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staffs';

    public function staff_dept_datas(){
        return $this->belongsToMany(Department::class,'staff_departments');
    }

}
