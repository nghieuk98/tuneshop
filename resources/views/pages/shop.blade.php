@extends('layouts.app')

@section('content')
<h1>Cửa hàng</h1>
<div class="products">
    @foreach($products as $product)
        <div class="product">
            <a href="{{ route('product.detail', $product->id) }}">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ number_format($product->price, 0, ',', '.') }} VND</p>
            </a>
        </div>
    @endforeach
</div>
@endsection
