@extends('admin.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between mb-2">
                    <div class="col-auto ms-auto">
                        <form action="" class="search-bar position-relative mb-sm-0 mb-2">
                            <div class="input-group" style="border-radius: 30px; overflow: hidden;">
                                <input type="text" class="form-control" name="key" placeholder="Tìm kiếm danh mục...">
                                <button class="btn btn-white" type="submit" style="border-radius: 0 30px 30px 0;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                               
                                <th>ID</th>
                                <th>Tên danh mục</th>
                                <th>Trạng thái</th>
                                <th>Ngày đăng</th>
                                <th>Xem chi tiết</th>
                                <th style="width: 82px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {!! \App\Helpers\Helper::menu($menus) !!}
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-end my-2">
                {{$menus->links()}}
                </div>
                

                
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection