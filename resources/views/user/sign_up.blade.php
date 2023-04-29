@extends('user.layout.app')

@section('content')

<body>
    <!-- top Products -->
    <section class="banner-bottom-wthreelayouts py-lg-5 py-3">
        <div class="container">
            <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Sign Up</h3>
            <div class="inner_sec">
                <p class="sub text-center mb-lg-5 mb-3">We love to join us</p>
                <div class="contact_grid_right">
                    
                    <form action="{{url('register')}}" method="post">
                        @csrf
                        <div class="row contact_left_grid">
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input class="form-control" type="text" name="first_name" value="{{old('first_name')}}"
                                        required="">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Email</label>
                                    <input class="form-control" type="email" name="email" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input class="form-control" type="text" name="last_name" value="{{old('last_name')}}">
                                </div>
                                <div class="form-group">
                                    <label class="my-2">Phone</label>
                                    <input class="form-control" type="tel" name="phone" value="{{old('phone')}}">
                                </div>
                            </div>
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label class="my-2">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder=""
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <label class="my-2">Confirm Password</label>
                                    <input class="form-control" type="password" name="confirm_password" placeholder=""
                                        required="">
                                </div>
                            </div>
                            <div class="col-md-12 con-right">
                                <input class="form-control" style="background-color: #ff4e00; color:#fff" type="submit"
                                    value="Submit">
                            </div>
                            <div class="col-md-6 con-left">
                                <div class="form-group">
                                    <p style="font-size: 15px; font-weight: 600;">if you have account ? <span><a
                                                href="{{url('/login')}}" style="color: #ff4e00">login</a></span> </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    @endsection