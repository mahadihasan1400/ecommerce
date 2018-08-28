<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
</head>
<body>
<h3>Shipping Info</h3>
<table border="1">
    <tr>
        <th>Customer name</th>
        <td>{{$shipping->full_name}}</td>
    </tr>
    <tr>
        <th>Customer Address</th>
        <td>{{$shipping->full_name}}</td>
    </tr>
    <tr>
        <th>Customer Phone Number</th>
        <td>{{$shipping->phone_number}}</td>
    </tr>
</table>

<h3>Billing Info</h3>
<table border="1">
    <tr>
        <th>Customer name</th>
        <td>{{$customer->first_name.' '.$customer->last_name}}</td>
    </tr>
    <tr>
        <th>Customer Address</th>
        <td>{{$customer->address}}</td>
    </tr>
    <tr>
        <th>Customer Phone Number</th>
        <td>{{$customer->phone_number}}</td>
    </tr>
</table>
<h3>Invoice Info</h3>
<table border="1">
    <tr>
        <th><span>Invoice #</span></th>
        <td><span>0000{{$order->id}}</span></td>
    </tr>
    <tr>
        <th><span>Date</span></th>
        <td><span>{{$order->created_at}}</span></td>
    </tr>
    <tr>
        <th><span>Amount Due</span></th>
        <td><span id="prefix">TK.</span><span>{{$order->order_total}}</span></td>
    </tr>
</table>
<h3>Product Info</h3>
<table border="1">
    <thead>
    <tr>
        <th><span>Item</span></th>
        <th><span>Description</span></th>
        <th><span>Rate</span></th>
        <th><span>Quantity</span></th>
        <th><span>Total Price</span></th>
    </tr>
    </thead>
    <tbody>
    @foreach($orderDetails as $orderDetail)
        <tr>
            <td><span>{{$orderDetail->product_name}}</span></td>
            <td><span>Experience Review</span></td>
            <td><span data-prefix>TK.</span><span>{{$orderDetail->product_price}}</span></td>
            <td><span>{{$orderDetail->product_quantity}}</span></td>
            <td>
                <span data-prefix>TK.</span><span>{{$orderDetail->product_price *$orderDetail->product_quantity}}</span>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<h3>Amount Info</h3>
<table border="1">
    <tr>
        <th><span>Total</span></th>
        <td><span data-prefix>$</span><span>{{$order->order_total}}</span></td>
    </tr>
</table>

{{--<header>--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-12">--}}
            {{--<h1 class="text-warning">Invoice</h1>--}}
        {{--</div>--}}
        {{--<div class="col-md-12">--}}
            {{--<h4 style="margin: 0;padding: 0;font-weight: 500;margin-bottom: 5px">Shipping Info</h4>--}}
            {{--<address>--}}
                {{--<p>{{$shipping->full_name}}</p>--}}
                {{--<p>{{$shipping->address}}</p>--}}
                {{--<p>{{$shipping->phone_number}}</p>--}}
            {{--</address>--}}
            {{--<span><img alt="" src="{{asset('/')}}admin/images/logo.png"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<h4 style="margin: 0;padding: 0;font-weight: 500;margin-bottom: 5px">Billing Info</h4>--}}
    {{--<address>--}}
        {{--<p>{{$customer->first_name.' '.$customer->last_name}}</p>--}}
        {{--<p>{{$customer->address}}</p>--}}
        {{--<p>{{$customer->phone_number}}</p>--}}
    {{--</address>--}}

{{--</header>--}}
{{--<article>--}}
    {{--<h1>Recipient</h1>--}}
    {{--<address>--}}
        {{--<p>Some Company<br>c/o Some Guy</p>--}}
    {{--</address>--}}
    {{--<table class="meta">--}}
        {{--<tr>--}}
            {{--<th><span>Invoice #</span></th>--}}
            {{--<td><span>0000{{$order->id}}</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th><span>Date</span></th>--}}
            {{--<td><span>{{$order->created_at}}</span></td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<th><span>Amount Due</span></th>--}}
            {{--<td><span id="prefix">TK.</span><span>{{$order->order_total}}</span></td>--}}
        {{--</tr>--}}
    {{--</table>--}}
    {{--<table class="inventory">--}}
        {{--<thead>--}}
        {{--<tr>--}}
            {{--<th><span>Item</span></th>--}}
            {{--<th><span>Description</span></th>--}}
            {{--<th><span>Rate</span></th>--}}
            {{--<th><span>Quantity</span></th>--}}
            {{--<th><span>Total Price</span></th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}
        {{--@foreach($orderDetails as $orderDetail)--}}
            {{--<tr>--}}
                {{--<td><span>{{$orderDetail->product_name}}</span></td>--}}
                {{--<td><span>Experience Review</span></td>--}}
                {{--<td><span data-prefix>TK.</span><span>{{$orderDetail->product_price}}</span></td>--}}
                {{--<td><span>{{$orderDetail->product_quantity}}</span></td>--}}
                {{--<td>--}}
                    {{--<span data-prefix>TK.</span><span>{{$orderDetail->product_price *$orderDetail->product_quantity}}</span>--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
    {{--</table>--}}

    {{--<table class="balance">--}}
        {{--<tr>--}}
            {{--<th><span>Total</span></th>--}}
            {{--<td><span data-prefix>$</span><span>{{$order->order_total}}</span></td>--}}
        {{--</tr>--}}
    {{--</table>--}}
{{--</article>--}}
{{--<aside>--}}
    {{--<h1><span>Additional Notes</span></h1>--}}
    {{--<div>--}}
        {{--<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>--}}
    {{--</div>--}}
{{--</aside>--}}
</body>
</html>