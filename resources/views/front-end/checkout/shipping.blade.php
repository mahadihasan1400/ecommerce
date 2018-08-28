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
                            product shipping info to complete your order. If your billing info and shipping info are same then just press on save shipping info></h3>
                        <br/>
                    </div>
                    <div class="col-sm-12">
                        <h3 class="text-center text-success">Shipping info goes here...</h3>
                        <br/>
                        <form action="{{route('customer-shipping-info')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="col-form-label">Full Name</label>
                                <input type="text" name="full_name" class="form-control"
                                       value="{{Session::get('customerName')}}"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input type="email" name="email" class="form-control"
                                       value="{{$customer -> email}}"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Phone Number</label>
                                <input type="number" name="phone_number" class="form-control" value="{{ $customer -> phone_number}}"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Address</label>
                                <textarea class="form-control" name="address">{{$customer ->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn" class="btn btn-block btn-success"
                                       value="Save Shipping Info"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection