<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laravel | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- icon -->
    <script src="https://kit.fontawesome.com/9253957e17.js" crossorigin="anonymous"></script>


    <style>
        * {
            font-family: "Roboto Condensed", sans-serif;
            color: #850f16;
            text-decoration: none;
            margin: 0;
            list-style-type: none;
            padding: 0;
        }

        .logo {
            width: 100%;
            height: 100%;
            min-width: 250px;
            max-height: 39px;
            min-height: 24px;
        }

        .navbar-red{
            color: #850f16;
        }

        .nav-fs a{
            color: #850f16;
            text-decoration: none;
        }

        .nav-fs a:hover {
            color: #69060c;
        }

        .nav-fs {
            font-size: 18px;
            font-weight: 650;
            margin: 2px 0;
            cursor: pointer;
        }

        .text-red-loui{
            color: #850f16;
        }

        .text-red-loui:hover{
            color: #69060c;
        }

        .w-400px{
            width: 100%;
            max-width: 400px;
        }

        .nav-fs:hover {
            color: #69060c;
        }

        .black-link{
            color:rgb(15, 15, 15);
            font-weight:500
        }
        .black-link:hover{
            color:black;
        }

        .nav-ic {
            cursor: pointer;
        }
        .nav-ic:hover {
            color: #69060c;
        }

        .main-bg{
            background-image: url("/assets/img/bg-black-1.jpg");
        }

        .footer-bg{
            background-image: url("/assets/img/bg-black-1.jpg");
        }

        .bg-red-1{
            width: 100%;
            object-fit: cover;
            background-image: url("/assets/img/bg-red-1.jpg");
        }

        .bg-red-2{
            width: 100%;
            object-fit: cover;
            background-image: url("/assets/img/bg-red-2.jpg");
        }

        .bg-red-3{
            width: 100%;
            object-fit: cover;
            background-image: url("/assets/img/bg-red-3.jpg");
        }

        .bg-red-4{
            width: 100%;
            object-fit: cover;
            background-image: url("/assets/img/bg-red-4.jpg");
        }

        body {
            margin: 0 auto;
            min-width: 577px;
            background-image: url("/assets/img/bg-black-1.jpg");
        }
    </style>
</head>
<body class="min-vw-xxl-1800px max-vw-xxl-1800px">
<header class="container-fluid main-bg sticky-top" >
    <nav class=" p-y-30 container-xxl navbar navbar-expand-lg h-100 navbar-dark navbar-red" style="padding-top:10px;">
        <div class="container-fluid d-flex justify-content-between">
            <div class="col-4" >
                <img class="logo" src="./assets/img/logo.png" alt="LOUIS TOMLINSON" />
            </div>

            <button class="navbar-toggler" style='color: #850f16; border:none; outline:none; cursor:pointer;' data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon" style='color: #850f16;'></span> -->
                <i class="fa fa-bars" style="font-size:28px;"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-3 d-flex flex-column w-100" style="height: 50px; margin:10px 0; padding: 0px 0">
                    <div class="w-100  justify-content-end text-right">
                        <ul class="d-flex gap-3 my-0 mx-1 py-0 justify-content-end text-right">
                            <li class="nav-fs"><a href="/store">STORE</a></li>
                            <li class="nav-fs"><a href="/videos">VIDEOS</a></li>
                            <li class="nav-fs"><a href="/merch">MERCH</a></li>
                            <li class="nav-fs"><a href="music">MUSIC</a></li>
                            <li class="nav-fs"><a href="tour">TOUR</a></li>
                        </ul>
                    </div>
                    <div class=" w-100 justify-content-end text-right">
                        <ul class="d-flex gap-4  mx-1 my-0 py-0  justify-content-end text-right">
                            <li>
                                <a  href="" >
                                    <i class="nav-ic fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href=""><i class=" nav-ic fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a  href=""><i class=" nav-ic fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a  href=""><i class="nav-ic fa fa-youtube"></i></a>
                            </li>
                            <li>
                                <a  href="">
                                    <i class="nav-ic fa fa-envelope"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>

<main class="container-fluid" style="margin: 0; padding:0">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>

<footer class="footer-bg container-fluid" >
    <div class="container-xxl" style="margin: 60px auto ;align-items: center;">
        <div class="w-100 d-flex-column text-center">
            <span>© 2022 - LOUIS TOMLINSON - ALL RIGHTS RESERVED</span>
            <div class="text-center" style="width:470px; max-width:470px ; min-width:470px; text-align:center; margin: 0 auto">
                <ul class="d-flex  text-center mx-auto">
                    <li class="text-center"><a class="text-center"style='color: #850f16; cursor:pointer; font-size: 12px; margin:0 3px' href="" alt="">PRIVACY POLICE</a></li>
                    <li class="text-center"><a class="text-center"style='color: #850f16; cursor:pointer; font-size: 12px; margin:0 3px' href="" alt="">COOKIES POLICE</a></li>
                    <li class="text-center"><a class="text-center"style='color: #850f16; cursor:pointer; font-size: 12px; margin:0 3px' href="" alt="">TERMS OF USE</a></li>
                    <li class="text-center"><a class="text-center"style='color: #850f16; cursor:pointer; font-size: 12px; margin:0 3px' href="" alt="">DO NOT SELL MY INFORMATION</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>


{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <title>Bootstrap demo | @yield('title')</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Hello, world!</h1>--}}
{{--<div class="container">--}}
{{--    @yield('content');--}}
{{--</div>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
