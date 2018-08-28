@extends('front-end.master')

@section('title')
    Product Details
@endsection


@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Shipping</span></h3>
        </div>
    </div>
    <div class="content">
        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 well">
                        <h3 class="text-center text-success">Dear {{Session::get('customerName')}}. You have to give us
                            product payment info</h3>
                        <br/>
                    </div>
                    <div class="col-sm-12">
                        <h3 class="text-center text-success">Shipping info goes here...</h3>
                        <br/>
                        <form action="{{route('new-order')}}" method="post">
                           @csrf
                            <table class="table table-bordered">
                                <tr>
                                    <th>Cash On Delivery</th>
                                    <td><input type="radio" checked name="payment_type" value="cash"/> Cash On Delivery</td>
                                </tr>
                                <tr>
                                    <th>Paypal</th>
                                    <td><input type="radio" name="payment_type" value="paypal"/> Paypal</td>
                                </tr>
                                <tr>
                                    <th>Bkash</th>
                                    <td><input type="radio" name="payment_type" value="bkash"/> Bkash</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td><input type="submit" name="btn" value="Confirm Order"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection