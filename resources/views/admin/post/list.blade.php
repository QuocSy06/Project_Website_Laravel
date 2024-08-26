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
                                <input type="text" class="form-control" name="key" placeholder="Tìm kiếm bài viết...">
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
                                <th>Tiêu đề bài viết</th>
                                <th>Danh mục</th>
                                <th>Hình ảnh</th>
                                <th>Lượt xem</th>
                                <th>Ngày đăng</th>
                                <th>Trạng thái</th>
                                <th style="width: 82px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $key => $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td style="
                                max-width: 300px; 
                                overflow-wrap: break-word;
                                white-space: normal;
                            ">{{ $post->title }}</td>
                                <td>{{ $post->menu->name }}</td>
                                <td>
                                    <img src="{{ asset($post->thumb) }}" alt="{{ $post->name }}" style="
                                        width: 50px; 
                                        height: 50px;
                                        object-fit: cover; 
                                        border-radius: 5px; 
                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
                                        transition: transform 0.3s ease-in-out; 
                                    " onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';" onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)';">
                                </td>
                                <td><i class="fa-regular fa-eye"></i> {{ $post->views }}</td>
                                <td>{{ $post->updated_at }}</td>
                                <td>{!! \App\Helpers\Helper::active($post->active) !!}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="/admin/posts/edit/{{ $post->id }}">
                                        <i class="fas fa-edit"></i> 
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" 
                                        onclick="removeRow({{ $post->id }}, '/admin/posts/destroy')">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            
                            {!! $posts->links() !!}
                        </tbody>
                    </table>
                </div>

                

                {{-- <ul class="pagination pagination-rounded justify-content-end my-2">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </li>
                </ul> --}}
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col -->
</div>
@endsection