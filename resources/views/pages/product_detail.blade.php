@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
<p>Giá: {{ number_format($product->price, 0, ',', '.') }} VND</p>
<p>Mô tả: {{ $product->description }}</p>
<a href="#">Thêm vào giỏ hàng</a>
@endsection
