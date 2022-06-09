<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hall extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name', 'provost_name', 'provost_department','department'
    ];

    public function department(){
        return $this->belongsTo(Department::class,'provost_department','id');
    }

    public function user(){
        return $this->belongsTo(User::class,'created_by_id','id');
    }
}
