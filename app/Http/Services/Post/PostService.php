<?php

namespace App\Http\Services\Post;

use App\Models\Post;
use App\Models\Menu;

class PostService
{
    const LIMIT = 1;

    public function get($limit = self::LIMIT)
    {
        return Post::select('id', 'title', 'description', 'thumb', 'created_at', 'updated_at')
            ->with('menu')
            ->orderByDesc('id')
            ->limit($limit)
            ->get();
    }

    public function getByMenu($menuId, $limit = self::LIMIT)
    {
        return Post::with('menu')->where('menu_id', $menuId)
            ->where('active', 1)
            ->orderByDesc('id')
            ->limit($limit)
            ->get();
    }


    public function show($id)
    {
        return Post::where('id', $id)
            ->where('active', 1)
            ->with('menu')
            ->firstOrFail();
    }


    public function getPostsByMenu($menuId, $excludePostId = null)
    {
        return Post::where('menu_id', $menuId)
            ->when($excludePostId, function ($query, $excludePostId) {
                return $query->where('id', '!=', $excludePostId);
            })
            ->orderBy('created_at', 'desc')
            ->get();
    }

    # Lấy bài viết mới nhất từ các danh mục khác nhau
    public function getLatestPostsByMenu($limit = 5)
    {
        $menus = Menu::all();
        $latestPosts = [];

        foreach ($menus as $menu) {
            $latestPost = Post::where('menu_id', $menu->id)
                ->where('active', 1)
                ->orderBy('created_at', 'desc')
                ->first();

            if ($latestPost) {
                $latestPosts[] = [
                    'menu' => $menu,
                    'post' => $latestPost
                ];
            }
        }

        // Sắp xếp các danh mục dựa trên thời gian của tin mới nhất
        usort($latestPosts, function ($a, $b) {
            return $b['post']->created_at <=> $a['post']->created_at;
        });

        return array_slice($latestPosts, 0, $limit);
    }

    # Lấy bài viết hot 
    public function getHotPosts($limit = 1)
    {
        return Post::where('hot', 1)
            ->where('active', 1)
            ->orderByDesc('id')
            ->limit($limit)
            ->get();
    }

    # Tăng lượt xem cho mỗi bài viết
    public function incrementViews($id)
    {
        $post = Post::findOrFail($id);
        $post->increment('views');
    }

    public function getTopViewedPosts($limit = 4)
    {
        return Post::orderBy('views', 'desc')->limit($limit)->get();
    }
}
