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
                                    <input type="text" class="form-control" name="key"
                                        placeholder="Tìm kiếm bình luận...">
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
                                    <th>Người bình luận</th>
                                    <th>Nội dung bình luận</th>
                                    <th>Bài viết</th>
                                    <th>Ngày đăng</th>
                                    <th style="width: 82px;">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    <tr>
                                        <td>{{ $comment->user ? $comment->user->name : 'Người dùng ẩn danh' }}</td>
                                        <td
                                            style="
                                max-width: 300px; 
                                overflow-wrap: break-word;
                                white-space: normal;
                            ">
                                            {{ $comment->content }}</td>
                                            <td>
                                                @if ($comment->post)
                                                <a href="{{ route('posts.show', [$comment->post->id, \Str::slug($comment->post->title)]) }}">
                                                    {{ $comment->post->title }}
                                                </a>
                                            @else
                                                Bài viết không tồn tại
                                            @endif
                                            </td>
                                        <td>{{ $comment->created_at->format('d/m/Y H:i') }}</td>
                                        <td>
                                            <a class="btn btn-danger btn-sm" href="#"
                                                onclick="confirmDelete(event, {{ $comment->id }});">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <form id="delete-form-{{ $comment->id }}"
                                                action="{{ route('comments.destroy', $comment->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>

                                        <script>
                                            function confirmDelete(event, commentId) {
                                                event.preventDefault();
                                                if (confirm('Bạn có chắc chắn muốn xóa bình luận này không?')) {
                                                    document.getElementById('delete-form-' + commentId).submit();
                                                }
                                            }
                                        </script>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Hiển thị phân trang --}}
                        {{ $comments->links() }}
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection
