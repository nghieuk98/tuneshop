<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shop Quần Áo')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Shop Quần Áo</h1>
        <nav>
            <a href="/">Trang chủ</a>
            <a href="/shop">Cửa hàng</a>
            <a href="/contact">Liên hệ</a>
            <a href="/about">Giới thiệu</a>
        </nav>
    </header>
    <main>
        @yield('content') <!-- Đây là nơi hiển thị nội dung từng trang -->
    </main>
</body>
</html>
