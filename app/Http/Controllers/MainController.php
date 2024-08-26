<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use App\Http\Services\Post\PostService;

class MainController extends Controller
{
    protected $menu;
    protected $post;

    public function __construct(MenuService $menu, PostService $post) {
        $this->menu = $menu;
        $this->post = $post;
    }

    public function index() {
        
        $hotPosts  = $this->post->getHotPosts(); # Bài viết thuộc tin hot
        $hotPostIds = $hotPosts->pluck('id');  // Lấy danh sách ID của các tin hot
        $posts = $this->post->get();  # Bài viết chính
        $sportPosts = $this->post->getByMenu(22);  # Bài viết trong danh mục thể thao
        $trafficPosts = $this->post->getByMenu(19);  # Bài viết trong danh mục giao thông
        $politicsPosts = $this->post->getByMenu(16); # Bài viết trong danh mục chính trị
        $amusingPosts = $this->post->getByMenu(26, 1); # Bài viết trong danh mục âm nhạc
        $fashionPosts = $this->post->getByMenu(27,3); # Bài viết trong danh mục thời trang
        $educationPosts = $this->post->getByMenu(14,3); # Bài viết trong danh mục giáo dục
        $techPosts = $this->post->getByMenu(40,10); # Bài viết trong danh mục công nghệ
        $overseasPosts = $this->post->getByMenu(38); # Bài viết trong danh mục kiều bào 
        $militaryPosts = $this->post->getByMenu(37, 3); # Bài viết trong danh mục quân sự thế giới
        $healthPosts = $this->post->getByMenu(43); # Bài viết trong danh mục sống khỏe
        $advisePosts = $this->post->getByMenu(44, 4); # Bài viết trong danh mục tư vấn
        $casefilePosts = $this->post->getByMenu(45); # Bài viết trong danh mục hồ sơ vụ án
        $courthousePosts = $this->post->getByMenu(46, 2); # Bài viết trong danh mục pháp đình
        $latestPostsByMenu = $this->post->getLatestPostsByMenu(); # Load tin tức mới nhất của các danh mục khác nhau ra trang chủ
        
        foreach ($latestPostsByMenu as $key => $postGroup) {
            if (in_array($postGroup['post']->id, $hotPostIds->toArray())) {
                unset($latestPostsByMenu[$key]);
            }
        }

         // Lấy bài viết đọc nhiều
         $topViewedPosts = $this->post->getTopViewedPosts();
        
        $limit = 5;
        return view('home', [
            'title' => 'Trang tin tức Quoosi',
            'menus' => $this->menu->getAll(),
            'posts' => $this->post->get(),
            'hotPosts' => $hotPosts,
            'sportPosts' => $sportPosts,
            'trafficPosts' => $trafficPosts,
            'politicsPosts' => $politicsPosts,
            'amusingPosts' => $amusingPosts,
            'fashionPosts' => $fashionPosts,
            'educationPosts' => $educationPosts,
            'techPosts' => $techPosts,
            'overseasPosts' => $overseasPosts,
            'militaryPosts' => $militaryPosts,
            'healthPosts' => $healthPosts,
            'advisePosts' => $advisePosts,
            'casefilePosts' => $casefilePosts,
            'courthousePosts' => $courthousePosts,
            'latestPostsByMenu' => $latestPostsByMenu,
            'topViewedPosts' => $topViewedPosts 
        ]);
    }
}
