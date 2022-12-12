<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';

//    make relationship many to one
    public function class(){
        return $this->belongsTo(Classes::class);
    }

    public function extracurricular(){
        return $this->belongsToMany(Extracurricular::class , 'pivot_students_extracurricular' , 'student_id' ,
            'extracurricular_id');
    }
}
