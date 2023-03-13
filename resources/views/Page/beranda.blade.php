@extends('Main/app')
@section('konten')
    <section class="beranda clapyResets">
        <div class="navbar">
            <div class="logoplate">
                PlateID
            </div>
            <div class="menu">
                <div class="Home">Home</div>
                <div class="Account">Account</div>
                <div class="Contact">Contact</div>
            </div>
            <div class="masuk">
                <a href="/login" class="textlogin">Login</a>
            </div>
            <div class="register">
                <a href="/register" class="textregister">Register</a>
            </div>
        </div>
        <div class="texthero">
            <div class="title">VEHICLE LICENSE PLATE RECOGNITION</div>
            <div class="text">EASY, ACCURATE AND USEFULL</div>
            <div class="desc">
                <p> PlateID is a software that can track and analysis your plate picture in a fast, accurate and easy way. a
                    solution of any problem in search of vehicle data and status. Make to minimize criminalizm in traffic
                </p>
                <div class="image">
                    <img src="img/line2.png" alt="">
                </div>
            </div>
            <div class="learn">
                <a href="">Learn More</a>
                <a href=""><img src="img/arrow.png" alt=""></a>
            </div>
            <div class="imagecar">
            </div>
        </div>
    </section>
@endsection
