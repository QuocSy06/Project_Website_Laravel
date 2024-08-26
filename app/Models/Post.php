<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'content',
        'thumb',
        'menu_id',
        'hot',
        'views',
        'active'
    ];

    protected $table = 'posts';

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }


    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }


    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
