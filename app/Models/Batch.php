<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'fees',
        'description',
        'start_at',
        'end_at',
        'status',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class,'course_id');
    }


}
