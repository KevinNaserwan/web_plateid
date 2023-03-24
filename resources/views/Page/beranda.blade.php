@extends('Main/app')
@section('konten')
    <section class="beranda clapyResets">
        <div class="navbar" data-aos="fade-down">
            <div class="logoplate">
                PlateID
            </div>
            <div class="menu">
                <div class="Home">
                    <a href="">Home</a>
                </div>
                <div class="Account">
                    <a href="/">Account</a>
                </div>
                <div class="Contact">
                    <a href=""> Contact</a>
                </div>
            </div>
            <div class="masuk">
                <a href="/login" class="textlogin">Login</a>
            </div>
            <div class="register">
                <a href="/register" class="textregister">Register</a>
            </div>
        </div>
        <div class="texthero">
            <div class="title" data-aos="zoom-out">VEHICLE LICENSE PLATE RECOGNITION</div>
            <div class="text" data-aos="fade-up">EASY, ACCURATE AND USEFULL</div>
            <div class="desc" data-aos="fade-up">
                <p> PlateID is a software that can track and analysis your plate picture in a fast, accurate and easy way. a
                    solution of any problem in search of vehicle data and status. Make to minimize criminalizm in traffic
                </p>
                <div class="image">
                    <img src="img/line2.png" alt="">
                </div>
            </div>
            <div class="learn" data-aos="fade-up">
                <a href="/login">Learn More</a>
                <a href="/login"><img src="img/arrow.png" alt=""></a>
            </div>
            <div class="imagecar" data-aos="zoom-out">
            </div>
            <div data-aos="zoom-out">
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
        <div class="video">
            <div class="title">
                PLATE ID RECOGNITION
            </div>
            <div class="spotlight">
                SPOTLIGHT MOVIE
            </div>
            <div class="video-content">
                <button class="play">
                    <img class="img1" src="img/Ellipse1.png" alt="">
                    <img class="img2" src="img/eclipse2.png" alt="">
                </button>
            </div>
        </div>
    </section>
    <footer class="end">
        <div class="logo">
            <img src="img/logo.png" alt="">
            <div class="logoname">
                PLATE ID
            </div>
        </div>
        <div class="list">
            <a href="" class="list1">Home</a>
            <a href="" class="list2">Account</a>
            <a href="" class="list3">Contact</a>
        </div>
        <div class="vector">
            <img class="img1" src="img/vector3.png" alt="">
            <img class="img2" src="img/vector4.png" alt="">
        </div>
        <div class="license">
            © 2023 PLATEID. All Right Reserved.
        </div>
        <div class="license2">
            <p class="label1">Term</p>
            <p class="label2">Privacy</p>
            <p class="label3">Legal</p>
        </div>
        <div class="subscribe">
            <p class="text1">Subscribe to learn about our latest news, updates and adventures</p>
            <input type="email" class="email" placeholder="Enter Your Email">
            <div class="line">
                <img src="img/vector5.png" alt="">
            </div>
            <div class="arrow">
                <img src="img/arrow.png" alt="">
            </div>
        </div>
    </footer>
@endsection
