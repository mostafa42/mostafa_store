@extends('user.layout.app')

@section('content')

<body>
    <!-- top Products -->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Login</h3>
            <div class="inner_sec">
                <p class="sub text-center mb-lg-5 mb-3">We love to join us</p>
                <div class="contact_grid_right">
                    <form action="{{url('sign-in')}}" method="post">
                        @csrf
                        <div class="row contact_left_grid">
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Password</label>
                                    <input class="form-control" type="text" name="password" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <a href="" style="color: #ff4e00; font-weight: bold">Forget Password ?</a>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" style="background-color: #ff4e00; color:#fff"
                                        type="submit" value="Submit">
                                </div>
                            </div>
                            <div class="col-md-6 con-right">
                                <div class="form-group">
                                    <h1> Create New Account </h1>
                                </div>
                                <div class="form-group">
                                    <p>In our store you will find all the products you are looking for and it will be
                                        easy to access the products , easy for payment with visa and cash</p>
                                </div>
                                <div class="form-group">
                                    <p>We would be proud to have you join us</p>
                                </div>
                                <div class="form-group">
                                    <p>you will find yourself having all the possibilities to buy any product</p>
                                </div>
                                <div class="form-group">
                                    <a href="{{url('sign-up')}}" class="form-control" style="background-color: #ff4e00; color:#fff; text-align: center">
                                        Sign Up
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endsection