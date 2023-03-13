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
            <div class="stats">
                <h1>Statistics</h1>
            </div>
            <div class="plate">
                <p>
                    <span class="label1">+ 120</span>
                    <span class="label2"> Plate Has</span>
                    <span class="label3">Recognized</span>
                </p>
            </div>
            <div class="type">
                <p>
                    <span class="label4">More than </span>
                    <span class="label5">10</span>
                    <span class="label6"> Type of Cars</span>
                </p>
            </div>
        </div>
        <div class="about">
            ABOUT PLATE ID RECOGNIZE
        </div>
        <div class="about-content">
            PlateID is a powerful online platform for license plate recognition. With PlateID, you
            can easily identify
            license plates and retrieve important information about the vehicle and its owner. Our website is designed
            to be
            user-friendly and intuitive, making it easy for you to quickly and accurately recognize license plates.
            Whether
            you&#39;re a law enforcement officer, parking attendant, or just a concerned citizen, PlateID has the tools
            you
            need to get the job done.
        </div>
        <div class="vector">
            <img src="img/vector1.png" alt="" class="a">
            <img src="img/vector2.png" alt="" class="b">
        </div>
    </section>
@endsection
