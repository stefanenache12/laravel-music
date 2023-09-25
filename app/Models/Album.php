<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'year',
        'description',
        'country',
        'genre_id'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
