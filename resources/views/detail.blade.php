@extends('master')
@section('content')
    
<div class="container custom-detail">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ url('assets/images') }}/{{ $product->gallery }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/" class="btn btn-dark float-right"><i class="fas fa-reply"></i> Back</a>
            <br>
            <h2><strong>{{ $product->name }}</strong></h2>
            <h3>Price : Rp. {{ number_format($product->price) }}</h3>
            <h5>Category : {{ $product->category }}</h5>
            <h5>Details : {{ $product->description }}</h5>
            <br><br>

            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button class="btn btn-dark btn-block">
                    <i class="fas fa-shopping-cart"></i>
                    +Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
@endsection