@extends('layouts.app')

@section('content')
<div class="auth-container">
    <h2>Đăng Ký</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group">
            <input type="text" name="name" placeholder="Họ tên" required>
        </div>
        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Mật khẩu" required>
        </div>
        <button type="submit" class="btn-auth">Đăng Ký</button>
    </form>
    <p>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>
</div>
@endsection
