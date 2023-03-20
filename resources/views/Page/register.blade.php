@extends('Main/app')
@section('konten')
    <section id="login" class="login">
        <div data-aos="zoom-out">
            <div class=" row justify-content-center">
                <div class="col-lg-6 col-md-12 img-login" data-aos="fade-up" data-aos-delay="100">
                    <div class="rectangle"></div>
                    <div class="herotext">
                        <div class="textblock">
                            Vehicle license plate recognition for everything
                        </div>
                        <div class="textblock2">
                            <p></p>
                        </div>
                    </div>
                    <div class="minitext">
                        get to know everything clarify everything
                    </div>
                    <div class="logo">
                        <div class="icon">
                            <img src="img/logo.png" alt="">
                        </div>
                    </div>
                    <div class="logo-name">
                        <h1>PLATEID</h1>
                        <h1 class="register-text">Register</h1>
                    </div>
                    <form action="/register/submit" method="POST">
                        @csrf
                        <div class="name1">
                            <label for="firstname" class="first">First Name</label>
                            <input type="text" placeholder="Your first name" name="firstname" class="inputfirstname"
                                required value="{{ Session::get('firstname') }}">
                        </div>
                        <div class="name2">
                            <label for="lastname" class="last">Last Name</label>
                            <input type="text" placeholder="Your last name" name="lastname" class="inputlastname"
                                required value="{{ Session::get('lastname') }}">
                        </div>
                        <div class="email">
                            <label for="email" class="email">Email</label>
                            <input type="email" placeholder="Your email address" name="email" class="inputemail"
                                required value="{{ Session::get('email') }}">
                        </div>
                        <div class="password">
                            <label for="password" class="password">Password</label>
                            <input type="password" placeholder="Your password" name="password" class="inputpassword"
                                required>
                        </div>
                        <div class="switch-label">
                            <label class="switch">
                                <input type="checkbox" required>
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="term">
                            <p class="labelwrapper">
                                <span class="label1">I accept the</span>
                                <span class="label2">Term of Service</span>
                                <span class="label3"> as well as </span>
                                <span class="label4">Privacy Policy</span>
                            </p>
                        </div>
                        <div class="submit">
                            <button class="button" name="submit" type="submit">
                                <h5>Create Account</h5>
                            </button>
                        </div>
                        <div class="imgcreate">
                            <img src="img/create.png" alt="">
                        </div>
                    </form>
                    <div class="line">
                        <img src="img/line.png" alt="">
                    </div>
                    <div class="login">
                        <p class="labelwrapper2">
                            <span class="label5">Already have an account ?</span>
                            <a href="/login" class="label6"> Login Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
