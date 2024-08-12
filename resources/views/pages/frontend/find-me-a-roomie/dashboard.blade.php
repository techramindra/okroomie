<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Okroomie</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}" />

    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/owl.theme.default.css')}}" />

    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/js/lightboxed.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script> -->

    <style type="text/css">
        /* modal  inspection */
        p.inspection_modal_paragraph {
            margin-top: 5%;
            font-size: 12px;
            padding-left: 34px;
        }

        .modal-body {
            text-align: center;
        }

        .modal-footer {
            justify-content: center;
        }

        .modal-header {
            border-bottom: 0 none;
        }

        .modal-footer {
            border-top: 0 none;
        }

        h2.insepection_modal_heading {
            font-size: 15px;
        }

        button#insepection_modal_send_button {
            background-color: black;
        }

        /* end modal inspection */

        .facility_details {
            display: flex;
        }

        .sub__title_room h3 {
            text-transform: capitalize;
        }

        .facility_details div#lastoop ul.uk {
            display: flex;
        }



        .facility_details div#lastoop ul.uk li .main_public {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .facility_details div#lastoop ul.uk li .main_public span {
            margin-left: 5px;
        }

        .popupgallery_main .left__image {
            height: 512px;
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

        .row {
            margin-right: 0px !important;
            /* margin-left: 0px !important; */
        }

        .right__image .row {
            margin-right: -15px !important;
            margin-left: -15px !important;
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

        .top__menu li {
            display: inline-block;
            border-left: 1px solid #ddd;
        }

        .top__menu li a {
            padding: 10px 10px;
            color: #080808;
            font-size: 1rem;
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

        .title__room {
            display: flex;
            justify-content: space-between;
            width: 73%;
        }

        .title__room div#ukroom_de {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .title__room div#ukroom_de span {
            margin-left: 10px;
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
            font-size: 1rem !important;
            line-height: 1.375rem !important;
            font-family: 'Open Sans', sans-serif !important;
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
            /* border-left: 1px solid #333; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            /* border-radius: 5px; */
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
            font-size: 1rem;
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
            margin-top: -15px;
            text-transform: capitalize;
            outline: none;
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
            font-size: 1rem;
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
            font-size: 1rem;
            font-weight: 400;
        }

        .property__welcome {}

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
            width: 40px;
            height: 40px;
            border: 1px solid #353333;
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
            font-size: 1rem;
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
            font-size: 1rem;
        }

        .adsgif__banner {
            background-repeat: no-repeat;
            padding: 45px;
            border: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            background-size: cover !important;
            background-position: center center !important;
            position: relative;
            width: 100%;
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
            font-size: 1rem;
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
            margin-bottom: 10px
        }

        .blog___links a {
            color: gray;
            text-decoration: underline;
            font-size: 1rem;
        }

        .mmmkh {
            display: flex;
            justify-content: space-between;
            align-content: center;
        }

        .mmmkh .condhhh {
            width: 48%;
            display: flex;
        }

        .mmmkh .condhhh span {
            margin-left: 10px;
        }


        .blog___links {
            text-align: center;
        }

        span.span_1 {
            font-weight: 500;
        }

        ul.my-new-ul {
            border: 1px solid #D4D7DC;
            border-radius: 5px;
        }

        /* ul.my-new-ul li {width: 190px;border: 1px solid ;} */
        ul.my-new-ul li {
            width: 146px;
        }

        .may_number a {

            text-transform: capitalize;
            color: #212529;
            background: #eaebec;
            width: 190px;
            margin: auto;
            border-radius: 30px;
            box-shadow: 0px 2px 10px -9px black;
            border: 1px solid #dddd;
            padding: 3px 20px;
            font-size: 1rem;
            margin-top: 7px !important;
        }

        .may_number {
            margin-top: 10px;
        }


        div#exampleModalDDd h5#exampleModalLabel {
            text-align: center;
            display: block;
            margin-left: 20px !important;
            margin: auto;
            text-transform: capitalize;
            width: 100%;
        }


        div#exampleModalDDd p.jk_numer {
            text-align: center;
            font-size: 30px;
            color: #008FB4;
        }


        div#jacks_numberm p.same {
            font-size: 1rem;
            text-align: center;
            width: 90%;
            margin: auto;
            margin-bottom: 10px;
        }

        .message__inner__box .top__user h3.mb-2 {
            font-size: 1rem;
        }

        textarea#setanswer {
            margin: 0;
            padding: 0;
            width: 100%;
            border: 1px solid #CED4DA;
            border-radius: 5px;
            outline: none;
        }

        p#setquestion {
            font-size: 1rem;
            text-transform: capitalize;
            margin: 0;
            padding: 0;
        }



        textarea#setanswer {
            margin: 0;
            padding: 0;
            width: 100%;
            border: 1px solid #CED4DA;
            border-radius: 5px;
            outline: none;
        }

        p#setquestion {
            font-size: 1rem;
            text-transform: capitalize;
            margin: 0;
            padding: 0;
        }

        input#submitfeedbackbtn {
            background: #008FB4;
            border: none;
            padding: 10px 20px;
            color: white;
            text-transform: capitalize;
            border-radius: 5px;
            margin: auto;
            display: block;
            margin-top: 10px;
            outline: none;
        }


        button.my_new_submit_butto {
            background: #333;
            color: #fff;
            padding: 10px 30px;
            border: 1px solid #333;
            font-size: 14px;
            margin: 20px auto;
            display: block;
            border-radius: 5px;
            font-weight: 500;
        }


        /* *{
            font-family: 'Open Sans', sans-serif !important;
        } */
    </style>

    <style>
        @media screen and (min-width: 768px) 
        {

            /* show 3 items */
            .carouselPrograms .carousel-inner .active,
            .carouselPrograms .carousel-inner .active+.carousel-item,
            .carouselPrograms .carousel-inner .active+.carousel-item+.carousel-item {
                display: block;
            }

            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item,
            .carouselPrograms .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left)+.carousel-item+.carousel-item {
                transition: none;
            }

            .carouselPrograms .carousel-inner .carousel-item-next,
            .carouselPrograms .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carouselPrograms .carousel-inner .active.carousel-item+.carousel-item+.carousel-item+.carousel-item {
                position: absolute;
                top: 0;
                right: -33.333%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .carouselPrograms .active.carousel-item-left+.carousel-item-next.carousel-item-left,
            .carouselPrograms .carousel-item-next.carousel-item-left+.carousel-item,
            .carouselPrograms .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item,
            .carouselPrograms .carousel-item-next.carousel-item-left+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carouselPrograms .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .carouselPrograms .active.carousel-item-right+.carousel-item-prev.carousel-item-right,
            .carouselPrograms .carousel-item-prev.carousel-item-right+.carousel-item,
            .carouselPrograms .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item,
            .carouselPrograms .carousel-item-prev.carousel-item-right+.carousel-item+.carousel-item+.carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }
        }

        @media screen and (min-width: 768px) {

            div#carouselExampleControls2 {
                display: none;
            }

        }

        @media screen and (max-width: 767px) {

            .popupgallery_main .left__image {
                height: auto;
            }

            .facility_details {
                display: unset;
            }

            .top_Photos_section {
                display: none;
            }
        }
        .slidermain {
    display: flex;
    justify-content: space-between;
}

    </style>

</head>

