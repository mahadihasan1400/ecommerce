@extends('front-end.master')

@section('title')
    Product Details
@endsection


@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Show Cart</span></h3>
        </div>
    </div>

    <div class="content">

        <div class="single-wl3">
            <div class="container">

                <div class="row">
                    <div class="col-md-11 col-md-offset-1">
                        <h3 class="text-center text-success">MY SHOPPING CART</h3>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr class="bg-primary">
                                    <th>SL NO</th>
                                    <th>NAME</th>
                                    <th>IMAGE</th>
                                    <th>PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>TOTAL PRICE</th>
                                    <th>ACTION</th>
                                </tr>
                                @php($i = 1)
                                @php($sum = 0)
                                @foreach($cartProducts as $cartProduct)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$cartProduct -> name}}</td>
                                        <td><img src="{{asset($cartProduct -> options -> image)}}" alt="" height="50" width="100"></td>
                                        <td>TK. {{$cartProduct -> price}}</td>
                                        <td>
                                            <form action="{{route('update-cart')}}" method="POST">
                                               @csrf
                                                <input type="number" name="qty" value="{{$cartProduct -> qty}}" min="1"/>
                                                <input type="hidden" name="cartId" value="{{$cartProduct -> rowId}}" min="1"/>
                                                <input type="submit" name="btn" value="Update"/>
                                            </form>
                                        </td>
                                        <td>TK. {{$total = $cartProduct -> qty * $cartProduct -> price}}</td>
                                        <td>
                                            <a href="{{route('delete-cart-item',['cartId' => $cartProduct -> rowId])}}" class="btn btn-danger btn-xs">
                                                <span class="glyphicon glyphicon-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $sum = $sum + $total ?>
                                @endforeach
                            </table>
                            <hr/>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Item Total (TK. )</th>
                                    <td>TK. {{$sum}}</td>
                                </tr>
                                <tr>
                                    <th>Vat Total (TK. )</th>
                                    <td>TK. {{$vat = 0}}</td>
                                </tr>
                                <tr>
                                    <th>Grand Total (TK. )</th>
                                    <td>TK. {{$grandTotal =$vat + $sum}}</td>
                                    {{Session::put('grandTotal', $grandTotal)}}
                                </tr>
                            </table>
                        </div>

                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <a href="{{route('checkout')}}" class="btn btn-success pull-right">CheckOut</a>
                                <a href="" class="btn btn-success">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection