<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'contents',
        'status',
        'image',
        'tags_id'
    ];

    public function Tags()
    {
        return $this->belongsTo(Tags::class);
    }
}
