@extends('layouts.frontendMaster')
@section('contents')
<style type="text/css">
        .popupgallery_main .left__image {
            height: 510px;
            width: 100%;
            position: relative;
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

        .Content__DashBoard .container {
            display: flex;
        }

        body {
            overflow-x: hidden;
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

        /* myfarst section */
        section#new1 {
            padding-left: 50px;
            padding-right: 50px;
            background: #e8e9eb;
        }

        section#new1 {
            padding-left: 50px;
            padding-right: 50px;
        }

        .divmain_left {
            display: flex;
            align-content: center;
            background: #fff;
            align-items: center;
            width: fit-content;
            padding: 10px 20px;
            border-radius: 40px;
        }

        .divmain_left .dote {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: gray;
            margin-top: 3px;
            margin-right: 5px;
        }

        .divmain_left b {
            margin: 0;
            padding: 0;
            margin-right: 10px;
        }

        .divmain_left p {
            padding: 0;
            margin: 0;
        }

        .sdiv2 {
            background: #fff;
            margin: 40px 0px;
        }

        section#new1 h2 {
            display: flex;
            margin: 0;
            align-items: center;
            align-content: center;
        }

        .sdiv2 {
            background: #fff;
            margin: 40px 0px;
            padding: 40px 50px;
            border-radius: 15px;
        }

        section#new1 h2 {
            display: flex;
            margin: 0;
            align-items: center;
            align-content: center;
        }

        .sdiv2 label {
            padding: 10px;
            display: table;
            color: #fff;
        }

        .sdiv2 input[type="file"] {
            display: none;
        }

        .main_file_g label {
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            flex-direction: column;
        }

        .main_file_g label p {
            color: grey;
            font-size: 14px;
            text-align: center;
            margin-top: 25px;
        }

        p.m_l {
            margin-left: 22px;
        }

        .main_file_g {
            border: 1px solid #ddd;
            border-radius: 9px;
            padding: 20px 20px;
            display: flex;
            align-content: center;
            flex-direction: column;
            justify-content: center;
        }

        .main_file_g label button {
            background: #333;
            color: #fff;
            padding: 10px 30px;
            border: 1px solid #333;
            font-size: 14px;
            border-radius: 5px;
        }

        input[type="date"] {
            border: 1px solid #c5c8cc;
            padding: 10px 30px;
            outline: none;
        }

        .live_div {
            overflow: scroll;
            width: 100%;
            height: 110px;
            /* border: 1px solid #ddd; */
            margin-top: 28px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            overflow-y: scroll !important;
            /* display: block; */
            width: 100%;
        }

        div#ghn {
            display: flex;
            flex-direction: row;
            align-content: space-between;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .live_div {
            overflow: scroll;
            width: 100%;
            height: 105px;
            /* border: 1px solid #ddd; */
            margin-top: 28px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            overflow-y: scroll !important;
            /* display: block; */
            width: 100%;
        }

        div#mmrow {
            display: flex;
            text-decoration: none !important;
        }

        div#ghn button {
            background: #333;
            color: #fff;
            padding: 10px 30px;
            border: 1px solid #333;
            font-size: 14px;
            border-radius: 5px;
            margin-top: 0px;
            margin: auto;
            margin-top: 25px;
            font-weight: 600;
        }

        div#mmrow a {
            color: #808080;
            border: 1px sloid;
            border: 1px solid #a5c8c1;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            text-decoration: none;
        }

        .col-12.matches {
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            /* margin: -40px 0px; */
            margin-top: 50px;
        }

        .col-12.matches button#matches {
            padding: 10px 20px;
            font-weight: 600;
            border: 1px solid #6a6a72;
            color: #6a6a72;
        }

        .imgc {
            position: relative;
        }

        .imgc .price {
            position: absolute;
            bottom: 10px;
            color: grey;
            /* background: white; */
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            right: 10px;
            padding: 10px;
            border-radius: 5px;
        }

        .price .icone_div1 a {
            display: inline-block;
            color: #fff;
            box-shadow: none;
            padding: 0;
            margin-right: 15px;
            border-radius: 8px;
            width: 36px;
            height: 36px;
            line-height: 33px;
            background: rgba(74, 74, 76, 0.7);
            z-index: 1;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
        }

        .imgc .price p {
            padding: 0;
            margin: 0;
            /* border-radius: 10px; */
        }

        .main_file_g label button a {
            /* background: #006977; */
            color: white;
            /* padding: 10px 20px; */
            font-weight: 600;
            border: none;
            /* border-radius: 5px; */
        }

        a#sm {
            border: none !important;
            padding: 0px !important;
            color: #009adb !important;
            /* margin-top: 5px !important; */
        }

        button.carousel-control-prev {
            background: #ffffff85;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: 43%;
        }

        button.carousel-control-next {
            background: #ffffff85;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: 43%;
        }

        .imgc::before {
            content: "";
            background: #00000026;
            width: 100%;
            height: 100%;
            position: absolute;
        }

        section .card {
            border-radius: 10px 10px 0px 0px !important;
            width: 360px;
            overflow: hidden;
        }

        .imgc img.card-img-top {
            width: 100%;
            height: 100%;
            border-radius: 10px 10px 0px 0px;
            overflow: hidden;
        }

        .price2 {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(74, 74, 76, 0.7) !important;
            color: white;
            padding: 5px 8px;
            font-weight: 700;
            font-size: 13px;
        }

        .name h3 a {
            font-size: 1.2rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 3px;
            text-decoration: none;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        .locen a span {
            font-size: 13px;
            font-weight: 400;
            margin: 0 0 1px;
            text-decoration: none;
        }

        .locen a {
            text-decoration: none;
            color: #666;
        }

        .proinfo ul.homes-list.clearfix.pb-3 {
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            /* align-content: center; */
            align-items: center;
            /* justify-content: space-between; */
            flex-direction: row;
            padding-bottom: 0px !important;
        }

        li.the-icons {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            line-height: 17px !important;
            padding-top: 12px;
            padding-bottom: 12px;
            width: 50%;
        }

        .proinfo ul.homes-list.clearfix.pb-3 i {
            color: #696969;
            font-size: 18px;
        }

        .proinfo ul.homes-list.clearfix.pb-3 span {
            color: #666;
        }

        /* myfarst section */
        .price-properties.footer.pt-3.pb-0 {
            background: none;
            border-top: 1px solid #e8e8e8;
            padding-top: 1rem;
            font-size: 13px;
            display: flex;
            color: #666;
            padding-top: 0px !important;
            justify-content: space-between;
            margin-top: 0px !important;
        }

        .price-properties.footer.pt-3.pb-0 h3.title.mt-3 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 3px;
        }

        .price-properties.footer.pt-3.pb-0 h3.title.mt-3 a {
            font-size: 15px;
            font-weight: 400;
            color: #666;
            text-transform: uppercase;
            text-decoration: none;
        }

        .compare {
            margin-top: 1.1rem;
            line-height: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px;
        }

        .compare a {
            color: #666;
            text-decoration: none;
            margin: 0px 5px;
        }

        .compare a i {
            color: #696969;
            font-size: 16px;
        }

        .like {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #ffff;
            font-weight: 700;
            margin: 0;
        }

        .like a {
            color: #ffff;
            font-weight: 700;
            margin: 0;
        }

        .name {
            display: flex;
            justify-content: space-between;
            align-content: center;
            align-items: center;
            margin-bottom: 10px;
        }

        small {
            text-transform: capitalize;
        }

        .img_div {
            height: 235px;
        }

        svg {
            margin-right: 5px;
        }

        a {
            text-transform: capitalize !important;
        }

        .myimg_upload .img_div::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: #0000003d;
        }

        .myimg_upload .file-input__input {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .myimg_upload .file-input__label {
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            border-radius: 4px;
            font-size: 20px !important;
            font-weight: 600;
            color: #fff;
            /* font-size: 14px; */
            padding: 10px 12px;
            background-color: #333333;
            box-shadow: 0px 0px 2px rgb(0 0 0 / 25%);
        }

        .myimg_upload label.file-input__label {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            height: 100%;
        }

        .myimg_upload .file-input {

            height: 511px;
        }

        .myimg_upload {
            background: #eaebed;
            width: 280px !important;
            height: 100%;
        }

        div#suriya {
            display: flex;
        }

        .two_button_div {
            position: absolute;
            top: 20px;
            width: 100%;
            display: flex;
            justify-content: flex-start;
            left: 15px;
            align-items: center;
            align-content: center;
        }

        .two_button_div a.featured {
            background: #504e4d;
            color: white;
            padding: 5px 20px;
            border-radius: 20px;
            font-size: 13px;
            letter-spacing: 1px;
        }

        .two_button_div #delecty svg {
            margin: 0;
            padding: 0;
        }

        .two_button_div #delecty {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            padding: 0;
            margin-left: 10px;
            background: #333333d9;
        }

        .my_h_div {
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
        }

        .my_h_div button.listing {
            margin-left: 20px;
            padding: 10px 20px;
            border: 1px solid #403c3c;
            outline: none;
            font-weight: 600;
            color: #403c3c;
            border-radius: 5px;
            background: transparent;
            text-transform: capitalize;
        }

        .step-header .inner-block {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        section#new1 section {
            padding: 0;
        }

        section {
            padding: 2rem 0rem;
        }

        .name svg {
            margin: 0;
        }

        .facility_details {
            display: flex;

        }

        .some_details__block {
            width: 700px;
        }

        .mmmkh {
            display: flex;
            justify-content: space-between;
            width: 580px;
        }

        .mmmkh .condhhh {
            display: flex;
        }

        .mmmkh .condhhh span {
            margin-left: 10px;
        }

        .blog___links {
            text-align: center;
        }

        .some_details__block {
            position: relative;
        }

        .some_details__block .edit_button_bolog {
            position: absolute;
            right: 10px;
            top: 0;
        }

        .some_details__block .edit_button_bolog svg {

            padding: 0;
            margin: 0;
        }

        button.set.featured {
            border: none;
            background: transparent;
            outline: none;
        }


        .home__discrription.my-3 {
            position: relative;
        }

        .home__discrription {
            position: relative;
        }

        .room__details {
            position: relative;
        }



        .home__discrription.my-3 .edit_button_bolog {
            position: absolute;
            right: -160px;
            top: 0;
        }

        .home__discrription .edit_button_bolog {
            position: absolute;
            top: 0;
            right: -160px;
        }



        .room__details .edit_button_bolog {
            position: absolute;
            top: 0;
            right: -160px;
        }

        .sub__title_room {
            position: relative;
        }

        section.single-proper.blog.details {
    margin-top: 70px;
}


    </style>
