<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $menuService;

     public function __construct(MenuService $menuService)
     {
        $this->menuService = $menuService;
     }
    public function index(Request $request, $id, $slug = '')
    {
        // Lấy thông tin của mene
        $menu = $this->menuService->getId($id);
        
        // Lấy bài viết thuộc menu đó
        $posts = $this->menuService->getPost($menu);

        // Lấy menu bài viết mới nhất
        $currentMenuId = $menu->id; //tránh lặp tin mới nhất
        $menusMore = $this->menuService->more($id, $currentMenuId);

        return view('menu',[
            'title' => $menu->name,
            'posts' => $posts,
            'menu' => $menu,
            'menus' => $menusMore
        ]);
    }


}
