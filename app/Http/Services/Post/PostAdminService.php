<?php


namespace App\Http\Services\Post;

use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;


class PostAdminService
{
    public function getMenu()
    {
        return Menu::where('active', 1)->get();
    }

    public function insert($request)
    {
        try {
            $data = $request->except('_token');
            $data['hot'] = $request->has('hot') ? 1 : 0;

            Post::create($data);

            Session::flash('success', 'Thêm bài viết thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Thêm bài viết lỗi');
            Log::info($err->getMessage());
            return false;
        }

        return true;
    }



    public function get()
    {
        return Post::with('menu')
            ->orderByDesc('id')->paginate(15);
    }

    public function update($request, $post)
    {
        try {
            $data = $request->input();

            // Nếu không có giá trị 'hot' trong request, gán giá trị mặc định là false (0)
            $data['hot'] = $request->input('hot', 0);

            $post->fill($data);
            $post->save();

            Session::flash('success', 'Cập nhật bài viết thành công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            Log::info($err->getMessage());
            return false;
        }

        return true;
    }


    public function delete($request)
    {
        $post = Post::where('id', $request->input('id'))->first();
        if ($post) {
            $post->delete();
            return true;
        }
        return false;
    }
}
