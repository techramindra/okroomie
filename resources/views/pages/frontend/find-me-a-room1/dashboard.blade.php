<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Okroomie</title>
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}" />
        <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}" />
<!-- 
        <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/owl.carousel.min.css')}}" />

        <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/owl.theme.default.css')}}" /> -->

        <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/js/lightboxed.css')}}" />

        <!--   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- ui -->
       <!--  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
       <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
<!-- ui -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <script type="text/javascript" src="{{url('public/assets/frontend/list-my-place/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{url('public/assets/frontend/list-my-place/js/lightboxed.js')}}"></script>

        <style type="text/css">


            .popupgallery_main .left__image {
                height: 510px;
            }

            .popupgallery_main .left__image img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }

            .popupgallery_main .right__image img {
                height: 250px;
                object-fit: cover;
                width: 100%;
                margin-bottom: 10px;
                padding-left: 10px;
            }
            .popupgallery_main img {
                border-radius: 0px;
                box-shadow: 0px 11px 30px -26px black;
            }
            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 1240px;
            }
            .popupgallery_main {
                margin-top: 0px;
                border-radius: 15px;
                overflow: hidden;
                margin-bottom: 0px;
            }
            .step-header {
                position: static;
            }
            .Content__DashBoard {
                background: #f3f3f30a;
            }

            .top__menu {
                border: 1px solid #ddd;
                list-style: none;
                padding: 0;
                width: auto;
                display: inline-block;
                color: #80d6db;
                background: #fff;
            }


            .main-about {
    display: flex;
    justify-content: space-between;
    width: 73%;
}
            .top__menu li {
                display: inline-block;
                border-left: 1px solid #ddd;
            }

            .top__menu li a {
                padding: 10px 10px;
                color: #080808;
                font-size: 14px;
                font-weight: 500;
                text-transform: capitalize;
                display: flex;
                align-items: center;
                text-decoration: none;
            }
            .top__menu li:first-child {
                border-left: none;
            }

            .top__menu li a i {
                color: #3c475b;
                margin-right: 10px;
                font-size: 21px;
            }

            .count__span {
                width: 20px;
                height: 20px;
                background: #ddd;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-left: 5px;
                border-radius: 100%;
                color: #333;
                font-size: 12px;
            }
            .popupgallery_main .right__image .col-md-6:nth-child(3) img {
                margin: 0 !important;
            }

            .popupgallery_main .right__image .col-md-6:nth-child(4) img {
                margin: 0;
            }

            .slider__right__top {
                background: #f3f3f3;
                padding: 20px;
                border: 1px solid #ddd;
            }

            .slider__right__top .slider_inr {
                width: 130px;
                height: 130px;
                margin: auto;
                border-radius: 100%;
                overflow: hidden;
            }
            .slider__right__top h3 {
                text-align: center;
                margin-top: 20px;
                font-weight: 600;
                font-size: 18px;
                text-transform: capitalize;
            }

            .slider__right__top p {
                text-align: center;
                margin-top: 10px;
                color: #333;
            }
            .some_details__block .address p {
                font-size: 18px;
                margin-bottom: 5px;
                font-weight: 500;
            }

            .some_details__block .address .price__details {
                font-style: normal;
                text-transform: capitalize;
                margin-bottom: 10px;
            }

            .facility_details ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                align-items: center;
            }

            .facility_details ul li {
                margin-right: 20px;
            }

            .details__face {
                font-size: 16px;
            }
            .home__discrription {
                margin: 20px 0;
            }
            .some_details__block .address .price__details strong {
                font-size: 20px;
                font-weight: 600;
            }
            h2 {
                text-transform: capitalize;
                font-size: 22px;
            }
            .Inner__block_top {
                margin-top: -25px;
            }
            .top__menu li a svg {
                width: 16px;
                margin-right: 5px;
            }

            .some_sub_section {
                margin: 20px 0;
            }

            .some_sub_section ul.sub_class {
                list-style: none;
                padding: 0;
                border-top: 1px solid #dddd;
                border-bottom: 1px solid #dddd;
                padding: 10px 0;
                display: flex;
                align-items: center;
                margin: 0;
            }

            .some_sub_section ul.sub_class li:first-child {
                border-right: 1px solid #ddd;
            }

            .some_sub_section ul.sub_class li {
                padding-right: 20px;
                font-size: 13px;
                font-weight: 500;
            }

            .some_sub_section ul.sub_class li:last-child {
                padding-left: 10px;
            }
            .some_sub_section ul.sub_class li strong {
                font-weight: 600;
            }
            .distance__section {
                margin: 20px 0;
            }

            .distance__section ul {
                list-style: none;
                padding: 0;
                margin: 0;
                border: 1px solid #333;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .distance__section ul li {
                width: 25%;
                border-left: 1px solid #333;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                border-radius: 5px;
            }

            .distance__section ul li:first-child {
                border: none;
            }

            .distance__sub {
                text-align: center;
                padding: 20px 0;
            }

            .distance__sub span {
                display: block;
                margin-top: 10px;
                font-size: 14px;
                color: gray;
            }

            .map__section iframe {
                width: 100%;
                border: 1px solid #212529;
            }

            .map__section {
                border: 1px solid #dddd;
                padding: 5px;
            }
            .distance__title {
                display: flex;
                margin-bottom: 20px;
                align-items: center;
            }

            .distance__title h2 {
                margin: 0;
                font-size: 15px;
                text-transform: unset;
                font-weight: 700;
            }
            .distance__title select {
                border: none;
                color: #00a6d7;
                margin-left: 5px;
            }
            .room__details ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: center;
            }

            .room__details ul li {
                width: 50%;
                margin-bottom: 15px;
            }

            .room__details ul li .sub__room__details {
                display: flex;
                align-items: center;
            }

            .room__details ul li .sub__room__details span {
                margin-left: 10px;
            }

            .room__details h2 {
                margin-bottom: 15px;
            }
            .room__details {
                margin: 20px 0;
            }

            .room_flex small {
                display: block;
                padding-left: 10px;
            }
            .sub__title_room {
                margin: 20px 0;
            }
            .message__box {
                border: 1px solid #ddd;
                background: #f3f3f3;
                padding: 20px;
                border-radius: 5px;
                margin-top: 0px;
            }
            .message__box .top__user {
                margin-bottom: 15px;
                text-align: center;
                margin-top: 30px;
            }

            .img__message {
                width: 90px;
                height: 90px;
                border-radius: 100%;
                overflow: hidden;
                margin: -65px auto 10px;
                box-shadow: 0px 3px 29px -10px black;
            }
            .box__message .form-control {
                height: 150px;
            }
            .img__message img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .message__box .top__user .name__message {
                text-transform: capitalize;
                margin-left: 10px;
            }

            .message__box button.btn {
                background: black;
                color: #fff;
                margin-top: 15px;
                width: 100%;
            }
            .tp__sl_icons {
                position: absolute;
                top: 30px;
                z-index: 9;
                left: 45px;
            }

            .top_Photos_section {
                position: relative;
            }

            .tp__sl_icons .social__icons_top {
                display: flex;
                align-items: center;
                background: white;
                padding: 10px;
                list-style: none;
                margin: 0;
                box-shadow: 0px 3px 21px -9px black;
                border-radius: 5px;
            }

            .tp__sl_icons .social__icons_top li {
                margin: 0 6px;
                text-transform: capitalize;
            }

            .tp__sl_icons .social__icons_top li a {
                color: #403c3c;
            }
            .styles__responseRate {
                background: #eaebec;
                width: 190px;
                margin: auto;
                border-radius: 30px;
                box-shadow: 0px 2px 10px -9px black;
                border: 1px solid #dddd;
                padding: 2px 0;
                font-size: 13px;
            }
            .tp__second_icons {
                left: unset;
                right: 45px;
            }
            .message__box .top__user h4 {
                font-size: 21px;
            }
            .responseRatetime {
                width: auto;
                display: inline-block;
                padding: 3px 15px;
            }
            .social__media__icons {
                margin-top: 15px;
                text-align: center;
            }

            .social__media__icons ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                align-items: center;
                margin-top: 20px;
                justify-content: center;
            }

            .social__media__icons ul a {
                width: 40px;
                height: 40px;
                background: #ffffff;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 100%;
                box-shadow: 0px 1px 25px -14px black;
                color: black;
                position: relative;
                text-decoration: none;
            }
            .right__mark {
                position: absolute;
                background: #b8e2f9;
                width: 20px;
                height: 20px;
                border-radius: 100%;
                top: -3px;
                right: -10px;
            }

            .social__media__icons ul li {
                margin: 0 10px;
            }

            .right__mark:before {
                content: "\f05d";
                font-family: fontawesome;
                color: #fff;
                font-size: 16px;
                top: -2px;
                left: 3px;
                position: absolute;
            }
            .cross__mark:before {
                content: "\f00d";
            }
            .cross__mark {
                background: red;
            }
            .social__media__icons h2 {
                font-size: 14px;
                font-weight: 400;
            }
            .property__welcome {
            }

            .property__welcome ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }

            .property__welcome ul li {
                width: 50%;
                display: flex;
                align-items: center;
                margin-bottom: 15px;
            }

            .property__welcome .welcome__sub {
                width: 50px;
                height: 50px;
                border: 1px solid #ddd;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 100%;
            }
            .property__welcome ul li span {
                text-transform: capitalize;
                margin-left: 10px;
            }
            .property__welcome .welcome__sub img {
                width: 25px;
            }
            .details__face img {
                width: 25px;
            }
            .room__details ul li .sub__room__details img {
                width: 25px;
            }
            .report__section {
                margin: 20px 0;
            }

            .report__section a {
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: underline;
                color: black;
            }

            .report__section .report_span {
                margin-right: 10px;
            }
            .inquary__tab {
                background: #f3f3f361;
                padding: 20px;
                border: 1px solid #ddd;
                height: 170px;
                margin: 10px 0 25px;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                text-align: center;
            }

            .inquary__tab button {
                background: #333;
                color: #fff;
                padding: 10px 30px;
                border: 1px solid #333;
                font-size: 14px;
            }

            .inquary__tab button.transprent {
                background: transparent;
                color: black;
            }
            .inquary__tab button:hover {
                background: transparent;
                color: black;
            }
            .inquary__tab h2 {
                font-size: 20px;
            }

            .inquary__tab p {
                font-size: 14px;
            }
            .adsgif__banner {
                background-repeat: no-repeat;
                padding: 45px;
                border: 1px solid #ddd;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                background-size: cover !important;
                background-position: center center !important;
                position: relative;
                height: 230px;
            }

            .adsgif__banner h2 {
                font-size: 18px;
                width: 55%;
                color: #fff;
                text-shadow: -3px 1px 0px #607d8b;
                line-height: 1.5;
                position: relative;
            }

            .adsgif__banner button {
                background: #333333e0;
                color: #fff;
                padding: 10px 30px;
                border: 1px solid #333;
                font-size: 14px;
                border-radius: 2px;
                box-shadow: 1px 4px 1px 0px black;
                position: relative;
            }
            .adsgif__banner:before {
                content: "";
                background: #00000061;
                width: 100%;
                height: 100%;
                position: absolute;
                left: 0;
                top: 0;
                display: none;
            }
            .blog___links {
                margin: 20px 0;
            }

            .blog___links h2 {
                font-size: 15px;
            }

            .blog___links ul {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .blog___links li {
                margin-bottom: 10px;
            }

            .blog___links a {
                color: gray;
                text-decoration: underline;
                font-size: 14px;
            }
            .my__ideal_location ul {
                list-style: none;
                padding: 0;
                margin: 0;
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }

            .my__ideal_location ul li {
                margin: 0 10px 10px 0;
                border: 1px solid black;
                padding: 5px 15px;
                border-radius: 2px;
            }

            .my__ideal_location ul li span {
                text-transform: capitalize;
                font-size: 14px;
            }

        </style>
        <script src="https://use.fontawesome.com/c03345a92c.js"></script>
    </head>
    <body>
        <div id="wrapper">
            <header class="step-header">
                <div class="container">
                    <div class="inner-block">
                        <div class="left">
                            <!-- <a href="{{url('find-me-a-roomie/step-14')}}">Left</a> -->
                        </div>
                        <div class="logo">
                            <a href="#">
                                <img src="https://okroomie.com/public/assets/frontend/images/logodarknk.png" />
                            </a>
                        </div>
                        <div class="right">
                            <a href="{{url('/')}}">Close</a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="preview_main">
                <div class="top_Photos_section">
                    <div class="container-fluid">
                        <div class="tp__sl_icons">
                            <ul class="social__icons_top">
                                <li>share</li>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="tp__sl_icons tp__second_icons">
                            <ul class="social__icons_top">
                                <li>favorite</li>
                                <li>
                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="popupgallery_main">
                            <div class="row">
                                <div class="col-md-6 pr-0">
                                    <div class="left__image">
                                    <img
                                            class="lightboxed"
                                            rel="group1"
                                            src="{{url('public/images/'.$user_images[0]->image)}}"
                                            data-link="{{url('public/images/'.$user_images[0]->image)}}"
                                            alt="Image Alt"
                                            data-caption="Image Caption"
                                        />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="right__image">
                                        <div class="row">
                                        @foreach($user_images as $key=>$room_imageVal)
                                            @if($key==0)
                                            @php
                                            continue;
                                            @endphp
                                            @endif
                                            <div class="col-md-6 p-0">
                                                <img
                                                    class="lightboxed"
                                                    rel="group1"
                                                    src="{{url('public/images/'.$room_imageVal->image)}}"
                                                     data-link="{{url('public/images/'.$room_imageVal->image)}}"
                                                    alt="Image Alt"
                                                    data-caption="Image Caption"
                                                />
                                            </div>
                                            @endforeach
                                            <!-- <div class="col-md-6 p-0">
                                                <img
                                                    class="lightboxed"
                                                    rel="group1"
                                                    src="https://okroomie.com/public/assets/frontend/images/demo3.jpg"
                                                    data-link="https://okroomie.com/public/assets/frontend/images/demo3.jpg"
                                                    alt="Image Alt"
                                                    data-caption="Image Caption"
                                                />
                                            </div>

                                            <div class="col-md-6 p-0">
                                                <img
                                                    class="lightboxed"
                                                    rel="group1"
                                                    src="https://okroomie.com/public/assets/frontend/images/demo4.jpg"
                                                    data-link="https://okroomie.com/public/assets/frontend/images/demo4.jpg"
                                                    alt="Image Alt"
                                                    data-caption="Image Caption"
                                                />
                                            </div>

                                            <div class="col-md-6 p-0">
                                                <img
                                                    class="lightboxed"
                                                    rel="group1"
                                                    src="https://okroomie.com/public/assets/frontend/images/demo5.jpg"
                                                    data-link="https://okroomie.com/public/assets/frontend/images/demo5.jpg"
                                                    alt="Image Alt"
                                                    data-caption="Image Caption"
                                                />
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Content__DashBoard">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="Inner__block_top">
                                    <ul class="top__menu">
                                        <li>
                                            <a href="">
                                                <svg viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-kry84i">
                                                    <g stroke="currentColor" fill="none">
                                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2" stroke-width="2"></rect>
                                                        <path d="M9.5 11.5l-6 9M9.5 11.5l3 5M14.5 13.5l-2 3M14.5 13.5l6 7"></path>
                                                        <circle cx="15.5" cy="8.5" r="2"></circle>
                                                    </g>
                                                </svg>
                                                Photos <span class="count__span">5</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="">
                                                <svg viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-kry84i">
                                                    <path fill="inherit" stroke="currentColor" stroke-width="2" d="M16 11.3L21 8v8l-5-3.3v-1.4z"></path>
                                                    <rect x="3" y="6" width="13" height="12" rx="2" ry="2" fill="inherit" stroke="currentColor" stroke-width="2"></rect>
                                                </svg>
                                                My intro video <span class="count__span">5</span>
                                            </a>
                                        </li>

                                        <!-- <li>
                                            <a href="">
                                                <svg viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-kry84i">
                                                    <path fill="none" stroke="currentColor" d="M3 17V7l9 4v10M21 17V7l-9 4v10"></path>
                                                    <path
                                                        d="M3 8.3v7.5a2 2 0 0 0 1.2 1.8l7 3.3a2 2 0 0 0 1.7 0l7-3.3a2 2 0 0 0 1.1-1.9V8.3a2 2 0 0 0-1.2-1.8l-7-3.3a2 2 0 0 0-1.7 0l-7 3.3A2 2 0 0 0 3 8.3z"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                    ></path>
                                                </svg>
                                                360° Virtual Tour <span class="count__span">5</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>

                                <div class="some_details__block">
                                    <div class="address">
                                        <p>{{$data->your_first_name}}, {{$data->age}} yrs, {{$data->gender}}</p>
                                        <!-- <p class="price__details">
                                           Budget  <strong>$250</strong><small>/week</small>
                                        </p> -->
                                    </div>

                                    <div class="facility_details">
                                        <ul>
                                            <!-- <li>
                                                <div class="details__face">
                                                    <svg width="24" height="24" class="domain-icon property-feature__icon css-gsqvet" viewBox="0 0 24 24" aria-hidden="true">
                                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M4.00002 19.00001v2M20.00002 19.00001v2M8 11h8a5 5 0 0 1 5 5v3H3v-3a5 5 0 0 1 5-5z"></path>
                                                        <path d="M6.5 11V9A1.5 1.5 0 0 1 8 7.5h2A1.5 1.5 0 0 1 11.5 9v1M12.5 10V9A1.5 1.5 0 0 1 14 7.5h2A1.5 1.5 0 0 1 17.5 9v2" fill="none" stroke="currentColor"></path>
                                                        <path d="M20 13V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8" fill="none" stroke="currentColor" stroke-width="2"></path>
                                                        <path fill="none" stroke="currentColor" d="M3.5 15.5h17"></path>
                                                    </svg>
                                                    <span>3</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="details__face">
                                                    <svg width="24" height="24" class="domain-icon property-feature__icon css-gsqvet" viewBox="0 0 24 24" aria-hidden="true">
                                                        <path fill="none" stroke="currentColor" stroke-width="2" d="M6 19v2M18 19v2"></path>
                                                        <g fill="currentColor">
                                                            <circle cx="15.5" cy="8.5" r=".5"></circle>
                                                            <circle cx="13.5" cy="8.5" r=".5"></circle>
                                                            <circle cx="11.5" cy="8.5" r=".5"></circle>
                                                            <circle cx="13.5" cy="6.5" r=".5"></circle>
                                                            <circle cx="13.5" cy="10.5" r=".5"></circle>
                                                            <circle cx="11.5" cy="10.5" r=".5"></circle>
                                                            <circle cx="17.5" cy="10.5" r=".5"></circle>
                                                            <circle cx="15.5" cy="10.5" r=".5"></circle>
                                                        </g>
                                                        <g fill="none" stroke="currentColor" stroke-width="2">
                                                            <path d="M4 13h16v2a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5v-2zM4 12V7a3 3 0 0 1 3-3h1"></path>
                                                            <path d="M8 6.3V4a1 1 0 0 1 1-1h2.3a.7.7 0 0 1 .5 1.2L9.2 6.8A.7.7 0 0 1 8 6.3zM3 13h18"></path>
                                                        </g>
                                                    </svg>
                                                    <span>2</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="details__face">
                                                    <svg width="24" height="24" class="domain-icon property-feature__icon css-gsqvet" viewBox="0 0 24 24" aria-hidden="true">
                                                        <path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M21 10h-2M5 10H3"></path>
                                                        <path fill="none" stroke="currentColor" stroke-miterlimit="10" d="M9.5 15.5h5m-9-5h13"></path>
                                                        <path
                                                            d="M20.6 12.6L19 10l-1.5-3.7A2 2 0 0 0 15.6 5H8.4a2 2 0 0 0-1.9 1.3L5 10l-1.6 2.6a3 3 0 0 0-.4 1.5V17a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2.9a3 3 0 0 0-.4-1.5z"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            stroke-width="2"
                                                        ></path>
                                                        <path d="M7 19v1a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1m14 0v1a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1" stroke="currentColor" stroke-width="2"></path>
                                                        <path d="M3.5 14.5H7a.5.5 0 0 1 .5.5v.5a1 1 0 0 1-1 1h-3v-2zm13.5 0h3.5v2h-3a1 1 0 0 1-1-1V15a.5.5 0 0 1 .5-.5z" fill="none" stroke="currentColor"></path>
                                                    </svg>
                                                    <span>2</span>
                                                </div>
                                            </li> -->

                                            <li>
                                                <div class="details__face">
                                                    <!--  <i class="fa fa-hourglass-end" aria-hidden="true"></i> -->
                                                    <img src="https://okroomie.com/public/assets/frontend/images/hourglass.png" />
                                                    <span>Stay Period - {{$data->preferred_length_of_stay}}</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="some_sub_section">
                                        <ul class="sub_class">
                                            <li>Available to move from  <strong>{{date("l jS \of F Y ",strtotime($data->preferred_move_date))}}</strong></li>
                                            <li>Budget<strong> ${{$data->weekely_budget}}</strong><small>/week</small></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="home__discrription my-3">
                                    <h2>My highlights</h2>
                                    <div class="property__welcome mt-3">
                                        <ul>
                                        @if($data->students)
                                            <li>
                                                <div class="welcome__sub">
                                                    <img src="https://okroomie.com/public/assets/frontend/images/student.svg" />
                                                </div>
                                                <span>student</span>
                                            </li>
                                            @endif
                                            @if($data->children)
                                            <li>
                                                <div class="welcome__sub">
                                                    <img src="https://okroomie.com/public/assets/frontend/images/malefemale.svg" />
                                                </div>
                                                <span>children</span>
                                            </li>
                                            @endif
                                            @if($data->retirees)
                                            <li>
                                                <div class="welcome__sub">
                                                    <img src="https://okroomie.com/public/assets/frontend/images/retairee.png" />
                                                </div>
                                                <span>Retirees</span>
                                            </li>
                                            @endif
                                            @if($data->lgbt)
                                            <li>
                                                <div class="welcome__sub">
                                                    <img src="https://okroomie.com/public/assets/frontend/images/lgbt.png" />
                                                </div>
                                                <span>LGBTQI+</span>
                                            </li>
                                            @endif
                                            @if($data->backpackers)
                                            <li>
                                                <div class="welcome__sub">
                                                    <img src="https://okroomie.com/public/assets/frontend/images/backpacker.png" />
                                                </div>
                                                <span>backpacker</span>
                                            </li>
                                            @endif
                                          

                                            <li>
                                                <div class="welcome__sub">
                                                    <img src="https://okroomie.com/public/assets/frontend/images/jobseekar.png" />
                                                </div>
                                                <span>jobseeker/ welfare</span>
                                            </li>


                                            <li>
                                                <div class="welcome__sub">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 36 36"><path fill="#575a5d" d="M15 12h9v2h-9z" class="clr-i-outline--badged clr-i-outline-path-1--badged"/><path fill="#575a5d" d="M15 16h9v2h-9z" class="clr-i-outline--badged clr-i-outline-path-2--badged"/><path fill="#575a5d" d="M15 20h9v2h-9z" class="clr-i-outline--badged clr-i-outline-path-3--badged"/><path fill="#575a5d" d="M15 24h9v2h-9z" class="clr-i-outline--badged clr-i-outline-path-4--badged"/><path fill="#575a5d" d="M11 8h2v2h-2z" class="clr-i-outline--badged clr-i-outline-path-5--badged"/><path fill="#575a5d" d="M11 12h2v2h-2z" class="clr-i-outline--badged clr-i-outline-path-6--badged"/><path fill="#575a5d" d="M11 16h2v2h-2z" class="clr-i-outline--badged clr-i-outline-path-7--badged"/><path fill="#575a5d" d="M11 20h2v2h-2z" class="clr-i-outline--badged clr-i-outline-path-8--badged"/><path fill="#575a5d" d="M11 24h2v2h-2z" class="clr-i-outline--badged clr-i-outline-path-9--badged"/><path fill="#575a5d" d="M15 8v2h8.66a7.45 7.45 0 0 1-.89-2Z" class="clr-i-outline--badged clr-i-outline-path-10--badged"/><path fill="#575a5d" d="M28 13.22V32H8V4h14.78a7.45 7.45 0 0 1 .88-2H8a2 2 0 0 0-2 2v28a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V13.5a7.49 7.49 0 0 1-2-.28Z" class="clr-i-outline--badged clr-i-outline-path-11--badged"/><circle cx="30" cy="6" r="5" fill="#575a5d" class="clr-i-outline--badged clr-i-outline-path-12--badged clr-i-badge"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                                                </div>
                                                <span>This Listing is for</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                            
                                <div class="home__discrription">
                                    <h2>About me</h2>
                                    <p>
                                        {{$data->about_yourself}}
                                    </p>
                                </div>


                              
                                

                                <div class="room__details">
                                    <div class="title__room">
                                        <h2>My Property preferences</h2>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z"
                                                    ></path>
                                                </svg>
                                                <span>Kitchen</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="m15.9999 20.33323c2.0250459 0 3.66667 1.6416241 3.66667 3.66667s-1.6416241 3.66667-3.66667 3.66667-3.66667-1.6416241-3.66667-3.66667 1.6416241-3.66667 3.66667-3.66667zm0 2c-.9204764 0-1.66667.7461936-1.66667 1.66667s.7461936 1.66667 1.66667 1.66667 1.66667-.7461936 1.66667-1.66667-.7461936-1.66667-1.66667-1.66667zm.0001-7.33323c3.5168171 0 6.5625093 2.0171251 8.0432368 4.9575354l-1.5143264 1.5127043c-1.0142061-2.615688-3.5549814-4.4702397-6.5289104-4.4702397s-5.5147043 1.8545517-6.52891042 4.4702397l-1.51382132-1.5137072c1.48091492-2.939866 4.52631444-4.9565325 8.04273174-4.9565325zm.0001-5.3332c4.9804693 0 9.3676401 2.540213 11.9365919 6.3957185l-1.4470949 1.4473863c-2.1746764-3.5072732-6.0593053-5.8431048-10.489497-5.8431048s-8.31482064 2.3358316-10.48949703 5.8431048l-1.44709488-1.4473863c2.56895177-3.8555055 6.95612261-6.3957185 11.93659191-6.3957185zm-.0002-5.3336c6.4510616 0 12.1766693 3.10603731 15.7629187 7.9042075l-1.4304978 1.4309874c-3.2086497-4.44342277-8.4328305-7.3351949-14.3324209-7.3351949-5.8991465 0-11.12298511 2.89133703-14.33169668 7.334192l-1.43047422-1.4309849c3.58629751-4.79760153 9.31155768-7.9032071 15.7621709-7.9032071z"
                                                    ></path>
                                                </svg>
                                                <span>Wi-Fi</span>
                                            </div>
                                        </li>
                                     
                                            @if($data->parking)

                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M26 19a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 18a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm20.693-5l.42 1.119C29.253 15.036 30 16.426 30 18v9c0 1.103-.897 2-2 2h-2c-1.103 0-2-.897-2-2v-2H8v2c0 1.103-.897 2-2 2H4c-1.103 0-2-.897-2-2v-9c0-1.575.746-2.965 1.888-3.882L4.308 13H2v-2h3v.152l1.82-4.854A2.009 2.009 0 0 1 8.693 5h14.614c.829 0 1.58.521 1.873 1.297L27 11.151V11h3v2h-2.307zM6 25H4v2h2v-2zm22 0h-2v2h2v-2zm0-2v-5c0-1.654-1.346-3-3-3H7c-1.654 0-3 1.346-3 3v5h24zm-3-10h.557l-2.25-6H8.693l-2.25 6H25zm-15 7h12v-2H10v2z"
                                                    ></path>
                                                </svg>
                                                <span>{{$data->parking}}</span>
                                            </div>
                                        </li>
                                        @endif

                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M9.5 2a4.5 4.5 0 0 1 3.527 7.295c.609.215 1.173.55 1.66.988l.191.182L17.414 13H31v2h-2v14a2 2 0 0 1-1.85 1.995L27 31H5a2 2 0 0 1-1.995-1.85L3 29V15H1v-2h2.1a5.009 5.009 0 0 1 2.955-3.608A4.5 4.5 0 0 1 9.5 2zm7.085 13H5v14h22V15h-7.586l3.293 3.294-1.414 1.414zM9.5 4a2.5 2.5 0 0 0-1 4.792V11H8a3.001 3.001 0 0 0-2.83 2h9.415l-1.121-1.121a3 3 0 0 0-1.923-.872L11.343 11H10.5V8.792A2.5 2.5 0 0 0 9.5 4zm15.486-3a6.957 6.957 0 0 1-1.803 4.07l-.445.463A8.971 8.971 0 0 0 20.354 11H18.35a10.975 10.975 0 0 1 3.202-7.118A4.961 4.961 0 0 0 22.974 1zm2.007 0h2.004a10.96 10.96 0 0 1-3.202 7.124A4.974 4.974 0 0 0 24.373 11h-2.012a6.97 6.97 0 0 1 1.804-4.064l.444-.462A8.958 8.958 0 0 0 26.993.999z"
                                                    ></path>
                                                </svg>
                                                <span>Bath tub </span>
                                            </div>
                                        </li>
                                        
                                            @if($data->pets)

                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M13.693 13.934a4 4 0 0 1 5.283.595l.292.366 4.768 6.755a4 4 0 0 1 .596 3.342 4.004 4.004 0 0 1-4.496 2.913l-.403-.084-3.474-.932a1 1 0 0 0-.518 0l-3.474.932a4 4 0 0 1-2.941-.347l-.401-.249a4.004 4.004 0 0 1-1.19-5.207l.229-.368 4.768-6.755a4 4 0 0 1 .961-.96zm3.756 1.889a2 2 0 0 0-2.979.09l-.104.136-4.838 6.861a2 2 0 0 0 2.048 3.017l.173-.038 3.992-1.07a1 1 0 0 1 .518 0l3.964 1.063.143.034a2 2 0 0 0 2.132-2.963l-4.947-7.014zM27 12a4 4 0 1 1 0 8 4 4 0 0 1 0-8zM5 12a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm22 2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zM5 14a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm6-10a4 4 0 1 1 0 8 4 4 0 0 1 0-8zm10 0a4 4 0 1 1 0 8 4 4 0 0 1 0-8zM11 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm10 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"
                                                    ></path>
                                                </svg>
                                                <span>Pets allowed</span>
                                            </div>
                                        </li>
                                        @endif

                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M9 29v-2h2v-2H6a5 5 0 0 1-4.995-4.783L1 20V8a5 5 0 0 1 4.783-4.995L6 3h20a5 5 0 0 1 4.995 4.783L31 8v12a5 5 0 0 1-4.783 4.995L26 25h-5v2h2v2zm10-4h-6v2h6zm7-20H6a3 3 0 0 0-2.995 2.824L3 8v12a3 3 0 0 0 2.824 2.995L6 23h20a3 3 0 0 0 2.995-2.824L29 20V8a3 3 0 0 0-2.824-2.995z"
                                                    ></path>
                                                </svg>
                                                <span>TV</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm0 2H4v24h24zM16 7a9 9 0 1 1 0 18 9 9 0 0 1 0-18zm-5.841 7.5c-.342 0-.68.024-1.014.073a7 7 0 0 0 13.107 4.58 8.976 8.976 0 0 1-6.91-2.374l-.236-.23a6.966 6.966 0 0 0-4.947-2.049zM16 9a6.997 6.997 0 0 0-6.066 3.504l.225-.004c2.262 0 4.444.844 6.124 2.407l.237.229a6.979 6.979 0 0 0 4.948 2.05c.493 0 .98-.05 1.456-.151A7 7 0 0 0 16 9zM7 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                    ></path>
                                                </svg>
                                                <span>Washing machine</span>
                                            </div>
                                        </li>
                                        
                                           
                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm0 2H4v24h24zM16 7a9 9 0 1 1 0 18 9 9 0 0 1 0-18zm0 2a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm-4.795 5.579a6.948 6.948 0 0 1 3.675 1.755l.462.444a8.968 8.968 0 0 0 4.614 2.28 5.017 5.017 0 0 1-2.01 1.55 10.978 10.978 0 0 1-4.255-2.644 4.962 4.962 0 0 0-2.656-1.388 5.001 5.001 0 0 1 .17-1.998zm3.08-3.277a10.96 10.96 0 0 1 3.649 2.419 4.974 4.974 0 0 0 2.995 1.436 4.99 4.99 0 0 1-.064 2.002 6.967 6.967 0 0 1-4.12-1.807l-.462-.445a8.955 8.955 0 0 0-4.07-2.17 5.002 5.002 0 0 1 2.072-1.435zM7 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                    ></path>
                                                </svg>
                                                <span>Dryer</span>
                                            </div>
                                        </li>
                                        

                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M23 3a2 2 0 0 1 1.995 1.85L25 5v1.522l5-1.999v11.954l-5-2V16a2 2 0 0 1-1.85 1.995L23 18l-6.1.001a5.005 5.005 0 0 1-3.984 3.915 5.002 5.002 0 0 1-4.7 4.08L8 26H4v4H2V20h2v4h4a3.001 3.001 0 0 0 2.872-2.13A5.004 5.004 0 0 1 7.1 18.002L4 18a2 2 0 0 1-1.995-1.85L2 16V5a2 2 0 0 1 1.85-1.995L4 3zM12 14a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm11-9H4v11h3.1a5.002 5.002 0 0 1 9.8 0H23zm5 2.476l-3 1.2v3.647l3 1.2zM7 7a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                    ></path>
                                                </svg>
                                                <span>Security cameras on property</span>
                                            </div>
                                        </li>
                                       
                                            @if($data->air_conditioner)

                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M17 1v4.03l4.026-2.324 1 1.732L17 7.339v6.928l6-3.464V5h2v4.648l3.49-2.014 1 1.732L26 11.381l4.026 2.325-1 1.732L24 12.535l-6 3.464 6 3.465 5.026-2.902 1 1.732L26 20.618l3.49 2.016-1 1.732L25 22.351V27h-2v-5.804l-6-3.465v6.929l5.026 2.902-1 1.732L17 26.97V31h-2v-4.031l-4.026 2.325-1-1.732L15 24.66v-6.929l-6 3.464V27H7v-4.65l-3.49 2.016-1-1.732 3.489-2.016-4.025-2.324 1-1.732 5.025 2.901 6-3.464-6-3.464-5.025 2.903-1-1.732L6 11.38 2.51 9.366l1-1.732L7 9.648V5h2v5.803l6 3.464V7.339L9.974 4.438l1-1.732L15 5.03V1z"
                                                    ></path>
                                                </svg>
                                                <span>Air conditioning</span>
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </div>

                                <div class="room__details">
                                    <div class="title__room">
                                        <h2>Room preference</h2>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M40.5 5.5h-33a2 2 0 0 0-2 2v33a2 2 0 0 0 2 2h33a2 2 0 0 0 2-2v-33a2 2 0 0 0-2-2Z" />
                                                    <path
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M17.27 32.43a6 6 0 0 0 5.3 2.37h3.2a5.41 5.41 0 0 0 5.39-5.4h0a5.4 5.4 0 0 0-5.39-5.4h-3.54a5.4 5.4 0 0 1-5.39-5.4h0a5.4 5.4 0 0 1 5.39-5.4h3.2a6 6 0 0 1 5.3 2.37M24 13.2v-2.7m0 27v-2.7"
                                                    />
                                                </svg>
                                                <div class="room_flex">
                                                    <span>{{$data->weekely_budget}} Weekey Rent</span>
                                                    <small>920 bond</small>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                                    <path
                                                        fill="currentColor"
                                                        d="M6 3v26h16v-2H8V5h10v6h6v2h2V9.6l-.3-.3l-6-6l-.3-.3H6zm14 3.4L22.6 9H20V6.4zM10 13v2h12v-2H10zm17 2v2c-1.7.3-3 1.7-3 3.5c0 2 1.5 3.5 3.5 3.5h1c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5H25v2h2v2h2v-2c1.7-.3 3-1.7 3-3.5c0-2-1.5-3.5-3.5-3.5h-1c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5H31v-2h-2v-2h-2zm-17 3v2h7v-2h-7zm9 0v2h3v-2h-3zm-9 4v2h7v-2h-7zm9 0v2h3v-2h-3z"
                                                    />
                                                </svg>
                                                <span>{{$data->bills}}</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m13.249 4.518l18.133 2.57l.007 36.412l-18.144-2.57Z" />
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m13.245 4.5l21.51.073l-.073 35.781l-3.22.074" />
                                                    <path
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        d="M29.594 26.018c.058 1.54-.644 2.547-1.375 2.265c-.594-.228-1.014-1.222-1.042-2.275c-.027-1.039.281-2.225.903-2.298c.839-.099 1.457.796 1.514 2.308Z"
                                                    />
                                                </svg>
                                                <span>Private room</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                                    <path
                                                        fill="currentColor"
                                                        d="M232 100h-28v-4a4 4 0 0 0-4-4h-64a4 4 0 0 0-4 4v4H60V52a16 16 0 0 1 32 0a4 4 0 0 0 8 0a24 24 0 0 0-48 0v48H24a12 12 0 0 0-12 12v32a52 52 0 0 0 52 52h4v20a4 4 0 0 0 8 0v-20h104v20a4 4 0 0 0 8 0v-20h4a52 52 0 0 0 52-52v-32a12 12 0 0 0-12-12Zm-92 0h56v40h-56Zm96 44a44 44 0 0 1-44 44H64a44 44 0 0 1-44-44v-32a4 4 0 0 1 4-4h108v36a4 4 0 0 0 4 4h64a4 4 0 0 0 4-4v-36h28a4 4 0 0 1 4 4Z"
                                                    />
                                                </svg>
                                                <span>{{$data->bathroom}}</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <!-- <svg width="24" height="24" viewBox="0 0 24 24" xmlns:xlink="http://www.w3.org/1999/xlink" label=""><g fill="none" fill-rule="evenodd"><path d="M21.108 23H20v-3h3v1.195C23 22.224 22.187 23 21.108 23zM1 21.195V20h3v3H2.737C1.714 23 1 22.258 1 21.195zM20 11h3V8h-3v3zm0 4h3v-3h-3v3zm0 4h3v-3h-3v3zm-5 0h4v-3h-4v3zm0 4h4v-3h-4v3zm-5 0h4v-3h-4v3zm-5 0h4v-3H5v3zm0-4h4v-3H5v3zm-4 0h3v-3H1v3zm0-4h3v-3H1v3zm0-4h3V8H1v3zm4 0h4V8H5v3zm5 0h4V8h-4v3zm5 0h4V8h-4v3zm0 4h4v-3h-4v3zM5 15h4v-3H5v3zm5 4h4v-3h-4v3zm0-4h4v-3h-4v3zM2.737 1h18.37C22.188 1 23 1.759 23 2.765V7H1V2.765C1 1.709 1.698 1 2.737 1zm18.37-1H2.738C1.15 0 0 1.163 0 2.765v18.43C0 22.82 1.15 24 2.737 24h18.37C22.73 24 24 22.768 24 21.195V2.765C24 1.188 22.757 0 21.108 0z" fill="#2E3A4B"></path><path d="M7.642 3.232a.333.333 0 1 1 0 .666.333.333 0 0 1 0-.666m0 1.665c.735 0 1.333-.598 1.333-1.332 0-.735-.598-1.333-1.333-1.333-.734 0-1.332.598-1.332 1.333 0 .734.598 1.332 1.332 1.332M16.358 3.232a.333.333 0 1 1 0 .665.333.333 0 0 1 0-.665m0 1.665c.734 0 1.332-.598 1.332-1.332 0-.735-.598-1.333-1.332-1.333-.735 0-1.333.598-1.333 1.333 0 .734.598 1.332 1.333 1.332" fill="#2E3A4B"></path></g></svg> -->

                                                <!-- <div class="room_flex">
                                          <small>Available now</small>
                                        </div> -->
                                                <img src="https://okroomie.com/public/assets/frontend/images/hourglass.png" />
                                                <span> Stay Period {{$data->min_length_of_stay}}</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 100 100">
                                                    <path
                                                        fill="currentColor"
                                                        d="M77.067 59.255L62.99 52.54l-5.754-2.745l.301-.208h7.833a2.196 2.196 0 0 0 2.196-2.196v-5.779h-.02c-.228-7.653-2.767-14.425-6.622-18.894c-2.71-3.484-6.605-5.681-10.971-5.681c-4.732 0-8.911 2.586-11.625 6.593c-3.435 4.452-5.664 10.833-5.877 17.982h-.02v5.779c0 1.213.983 2.196 2.196 2.196h7.855c.155.105.312.207.469.309L37.4 52.48l-14.534 6.768c-1.152.54-1.936 1.776-2.065 3.198a4.467 4.467 0 0 0-.046.626v16.005c0 2.146 1.495 3.884 3.34 3.884h51.806c1.846 0 3.34-1.739 3.34-3.884V63.072c0-.805-.212-1.563-.582-2.196c-.359-.711-.907-1.29-1.592-1.621z"
                                                    />
                                                    <path
                                                        fill="currentColor"
                                                        d="M25.646 52.52v-6.081h.027c.243-8.172 2.377-15.627 5.776-21.472c-1.654-1.008-3.513-1.623-5.511-1.623c-6.666 0-12.062 6.28-12.062 14.034c0 5.425 2.651 10.12 6.524 12.457l-16.349 7.61c-1.02.479-1.691 1.629-1.691 2.915v12.903c0 1.729 1.209 3.13 2.694 3.13h10.805v-13.54c0-3.503 1.938-6.672 4.943-8.08l4.844-2.253zm70.302 5.115L79.6 50.025c3.873-2.337 6.524-7.032 6.524-12.457c0-7.754-5.396-14.034-12.062-14.034c-1.998 0-3.857.615-5.511 1.623c3.399 5.845 5.532 13.3 5.776 21.472h.027v6.081l4.844 2.256c3.005 1.407 4.943 4.576 4.943 8.08v13.54h10.805c1.485 0 2.694-1.401 2.694-3.13V60.55c-.001-1.286-.672-2.436-1.692-2.915z"
                                                    />
                                                </svg>
                                                <span> Roommate preference Females only</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg width="23" height="20" label="">
                                                    <path
                                                        d="M.96 16.705h21.079v-3.833H.96v3.833zM5.444 9.04h12.124c2.263 0 4.2 1.285 4.448 2.874H.996c.249-1.59 2.184-2.874 4.448-2.874zm4.138-3.274v2.316H5.75V5.726c0-.154.054-.286.143-.355.069-.052.152-.062.248-.035 1.037.28 2.04.29 2.978.033a.332.332 0 0 1 .298.06.423.423 0 0 1 .165.337zm7.666 0v2.316h-3.832V5.726c0-.154.054-.286.144-.355.068-.052.15-.062.247-.035 1.036.281 2.038.292 2.977.033a.327.327 0 0 1 .3.06.426.426 0 0 1 .164.337zM2.876 1.375h17.247V8.59a6.473 6.473 0 0 0-1.917-.477V5.766c0-.43-.202-.84-.54-1.098a1.3 1.3 0 0 0-1.137-.223c-.77.212-1.603.2-2.47-.034a1.223 1.223 0 0 0-1.08.198c-.332.252-.521.66-.521 1.117v2.356H10.54V5.766c0-.43-.202-.84-.54-1.099a1.3 1.3 0 0 0-1.136-.222c-.772.212-1.602.2-2.471-.034a1.222 1.222 0 0 0-1.08.198c-.332.252-.521.66-.521 1.117v2.39c-.683.066-1.33.231-1.916.48V1.374zm18.205 7.73V.895a.479.479 0 0 0-.48-.478H2.398a.479.479 0 0 0-.479.479v8.219C.761 9.887.012 11.018.012 12.257v.085c-.001.018-.01.032-.01.051v4.785l-.002.01v1.822a.48.48 0 0 0 .958 0v-1.347H22.04v1.347a.48.48 0 0 0 .958 0v-6.603c0-.005.003-.009.003-.014v-.136c0-1.243-.753-2.379-1.92-3.152z"
                                                        fill="#2E3A4B"
                                                        fill-rule="evenodd"
                                                    ></path>
                                                </svg>
                                                <span>{{$data->room_furnishing}}</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M26 19a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 18a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm20.693-5l.42 1.119C29.253 15.036 30 16.426 30 18v9c0 1.103-.897 2-2 2h-2c-1.103 0-2-.897-2-2v-2H8v2c0 1.103-.897 2-2 2H4c-1.103 0-2-.897-2-2v-9c0-1.575.746-2.965 1.888-3.882L4.308 13H2v-2h3v.152l1.82-4.854A2.009 2.009 0 0 1 8.693 5h14.614c.829 0 1.58.521 1.873 1.297L27 11.151V11h3v2h-2.307zM6 25H4v2h2v-2zm22 0h-2v2h2v-2zm0-2v-5c0-1.654-1.346-3-3-3H7c-1.654 0-3 1.346-3 3v5h24zm-3-10h.557l-2.25-6H8.693l-2.25 6H25zm-15 7h12v-2H10v2z"
                                                    ></path>
                                                </svg>
                                                <span>{{$data->parking}}</span>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="sub__title_room">
                                        <h3>My Room Preference </h3>
                                    </div>

                                    <ul>
                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M28 4a2 2 0 0 1 1.995 1.85L30 6v7.839l1.846 5.537a3 3 0 0 1 .115.468l.03.24.009.24V30h-2v-2H2v2H0v-9.675a3 3 0 0 1 .087-.717l.067-.232L2 13.836V6a2 2 0 0 1 1.697-1.977l.154-.018L4 4zm2 18H2v4h28zm-1.388-6H3.387l-1.333 4h27.891zM28 6H4v8h2v-4a2 2 0 0 1 1.85-1.995L8 8h16a2 2 0 0 1 1.995 1.85L26 10v4h2zm-13 4H8v4h7zm9 0h-7v4h7z"
                                                    ></path>
                                                </svg>
                                                <span>Queen bed</span>
                                            </div>
                                        </li>
                                            @if($data->drawers)
                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M21 14H3m0-6h18m-10 9h2m-2-6h2m-2-6h2m8-2.4v16.8a.6.6 0 0 1-.6.6H3.6a.6.6 0 0 1-.6-.6V2.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6ZM17.5 20v2m-11-2v2"
                                                    />
                                                </svg>
                                                <span>Drawers</span>
                                            </div>
                                        </li>
                                        @endif
                                        @if($data->wardrobe)


                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M25 1a3 3 0 0 1 2.995 2.824L28 4v22a3 3 0 0 1-2.824 2.995L25 29v2h-2v-2H9v2H7v-2a3 3 0 0 1-2.995-2.824L4 26V4a3 3 0 0 1 2.824-2.995L7 1h18zm1 20H6v5a1 1 0 0 0 .883.993L7 27h18a1 1 0 0 0 .993-.883L26 26v-5zm-10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm9-20h-8v16h9V4a1 1 0 0 0-.883-.993L25 3zM15 3H7a1 1 0 0 0-.993.883L6 4v15h9V3zm-3 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm8 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
                                                    ></path>
                                                </svg>
                                                <span>Wardrobe</span>
                                            </div>
                                        </li>
                                        @endif
                                        @if($data->chair)
                                        <li>
                                            <div class="sub__room__details">
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                                    <path
                                                        fill="currentColor"
                                                        d="M212 92.2V72a36 36 0 0 0-36-36H80a36 36 0 0 0-36 36v20.2a36 36 0 0 0 0 71.6V200a12 12 0 0 0 12 12h144a12 12 0 0 0 12-12v-36.2a36 36 0 0 0 0-71.6ZM80 44h96a28.1 28.1 0 0 1 28 28v20.2a36.1 36.1 0 0 0-32 35.8v4H84v-4a36.1 36.1 0 0 0-32-35.8V72a28.1 28.1 0 0 1 28-28Zm128.3 112h-.3a4 4 0 0 0-4 4v40a4 4 0 0 1-4 4H56a4 4 0 0 1-4-4v-40a4 4 0 0 0-4-4h-.3A28 28 0 1 1 76 128v40a4 4 0 0 0 8 0v-28h88v28a4 4 0 0 0 8 0v-40a28 28 0 1 1 28.3 28Z"
                                                    />
                                                </svg>
                                                <span>Chair</span>
                                            </div>
                                        </li>
                                        @endif
                                        @if($data->desk)
                                        <li>
                                            <div class="sub__room__details">
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                                    <path
                                                        d="M26 2a1 1 0 0 1 .922.612l.04.113 2 7a1 1 0 0 1-.847 1.269L28 11h-3v5h6v2h-2v13h-2l.001-2.536a3.976 3.976 0 0 1-1.73.527L25 29H7a3.982 3.982 0 0 1-2-.535V31H3V18H1v-2h5v-4a1 1 0 0 1 .883-.993L7 11h.238L6.086 8.406l1.828-.812L9.427 11H12a1 1 0 0 1 .993.883L13 12v4h10v-5h-3a1 1 0 0 1-.987-1.162l.025-.113 2-7a1 1 0 0 1 .842-.718L22 2h4zm1 16H5v7a2 2 0 0 0 1.697 1.977l.154.018L7 27h18a2 2 0 0 0 1.995-1.85L27 25v-7zm-16-5H8v3h3v-3zm14.245-9h-2.491l-1.429 5h5.349l-1.429-5z"
                                                    ></path>
                                                </svg>
                                                <span>Desk</span>
                                            </div>
                                        </li>
                                        @endif
                                    </ul>
                                </div>

                                <div class="adsgif__banner" style="background: url(https://okroomie.com/public/assets/frontend/images/just-2.gif);">
                                   <!--  <h2></h2> -->
                                    <button>Learn more </button>
                                </div>

                                <div class="home__discrription">
                                    <h2 class="mb-3">My ideal locations</h2>
                                    <div class="my__ideal_location">
                                       <ul>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>{{$data->ideal_location}}</span>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>newtown,2020</span>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>newtown,2020</span>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>newtown,2020</span>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>newtown,2020</span>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>newtown,2020</span>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="loc_sub">
                                                   <span>newtown,2020</span>
                                               </div>
                                           </li>
                                       </ul>
                                    </div>
                                </div>

                                <!-- <div class="distance__section">
                                    <div class="distance__title">
                                        <h2>Distance to</h2>
                                        <select>
                                            <option>lorem text</option>
                                            <option>lorem text</option>
                                            <option>lorem text</option>
                                            <option>lorem text</option>
                                            <option>lorem text</option>
                                        </select>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="distance__sub">
                                                <svg viewBox="0 0 24 24" width="30" height="30" class="css-128npmf">
                                                    <title>by vehicle</title>
                                                    <path fill="none" stroke="currentColor" stroke-miterlimit="10" d="M19.5 10.5h-2M6.5 10.5h-2M10.5 15.5h3M6.5 11.5h11"></path>
                                                    <path
                                                        d="M18.7 12.8l-1.6-2.6-.2-.4-.5-1.4A2 2 0 0 0 14.6 7H9.4a2 2 0 0 0-1.9 1.4l-.4 1.4-.2.4-1.6 2.6a2 2 0 0 0-.3 1V17a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3.1a2 2 0 0 0-.3-1.1z"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                    ></path>
                                                    <path d="M4.5 14.5H8a.5.5 0 0 1 .5.5v.5a1 1 0 0 1-1 1h-3v-2zM16 14.5h3.5v2h-3a1 1 0 0 1-1-1V15a.5.5 0 0 1 .5-.5z" fill="none" stroke="currentColor"></path>
                                                    <path fill="currentColor" d="M6 18h3v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zM15 18h3v2a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-2z"></path>
                                                </svg>
                                                <span>6 mins</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="distance__sub">
                                                <svg width="30" height="30" viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-gsqvet">
                                                    <title>by train</title>
                                                    <rect x="5" y="3" width="14" height="14" rx="2" ry="2" fill="none" stroke="currentColor" stroke-width="2"></rect>
                                                    <path fill="none" stroke="currentColor" stroke-width="2" d="M9 17l-3 4m9-4l3 4M7 20h10"></path>
                                                    <path fill="none" stroke="currentColor" stroke-miterlimit="10" d="M6 9.5h12"></path>
                                                    <circle fill="currentColor" cx="9" cy="13" r="1"></circle>
                                                    <circle fill="currentColor" cx="15" cy="13" r="1"></circle>
                                                </svg>
                                                <span>22 mins</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="distance__sub">
                                                <svg width="30" height="30" viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-gsqvet">
                                                    <title>walking</title>
                                                    <path fill="none" stroke="currentColor" stroke-width="2" d="M7 21l3-3v-5h1l4 4v4"></path>
                                                    <path stroke="currentColor" stroke-width="2" d="M10 13l2-5h1l-2 5h-1z"></path>
                                                    <path fill="none" stroke="currentColor" stroke-width="2" d="M6 12l1-3 4-1h3l2 3h3"></path>
                                                    <circle fill="currentColor" cx="13" cy="4" r="2"></circle>
                                                </svg>
                                                <span>31 mins</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="distance__sub">
                                                <svg width="30" height="30" viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-gsqvet">
                                                    <title>by bicycle</title>
                                                    <circle cx="19" cy="16" r="4" fill="none" stroke="currentColor" stroke-width="2"></circle>
                                                    <circle cx="5" cy="16" r="4" fill="none" stroke="currentColor" stroke-width="2"></circle>
                                                    <path fill="none" stroke="currentColor" stroke-width="2" d="M9 10l6.5-2-3.5 6-7 2 4-6zM7 7l2 3M6 7h3m8-3l-2 1 4 11"></path>
                                                </svg>
                                                <span>6 mins</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>

                            <div class="col-md-4">
                                <div class="message__box">
                                    <div class="message__inner__box">
                                        <div class="img__message">
                                            <img src="https://okroomie.com/public/assets/frontend/images/demo2.jpg" />
                                        </div>
                                        <div class="top__user">
                                            <h4>{{$data->your_first_name}}</h4>
                                            <h3 class="mb-2">Online Today</h3>
                                            <div class="styles__responseRate">
                                                <div class="styles__text">
                                                    Response rate:
                                                    <span class="precent">100%</span>
                                                </div>
                                            </div>

                                            <div class="styles__responseRate responseRatetime mt-2">
                                                <div class="styles__text">
                                                    Response time
                                                    <span class="precent">within an hour</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box__message">
                                            <input type="text" name="" class="form-control" />
                                        </div>
                                        <button class="btn">Send Message</button>
                                    </div>
                                    <div class="social__media__icons">
                                        <h2>Verified on social media</h2>
                                        <ul>
                                            <li>
                                                <a href="#"> <span class="right__mark"></span><i class="fa fa-facebook"></i></a>
                                            </li>

                                            <li>
                                                <a href="#"> <span class="right__mark"></span><i class="fa fa-envelope-o"></i></a>
                                            </li>

                                            <li>
                                                <a href="#"> <span class="right__mark cross__mark"></span><i class="fa fa-phone"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="report__section">
                                    <a href="#">
                                        <span class="report_span">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 16px; width: 16px; fill: currentcolor;">
                                                <path d="M28 6H17V4a2 2 0 0 0-2-2H3v28h2V18h10v2a2 2 0 0 0 2 2h11l.115-.006a1 1 0 0 0 .847-1.269L27.039 14l1.923-6.724A1 1 0 0 0 28 6z"></path>
                                            </svg>
                                        </span>
                                        Report this user
                                    </a>
                                </div>

                                <div class="blog___links">
                                    <h2>Renting tips for Shared Accommodations</h2>
                                    <ul>
                                        <li><a href="">Why a viewing is important</a></li>
                                        <li><a href="">Why you should use the messaging system</a></li>
                                        <li><a href="">Tips for finding accommodation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="inquary__tab">
                                    <h2>Get In touch with me</h2>
                                    <p>Get in touch <span>Tanisha Reynolds</span> and schedule a 1:1 Video call.</p>
                                    <button class="btn btn-sucsess">Book inspection time</button>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="inquary__tab">
                                    <h2>Can't do a Video call ?</h2>
                                    <p>Contact the <span>Tanisha Reynolds</span>  and organize an inspection time Request online inspection button ko change karo and say</p>
                                    <button class="btn btn-sucsess transprent">Book and inspection time</button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="map__section">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3733110.8978665643!2d78.42296105!3d23.9740114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1649759619556!5m2!1sen!2sin"
                                        width="600"
                                        height="450"
                                        style="border: 0;"
                                        allowfullscreen=""
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"
                                    ></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript">
            // $('.owl-carousel').owlCarousel({
            //     loop:true,
            //     margin:10,
            //     nav:true,
            //     navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            //     responsive:{
            //         0:{
            //             items:1
            //         },
            //         600:{
            //             items:1
            //         },
            //         1000:{
            //             items:1
            //         }
            //     }
            // })
             $(function () {
                $("input.steprd").checkboxradio({
                    icon: false
                });
            });
        </script>
    </body>
</html>
