<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'genre_id',
        'cover_image',
        'user_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
