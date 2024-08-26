@extends('admin.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Tên danh mục</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Nhập tên danh mục">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Mô tả</label>
                                    <textarea class="form-control" name="description" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phê duyệt</label><br>
                                    {{-- <input type="checkbox" value="1" id="active" name="active" checked data-plugin="switchery" data-color="#1bb99a" /> --}}
                                    <div class="form-check mb-2 form-check-success">
                                        <input class="form-check-input rounded-circle" type="radio" value="0"
                                            id="no_active" name="active" checked="">
                                        <label class="form-check-label" for="no_active">Không</label>
                                    </div>

                                    <div class="form-check mb-2 form-check-success">
                                        <input class="form-check-input rounded-circle" type="radio" value="1"
                                            id="active" name="active" checked="">
                                        <label class="form-check-label" for="active">Có</label>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Thêm danh
                                        mục</button>
                                </div>
                                @csrf
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Danh mục</label>
                                <select class="selectize-drop-header" name="parent_id" placeholder="Tên danh mục...">
                                    <option value="0">Danh Mục Cha</option>
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        
                            <div class="mb-3">
                                <label>Mô Tả Chi Tiết</label>
                                <textarea name="content" id="content" class="form-control"></textarea>
                            </div>

                            @csrf
                        </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection
