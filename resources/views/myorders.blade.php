@extends('master')
@section('content')
    
<div class="container custom-cart">
    {{--  LIST CART --}}
    <section class="products mt-5 mb-5">
        <h2>
            <strong>Order List</strong>
            <a href="/" class="btn btn-dark float-right"><i class="fas fa-reply"></i> Back</a>
        </h2>
        <div class="row">
            @foreach ($orders as $product)                
                <div class="row cart-list-devider">
                    <div class="col-sm-3">
                        <a href="detail/{{$product->id}}">
                            <img src="{{ url('assets/images') }}/{{ $product->gallery }}" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-sm-5">
                        <br><br><br>
                        <div class="">
                            <h2><strong>{{ $product->name }}</strong></h2>
                            <h3>Price : Rp. {{ number_format($product->price) }}</h3>
                            <h5>Category : {{ $product->category }}</h5>
                            <h5>Details : {{ $product->description }}</h5>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <br><br><br><br><br>
                        <h5>Delivery Status : {{ $product->status }}</h5>
                        <h5>Address : {{ $product->address }}</h5>
                        <h5>Payment Status : {{ $product->payment_status }}</h5>
                        <h5>Payment Method : {{ $product->payment_method }}</h5>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection