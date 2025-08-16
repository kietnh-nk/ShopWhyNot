@extends('fontend.home.layout')

@section('title', 'Trang chủ')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold">Chào mừng đến với cửa hàng của chúng tôi</h1>
        <p class="lead text-muted">
            Đây là trang chủ demo. Hiện tại chưa hiển thị sản phẩm, banner hay thương hiệu.
        </p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4 text-center mb-4">
            <h4>Giới thiệu</h4>
            <p>Một vài thông tin cơ bản về cửa hàng, sản phẩm và dịch vụ.</p>
        </div>
        <div class="col-md-4 text-center mb-4">
            <h4>Liên hệ</h4>
            {{-- <p>Bạn có thể <a href="{{ route('contact') }}">liên hệ với chúng tôi</a> để biết thêm chi tiết.</p> --}}
        </div>
        <div class="col-md-4 text-center mb-4">
            <h4>FAQ</h4>
            {{-- <p>Xem các câu hỏi thường gặp trong phần <a href="{{ route('faq') }}">FAQ</a>.</p> --}}
        </div>
    </div>
</div>
@endsection
