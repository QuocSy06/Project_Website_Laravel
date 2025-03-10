<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function menu($menus, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $html .= '
                        <tr>
                            <td>' . $menu->id . '</td>
                            <td>' . $char . $menu->name . '</td>
                            <td>' . self::active($menu->active) . '</td>
                            <td>' . $menu->updated_at . '</td>
                            <td>
                                <a href="' . route('menu.showPosts', $menu->id) . '" class="btn btn-info btn-sm">Xem chi tiết</a>
                            </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/admin/menus/edit/' . $menu->id . '">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="#" onclick="removeRow(' . $menu->id . ', \'/admin/menus/destroy\')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        ';

                unset($menu[$key]);
                $html .= self::menu($menus, $menu->id, $char . '|--');
            }
        }

        return $html;
    }

    public static function active($active = 0): string
    {
        return $active == 0 ? '<span class="btn btn-danger btn-xs"> Chưa phê duyệt </span>'
            : '<span class="btn btn-success btn-xs"> Đã phê duyệt </span>';
    }

    public static function menus($menus, $parent_id = 0)
    {
        $html = '';
        foreach ($menus as $key => $menu) {
            if ($menu->parent_id == $parent_id) {
                $hasChildren = self::isChild($menus, $menu->id);
                $html .= '<li' . ($hasChildren ? ' class=""' : '') . '>';
                $html .= '<a href="/danh-muc/' . $menu->id . '-' . Str::slug($menu->name, '-') . '.html">' . $menu->name . '</a>';

                unset($menus[$key]);

                if ($hasChildren) {
                    $html .= '<ul class="sub-menu">';
                    $html .= self::menus($menus, $menu->id);
                    $html .= '</ul>';
                }
                $html .= '</li>';
            }
        }

        return $html;
    }


    public static function isChild($menus, $id)
    {
        foreach ($menus as $menu) {
            if ($menu->parent_id == $id) {
                return true;
            }
        }
        return false;
    }
}
