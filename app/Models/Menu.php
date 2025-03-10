<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active'
    ];

    public function posts() 
    {
        return $this->hasMany(Post::class, 'menu_id', 'id');
    }
    public function childMenus() 
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }

}
