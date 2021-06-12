@extends('master')
@section('content')
    
<div class="container custom-cart">
    {{--  LIST CART --}}
    <section class="products mt-5 mb-5">
        <h2>
            <strong>Payment</strong>
            <a href="/" class="btn btn-dark float-right"><i class="fas fa-reply"></i> Back</a>

        </h2>
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>Rp. {{number_format($total)}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rp. 0</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>Rp. 20,000</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>Rp. {{number_format($total+20000)}}</td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="mb-3">
                        <h4>Address :</h4>
                        <input type="text" name="address" class="form-control" placeholder="enter your address . . ." required="required"> </input>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Payment Method</label> <br><br>
                        <input type="radio" value="PayPal" name="payment"> <i class="fab fa-paypal"></i> <span>PayPal</span> <br><br>
                        <input type="radio" value="Master Card" name="payment"> <i class="fab fa-cc-mastercard"></i> <span>Master Card</span> <br><br>
                        <input type="radio" value="Cash" name="payment"> <i class="fas fa-truck"></i> <span>Payment on Delivery</span> <br><br>
                    </div>
                    <button type="submit" class="btn btn-dark"><i class="fas fa-dollar-sign"></i> Order Now</button>
                </form>
            </div>
    </section>

</div>
@endsection