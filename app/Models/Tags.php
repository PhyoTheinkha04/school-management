<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
    ];

    public function news(){
        return $this->hasMany(News::class,'tags_id');
    }
}

