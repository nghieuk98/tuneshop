@extends('layouts.app')

@section('title', 'shoptune')

@section('content')
<!-- Banner chính -->
<div id="mainCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
    <video width="w-100" height="568" playsinline loop autoplay muted>
        <source src="https://storage.googleapis.com/teko-gae.appspot.com/media/video/2024/1/26/cf5fedf5-fe5e-4455-afd4-581b1306fc66/Training_SS_24_Strength_global_Launch_GLP_Female_Masthead_d_9ba579436e.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ video.
    </video>
</div>
<div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
    <div class="caption-overlay">
        <h2 class="carousel-title">Bộ Sưu Tập Mùa Hè</h2>
        <p class="carousel-text">Khám phá những mẫu thiết kế mới nhất cho mùa hè.</p>
        <a href="{{ route('shop') }}" class="btn btn-shop">Mua ngay</a>
    </div>
</div>
       
  
</div>

<!-- Danh mục sản phẩm -->
<section class="mt-5">
    <h2 class="text-center">Danh mục sản phẩm</h2>
    <div class="row">
        <!-- Ví dụ về một danh mục -->
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
       
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/category1.jpg') }}" class="card-img-top" alt="Danh mục 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Áo Nam</h5>
                    <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sản phẩm nổi bật -->
<section class="mt-5">
    <h2 class="text-center">Sản phẩm nổi bật</h2>
    <div class="row">
        @foreach($featuredProducts as $product)
            <div class="col-md-3">
                <div class="card mb-4">
                   
::contentReference[oaicite:0]{index=0}
 
<img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-danger font-weight-bold">{{ number_format($product->price, 0, ',', '.') }} VND</p>
                        <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Ưu đãi đặc biệt -->
<section class="mt-5 bg-light p-5 text-center">
    <h2>Ưu đãi đặc biệt</h2>
    <p>Giảm ngay 20% cho đơn hàng đầu tiên khi đăng ký tài khoản.</p>
    <a href="{{ route('register') }}" class="btn btn-warning">Đăng ký ngay</a>
</section>

<!-- Phản hồi khách hàng -->
<section class="mt-5">
    <h2 class="text-center">Khách hàng nói gì về chúng tôi?</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="testimonial text-center">
                <img src="{{ asset('images/user1.jpg') }}" class="rounded-circle" width="80" height="80" alt="User 1">
                <p class="mt-3">"Chất lượng sản phẩm rất tốt, giao hàng nhanh."</p>
                <h5>- Nguyễn Văn A</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial text-center">
                <img src="{{ asset('images/user2.jpg') }}" class="rounded-circle" width="80" height="80" alt="User 2">
                <p class="mt-3">"Mình rất hài lòng với dịch vụ và chính sách đổi trả của shop."</p>
                <h5>- Trần Thị B</h5>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonial text-center">
                <img src="{{ asset('images/user3.jpg') }}" class="rounded-circle" width="80" height="80" alt="User 3">
                <p class="mt-3">"Mẫu mã đẹp, hợp thời trang, giá cả hợp lý."</p>
                <h5>- Lê Văn C</h5>
            </div>
        </div>
    </div>
</section>

<!-- Blog & tin tức -->
<section class="mt-5">
    <h2 class="text-center">Tin tức & Blog</h2>
    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('images/' . $blog->image) }}" class="card-img-top" alt="{{ $blog->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text">{{ Str::limit($blog->content, 100) }}</p>
                        <a href="{{ route('blog.detail', $blog->id) }}" class="btn btn-outline-secondary">Đọc thêm</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
