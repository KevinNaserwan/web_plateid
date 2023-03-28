@extends('Main/main')
@section('konten')
    <section class="berandaadmin clapyResets">
        <div class="navbar" data-aos="fade-down">
            <div class="logoplate">
                PlateID
            </div>
            <div class="menu">
                <div class="Home">
                    <a href="/main">Home</a>
                </div>
                <div class="Account">
                    <a href="/users">Account</a>
                </div>
                <div class="Contact">
                    <a href=""> Contact</a>
                </div>
            </div>
            <div class="masuk">
                <img src="img/profile.jpg" alt="" class="textlogin">
            </div>
            <div class="register">
                <a href="/register" class="textregister">{{ session('user_name') }}</a>
            </div>
            <div class="logout">
                <a href="/sesi/logout" class="textlogout">Logout</a>
            </div>
        </div>
        <div class="pagetitle">
            USERS
        </div>
        <div class="menuadmin">
            <h1>Personal Information &gt;</h1>
            <a href="">Go To Admin Page</a>
        </div>
        <div class="contentadmin">
            <div class="frame">
                <ul>
                    <li class="firstname">FirstName</li>
                    <li class="lastname">lastname</li>
                    <li class="email">Email</li>
                </ul>
                <div class="line"></div>
                <ul>
                    <li class="firstnameisi">{{ session('user_name') }}</li>
                    <li class="lastnameisi">{{ session('last_name') }}</li>
                    <li class="emailisi">{{ session('data_email') }}</li>
                </ul>
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
