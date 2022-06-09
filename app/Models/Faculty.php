<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'faculty_id', 'faculty_name', 'dean',
    ];
    public function students()
    {
        return $this->morphMany(Student::class, 'studentable');
    }
}
