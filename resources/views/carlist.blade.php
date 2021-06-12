@extends('master')
@section('content')
    
<div class="container custom-cart">
    {{--  LIST CART --}}
    <section class="products mt-5 mb-5">
        <h2>
            <strong>Cart List</strong>
            <a href="ordernow" class="btn btn-success float-right"><i class="fas fa-dollar-sign"></i> Pay Now</a>
        </h2>
        <div class="row">
            @foreach ($products as $product)                
                <div class="row cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$product->id}}">
                            <img src="{{ url('assets/images') }}/{{ $product->gallery }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <br><br><br>
                        <div class="">
                            <h2><strong>{{ $product->name }}</strong></h2>
                            <h3>Price : Rp. {{ number_format($product->price) }}</h3>
                            <h5>Category : {{ $product->category }}</h5>
                            <h5>Details : {{ $product->description }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <br><br><br><br><br><br>
                        <a href="/removecart/{{$product->cart_id}}" type="submit" class="btn btn-dark float-right"><i class="fas fa-trash"></i> Remove to Cart</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection