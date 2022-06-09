<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'email', 'phone','studentable_id','studentable_type','created_by_id'
    ];
    public function teachers(){
        return $this->belongsToMany(Teacher::class)->withTimestamps();
    }
}
