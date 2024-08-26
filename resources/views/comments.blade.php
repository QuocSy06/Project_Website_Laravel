<div class="comments-wrap">
    <h3 class="comments-wrap-title">
        {{ $post->comments->count() }} Bình luận
    </h3>
    <div class="latest-comments">
        <ul class="list-wrap">
            @if ($post->comments && $post->comments->count() > 0)
            <ul id="comments-list" class="list-wrap">
                @foreach ($post->comments as $comment)
                    <li>
                        <div class="comments-box">
                            <div class="comments-avatar">
                                <img src="{{ asset('/template/assets/img/User-avatar.png') }}" alt="img">
                            </div>
                            <div class="comments-text">
                                <div class="avatar-name">
                                    <h6 class="name">{{ $comment->user ? $comment->user->name : 'Người dùng ẩn danh' }}</h6>
                                    <span class="date">{{ $comment->created_at->locale('vi')->diffForHumans() }}</span>
                                </div>
                                <p>{{ $comment->content }}</p>
                                {{-- <a href="#" class="reply-btn" data-comment-id="{{ $comment->id }}">Trả lời</a> --}}
                                <!-- Phần trả lời sẽ được hiển thị ở đây -->
                            </div>
                        </div>
                        {{-- <ul class="children">
                            @if ($comment->replies && $comment->replies->count() > 0)
                                @foreach ($comment->replies as $reply)
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="{{ asset('/template/assets/img/User-avatar.png') }}" alt="img">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h6 class="name">{{ $reply->user ? $reply->user->name : 'Người dùng ẩn danh' }}</h6>
                                                    <span class="date" style="margin-left:-45px">{{ $reply->created_at->locale('vi')->translatedFormat('d F, Y') }}</span>
                                                </div>
                                                <p>{{ $reply->content }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <p></p>
                            @endif
                        </ul> --}}
                    </li>
                @endforeach
            </ul>
            @else
                <p>Chưa có bình luận nào.</p>
            @endif
        </ul>
    </div>
</div>

<div class="comment-respond">
    <h3 class="comment-reply-title">Gửi bình luận</h3>
    @if (Auth::check())
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="comment-form" class="comment-form">
            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">
            <div class="form-grp">
                <textarea name="content" placeholder="Ý kiến của bạn"></textarea>
            </div>
            <button type="submit" class="btn btn-two">Gửi bình luận</button>
        </form>
    @else
        <p class="comment-notes text-danger">
            Vui lòng <a href="{{ route('login') }}">đăng nhập</a> hoặc <a href="{{ route('register') }}">đăng ký</a> để gửi bình luận *
        </p>
    @endif
</div>

<!-- Trả lời bình luận -->
{{-- <script>
    document.querySelectorAll('.reply-btn').forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const commentId = event.target.getAttribute('data-comment-id');
            const replyForm = document.createElement('form');
            replyForm.method = 'POST';
            replyForm.action = '{{ route('comments.reply') }}';
            replyForm.innerHTML = `
                @csrf
                <input type="hidden" name="comment_id" value="${commentId}">
                <div class="form-grp">
                    <textarea name="content" placeholder="Trả lời của bạn"></textarea>
                </div>
                <button type="submit" class="btn btn-two">Gửi trả lời</button>
            `;
            event.target.parentElement.appendChild(replyForm);
        });
    });
</script> --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $('#comment-form').on('submit', function(event) {
        event.preventDefault(); // Ngăn chặn gửi form mặc định

        $.ajax({
            url: '{{ route('comments.store') }}',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    // Hiển thị thông báo thành công
                    alertify.success(response.success);

                    // Thêm bình luận mới vào đầu danh sách bình luận
                    $('#comments-list').prepend(`
                        <li>
                            <div class="comments-box">
                                <div class="comments-avatar">
                                    <img src="{{ asset('/template/assets/img/User-avatar.png') }}" alt="img">
                                </div>
                                <div class="comments-text">
                                    <div class="avatar-name">
                                        <h6 class="name">{{ Auth::user()->name }}</h6>
                                        <span class="date">Vừa xong</span>
                                    </div>
                                    <p>${response.comment.content}</p>
                                </div>
                            </div>
                        </li>
                    `);

                    // Xóa nội dung trong form
                    $('#comment-form')[0].reset();
                }
            },
            error: function(xhr) {
                var error = xhr.responseJSON;
                if (xhr.status === 401) {
                    alertify.error(error.error);
                } else {
                    alertify.error('Đã xảy ra lỗi, vui lòng thử lại.');
                }
            }
        });
    });
});


</script>


