@extends('admin.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Tiêu đề bài viết</th>
                                <th>Hình ảnh</th>
                                <th>Ngày đăng</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
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
                                <td>{{ $post->created_at->format('d-m-Y') }}</td>
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
                        </tbody>
                    </table>
                </div>
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
