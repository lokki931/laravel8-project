<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'img',
        'text',
        'cat_id',
    ];
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
}
