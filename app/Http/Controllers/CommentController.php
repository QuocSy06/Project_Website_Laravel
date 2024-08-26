<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $request->validate(
            [
                'post_id' => 'required|exists:posts,id',
                'content' => 'required|string|max:255',
            ],
            [
                'content.required' => 'Vui lòng nhập bình luận của bạn.',
                'content.max' => 'Nội dung bình luận không được vượt quá 255 ký tự.',
            ]
        );

        if (!Auth::check()) {
            return response()->json(['error' => 'Bạn cần đăng nhập để bình luận.'], 401);
        }

        $comment = Comment::create([
            'post_id' => $request->post_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return response()->json([
            'success' => 'Bình luận của bạn đã được gửi.',
            'comment' => $comment
        ]);
    }


    public function reply(Request $request)
    {
        $request->validate([
            'comment_id' => 'required|exists:comments,id',
            'content' => 'required|string',
        ]);

        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Bạn cần đăng nhập để trả lời bình luận.');
        }

        Reply::create([
            'comment_id' => $request->comment_id,
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Trả lời đã được gửi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
