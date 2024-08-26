<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; 

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Thực hiện tìm kiếm theo tiêu đề, mô tả, hoặc nội dung của bài viết
        $posts = Post::where('title', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            // ->orWhere('content', 'LIKE', "%$query%")
            ->paginate(10);

        return view('posts.search', compact('posts', 'query'));
    }
}

