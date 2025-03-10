<?php

namespace App\Http\View\Composers;
use App\Models\Menu;
use Illuminate\View\View;

class MenuComposer
{
    protected $users;

    public function __construct()
    {

    }

    public function compose(View $view)
    {
       $menus = Menu::select('id', 'name', 'parent_id')
       ->where ('active', 1)
       ->orderBy('created_at', 'asc')
       ->get();
       
       
       $view->with('menus', $menus); // dòng này là truyền data ở biến bên trên ra view
    }
}