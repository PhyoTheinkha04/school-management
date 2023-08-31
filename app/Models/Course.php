<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'contents',
        'status',
        'image',
        'level_id'
    ];

    public function levels()
    {
        return $this->belongsTo(Level::class,'level_id');
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
    }

