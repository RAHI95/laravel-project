<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softdeletes;

class Teacher extends Model
{
    use softdeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'email', 'phone','subject','department_id'
    ];
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function hall(){
        return $this->belongsTo(Hall::class,'department_id','provost_department');
    }
    public function students(){
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
}
