<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Post\PostService;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $menu;

    protected $postService;
    public function __construct(PostService $postService, MenuService $menu) {
        $this->postService = $postService;
        $this->menu = $menu;
    }

    public function index($id = '', $slug = '')
    {
        $post = $this->postService->show($id);
       
        $this->postService->incrementViews($id);  //Tăng lượt xem
        $postsByCategory = $this->postService->getPostsByMenu($post->menu_id, $post->id); // Lấy bài viết cùng danh mục

        return view('posts.content', [
            'title' => $post->name,
            'menus' => $this->menu->show(),
            'post' => $post,
            'posts' => $postsByCategory 
        ]);
    }

    
}