<body>



    @php
    if(!empty($plan))
    {
    $free_plan_id='';
    foreach($plan->plan_roomie as $vals)
    {
    if(((($vals->title=='free') || ($vals->title=='Free')) && (($vals->price=='') || ($vals->price==0))))
    {
    $free_plan_id=$vals->id;
    }
    }
    }

    @endphp


    <!-- Online Inspection modal-->
    <!-- Modal -->

    <div class="modal fade" id="onlineInspectionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="sendInsepectionMessage1">
                    @csrf
                    <div class="form-group">
                        <div class="modal-body">
                            <h2 class="insepection_modal_heading">Message to request an Online inspection</h2>
                            <p class="inspection_modal_paragraph">Introduce yourself, describe why you are interested in the room and why you think you would be a great fit for the home.</p>
                            <textarea class="form-control" id="book_insepection_message_id_online" name="message" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" id="insepection_modal_send_button_online" class="btn btn-primary">Send Message to {{$user->your_first_name}}</button>
                        </div>
                        <div class="text text-danger" style="text-align:center;">
                            <p id="error_message_room_inspection_online"></p>
                        </div>



                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalDD" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">What are you reporting?</h5>
                    <br>
                    <div class="success_error_message">
                        <p id="success_error_message"></p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1"><SMall>Reason for report</SMall></label>
                        <select class="form-control" onchange="toggle_div_fun()" id="exampleFormControlSelect1">
                            <!-- <option onclick="toggle_div_fun('sectiontohide');"> -->
                            <option>Please select</option>
                            <option>Suspected Scammer</option>
                            <option>Offensive and inappropriate content</option>
                            <option>Listing no longer available </option>
                            <option>Listing contains incorrect information</option>
                            <option>Listing contains copyright material</option>
                            <option>Problem with website or app</option>
                            <option>Spam</option>
                            <option>Listing contains contact information</option>






                        </select>
                    </div>

                    <div id="myDIV" style="display:none">

                        <!-- <input type="text" name="question" id="setquestion"> -->
                        <p id="setquestion"></p>
                        <br>
                        <textarea name="answer" id="setanswer" rows=4></textarea>


                    </div>
                    <input type="submit" onclick="feedbackSubmitForm()" id="submitfeedbackbtn" name="submit" value="Submit feedback" />
                </div>

            </div>
        </div>
    </div>





    <div class=" modal fade jack_number" id="exampleModalDDd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{$user->your_first_name}} 's number is</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="jacks_numberm">
                    <p class="jk_numer"> {{$user->mobile}}</p>

                    <p class="same">Get texting ! As a courtesy do mentioned that you found their listing on okroomie.com</p>

                    <p class="same">Please know that mobile number are only to contact members about shared accommodation, any other use will lead to your account blocked and deleted.</p>

                </div>

            </div>
        </div>
    </div>


    <div class=" modal fade jack_number" id="exampleModalGotoPlan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="margin-left:30%;" id="exampleModalLabel">Upgrade required</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="jacks_numberm">
                    <a href="{{route('showplan')}}"> <button class="btn btn-primary">View all Plans</button></a>

                    <p class="same">Get texting ! As a courtesy do mentioned that you found their listing on okroomie.com</p>

                    <p class="same">Please know that mobile number are only to contact members about shared accommodation, any other use will lead to your account blocked and deleted.</p>

                </div>

            </div>
        </div>
    </div>







    <div id=" wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <a href="javascript:history.go(-1)" style="color:#000000 !important;">back</a>
                    </div>
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png" />
                        </a>
                    </div>
                    <div class="right">
                        <a href="{{url('/')}}" style="color:#000000 !important;">Close</a>
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
                        {{----
                        <div class="row">
                            <div class="col-md-6 pr-0">
                                <div class="left__image">
                                    <img class="lightboxed" rel="group1" src="{{url('public/images/'.$room_image[0]->image)}}" data-link="{{url('public/images/'.$room_image[0]->image)}}" alt="Image Alt" data-caption="Image Caption" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="right__image">
                        <div class="row">
                            @foreach($room_image as $key=>$room_imageVal)
                            @if($key==0)
                            @php
                            continue;
                            @endphp
                            @endif
                            <div class="col-md-6 p-0">
                                <img class="lightboxed" rel="group1" src="{{url('public/images/'.$room_imageVal->image)}}" data-link="{{url('public/images/'.$room_imageVal->image)}}" alt="Image Alt" data-caption="Image Caption" />
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
            ---}}
            {{-----
            <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img_div"> <img class="card-img-top" src="{{url('public/images/'.$room_image[0]->image)}}" data-link="{{url('public/images/'.$room_image[0]->image)}}" alt="Card image cap">
        </div>
    </div>

    @foreach($room_image as $key=>$room_imageVal)
    @if($key==0)
    @php
    continue;
    @endphp
    @endif

    <div class="carousel-item ">
        <div class="img_div"> <img class="card-img-top" src="{{url('public/images/'.$room_imageVal->image)}}" data-link="{{url('public/images/'.$room_imageVal->image)}}" alt="Card image cap">
        </div>
    </div>

    @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls1" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls1" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </button>
    </div> ------}}
    <div class="container-fluid">
        <div id="carouselExample" class="carouselPrograms carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner row w-100 mx-auto slidermain" role="listbox">
            @foreach($room_image as $k=>$room_imageVal)
                <div class="carousel-item col-md-4 {{$k==0?'active':''}}">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="mx-auto d-block" width="450px" height="300px" src="{{url('public/images/'.$room_imageVal->image)}}" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div class="carousel-item col-md-4 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div> -->
                
               
               
               
                
            
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- for responsive -->


    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel9">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="img_div"> <img class="card-img-top" src="{{url('public/images/'.$room_image[0]->image)}}" data-link="{{url('public/images/'.$room_image[0]->image)}}" alt="Card image cap">
                </div>
            </div>

            @foreach($room_image as $key=>$room_imageVal)
            @if($key==0)
            @php
            continue;
            @endphp
            @endif

            <div class="carousel-item ">
                <div class="img_div"> <img class="card-img-top" src="{{url('public/images/'.$room_imageVal->image)}}" data-link="{{url('public/images/'.$room_imageVal->image)}}" alt="Card image cap">
                </div>
            </div>

            @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls2" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls2" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </button>
    </div>


    <!-- end responsive -->

    <div class="Content__DashBoard">
        <div class="container">
            <div class="row exrtretdfgdfgdfasg" id="d-hf">
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
                                    Video <span class="count__span">5</span>
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <svg viewBox="0 0 24 24" aria-hidden="true" class="domain-icon css-kry84i">
                                        <path fill="none" stroke="currentColor" d="M3 17V7l9 4v10M21 17V7l-9 4v10"></path>
                                        <path d="M3 8.3v7.5a2 2 0 0 0 1.2 1.8l7 3.3a2 2 0 0 0 1.7 0l7-3.3a2 2 0 0 0 1.1-1.9V8.3a2 2 0 0 0-1.2-1.8l-7-3.3a2 2 0 0 0-1.7 0l-7 3.3A2 2 0 0 0 3 8.3z" fill="none" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    360° Virtual Tour <span class="count__span">5</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="some_details__block">
                        <div class="address">
                            <p>{{$data->property_address}}</p>
                            <p class="price__details">
                                <strong>${{$data->weekely_rent}}</strong>
                            </p>
                        </div>

                        <div class="facility_details">
                            <ul>
                                <li>
                                    <div class="details__face">
                                        <svg width="24" height="24" class="domain-icon property-feature__icon css-gsqvet" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill="none" stroke="currentColor" stroke-width="2" d="M4.00002 19.00001v2M20.00002 19.00001v2M8 11h8a5 5 0 0 1 5 5v3H3v-3a5 5 0 0 1 5-5z"></path>
                                            <path d="M6.5 11V9A1.5 1.5 0 0 1 8 7.5h2A1.5 1.5 0 0 1 11.5 9v1M12.5 10V9A1.5 1.5 0 0 1 14 7.5h2A1.5 1.5 0 0 1 17.5 9v2" fill="none" stroke="currentColor"></path>
                                            <path d="M20 13V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8" fill="none" stroke="currentColor" stroke-width="2"></path>
                                            <path fill="none" stroke="currentColor" d="M3.5 15.5h17"></path>
                                        </svg>
                                        <span>{{$data->total_bedrooms}}</span>
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
                                        <span>{{$data->total_bathrooms}}</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="details__face">
                                        @if($data->public_transport!="Train station")
                                        <svg width="24" height="24" class="domain-icon property-feature__icon css-gsqvet" viewBox="0 0 24 24" aria-hidden="true">
                                            <path fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" d="M21 10h-2M5 10H3"></path>
                                            <path fill="none" stroke="currentColor" stroke-miterlimit="10" d="M9.5 15.5h5m-9-5h13"></path>
                                            <path d="M20.6 12.6L19 10l-1.5-3.7A2 2 0 0 0 15.6 5H8.4a2 2 0 0 0-1.9 1.3L5 10l-1.6 2.6a3 3 0 0 0-.4 1.5V17a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-2.9a3 3 0 0 0-.4-1.5z" fill="none" stroke="currentColor" stroke-width="2"></path>
                                            <path d="M7 19v1a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1m14 0v1a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1" stroke="currentColor" stroke-width="2"></path>
                                            <path d="M3.5 14.5H7a.5.5 0 0 1 .5.5v.5a1 1 0 0 1-1 1h-3v-2zm13.5 0h3.5v2h-3a1 1 0 0 1-1-1V15a.5.5 0 0 1 .5-.5z" fill="none" stroke="currentColor"></path>
                                        </svg>
                                        @else

                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M344 48h-24a16 16 0 0 0-16-16h-96a16 16 0 0 0-16 16h-24a56.16 56.16 0 0 0-56 56v247c0 35.3 144 65 144 65s144-29.7 144-65V104a56 56 0 0 0-56-56Zm-88 304a48 48 0 1 1 48-48a48 48 0 0 1-48 48Zm96-160a16 16 0 0 1-16 16H176a16 16 0 0 1-16-16v-64a16 16 0 0 1 16-16h160a16 16 0 0 1 16 16ZM144 464h224m-32-32l48 48m-208-48l-48 48" />
                                        </svg>

                                        @endif

                                        <span>{{$data->total_number_of_flatemates}}</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="details__face">
                                        <!--  <i class="fa fa-hourglass-end" aria-hidden="true"></i> -->
                                        <img src="https://okroomie.com/public/assets/frontend/images/hourglass.png" />
                                        <span>Stay Period</span>
                                        <span>{{$data->max_length_of_stay}}</span>
                                    </div>
                                </li>
                            </ul>

                            <div id="lastoop">
                                <ul class="uk">

                                    <li>
                                        <div class="main_public">

                                            <span class="span_1">Roommates : </span>
                                            <span>....</span>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="main_public">

                                            <span class="span_1">Public transport : </span>
                                            <span>Train</span>

                                        </div>
                                    </li>

                                    <li></li>
                                </ul>
                            </div>
                        </div>

                        <div class="some_sub_section">
                            <ul class="sub_class">
                                <li>Available from <strong>{{date("l, jS \of F Y ",strtotime($data->date_available))}}</strong></li>
                                <li>Bond <strong>{{$data->bond}}</strong></li>

                                <li>Bill are
                                    <strong></strong>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="home__discrription my-3">

                        <div class="mmmkh">
                            <h2>Property welcomes</h2>
                            <div class="condhhh">
                                <h2>Roomie Preference : </h2>
                                <span>lorem lor</span>
                            </div>
                        </div>

                        <div class="property__welcome mt-3">
                            <ul>
                                @if($data->students)
                                <li>
                                    <div class="welcome__sub">
                                        <img src="https://okroomie.com/public/assets/frontend/images/student.svg" />
                                    </div>
                                    <span>student</span>
                                </li>
                                @endif @if($data->children)
                                <li>
                                    <div class="welcome__sub">
                                        <img src="https://okroomie.com/public/assets/frontend/images/malefemale.svg" />
                                    </div>
                                    <span>children</span>
                                </li>
                                @endif @if($data->retirees)
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
                                @if($data->jobseeker_welfare)

                                <li>
                                    <div class="welcome__sub">
                                        <img src="https://okroomie.com/public/assets/frontend/images/jobseekar.png" />
                                    </div>
                                    <span>jobseeker/ welfare</span>
                                </li>
                                @endif
                                @if($data->professionals)
                                <li>
                                    <div class="welcome__sub">
                                        <img src="https://okroomie.com/public/assets/frontend/images/jobseekar.png" />
                                    </div>
                                    <span>Professionals</span>
                                </li>
                                @endif
                                @if($data->smokers)
                                <li>
                                    <div class="welcome__sub">
                                        <img src="https://okroomie.com/public/assets/frontend/images/jobseekar.png" />
                                    </div>
                                    <span>Smokers</span>
                                </li>
                                @endif


                            </ul>


                        </div>
                    </div>

                    <div class="home__discrription">
                        <h2>Property Description</h2>
                        <p>
                            <!-- property_description -->
                            {{$data->about_yourself}}
                        </p>
                    </div>

                    <div class="room__details">
                        <div class="title__room">
                            <h2>What this place offers</h2>
                        </div>
                        <ul>

                            @if($data->kitchen)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M26 1a5 5 0 0 1 5 5c0 6.389-1.592 13.187-4 14.693V31h-2V20.694c-2.364-1.478-3.942-8.062-3.998-14.349L21 6l.005-.217A5 5 0 0 1 26 1zm-9 0v18.118c2.317.557 4 3.01 4 5.882 0 3.27-2.183 6-5 6s-5-2.73-5-6c0-2.872 1.683-5.326 4-5.882V1zM2 1h1c4.47 0 6.934 6.365 6.999 18.505L10 21H3.999L4 31H2zm14 20c-1.602 0-3 1.748-3 4s1.398 4 3 4 3-1.748 3-4-1.398-4-3-4zM4 3.239V19h3.995l-.017-.964-.027-.949C7.673 9.157 6.235 4.623 4.224 3.364l-.12-.07zm19.005 2.585L23 6l.002.31c.045 4.321 1.031 9.133 1.999 11.39V3.17a3.002 3.002 0 0 0-1.996 2.654zm3.996-2.653v14.526C27.99 15.387 29 10.4 29 6a3.001 3.001 0 0 0-2-2.829z"></path>
                                    </svg>
                                    <span>Kitchen</span>
                                </div>
                            </li>
                            @endif
                            @if($data->wifi)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="m15.9999 20.33323c2.0250459 0 3.66667 1.6416241 3.66667 3.66667s-1.6416241 3.66667-3.66667 3.66667-3.66667-1.6416241-3.66667-3.66667 1.6416241-3.66667 3.66667-3.66667zm0 2c-.9204764 0-1.66667.7461936-1.66667 1.66667s.7461936 1.66667 1.66667 1.66667 1.66667-.7461936 1.66667-1.66667-.7461936-1.66667-1.66667-1.66667zm.0001-7.33323c3.5168171 0 6.5625093 2.0171251 8.0432368 4.9575354l-1.5143264 1.5127043c-1.0142061-2.615688-3.5549814-4.4702397-6.5289104-4.4702397s-5.5147043 1.8545517-6.52891042 4.4702397l-1.51382132-1.5137072c1.48091492-2.939866 4.52631444-4.9565325 8.04273174-4.9565325zm.0001-5.3332c4.9804693 0 9.3676401 2.540213 11.9365919 6.3957185l-1.4470949 1.4473863c-2.1746764-3.5072732-6.0593053-5.8431048-10.489497-5.8431048s-8.31482064 2.3358316-10.48949703 5.8431048l-1.44709488-1.4473863c2.56895177-3.8555055 6.95612261-6.3957185 11.93659191-6.3957185zm-.0002-5.3336c6.4510616 0 12.1766693 3.10603731 15.7629187 7.9042075l-1.4304978 1.4309874c-3.2086497-4.44342277-8.4328305-7.3351949-14.3324209-7.3351949-5.8991465 0-11.12298511 2.89133703-14.33169668 7.334192l-1.43047422-1.4309849c3.58629751-4.79760153 9.31155768-7.9032071 15.7621709-7.9032071z"></path>
                                    </svg>
                                    <span>Wi-Fi</span>
                                </div>
                            </li>
                            @endif
                            @if($data->parking)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M26 19a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 18a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm20.693-5l.42 1.119C29.253 15.036 30 16.426 30 18v9c0 1.103-.897 2-2 2h-2c-1.103 0-2-.897-2-2v-2H8v2c0 1.103-.897 2-2 2H4c-1.103 0-2-.897-2-2v-9c0-1.575.746-2.965 1.888-3.882L4.308 13H2v-2h3v.152l1.82-4.854A2.009 2.009 0 0 1 8.693 5h14.614c.829 0 1.58.521 1.873 1.297L27 11.151V11h3v2h-2.307zM6 25H4v2h2v-2zm22 0h-2v2h2v-2zm0-2v-5c0-1.654-1.346-3-3-3H7c-1.654 0-3 1.346-3 3v5h24zm-3-10h.557l-2.25-6H8.693l-2.25 6H25zm-15 7h12v-2H10v2z"></path>
                                    </svg>
                                    <span>Free parking on premises</span>
                                </div>
                            </li>
                            @endif

                            @if($data->hot_tub)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M9.5 2a4.5 4.5 0 0 1 3.527 7.295c.609.215 1.173.55 1.66.988l.191.182L17.414 13H31v2h-2v14a2 2 0 0 1-1.85 1.995L27 31H5a2 2 0 0 1-1.995-1.85L3 29V15H1v-2h2.1a5.009 5.009 0 0 1 2.955-3.608A4.5 4.5 0 0 1 9.5 2zm7.085 13H5v14h22V15h-7.586l3.293 3.294-1.414 1.414zM9.5 4a2.5 2.5 0 0 0-1 4.792V11H8a3.001 3.001 0 0 0-2.83 2h9.415l-1.121-1.121a3 3 0 0 0-1.923-.872L11.343 11H10.5V8.792A2.5 2.5 0 0 0 9.5 4zm15.486-3a6.957 6.957 0 0 1-1.803 4.07l-.445.463A8.971 8.971 0 0 0 20.354 11H18.35a10.975 10.975 0 0 1 3.202-7.118A4.961 4.961 0 0 0 22.974 1zm2.007 0h2.004a10.96 10.96 0 0 1-3.202 7.124A4.974 4.974 0 0 0 24.373 11h-2.012a6.97 6.97 0 0 1 1.804-4.064l.444-.462A8.958 8.958 0 0 0 26.993.999z"></path>
                                    </svg>
                                    <span>Hot tub</span>
                                </div>
                            </li>
                            @endif

                            @if($data->tv)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M9 29v-2h2v-2H6a5 5 0 0 1-4.995-4.783L1 20V8a5 5 0 0 1 4.783-4.995L6 3h20a5 5 0 0 1 4.995 4.783L31 8v12a5 5 0 0 1-4.783 4.995L26 25h-5v2h2v2zm10-4h-6v2h6zm7-20H6a3 3 0 0 0-2.995 2.824L3 8v12a3 3 0 0 0 2.824 2.995L6 23h20a3 3 0 0 0 2.995-2.824L29 20V8a3 3 0 0 0-2.824-2.995z"></path>
                                    </svg>
                                    <span>TV</span>
                                </div>
                            </li>
                            @endif
                            @if($data->washing_mashine)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm0 2H4v24h24zM16 7a9 9 0 1 1 0 18 9 9 0 0 1 0-18zm-5.841 7.5c-.342 0-.68.024-1.014.073a7 7 0 0 0 13.107 4.58 8.976 8.976 0 0 1-6.91-2.374l-.236-.23a6.966 6.966 0 0 0-4.947-2.049zM16 9a6.997 6.997 0 0 0-6.066 3.504l.225-.004c2.262 0 4.444.844 6.124 2.407l.237.229a6.979 6.979 0 0 0 4.948 2.05c.493 0 .98-.05 1.456-.151A7 7 0 0 0 16 9zM7 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                    </svg>
                                    <span>Washing machine</span>
                                </div>
                            </li>
                            @endif
                            @if($data->dryer)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M28 2a2 2 0 0 1 1.995 1.85L30 4v24a2 2 0 0 1-1.85 1.995L28 30H4a2 2 0 0 1-1.995-1.85L2 28V4a2 2 0 0 1 1.85-1.995L4 2zm0 2H4v24h24zM16 7a9 9 0 1 1 0 18 9 9 0 0 1 0-18zm0 2a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm-4.795 5.579a6.948 6.948 0 0 1 3.675 1.755l.462.444a8.968 8.968 0 0 0 4.614 2.28 5.017 5.017 0 0 1-2.01 1.55 10.978 10.978 0 0 1-4.255-2.644 4.962 4.962 0 0 0-2.656-1.388 5.001 5.001 0 0 1 .17-1.998zm3.08-3.277a10.96 10.96 0 0 1 3.649 2.419 4.974 4.974 0 0 0 2.995 1.436 4.99 4.99 0 0 1-.064 2.002 6.967 6.967 0 0 1-4.12-1.807l-.462-.445a8.955 8.955 0 0 0-4.07-2.17 5.002 5.002 0 0 1 2.072-1.435zM7 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                    </svg>
                                    <span>Dryer</span>
                                </div>
                            </li>
                            @endif
                            @if($data->security_cameras)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M23 3a2 2 0 0 1 1.995 1.85L25 5v1.522l5-1.999v11.954l-5-2V16a2 2 0 0 1-1.85 1.995L23 18l-6.1.001a5.005 5.005 0 0 1-3.984 3.915 5.002 5.002 0 0 1-4.7 4.08L8 26H4v4H2V20h2v4h4a3.001 3.001 0 0 0 2.872-2.13A5.004 5.004 0 0 1 7.1 18.002L4 18a2 2 0 0 1-1.995-1.85L2 16V5a2 2 0 0 1 1.85-1.995L4 3zM12 14a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm11-9H4v11h3.1a5.002 5.002 0 0 1 9.8 0H23zm5 2.476l-3 1.2v3.647l3 1.2zM7 7a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                    </svg>
                                    <span>Security cameras on property</span>
                                </div>
                            </li>
                            @endif
                            @if($data->air_conditioner)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 3.6V11H2V3.6a.6.6 0 0 1 .6-.6h18.8a.6.6 0 0 1 .6.6ZM18 7h1M2 11l.79 2.584A2 2 0 0 0 4.702 15H6m16-4l-.79 2.584A2 2 0 0 1 19.298 15H18m-8.5-.5s0 7-3.5 7m8.5-7s0 7 3.5 7m-6-7v7" />
                                    </svg>
                                    <span>Air conditioning</span>
                                </div>
                            </li>
                            @endif

                            @if($data->microwave)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                        <rect x="0" y="0" width="48" height="48" fill="none" stroke="none" />
                                        <g fill="none">
                                            <rect width="40" height="30" x="4" y="6" stroke="currentColor" stroke-width="4" rx="2" />
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M38 15h-4m4 6h-4m-24-6h17v12H10z" />
                                            <circle cx="36" cy="27" r="2" fill="currentColor" />
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 36v6m24-6v6" />
                                        </g>
                                    </svg>
                                    <span>Microwave</span>
                                </div>
                            </li>
                            @endif

                            @if($data->balcony)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <path fill="currentColor" d="M20 14.27V10c0-4.42-3.58-8-8-8s-8 3.58-8 8v4.27c-.6.34-1 .99-1 1.73v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-.74-.4-1.39-1-1.73zM7 20H5v-4h2v4zm4 0H9v-4h2v4zm0-6H6v-4c0-2.97 2.16-5.44 5-5.92V14zm2-9.92A6 6 0 0 1 18 10v4h-5V4.08zM15 20h-2v-4h2v4zm4 0h-2v-4h2v4zM8 11c0-.55.45-1 1-1s1 .45 1 1s-.45 1-1 1s-1-.45-1-1zm8 0c0 .55-.45 1-1 1s-1-.45-1-1s.45-1 1-1s1 .45 1 1z" />
                                    </svg>
                                    <span>Balcony/outdoor area</span>
                                </div>
                            </li>
                            @endif

                            @if($data->big_yard_space)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="currentColor" />
                                        <path fill="currentColor" d="M12 19q2.125 0 3.725-1.288q1.6-1.287 2.1-3.237q.15-.6-.275-1.025q-.425-.425-1.025-.275q-1.95.5-3.237 2.1Q12 16.875 12 19Zm0 0q0-2.125-1.287-3.725q-1.288-1.6-3.238-2.1q-.6-.15-1.025.275q-.425.425-.275 1.025q.5 1.95 2.1 3.237Q9.875 19 12 19Zm0-5.05q.65 0 1.1-.45q.45-.45.45-1.1v-.15q.2.15.413.225q.212.075.487.075q.65 0 1.1-.45q.45-.45.45-1.1q0-.5-.238-.875q-.237-.375-.662-.525q.425-.15.662-.525Q16 8.7 16 8.2q0-.65-.45-1.1q-.45-.45-1.1-.45q-.275 0-.487.075q-.213.075-.413.225V6.8q0-.65-.45-1.1q-.45-.45-1.1-.45q-.65 0-1.1.45q-.45.45-.45 1.1v.15q-.2-.15-.412-.225q-.213-.075-.488-.075q-.65 0-1.1.45Q8 7.55 8 8.2q0 .5.238.875q.237.375.662.525q-.425.15-.662.525Q8 10.5 8 11q0 .65.45 1.1q.45.45 1.1.45q.275 0 .488-.075q.212-.075.412-.225v.15q0 .65.45 1.1q.45.45 1.1.45Zm0-2.8q-.65 0-1.1-.438q-.45-.437-.45-1.112q0-.65.45-1.1q.45-.45 1.1-.45q.65 0 1.1.45q.45.45.45 1.1q0 .675-.45 1.112q-.45.438-1.1.438ZM4 22q-.825 0-1.412-.587Q2 20.825 2 20V4q0-.825.588-1.413Q3.175 2 4 2h16q.825 0 1.413.587Q22 3.175 22 4v16q0 .825-.587 1.413Q20.825 22 20 22Zm0-2h16V4H4v16Zm0 0V4v16Z" />
                                    </svg>
                                    <span>Big yard space</span>
                                </div>
                            </li>
                            @endif

                            @if($data->bbq_area)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4.325 9h15.35l-.85-3H5.2ZM12 7.5Zm4.8 3.5H7.225l-.275 2h10.1ZM4 20l1.225-9H3q-.5 0-.788-.4q-.287-.4-.162-.875l1.425-5q.1-.325.35-.525q.25-.2.6-.2h15.15q.35 0 .6.2t.35.525l1.425 5q.125.475-.162.875q-.288.4-.788.4h-2.2l1.2 9h-2l-.675-5H6.675L6 20Z" />
                                    </svg>
                                    <span>Dining table</span>
                                </div>
                            </li>
                            @endif

                            @if($data->refrigerator)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                        <rect x="0" y="0" width="48" height="48" fill="none" stroke="none" />
                                        <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                                            <rect width="28" height="36" x="9" y="4" rx="2" />
                                            <path stroke-linecap="round" d="M9 22h28M9 20v4m28-4v4m-22 5v4m0-22v4m18 25v4m-20-4v4" />
                                        </g>
                                    </svg>
                                    <span>Refrigerator</span>
                                </div>
                            </li>
                            @endif


                            @if($data->bbq_area)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.5 14.5L5 22M8 6s1-1.061 1-2c0-1.333-1-2-1-2m4 4s1-1.061 1-2c0-1.333-1-2-1-2m4 4s1-1.061 1-2c0-1.333-1-2-1-2" />
                                            <path stroke-linejoin="round" d="M16.5 17.5h-9" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m15.5 14.5l2.1 4.5m.9 3a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z" />
                                            <path d="M12 15a7 7 0 0 0 6.975-6.4a.563.563 0 0 0-.575-.6H5.6a.563.563 0 0 0-.575.6A7 7 0 0 0 12 15Z" />
                                        </g>
                                    </svg>
                                    <span>BBQ Area</span>
                                </div>
                            </li>
                            @endif

                            @if($data->gym)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                            <path d="M7.4 7H4.6a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6Zm12 0h-2.8a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6Z" />
                                            <path d="M1 14.4V9.6a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6v4.8a.6.6 0 0 1-.6.6H1.6a.6.6 0 0 1-.6-.6Zm22 0V9.6a.6.6 0 0 0-.6-.6h-1.8a.6.6 0 0 0-.6.6v4.8a.6.6 0 0 0 .6.6h1.8a.6.6 0 0 0 .6-.6ZM8 12h8" />
                                        </g>
                                    </svg>
                                    <span>Gym Area</span>
                                </div>
                            </li>
                            @endif

                            @if($data->heater)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                        <path fill="currentColor" d="M19 17c1.21 0 3-.8 3-3s-1.79-3-3-3h-2V9h2c2.2 0 3-1.79 3-3c0-2.2-1.79-3-3-3h-2V2h-1v1H8V2H7v1H2v2h5v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v1h1v-1h8v1h1v-1h5v-2h-5v-2h2m0-4c.45 0 1 .19 1 1s-.55 1-1 1h-2v-2h2m-3-2H8V9h8v2m3-6c.45 0 1 .2 1 1c0 .45-.19 1-1 1h-2V5h2M8 5h8v2H8V5m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m3 2h8v2H8v-2m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m11 0H8v-2h8v2Z" />
                                    </svg>
                                    <span>Heating</span>
                                </div>
                            </li>
                            @endif

                        </ul>
                    </div>

                    <div class="room__details">
                        <div class="title__room">
                            <h2>Room details</h2>
                            <div id="ukroom_de">


                            </div>
                        </div>
                        <ul>
                            <li>
                                <div class="sub__room__details">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <path fill="none" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" d="M40.5 5.5h-33a2 2 0 0 0-2 2v33a2 2 0 0 0 2 2h33a2 2 0 0 0 2-2v-33a2 2 0 0 0-2-2Z" />
                                            <path fill="none" stroke="currentColor"  stroke-linecap="round" stroke-linejoin="round" d="M17.27 32.43a6 6 0 0 0 5.3 2.37h3.2a5.41 5.41 0 0 0 5.39-5.4h0a5.4 5.4 0 0 0-5.39-5.4h-3.54a5.4 5.4 0 0 1-5.39-5.4h0a5.4 5.4 0 0 1 5.39-5.4h3.2a6 6 0 0 1 5.3 2.37M24 13.2v-2.7m0 27v-2.7" />
                                        </svg> -->
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                        </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 8.4666665 8.4666669" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg" id="layer2">
                                                <path id="path824" d="m4.2333334.26458337c-2.1887462 0-3.96875003 1.78000383-3.96875003 3.96875003 0 2.188746 1.78000383 3.9687499 3.96875003 3.9687499 2.188746 0 3.9687499-1.7800039 3.9687499-3.9687499 0-2.1887462-1.7800039-3.96875003-3.9687499-3.96875003zm0 .52916667c1.9027632 0 3.4416502 1.53681996 3.4416502 3.43958336 0 1.9027632-1.538887 3.4416502-3.4416502 3.4416502-1.9027634 0-3.43958336-1.538887-3.43958336-3.4416502 0-1.9027634 1.53681996-3.43958336 3.43958336-3.43958336zm-.0036169 1.32446696a.26460979.26460979 0 0 0 -.259933.2676839v.2227254c-.4272102.0801429-.7927162.3552394-.7927165.8319906 0 .3307291.1490956.5982189.3493328.753959s.4263305.2247926.624768.2909385c.1984375.066146.3697359.1293849.467155.2051552.097419.07577.1441772.1395265.1441772.337964 0 .4409723-1.0562663.4409723-1.0562663 0a.26464844.26464844 0 1 0 -.5291667 0c0 .4763793.3658309.7519969.7927165.8325075v.2216917a.26464844.26464844 0 1 0 .5291667 0v-.2216917c.426961-.080468.7932332-.3560628.7932332-.8325075 0-.3307292-.149612-.598219-.3498495-.7539591-.2002372-.1557401-.4263305-.2253093-.624768-.2914552-.1984375-.0661458-.3697359-.1288682-.467155-.2046385-.097419-.0757706-.1441772-.1395264-.1441772-.3379639.0000002-.4409718 1.0562663-.4409718 1.0562663 0a.2648417.2648417 0 1 0 .5296834 0c0-.4760347-.366396-.7508571-.7932332-.8314738v-.2232422a.26460979.26460979 0 0 0 -.2692342-.2676839z" fill="#626262" data-original="#626262" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="room_flex">
                                        <span>{{$data->weekely_rent}} Monthly Rent</span>
                                        <small>{{$data->bond}} bond</small>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <path fill="currentColor" d="M6 3v26h16v-2H8V5h10v6h6v2h2V9.6l-.3-.3l-6-6l-.3-.3H6zm14 3.4L22.6 9H20V6.4zM10 13v2h12v-2H10zm17 2v2c-1.7.3-3 1.7-3 3.5c0 2 1.5 3.5 3.5 3.5h1c.8 0 1.5.7 1.5 1.5s-.7 1.5-1.5 1.5H25v2h2v2h2v-2c1.7-.3 3-1.7 3-3.5c0-2-1.5-3.5-3.5-3.5h-1c-.8 0-1.5-.7-1.5-1.5s.7-1.5 1.5-1.5H31v-2h-2v-2h-2zm-17 3v2h7v-2h-7zm9 0v2h3v-2h-3zm-9 4v2h7v-2h-7zm9 0v2h3v-2h-3z" />
                                    </svg>
                                    <span>{{$data->bills}}</span>
                                </div>
                            </li>

                            <li>
                                <div class="sub__room__details">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m13.249 4.518l18.133 2.57l.007 36.412l-18.144-2.57Z" />
                                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m13.245 4.5l21.51.073l-.073 35.781l-3.22.074" />
                                            <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M29.594 26.018c.058 1.54-.644 2.547-1.375 2.265c-.594-.228-1.014-1.222-1.042-2.275c-.027-1.039.281-2.225.903-2.298c.839-.099 1.457.796 1.514 2.308Z" />
                                        </svg> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                                    </svg>
                                    <span>{{$data->accomodation_type}}</span>
                                </div>
                            </li>

                            <li>
                                <div class="sub__room__details">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                            <path fill="currentColor" stroke="currentColor" d="M232 100h-28v-4a4 4 0 0 0-4-4h-64a4 4 0 0 0-4 4v4H60V52a16 16 0 0 1 32 0a4 4 0 0 0 8 0a24 24 0 0 0-48 0v48H24a12 12 0 0 0-12 12v32a52 52 0 0 0 52 52h4v20a4 4 0 0 0 8 0v-20h104v20a4 4 0 0 0 8 0v-20h4a52 52 0 0 0 52-52v-32a12 12 0 0 0-12-12Zm-92 0h56v40h-56Zm96 44a44 44 0 0 1-44 44H64a44 44 0 0 1-44-44v-32a4 4 0 0 1 4-4h108v36a4 4 0 0 0 4 4h64a4 4 0 0 0 4-4v-36h28a4 4 0 0 1 4 4Z" />
                                        </svg> -->
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
                                    <span>Stay Period</span>
                                    <span>{{$data->min_length_of_stay}}</span>
                                </div>
                            </li>

                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                        <path fill="currentColor" d="M2 6.75A2.75 2.75 0 0 1 4.75 4h10.5A2.75 2.75 0 0 1 18 6.75v6.5A2.75 2.75 0 0 1 15.25 16H4.75A2.75 2.75 0 0 1 2 13.25v-6.5ZM4.75 5A1.75 1.75 0 0 0 3 6.75v6.5c0 .966.784 1.75 1.75 1.75h10.5A1.75 1.75 0 0 0 17 13.25v-6.5A1.75 1.75 0 0 0 15.25 5H4.75ZM11 6.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-.793l-1.646 1.647a.5.5 0 0 1-.708-.708L12.293 7H11.5a.5.5 0 0 1-.5-.5Zm-2.354 4.146a.5.5 0 0 1 .708.708L7.707 13H8.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 1 0v.793l1.646-1.647Z" />
                                    </svg>
                                    <span> Room Size Small</span>
                                    <!-- <span>{{$data->preferences_user}}</span> -->
                                </div>
                            </li>

                            <li>
                                <div class="sub__room__details">
                                    <!-- <svg width="23" height="20" label="">
                                            <path d="M.96 16.705h21.079v-3.833H.96v3.833zM5.444 9.04h12.124c2.263 0 4.2 1.285 4.448 2.874H.996c.249-1.59 2.184-2.874 4.448-2.874zm4.138-3.274v2.316H5.75V5.726c0-.154.054-.286.143-.355.069-.052.152-.062.248-.035 1.037.28 2.04.29 2.978.033a.332.332 0 0 1 .298.06.423.423 0 0 1 .165.337zm7.666 0v2.316h-3.832V5.726c0-.154.054-.286.144-.355.068-.052.15-.062.247-.035 1.036.281 2.038.292 2.977.033a.327.327 0 0 1 .3.06.426.426 0 0 1 .164.337zM2.876 1.375h17.247V8.59a6.473 6.473 0 0 0-1.917-.477V5.766c0-.43-.202-.84-.54-1.098a1.3 1.3 0 0 0-1.137-.223c-.77.212-1.603.2-2.47-.034a1.223 1.223 0 0 0-1.08.198c-.332.252-.521.66-.521 1.117v2.356H10.54V5.766c0-.43-.202-.84-.54-1.099a1.3 1.3 0 0 0-1.136-.222c-.772.212-1.602.2-2.471-.034a1.222 1.222 0 0 0-1.08.198c-.332.252-.521.66-.521 1.117v2.39c-.683.066-1.33.231-1.916.48V1.374zm18.205 7.73V.895a.479.479 0 0 0-.48-.478H2.398a.479.479 0 0 0-.479.479v8.219C.761 9.887.012 11.018.012 12.257v.085c-.001.018-.01.032-.01.051v4.785l-.002.01v1.822a.48.48 0 0 0 .958 0v-1.347H22.04v1.347a.48.48 0 0 0 .958 0v-6.603c0-.005.003-.009.003-.014v-.136c0-1.243-.753-2.379-1.92-3.152z" fill="#2E3A4B" fill-rule="evenodd"></path>
                                        </svg> -->
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M28 4a2 2 0 0 1 1.995 1.85L30 6v7.839l1.846 5.537a3 3 0 0 1 .115.468l.03.24.009.24V30h-2v-2H2v2H0v-9.675a3 3 0 0 1 .087-.717l.067-.232L2 13.836V6a2 2 0 0 1 1.697-1.977l.154-.018L4 4zm2 18H2v4h28zm-1.388-6H3.387l-1.333 4h27.891zM28 6H4v8h2v-4a2 2 0 0 1 1.85-1.995L8 8h16a2 2 0 0 1 1.995 1.85L26 10v4h2zm-13 4H8v4h7zm9 0h-7v4h7z"></path>
                                    </svg>
                                    <span>Furnished</span>
                                </div>
                            </li>

                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M26 19a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM7 18a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm20.693-5l.42 1.119C29.253 15.036 30 16.426 30 18v9c0 1.103-.897 2-2 2h-2c-1.103 0-2-.897-2-2v-2H8v2c0 1.103-.897 2-2 2H4c-1.103 0-2-.897-2-2v-9c0-1.575.746-2.965 1.888-3.882L4.308 13H2v-2h3v.152l1.82-4.854A2.009 2.009 0 0 1 8.693 5h14.614c.829 0 1.58.521 1.873 1.297L27 11.151V11h3v2h-2.307zM6 25H4v2h2v-2zm22 0h-2v2h2v-2zm0-2v-5c0-1.654-1.346-3-3-3H7c-1.654 0-3 1.346-3 3v5h24zm-3-10h.557l-2.25-6H8.693l-2.25 6H25zm-15 7h12v-2H10v2z"></path>
                                    </svg>
                                    <span>{{$data->parking}}</span>
                                </div>
                            </li>
                        </ul>

                        <div class="sub__title_room">
                            <h3>What's included in this room</h3>
                        </div>

                        <ul>
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M28 4a2 2 0 0 1 1.995 1.85L30 6v7.839l1.846 5.537a3 3 0 0 1 .115.468l.03.24.009.24V30h-2v-2H2v2H0v-9.675a3 3 0 0 1 .087-.717l.067-.232L2 13.836V6a2 2 0 0 1 1.697-1.977l.154-.018L4 4zm2 18H2v4h28zm-1.388-6H3.387l-1.333 4h27.891zM28 6H4v8h2v-4a2 2 0 0 1 1.85-1.995L8 8h16a2 2 0 0 1 1.995 1.85L26 10v4h2zm-13 4H8v4h7zm9 0h-7v4h7z"></path>
                                    </svg>
                                    <span>{{$data->bedsize}}</span>
                                </div>
                            </li>
                            @if($data->drawers)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 14H3m0-6h18m-10 9h2m-2-6h2m-2-6h2m8-2.4v16.8a.6.6 0 0 1-.6.6H3.6a.6.6 0 0 1-.6-.6V2.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6ZM17.5 20v2m-11-2v2" />
                                    </svg>
                                    <span>Drawers</span>
                                </div>
                            </li>
                            @endif @if($data->wardrobe)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M25 1a3 3 0 0 1 2.995 2.824L28 4v22a3 3 0 0 1-2.824 2.995L25 29v2h-2v-2H9v2H7v-2a3 3 0 0 1-2.995-2.824L4 26V4a3 3 0 0 1 2.824-2.995L7 1h18zm1 20H6v5a1 1 0 0 0 .883.993L7 27h18a1 1 0 0 0 .993-.883L26 26v-5zm-10 2a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm9-20h-8v16h9V4a1 1 0 0 0-.883-.993L25 3zM15 3H7a1 1 0 0 0-.993.883L6 4v15h9V3zm-3 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm8 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                    </svg>
                                    <span>Wardrobe</span>
                                </div>
                            </li>
                            @endif @if($data->chair)
                            <li>
                                <div class="sub__room__details">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" style="vertical-align: -0.125em;" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                        <path fill="currentColor" d="M212 92.2V72a36 36 0 0 0-36-36H80a36 36 0 0 0-36 36v20.2a36 36 0 0 0 0 71.6V200a12 12 0 0 0 12 12h144a12 12 0 0 0 12-12v-36.2a36 36 0 0 0 0-71.6ZM80 44h96a28.1 28.1 0 0 1 28 28v20.2a36.1 36.1 0 0 0-32 35.8v4H84v-4a36.1 36.1 0 0 0-32-35.8V72a28.1 28.1 0 0 1 28-28Zm128.3 112h-.3a4 4 0 0 0-4 4v40a4 4 0 0 1-4 4H56a4 4 0 0 1-4-4v-40a4 4 0 0 0-4-4h-.3A28 28 0 1 1 76 128v40a4 4 0 0 0 8 0v-28h88v28a4 4 0 0 0 8 0v-40a28 28 0 1 1 28.3 28Z" />
                                    </svg>
                                    <span>Chair</span>
                                </div>
                            </li>
                            @endif @if($data->study_desk)
                            <li>
                                <div class="sub__room__details">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 24px; width: 24px; fill: currentcolor;">
                                        <path d="M26 2a1 1 0 0 1 .922.612l.04.113 2 7a1 1 0 0 1-.847 1.269L28 11h-3v5h6v2h-2v13h-2l.001-2.536a3.976 3.976 0 0 1-1.73.527L25 29H7a3.982 3.982 0 0 1-2-.535V31H3V18H1v-2h5v-4a1 1 0 0 1 .883-.993L7 11h.238L6.086 8.406l1.828-.812L9.427 11H12a1 1 0 0 1 .993.883L13 12v4h10v-5h-3a1 1 0 0 1-.987-1.162l.025-.113 2-7a1 1 0 0 1 .842-.718L22 2h4zm1 16H5v7a2 2 0 0 0 1.697 1.977l.154.018L7 27h18a2 2 0 0 0 1.995-1.85L27 25v-7zm-16-5H8v3h3v-3zm14.245-9h-2.491l-1.429 5h5.349l-1.429-5z"></path>
                                    </svg>
                                    <span>Desk</span>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>




                    <div class="my-t-div">
                        <div class="home__discrription">
                            <h2>About the existing room mates</h2>
                            <p>
                                {{$data->about_roommates}}
                            </p>
                        </div>


                        <div class="adsgif__banner" style="background: url(https://okroomie.com/public/assets/frontend/images/truck.gif);">
                            <h2>
                                New to Sharing ? <br />
                                Read our housemate tips
                            </h2>
                            <button>Learn more</button>
                        </div>

                        <div class="distance__section">
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
                            <ul class="my-new-ul">
                                <li>
                                    <div class="distance__sub">
                                        <svg viewBox="0 0 24 24" width="30" height="30" class="css-128npmf">
                                            <title>by vehicle</title>
                                            <path fill="none" stroke="currentColor" stroke-miterlimit="10" d="M19.5 10.5h-2M6.5 10.5h-2M10.5 15.5h3M6.5 11.5h11"></path>
                                            <path d="M18.7 12.8l-1.6-2.6-.2-.4-.5-1.4A2 2 0 0 0 14.6 7H9.4a2 2 0 0 0-1.9 1.4l-.4 1.4-.2.4-1.6 2.6a2 2 0 0 0-.3 1V17a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3.1a2 2 0 0 0-.3-1.1z" fill="none" stroke="currentColor" stroke-width="2"></path>
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
                        </div>
                    </div>
                </div>


                <div class="col-md-4">

                    <div class="message__box">
                        <div class="message__inner__box">
                            <div class="img__message">
                                
                            <img src="{{url('storage/app')}}/{{$user->image}}" />
                                <!-- <div class="inner_name"></div> -->
                            </div>

                            <div class="top__user">
                                <h4>{{$user->your_first_name}}</h4>
                                <h3 class="mb-2">Online Today</h3>
                                <!-- <div class="styles__responseRate">
                                                            <div class="styles__text">
                                                                Response rate:
                                                                <span class="precent">100%</span>
                                                            </div>
                                                        </div> -->

                                <div class="styles__responseRate responseRatetime mt-2">
                                    <div class="styles__text">
                                        Response time with in an hour
                                    </div>
                                </div>



                                <div class="may_number">
                                    @if(!empty($plan))
                                    @if(($plan->roomie_active_plan_id->plan_id!=$free_plan_id) && ($plan->roomie_active_plan_id->free_paid!='expired')&& ($plan->roomie_active_plan_id->mobile_info!='No'))
                                    <a href="" data-toggle="modal" data-target="#exampleModalDDd">show {{$user->your_first_name}} 's number</a>
                                    @else
                                    <a href="" data-toggle="modal" data-target="#exampleModalGotoPlan">show {{$user->your_first_name}} 's number</a>
                                    @endif
                                    @else
                                    <a href="" data-toggle="modal" data-target="#exampleModalGotoPlan">show {{$user->your_first_name}} 's number</a>
                                    @endif
                                </div>
                            </div>

                            <form id="sendMessage">
                                <input type="hidden" name="ids" value="{{$data->id}}">
                                <input type="hidden" name="room_roomie" value="roomie">

                                @csrf
                                <div class="box__message">
                                    <input type="text" id="messageInput" name="message" class="form-control" />
                                </div>
                                @if(Auth::check())
                                <button id="sendButton" class="btn">Send Message</button>
                                @else
                                <button class="btn">Send Message After Login</button>
                                @endif
                                <div class="error_message_div">
                                    <p id="msg_error_message" class="text-danger" style="text-align:center;"></p>
                                    <div>
                            </form>
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
                        <a href="#" data-toggle="modal" data-target="#exampleModalDD" S>
                            <span class="report_span">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; height: 16px; width: 16px; fill: currentcolor;">
                                    <path d="M28 6H17V4a2 2 0 0 0-2-2H3v28h2V18h10v2a2 2 0 0 0 2 2h11l.115-.006a1 1 0 0 0 .847-1.269L27.039 14l1.923-6.724A1 1 0 0 0 28 6z"></path>
                                </svg>
                            </span>
                            Report this listing
                        </a>
                    </div>

                    <div class="blog___links">
                        <h2>Renting tips for renters</h2>
                        <ul>
                            <li><a href="">Why a viewing is important</a></li>
                            <li><a href="">Why you should use the messaging system</a></li>
                            <li><a href="">Tips for finding accommodation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="inquary__tab">
                <h2>Get in touch with the</h2>
                <p>Get in touch with the <span>Adam woods</span> to schedule a 1:1 private inspection.</p>
                @if(!empty($plan))
                @if(($plan->roomie_active_plan_id->plan_id!=$free_plan_id) && ($plan->roomie_active_plan_id->free_paid!='expired') && ($plan->roomie_active_plan_id->book_inspections!='No'))
                <button class="btn btn-sucsess" data-toggle="modal" data-target="#inspectionModal">Book inspection time</button>
                @else
                <button class="btn btn-sucsess" data-toggle="modal" data-target="#exampleModalGotoPlan">Book inspection time</button>
                @endif
                @else
                <button class="btn btn-sucsess" data-toggle="modal" data-target="#exampleModalGotoPlan">Book inspection time</button>
                @endif

            </div>
        </div>

        <div class="col-md-6">
            <div class="inquary__tab">
                <h2>Can't inspect in person?</h2>
                <p>Contact the <span>Adam woods</span> to request a personal walkthrough of the property over video call.</p>
                @if(!empty($plan))
                @if(($plan->roomie_active_plan_id->plan_id!=$free_plan_id) && ($plan->roomie_active_plan_id->free_paid!='expired') && ($plan->roomie_active_plan_id->book_inspections!='No'))
                <button class="btn btn-sucsess transprent" data-toggle="modal" data-target="#onlineInspectionModal">Request online inspection</button>
                @else
                <button class="btn btn-sucsess transprent" data-toggle="modal" data-target="#exampleModalGotoPlan">Request online inspection</button>
                @endif
                @else
                <button class="btn btn-sucsess transprent" data-toggle="modal" data-target="#exampleModalGotoPlan">Request online inspection</button>
                @endif

            </div>

        </div>
        <!-- 
                <div class="col-md-12" id="map_canvas" style="width: 100%; height: 100%;">

                    <div class="map__section" >
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3733110.8978665643!2d78.42296105!3d23.9740114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1649759619556!5m2!1sen!2sin" width="600" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                                        </div>


                </div> -->



    </div>
    <!-- <button class="my_new_submit_butto">submit</button> -->
    </div>

    <!-- end  google map function for displaying latitute and longitute -->


    <!--  Inspection modal-->
    <!-- Modal -->
    <div class="modal fade" id="inspectionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="sendInsepectionMessage111">
                    @csrf
                    <div class="form-group">
                        <div class="modal-body">
                            <h2 class="insepection_modal_heading">Message to request an inspection</h2>
                            <p class="inspection_modal_paragraph">Introduce yourself, describe why you are interested in the room and why you think you would be a great fit for the home.</p>

                            <textarea class="form-control" id="book_insepection_message_id" name="message" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">

                            <button type="submit" id="insepection_modal_send_button" class="btn btn-primary">Send Message to {{$user->your_first_name}}</button>
                        </div>
                        <div class="error_message_div">
                            <p id="error_message_room_inspection" class="text-danger" style="text-align:center;"></p>

                </form>
            </div>
        </div>
    </div>



