<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
use Illuminate\Http\JsonResponse;
use App\Models\Menu;

class MenuController extends Controller
{

    protected $menuService;
    public function __construct (MenuService $menuService) {
        $this -> menuService = $menuService;
    }

    public function create(){
        return view('admin.menu.add', [
            'title' => 'Thêm danh mục mới',
            'menus' => $this->menuService->getParent(),
        ]);
    }

    public function store(CreateFormRequest $request) {
        $result = $this->menuService->create($request);

        return redirect()->back();
    }

    public function index(Request $request) {
        $key = $request->input('key');
        $result = $this->menuService->getAll($key);
    
        return view('admin.menu.list', [
            'title' => 'Danh sách danh mục mới nhất',
            'menus' => $result['menus'],
            'message' => $result['message']
        ]);
    }
    
    public function showPosts($id)
    {
        // Lấy menu theo id
        $menu = Menu::findOrFail($id);
    
        // Lấy tất cả bài viết thuộc menu đó
        $posts = $menu->posts()->paginate(10); 
    
        $title = 'Danh sách bài viết thuộc danh mục: ' . $menu->name;
    
        return view('admin.menu.posts', compact('menu', 'posts', 'title'));
    }
    


    public function show(Menu $menu) {
        return view('admin.menu.edit', [
            'title' => 'Chỉnh sửa danh mục: '. $menu->name,
            'menu' => $menu,
            'menus' => $this -> menuService->getParent()
        ]);
    }

    public function update(Menu $menu, CreateFormRequest $request) {
        $this -> menuService->update($request, $menu);

        return redirect('/admin/menus/list');
    }

    public function destroy(Request $request):JsonResponse {
        $result = $this -> menuService -> destroy($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công danh mục'
            ]);
        }
        return response()->json([
            'error' => true,
        ]);
    }
}
