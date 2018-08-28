<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Shipping;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Mail;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('front-end.checkout.checkout-content');
    }

    public function customerSignUp(Request $request)
    {

        $this->validate($request, [
            'email' => 'email|unique:customers,email'
        ]);

        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->save();

        $customerId = $customer->id;
        $customerName = $customer->first_name . ' ' . $customer->last_name;
        Session::put('customerId', $customerId);
        Session::put('customerName', $customerName);
        $data = $customer->toArray();
        Mail::send('front-end.mails.confirmation-mail', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->subject('confirmation-mail');
        });


        return redirect('/checkout/shipping');


    }

    public function customerSignIn(Request $request)
    {
        $userEmail = $request->email;
        $userPassword = $request->password;
        $customer = Customer::where('email', $userEmail)->first();
        if ($customer) {
            if (password_verify($userPassword, $customer->password)){
                $customerId = $customer->id;
                $customerName = $customer->first_name . ' ' . $customer->last_name;
                Session::put('customerId', $customerId);
                Session::put('customerName', $customerName);
                return redirect('/checkout/shipping');
            }else{
                return redirect('/checkout')->with('message','Please Enter valid Password');
            }
        } else {
            return redirect('/checkout')->with('message','Please Enter valid email');
        }


    }

    public function shippingForm()
    {
        $customer = Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping', [
            'customer' => $customer
        ]);
    }

    public function customerShippingInfo(Request $request)
    {
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email = $request->email;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();
        Session::put('shippingId', $shipping->id);
        return redirect('/checkout/payment');
    }

    public function paymentForm()
    {
        return view('front-end.checkout.payment');
    }

    public function newOrder(Request $request)
    {
        $paymentType = $request->payment_type;

        if ($paymentType === 'cash') {
            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('grandTotal');
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();

            $cartProducts = Cart::content();

            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();
            return redirect('/complete/order');

        } else if ($paymentType === 'paypal') {

        } else if ($paymentType === 'bkash') {

        }
    }

    public function compliteOrder()
    {
        return 'success';
    }

    public function customerLogout(){
        Session::forget('customerId');
        Session::forget('customerName');
        return redirect('/');
    }

    public function newCustomerLogin(){
        return view('front-end.customer.customer-login');
    }

}