</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="{{url('public/assets/frontend/list-my-place/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/assets/frontend/list-my-place/js/lightboxed.js')}}"></script>
<script src="https://use.fontawesome.com/c03345a92c.js"></script>
<script>
    function toggle_div_fun() {
        var selectObj = document.getElementById("exampleFormControlSelect1");
        var divelement = document.getElementById("myDIV");
        var question = document.getElementById("setquestion");
        var submitfeedbackbtn = document.getElementById("submitfeedbackbtn");

        questionArr = [];
        var i = '';
        questionArr[1] = "Please provide more details on why is this person a scammer?";
        questionArr[2] = "Please elaborate on the content and the issue you encountered";
        questionArr[3] = "Please advise why this listing is no longer available?";
        questionArr[4] = "Please elaborate on why you think this information is incorrect?";
        questionArr[5] = "Please advise which section of this section contains copywright material?";
        questionArr[6] = "Please elaborate on the issue you faced?";
        questionArr[7] = "Please provide more info on this";
        questionArr[8] = "On which part of the listing did you see the  contact information";






        if (selectObj.selectedIndex != 0) {
            divelement.style.display = 'block';

            for (i = 1; i <= questionArr.length; i++) {
                if (selectObj.selectedIndex === i) {
                    question.innerHTML = questionArr[i];
                }
            }

        } else {
            divelement.style.display = 'none';
            submitfeedbackbtn.disabled = true;

        }

    }
