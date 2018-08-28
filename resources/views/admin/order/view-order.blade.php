@extends('admin.master')
@section('body')
    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Order Details Info For This Order</h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Order No</th>
                            <th>{{$order -> id}}</th>
                        </tr>
                        <tr>
                            <th>Order Total</th>
                            <th>TK. {{$order->order_total}}</th>
                        </tr>
                        <tr>
                            <th>Order Status</th>
                            <th>{{$order->order_status}}</th>
                        </tr>
                        <tr>
                            <th>Order Date</th>
                            <th>{{$order->created_at}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Customer Info For This Order</h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Customer Name</th>
                            <th>{{$customer->first_name.' '. $customer->last_name}}</th>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <th>{{$customer->phone_number}}</th>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <th>{{$customer->email}}</th>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>{{$customer->address}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Shipping Info For This Order</h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Full Name</th>
                            <th>{{$shipping->full_name}}</th>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <th>{{$shipping->phone_number}}</th>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <th>{{$shipping->email}}</th>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <th>{{$shipping->address}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Payment Info For This Order</h3>
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <th>Payment Type</th>
                            <th>{{$payment->payment_type}}</th>
                        </tr>
                        <tr>
                            <th>payment Status</th>
                            <th>{{$payment->payment_status}}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success">Product Info For This Order</h3>
                    <table class="table table-bordered table-responsive">
                        <tr class="bg-success">
                            <th>SL NO</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Product Image</th>
                            <th>Total Price</th>
                        </tr>
                        @php($i =1)
                        @foreach($orderDetails as $orderDetail)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$orderDetail->product_id}}</td>
                                <td>{{$orderDetail->product_name}}</td>
                                <td>TK. {{$orderDetail->product_price}}</td>
                                <td>{{$orderDetail->product_quantity}}</td>
                                <td>
                                    <img src="{{asset($orderDetail->product_image)}}" align="" width="50" height="50">
                                </td>
                                <td>TK. {{$orderDetail->product_price * $orderDetail->product_quantity}}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection