@extends('master')
@section('content')
    
<div class="container custom-search">
    {{--  LIST PRODUCT  --}}
    <section class="products mt-5 mb-5">
        <h2>
            <strong>Resault for Product</strong>
            <a href="/" class="btn btn-dark float-right"><i class="fas fa-reply"></i> Back</a>
        </h2>
        <div class="row mt-4">
            @foreach ($products as $product)                
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/images') }}/{{ $product->gallery }}" class="img-fluid">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5> <strong> {{ $product->name }} </strong> </h5>
                                    <h5> Rp. {{ number_format($product->price) }} </h5>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="detail/{{$product['id']}}" class="btn btn-dark btn-block">
                                        <i class="fa fa-eye"></i>
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>
@endsection