</script>
<script>
    $('#carouselExample').on('slide.bs.carousel', function(e) {


        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 3;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems - (itemsPerSlide - 1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i = 0; i < it; i++) {
                // append slides to end
                if (e.direction == "left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                } else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });





    $(document).ready(function() {
        /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function(event) {
            event.preventDefault();
            var content = $('.modal-body');
            content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);
            content.html($(this).html());
            $(".modal-profile").modal({
                show: true
            });
        });

    });
</script>
<script>
    // send message

    $(document).ready(function() {
        $('#sendMessage').on('submit', function(event) {

            event.preventDefault();
            $.ajax({
                url: "{{url('sendMessageByDashboard')}}",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    if (data.status === 200) {
                        $("#messageInput").val('');

                        $("#sendButton").html('Sent Successfully');
                        setTimeout(() => {
                            $("#sendButton").html('Send Message');
                        }, 2000);
                    } else if (data.status === 400) {
                        $("#msg_error_message").text(data.message);
                        setTimeout(() => {
                            $("#msg_error_message").text('');
                        }, 5000);

                    } else {
                        $("#msg_error_message").text('Something went wrong!');
                        setTimeout(() => {
                            $("#msg_error_message").text('');
                        }, 5000);


                    }





                },
                error: function(error) {

                }

            });
        });
    });


    function feedbackSubmitForm() {
        answer = $("#setanswer").val();
        if (answer != '') {

            reason = $("#exampleFormControlSelect1").val();
            question = $("#setquestion").html();

            $.post("{{route('feedbackRoomRoomie',['id'=>$data->id])}}", {
                reason: reason,
                question: question,
                answer: answer,
                room_roomie: 'roomie',
                _token: "{{csrf_token()}}"
            }, function(data) {
                if (data.status === 200) {

                    $("#success_error_message").addClass('text-success');
                    $("#success_error_message").html(data.message);


                } else {

                    $("#success_error_message").addClass('text-danger');
                    $("#success_error_message").html(data.message);

                }
            });

        } else {
            alert('Write some feedback');
            exit();
        }

    }
</script>




<!-- google map function for displaying latitute and longitute -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvF8ud8JKn9fbI7I36Y_zzxGOTNc3ai4&amp;sensor=false&amp;libraries=places&callback=initialize"></script> -->
<script>
    // const labels = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    // let labelIndex = 0;

    // function initialize() {

    //     var myLatlng = new google.maps.LatLng('{{$data ->latitute}}', '{{$data ->longitute}}');
    //     var myOptions = {
    //         zoom: 8,
    //         center: myLatlng,
    //         mapTypeId: google.maps.MapTypeId.ROADMAP
    //     }


    //     var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    //     // add red color marker
    //     var marker = new google.maps.Marker({
    //         position: myLatlng,
    //         label: labels[labelIndex++ % labels.length],
    //         map,
    //         title: "Hello World!",
    //     });
    //     marker.setMap(map);
    //     // end red color marker
    // }

    // function loadScript() {
    //     var script = document.createElement("script");
    //     script.type = "text/javascript";
    //     script.src = "http://maps.google.com/maps/api/js?callback=initialize&key=AIzaSyAOvF8ud8JKn9fbI7I36Y_zzxGOTNc3ai4";
    //     document.body.appendChild(script);
    // }
    // window.onload = loadScript();
</script>

<script>
    // inspection modal
    $(document).ready(function() {

        $('#insepection_modal_send_button').on('click', function(event1) {
            token = $("input[name='_token']").val();
            var textareaval = $("#book_insepection_message_id").val();

            $.post("{{route('room-inspection.store')}}", {
                _token: token,
                message: textareaval,
                receiver_id: "{{$user->id}}",
                ids: "{{$data->id}}"
            }, function(data) {

                if (data.status === 200) {

                    $("#book_insepection_message_id").val('');

                    $("#insepection_modal_send_button").html(data.message);
                    setTimeout(() => {
                        var msg = 'Send message to ' + "{{$user->your_first_name}}";
                        $("#insepection_modal_send_button").html(msg);
                    }, 2000);
                } else if (data.status === 400) {
                    $("#error_message_room_inspection").text(data.message);
                    setTimeout(() => {
                        $("#error_message_room_inspection").text('');
                    }, 5000);

                } else {
                    $("#error_message_room_inspection").text('Something went wrong!');
                    setTimeout(() => {
                        $("#error_message_room_inspection").text('');
                    }, 5000);


                }



            });

        });


    });
</script>

<script>
    // online inspection modal
    $(document).ready(function() {

        $('#insepection_modal_send_button_online').on('click', function(event1) {
            token = $("input[name='_token']").val();
            var textareaval = $("#book_insepection_message_id_online").val();

            $.post("{{route('online-room-inspection.store')}}", {
                _token: token,
                message: textareaval,
                receiver_id: "{{$user->id}}",
                ids: "{{$data->id}}"
            }, function(data) {

                if (data.status === 200) {

                    $("#book_insepection_message_id_online").val('');

                    $("#insepection_modal_send_button_online").html(data.message);
                    setTimeout(() => {
                        var msg = 'Send message to ' + "{{$user->your_first_name}}";
                        $("#insepection_modal_send_button_online").html(msg);
                    }, 2000);
                } else if (data.status === 400) {
                    $("#error_message_room_inspection_online").text(data.message);
                    setTimeout(() => {
                        $("#error_message_room_inspection_online").text('');
                    }, 5000);

                } else {
                    $("#error_message_room_inspection_online").text('Something went wrong!');
                    setTimeout(() => {
                        $("#error_message_room_inspection_online").text('');
                    }, 5000);


                }



            });

        });


    });
</script>