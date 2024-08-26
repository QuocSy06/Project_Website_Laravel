<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Http\Services\Post\PostAdminService;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostAdminService $postService)
    {
        $this->postService = $postService;

    }
    
    public function index()
    {
        return view('admin.post.list', [
            'title' => 'Danh sách bài viết mới nhất',
            'posts' => $this->postService->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.post.add', [
            'title' => 'Thêm bài viết mới',
            'menus' => $this->postService->getMenu()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $this->postService->insert($request);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('admin.post.edit', [
            'title' => 'Chỉnh sửa bài viết',
            'post' => $post,
            'menus' => $this->postService->getMenu()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $result = $this->postService->update($request, $post);
        if ($result) {
            return redirect('/admin/posts/list');
        }
        return redirect() -> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->postService->delete($request);
        if($request) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công bài viết'
            ]);
        }

        return response()->json(['error' => true]);
    }
    
}
