<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QandA extends Model
{
    use HasFactory;
    protected $table="question_answer";
    protected $fillable = [
        'question',
        'answer',
        'status',
    ];
}
