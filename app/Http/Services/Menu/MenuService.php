<?php

namespace App\Http\Services\Menu;

use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class MenuService
{

    public function getParent()
    {
        return Menu::where('parent_id', 0)->get();
    }

    public function show()
    {
        return Menu::select('name', 'id')
            ->with(['posts' => function ($query) {
                $query->orderByDesc('created_at'); // Sắp xếp các bài viết theo thời gian tạo mới nhất
            }])
            ->orderByDesc('id')
            ->take(4) // Lấy 4 menu mới nhất
            ->get();
    }


    public function getAll($key = null)
    {
        $query = Menu::query();

        if ($key) {
            $query->where('name', 'like', '%' . $key . '%');
        }

        $menus = $query->orderByDesc('id')->paginate(30);

        // Nếu không tìm thấy kết quả
        if ($menus->isEmpty()) {
            return ['menus' => $menus, 'message' => 'Không có danh mục nào phù hợp với từ khóa tìm kiếm.'];
        }

        return ['menus' => $menus, 'message' => ''];
    }


    public function create($request)
    {
        try {
            Menu::create([
                'name' => (string) $request->input('name'),
                'parent_id' => (int) $request->input('parent_id'),
                'description' => (string) $request->input('description'),
                'content' => (string) $request->input('content'),
                'active' => (string) $request->input('active'),
            ]);

            Session::flash('success', 'Tạo danh mục thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        return true;
    }

    public function update($request, $menu): bool
    {
        if ($request->input('parent_id') != $menu->id) {
            $menu->parent_id = (int) $request->input('parent_id');
        }

        $menu->name = (string) $request->input('name');
        $menu->description = (string) $request->input('description');
        $menu->content = (string) $request->input('content');
        $menu->active = (string) $request->input('active');
        $menu->save();

        Session::flash('success', 'Cập nhật thành công danh mục');
        return true;
    }

    public function destroy($request)
    {
        $id = (int) $request->input('id');

        $menu = Menu::where('id', $request->input('id'))->first();

        if ($menu) {
            return Menu::where('id', $id)->orWhere('parent_id', $id)->delete();
        }
        return false;
    }

    public function getId($id)
    {
        return Menu::where('id', $id)
        ->where('active', 1)
        ->firstOrFail();
    }

    public function getPost($menu)
    {
        return $menu->posts()
            ->select('id', 'title', 'description', 'thumb', 'created_at', 'updated_at')
            ->where('active', 1)
            ->orderByDesc('id')
            ->paginate(6);
    }
    
    public function more($id, $currentMenuId)
    {
    return Post::select('id', 'title', 'description', 'menu_id', 'thumb', 'created_at', 'updated_at')
        ->where('active', 1)
        // ->where('id', '!=', $id)
        ->where('menu_id', '!=', $currentMenuId) // Loại trừ các bài viết mới nhất từ danh mục hiện tại
        ->orderByDesc('id')
        ->limit(4)
        ->get();
    }


// Lấy tin cùng danh mục
    public function getPostsByMenu($menuId)
    {
        return Post::where('menu_id', $menuId)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
