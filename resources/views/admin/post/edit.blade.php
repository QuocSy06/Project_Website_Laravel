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
                                    <label class="form-label">Tiêu đề bài viết</label>
                                    <input type="text" name="title" value="{{ $post->title }}" class="form-control"
                                        placeholder="Nhập tiêu đề tin">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Mô tả</label>
                                    <textarea class="form-control" name="description" rows="5">{{ $post->description }}</textarea>
                                </div>
                                @csrf
                        </div> <!-- end col -->

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Danh mục</label>
                                <select class="selectize-drop-header" name="menu_id" placeholder="Tên danh mục...">
                                    @foreach ($menus as $menu)
                                        <option value="{{ $menu->id }}"
                                            {{ $post->menu_id == $menu->id ? 'selected' : '' }}>
                                            {{ $menu->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Hình ảnh bài viết</label>
                                <input type="file" id="upload" class="form-control">
                                <div id="image_show">
                                    <a href="" target="_blank">
                                        <img src="{{ $post->thumb }}" width="100px" alt="Ảnh đại diện bài viết">
                                    </a>
                                </div>
                                <input type="hidden" name="thumb" value="{{ $post->thumb }}" id="thumb">
                            </div>

                            <div class="mb-3">
                                <label for="hot">Tin Hot</label>
                                <div class="checkbox-wrapper-12">
                                    <div class="cbx">
                                        <input type="checkbox" name="hot" id="hot" value="1"
                                        {{ old('hot', $post->hot ?? false) ? 'checked' : '' }}>
                                        <label for="cbx-12"></label>
                                        <svg fill="none" viewBox="0 0 15 14" height="14" width="15">
                                            <path d="M2 8.36364L6.23077 12L13 2"></path>
                                        </svg>
                                    </div>

                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <defs>
                                            <filter id="goo-12">
                                                <feGaussianBlur result="blur" stdDeviation="4" in="SourceGraphic">
                                                </feGaussianBlur>
                                                <feColorMatrix result="goo-12"
                                                    values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 22 -7" mode="matrix"
                                                    in="blur"></feColorMatrix>
                                                <feBlend in2="goo-12" in="SourceGraphic"></feBlend>
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div> <!-- end col -->

                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label>Nội dung bài viết</label>
                                <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phê duyệt</label><br>
                            {{-- <input type="checkbox" value="1" id="active" name="active" checked data-plugin="switchery" data-color="#1bb99a" /> --}}
                            <div class="form-check mb-2 form-check-success">
                                <input class="form-check-input rounded-circle" type="radio" value="0" id="no_active"
                                    name="active" {{ $post->active == 0 ? 'checked=""' : '' }}>
                                <label class="form-check-label" for="no_active">Không</label>
                            </div>

                            <div class="form-check mb-2 form-check-success">
                                <input class="form-check-input rounded-circle" type="radio" value="1" id="active"
                                    name="active" {{ $post->active == 1 ? 'checked=""' : '' }}>
                                <label class="form-check-label" for="active">Có</label>
                            </div>

                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật tin</button>
                        </div>
                        @csrf
                        </form>

                    </div>
                    <!-- end row-->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div>
@endsection
