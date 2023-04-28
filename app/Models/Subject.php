<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function pivotAttendances(){
        return $this->hasMany(Pivot::class,'subject');
    }
}