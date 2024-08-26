<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;


class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin'); // Đảm bảo chỉ admin mới có thể truy cập
    }

    public function index()
    {
        $totalMenus = Menu::count();
        $totalPosts = Post::count();
        $totalComments = Comment::count();
        $totalUsers = User::count();
        $totalViews = Post::sum('views');
        return view('admin.home', [
            'title' => 'Trang quản trị Admin',
            'totalMenus' => $totalMenus,
            'totalPosts' => $totalPosts,
            'totalComments' => $totalComments,
            'totalUsers' => $totalUsers,
            'totalViews' => $totalViews
        ]);
    }
}
