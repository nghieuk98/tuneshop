<header class="custom-header">
    <div class="container">
        <div class="header-top">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('https://scontent.fhan2-5.fna.fbcdn.net/v/t39.30808-6/472126941_602857722117538_9139638832216550688_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFRyUsPf3A5kZCF31u-FsSxz8Xsh_3WCajPxeyH_dYJqIoj_YFMf8m0Pz2a1eVwNRhz_0i-kd9eZF69pT8V6m2z&_nc_ohc=hSDJgVTuYZEQ7kNvgHm_mUa&_nc_oc=Adg-TjxBqphL9v9bEDdyHop_R_m8b-6uVIAwyDvwE1tt8dVmOSKgF95NX_KLIEjDVpU-YeaqCQjJ7yc1LwB3GCxb&_nc_zt=23&_nc_ht=scontent.fhan2-5.fna&_nc_gid=A2NnZbV9-cpTtFFr2457aIa&oh=00_AYC9MfxuSo6jINGP1cUYOAVJW9UP7EMA0GvJSYgofsLV_Q&oe=67BDDB43') }}" alt="Logo">
            </a>

            <!-- Thanh tìm kiếm -->
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm sản phẩm...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>

            <!-- Biểu tượng giỏ hàng & tài khoản -->
            <div class="header-icons">
                <a href="{{ route('cart') }}" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">2</span> <!-- Số lượng sản phẩm trong giỏ -->
                </a>
                <a href="{{ route('profile') }}" class="user-icon">
                    <i class="fas fa-user"></i>
                </a>
            </div>
            @if(Auth::check())
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn-header">Đăng Xuất</button>
    </form>
@else
    <a href="{{ route('login') }}" class="btn-header">Đăng Nhập</a>
    <a href="{{ route('register') }}" class="btn-header btn-register">Đăng Ký</a>
@endif


        </div>

        <!-- Menu điều hướng -->
        <nav class="navbar">
            <ul>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li><a href="{{ route('shop') }}">Cửa hàng</a></li>
                <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </nav>
    </div>
</header>
