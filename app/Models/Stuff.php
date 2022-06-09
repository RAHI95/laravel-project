<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softdeletes;

class Stuff extends Model
{
    use softdeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'department', 'post',
    ];

}
