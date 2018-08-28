@extends('front-end.master')

@section('title')
    Product Details
@endsection


@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>New Customer Login</span></h3>
        </div>
    </div>

    <div class="content">

        <div class="single-wl3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="text-center text-success">Login</h3>
                        <br/>

                        <h3 class="text-center text-danger">{{Session::get('message')}}</h3>
                        <br/>

                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input type="email" name="email" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn" class="btn btn-block btn-success" value="Sign-In"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6">
                        <h3 class="text-center text-success">Crete an account</h3>
                        <br/>
                        <form action="" method="post">
                            <div class="form-group">
                                <label class="col-form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input type="email" name="email" class="form-control"/>
                                <span class="text-danger">{{$errors->has('email') ? $errors -> first('email') : ' '}}</span>

                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input type="password" name="password" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Phone Number</label>
                                <input type="number" name="phone_number" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Address</label>
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn" class="btn btn-block btn-success" value="Sign-Up"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection