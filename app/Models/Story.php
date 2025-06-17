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
        'author_id'
    ];

    public function author()
    {
        return $this->hasOne(User::class, 'author_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
