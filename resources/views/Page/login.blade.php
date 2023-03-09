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
                    <form action="" method="post">
                        <div class="name1">
                            <label for="firstname" class="first">First Name</label>
                            <input type="text" placeholder="Your first name" class="inputfirstname" required>
                        </div>
                        <div class="name2">
                            <label for="lastname" class="last">Last Name</label>
                            <input type="text" placeholder="Your last name" class="inputlastname" required>
                        </div>
                        <div class="email">
                            <label for="email" class="email">Email</label>
                            <input type="email" placeholder="Your email address" class="inputemail" required>
                        </div>
                        <div class="password">
                            <label for="password" class="password">Password</label>
                            <input type="password" placeholder="Your password" class="inputpassword" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