<!-- START SECTION PROPERTIES LISTING -->
<section class="single-proper blog details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 blog-pots">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="headings-2 pt-0">
                                    <div class="pro-wrapper">
                                        <div class="detail-wrapper-body">
                                            <div class="listing-title-bar">
                                                <h3>Luxury Villa House <span class="mrg-l-5 category-tag">For Sale</span></h3>
                                                <div class="mt-0">
                                                    <a href="#listing-location" class="listing-address">
                                                        <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>77 - Central Park South, NYC
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single detail-wrapper mr-2">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar">
                                                    <h4>$ 230,000</h4>
                                                    <div class="mt-0">
                                                        <a href="#listing-location" class="listing-address">
                                                            <p>$ 1,200 / sq ft</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- main slider carousel items -->
                                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                    <h5 class="mb-4">Gallery</h5>
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="{{url('public/assets/frontend/images/single-property/s-1.jpg')}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="1">
                                            <img src="{{url('public/assets/frontend/images/single-property/s-2.jpg')}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="2">
                                            <img src="{{url('public/assets/frontend/images/single-property/s-3.jpg')}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="4">
                                            <img src="{{url('public/assets/frontend/images/single-property/s-4.jpg')}}" class="img-fluid" alt="slider-listing">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="5">
                                            <img src="{{url('public/assets/frontend/images/single-property/s-5.jpg')}}" class="img-fluid" alt="slider-listing">
                                        </div>

                                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->
                                    <ul class="carousel-indicators smail-listing list-inline">
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#listingDetailsSlider">
                                                <img src="{{url('public/assets/frontend/images/single-property/s-1.jpg')}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#listingDetailsSlider">
                                                <img src="{{url('public/assets/frontend/images/single-property/s-2.jpg')}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#listingDetailsSlider">
                                                <img src="{{url('public/assets/frontend/images/single-property/s-3.jpg')}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#listingDetailsSlider">
                                                <img src="{{url('public/assets/frontend/images/single-property/s-4.jpg')}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#listingDetailsSlider">
                                                <img src="{{url('public/assets/frontend/images/single-property/s-5.jpg')}}" class="img-fluid" alt="listing-small">
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- main slider carousel items -->
                                </div>
                                <div class="blog-info details mb-30">
                                    <h5 class="mb-4">Description</h5>
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="single homes-content details mb-30">
                            <!-- title -->
                            <h5 class="mb-4">Property Details</h5>
                            <ul class="homes-list clearfix">
                                <li>
                                    <span class="font-weight-bold mr-1">Property ID:</span>
                                    <span class="det">V254680</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Type:</span>
                                    <span class="det">House</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property status:</span>
                                    <span class="det">For Sale</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Property Price:</span>
                                    <span class="det">$230,000</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Rooms:</span>
                                    <span class="det">6</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bedrooms:</span>
                                    <span class="det">7</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Bath:</span>
                                    <span class="det">4</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Garages:</span>
                                    <span class="det">2</span>
                                </li>
                                <li>
                                    <span class="font-weight-bold mr-1">Year Built:</span>
                                    <span class="det">10/6/2020</span>
                                </li>
                            </ul>
                            <!-- title -->
                            <h5 class="mt-5">Amenities</h5>
                            <!-- cars List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Air Cond</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Balcony</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Internet</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Dishwasher</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Bedding</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Cable TV</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Pool</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                    <span>Fridge</span>
                                </li>
                            </ul>
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>Floor Plans</h5>
                            <img alt="image" src="{{url('public/assets/frontend/images/bg/floor-plan-1.png')}}">
                        </div>
                        <div class="floor-plan property wprt-image-video w50 pro">
                            <h5>What's Nearby</h5>
                            <div class="property-nearby">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-info">
                                               <i class="fas fa-graduation-cap mr-2"></i><b class="title">Education</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Education Mandarin</h6>
                                                        <span>(15.61 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Marry's Education</h6>
                                                        <span>(15.23 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">The Kaplan</h6>
                                                        <span>(15.16 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info mb-4">
                                            <span class="nearby-title mb-3 d-block text-success">
                                              <i class="fas fa-user-md mr-2"></i><b class="title">Health & Medical</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Natural Market</h6>
                                                        <span>(13.20 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Food For Health</h6>
                                                        <span>(13.22 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">A Matter of Health</h6>
                                                        <span>(13.34 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nearby-info">
                                            <span class="nearby-title mb-3 d-block text-danger">
                                                <i class="fas fa-car mr-2"></i><b class="title">Transportation</b>
                                            </span>
                                            <div class="nearby-list">
                                                <ul class="property-list list-unstyled mb-0">
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Airport Transportation</h6>
                                                        <span>(11.36 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">NYC Executive Limo</h6>
                                                        <span>(11.87 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                    <li class="d-flex">
                                                        <h6 class="mb-3 mr-2">Empire Limousine</h6>
                                                        <span>(11.52 miles)</span>
                                                        <ul class="list-unstyled list-inline ml-auto">
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property wprt-image-video w50 pro">
                            <h5>Property Video</h5>
                            <img alt="image" src="{{url('public/assets/frontend/images/slider/home-slider-4.jpg')}}">
                            <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=14semTlwyUY">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <div class="property-location map">
                            <h5>Location</h5>
                            <div class="divider-fade"></div>
                            <div id="map-contact" class="contact-map"></div>
                        </div>
                        <!-- Star Reviews -->
                        <section class="reviews comments">
                            <h3 class="mb-5">3 Reviews</h3>
                            <div class="row mb-5">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="{{url('public/assets/frontend/images/testimonials/ts-5.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Mary Smith</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">May 30 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="rest"><img src="images/single-property/s-1.jpg" class="img-fluid" alt=""></div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row">
                                <ul class="col-12 commented pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="{{url('public/assets/frontend/images/testimonials/ts-4.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Abraham Tyron</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">june 1 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="row mt-5">
                                <ul class="col-12 commented mb-0 pl-0">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="{{url('public/assets/frontend/images/testimonials/ts-3.jpg')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <div class="conra">
                                                <h5 class="mb-2">Lisa Williams</h5>
                                                <div class="rating-box">
                                                    <div class="detail-list-rating mr-0">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mb-4">jul 12 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                            <div class="resti">
                                                <div class="rest"><img src="images/single-property/s-2.jpg" class="img-fluid" alt=""></div>
                                                <div class="rest"><img src="images/single-property/s-3.jpg" class="img-fluid" alt=""></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- End Reviews -->
                        <!-- Star Add Review -->
                        <section class="single reviews leve-comments details">
                            <div id="add-review" class="add-review-box">
                                <!-- Add Review -->
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                                <span class="leave-rating-title">Your rating for this listing</span>
                                <!-- Rating / Upload Button -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <!-- Leave Rating -->
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30">
                                            <input type="radio" name="rating" id="rating-1" value="1" />
                                            <label for="rating-1" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-2" value="2" />
                                            <label for="rating-2" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3" />
                                            <label for="rating-3" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-4" value="4" />
                                            <label for="rating-4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-5" value="5" />
                                            <label for="rating-5" class="fa fa-star"></label>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Uplaod Photos -->
                                        <div class="add-review-photos margin-bottom-30">
                                            <div class="photoUpload">
                                                <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                <input type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 data">
                                        <form action="#">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Review" required></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Review</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Add Review -->
                    </div>


                    <div class="col-md-4">
                        <div class="message__box">
                            <div class="message__inner__box">
                                <div class="img__message">
                                    <img src="https://okroomie.com/public/assets/frontend/images/demo2.jpg" />
                                </div>
                                <div class="top__user">
                                    <h4></h4>
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
                                <form id="sendMessage">
                                        <input type="hidden"  name="id" value="{{encrypt($data)}}">
                                        @csrf

                                <div class="box__message">
                                    <input type="text" id="messageInput" name="message" class="form-control" />
                                </div>
                                <button id="sendButton" class="btn">Send Message</button>

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
                            <a href="#">
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
                    </div>s


                </div>
                <!-- START SIMILAR PROPERTIES -->
                <section class="similar-property featured portfolio p-0 bg-white-inner">
                    <div class="container">
                        <h5>Similar Properties</h5>
                        <div class="row portfolio-items">
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">$9,000/mo</div>
                                                <img src="{{url('public/assets/frontend/images/blog/b-11.jpg')}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <img src="{{url('public/assets/frontend/images/testimonials/ts-1.jpg')}}" alt="" class="mr-2"> Lisa Jhonson
                                            </a>
                                            <span>2 months ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-lg-4 col-md-6 col-xs-12 people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">$3,000/mo</div>
                                                <img src="{{url('public/assets/frontend/images/blog/b-12.jpg')}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <img src="{{url('public/assets/frontend/images/testimonials/ts-2.jpg')}}" alt="" class="mr-2"> Karl Smith
                                            </a>
                                            <span>2 months ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="single-property-1.html" class="homes-img">
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="homes-price">$9,000/mo</div>
                                                <img src="{{url('public/assets/frontend/images/blog/b-1.jpg')}}" alt="home-1" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="button-effect">
                                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                            <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="single-property-1.html">
                                                <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>6 Bedrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>3 Bathrooms</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>720 sq ft</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                <span>2 Garages</span>
                                            </li>
                                        </ul>
                                        <div class="footer">
                                            <a href="agent-details.html">
                                                <img src="{{url('public/assets/frontend/images/testimonials/ts-3.jpg')}}" alt="" class="mr-2"> katy Teddy
                                            </a>
                                            <span>2 months ago</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END SIMILAR PROPERTIES -->
            </div>
        </section>
        <!-- END SECTION PROPERTIES LISTING -->

      


@endsection('contents')
@push('send_message')
<script>

$(document).ready(function(){
    $('#sendMessage').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:"{{url('sendMessage')}}",
            method:"POST",
            data:new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success:function(data)
            {
                if(data.status===200)
                {
                    $("#messageInput").val('');

                        $("#sendButton").html('Sent Successfully');
                        setTimeout(() => {
                        $("#sendButton").html('Send Message');
                        }, 2000);
                }

               
               
               
            },
            error:function(error)
            {
                
            }

        });
    });
});
    </script>
    @endpush