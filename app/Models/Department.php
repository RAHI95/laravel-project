<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softdeletes;

class Department extends Model
{
    use softdeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'faculty', 'university','department_code','created_by_id'
    ];
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function students()
    {
        return $this->morphMany(Student::class, 'studentable');
    }
    // public function hall(){
    //     return $this->hasMany(Hall::class);
    // }
    public function user(){
        return $this->belongsTo(User::class,'created_by_id','id');
    }

}
