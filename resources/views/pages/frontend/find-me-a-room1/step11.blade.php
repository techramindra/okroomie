<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okroomie</title>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/c03345a92c.js"></script>
    <style>
        .error p {
            color: red;
        }
    </style>
</head>
<style type="text/css">
    .xdstep-1 .cRadiosub {
        width: 20%;
        text-align: center;
        padding: 0 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .xdstep-1 .cRadiosub .ui-checkboxradio-label {
        margin: 0 auto 10px;
        font-size: 25px;
    }

    .xdstep-1 .cRadiosub span {
        height: 50px;
        display: block;
    }

    .custumradiosettwo .cRadiosub {
        width: 50%;
        padding: 0;
    }

    .xdstep-1 .cRadiosub span {
        height: unset;
        margin: 0;
    }

    .custumradiosettwo .cRadiosub .ui-checkboxradio-label {
        margin: 0;
        font-size: 17px;
    }



    .col-12.kjas .main__contact input:checked+.bglk {
        background-color: #45bec56e;


    }

    .col-12.kjas .main__contact input[type="checkbox"] {
        display: none;
    }

    .bglk {
        padding: 5px 34px;
        border-radius: 30px;
    }

    .bglk i.fa::before {

        content: "\f05d";
        font-family: 'FontAwesome';
        position: absolute;
        top: -23px;
        right: 6px;
        display: none;
    }

    .bglk i.fa {
        position: relative;
    }


    .col-12.kjas .main__contact input:checked+.bglk i.fa::before {

        display: block;
    }
</style>

<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">

                    </div>
                    <div class="logo">
                        <a href="#">
                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="">Close</a>
                    </div>
                </div>
            </div>
        </header>


        <section class="bg__blue">
            <div class="container">
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                        <h3>About your home</h3>
                        <h2>My property preference
                        </h2>
                    </div>
                    <br>
                    <form action="" method="POST">


                        <div class="row">

                            <div class="col-12  kjas">

                                <div class="main_data">


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="kitchen" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                                        <rect x="0" y="0" width="32" height="32" fill="none" stroke="none" />
                                                        <path fill="#797875" d="M22.406 4L17.78 8.594c-1.152 1.153-1.152 3.065 0 4.22L16 14.56l-1.28-1.28l-7.5-7.5l-.72-.688l-.72.687a4.569 4.569 0 0 0 0 6.44l6.282 6.28l-7.78 7.78l1.437 1.44l7.78-7.782l1.188 1.156l.718.718l.688-.718l1.78-1.782l8.407 8.407l1.44-1.44l-9.126-9.093L17.437 16l1.75-1.78h.032l.03.03c1.158 1.1 3.02 1.105 4.156-.03l.094-.126l4.5-4.5l-1.406-1.406L22 12.78c-.435.436-.937.445-1.375.033l5.28-5.313L24.5 6.094l-5.313 5.28c-.412-.437-.403-.94.032-1.374l4.593-4.594L22.405 4zM6.78 8.22l9.69 9.686l-1.064 1.063l-8.187-8.19c-.742-.74-.764-1.676-.44-2.56z" />
                                                    </svg></span>
                                                <span>kitchen</span>
                                            </div>
                                        </label>
                                    </div>


                                    <!-- <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" >
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#797875" d="m20.772 10.156l-1.368-4.105A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.105A2.003 2.003 0 0 0 2 12v5c0 .753.423 1.402 1.039 1.743c-.013.066-.039.126-.039.195V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.062c0-.069-.026-.13-.039-.195A1.993 1.993 0 0 0 22 17v-5c0-.829-.508-1.541-1.228-1.844zM4 17v-5h16l.002 5H4zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6z"/><circle cx="6.5" cy="14.5" r="1.5" fill="#797875"/><circle cx="17.5" cy="14.5" r="1.5" fill="#797875"/></svg></span>
                                                <span>free parking on premises</span>
                                            </div>
                                        </label>
                                    </div> -->





                                    <div class="main__contact">
                                        <label>
                                            <input type="checkbox" name="dryer" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                        <rect x="0" y="0" width="48" height="48" fill="none" stroke="none" />
                                                        <g fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                                            <path d="m19.193 21.544l2.319 18.552a3.473 3.473 0 0 1-6.892.862l-2.374-18.99" />
                                                            <path d="M13 4a9 9 0 0 0 0 18c1.578 0 3.74-.175 6.193-.456l12.403-2.022L44 17.5v-9L28.5 6.25L13 4Zm24 4.2v9.6m7-.3l-12.404 2.022M44 8.5L28.5 6.25" />
                                                            <path d="M16 13a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z" />
                                                        </g>
                                                    </svg></span>
                                                <span>dryer</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="washing_mashine" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                        <rect x="0" y="0" width="48" height="48" fill="none" stroke="none" />
                                                        <g fill="none">
                                                            <rect width="32" height="40" x="8" y="4" stroke="#797875" stroke-width="4" rx="2" />
                                                            <path stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 15.5h32" />
                                                            <circle cx="28" cy="10" r="2" fill="#797875" />
                                                            <circle cx="34" cy="10" r="2" fill="#797875" />
                                                            <circle cx="24" cy="30" r="7" stroke="#797875" stroke-width="4" />
                                                        </g>
                                                    </svg></span>
                                                <span>washing machine</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="dining_table">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                        <path fill="#797875" d="M12 22H6a2 2 0 0 1 2-2V8H2V5h14v3h-6v12a2 2 0 0 1 2 2M22 2v20h-2v-7h-5v7h-2v-8a2 2 0 0 1 2-2h5V2Z" />
                                                    </svg></span>
                                                <span>dining table</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="gym" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                        <g fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                                            <path d="M7.4 7H4.6a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6Zm12 0h-2.8a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6Z" />
                                                            <path d="M1 14.4V9.6a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6v4.8a.6.6 0 0 1-.6.6H1.6a.6.6 0 0 1-.6-.6Zm22 0V9.6a.6.6 0 0 0-.6-.6h-1.8a.6.6 0 0 0-.6.6v4.8a.6.6 0 0 0 .6.6h1.8a.6.6 0 0 0 .6-.6ZM8 12h8" />
                                                        </g>
                                                    </svg></span>
                                                <span>gym Area</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="heater" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                        <path fill="#797875" d="M19 17c1.21 0 3-.8 3-3s-1.79-3-3-3h-2V9h2c2.2 0 3-1.79 3-3c0-2.2-1.79-3-3-3h-2V2h-1v1H8V2H7v1H2v2h5v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v1h1v-1h8v1h1v-1h5v-2h-5v-2h2m0-4c.45 0 1 .19 1 1s-.55 1-1 1h-2v-2h2m-3-2H8V9h8v2m3-6c.45 0 1 .2 1 1c0 .45-.19 1-1 1h-2V5h2M8 5h8v2H8V5m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m3 2h8v2H8v-2m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m11 0H8v-2h8v2Z" />
                                                    </svg></span>
                                                <span>heating</span>
                                            </div>
                                        </label>
                                    </div>












                                </div>

                                <div class="main_data2">

                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="tv" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                                                        <rect x="0" y="0" width="640" height="512" fill="none" stroke="none" />
                                                        <path fill="#797875" d="M512 448H127.1c-16.8 0-31.1 14.3-31.1 31.1s14.3 32.9 31.1 32.9h384c18.6 0 32.9-14.3 32.9-32s-14.3-32-32-32zM592 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h544c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h512v288z" />
                                                    </svg></span>
                                                <span>TV</span>
                                            </div>
                                        </label>
                                    </div>





                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="hot_tub" value="1">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                        <circle cx="7" cy="6" r="2" fill="#797875" />
                                                        <path fill="#797875" d="M11.15 12c-.31-.22-.59-.46-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5c-.29-.14-.62-.23-.96-.23h-.03C6.01 9 5 10.01 5 11.25V12H2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8H11.15zM7 20H5v-6h2v6zm4 0H9v-6h2v6zm4 0h-2v-6h2v6zm4 0h-2v-6h2v6zM17.42 7.21c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L18 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06zm-4 0c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L14 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06z" />
                                                    </svg></span>
                                                <span>Bath tub </span>
                                            </div>
                                        </label>
                                    </div>



                                    <div class="main__contact">


                                        <label>
                                            <input type="checkbox" value="1" name="cctv">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <path fill="#797875" d="M20.916 9.564a.998.998 0 0 0-.513-1.316L7.328 2.492c-.995-.438-2.22.051-2.645 1.042l-2.21 5.154a2.001 2.001 0 0 0 1.052 2.624L9.563 13.9L8.323 17H4v-3H2v8h2v-3h4.323c.823 0 1.552-.494 1.856-1.258l1.222-3.054l5.205 2.23a1 1 0 0 0 1.31-.517l.312-.71l1.701.68l2-5l-1.536-.613l.523-1.194zm-4.434 5.126L4.313 9.475l2.208-5.152l12.162 5.354l-2.201 5.013z" />
                                                    </svg></span>
                                                <span> CCTV </span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="main__contact">


                                        <div class="main__contact">

                                            <label>
                                                <input type="checkbox" value="1" name="outdoor_area">
                                                <div class="bglk">
                                                    <span><i class="fa"></i></span>

                                                    <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                            <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                            <path fill="#797875" d="M20 14.27V10c0-4.42-3.58-8-8-8s-8 3.58-8 8v4.27c-.6.34-1 .99-1 1.73v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-.74-.4-1.39-1-1.73zM7 20H5v-4h2v4zm4 0H9v-4h2v4zm0-6H6v-4c0-2.97 2.16-5.44 5-5.92V14zm2-9.92A6 6 0 0 1 18 10v4h-5V4.08zM15 20h-2v-4h2v4zm4 0h-2v-4h2v4zM8 11c0-.55.45-1 1-1s1 .45 1 1s-.45 1-1 1s-1-.45-1-1zm8 0c0 .55-.45 1-1 1s-1-.45-1-1s.45-1 1-1s1 .45 1 1z" />
                                                        </svg></span>
                                                    <span> outdoor area</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div class="main__contact">

                                            <label>
                                                <input type="checkbox" value="1" name="air_conditioner">
                                                <div class="bglk">
                                                    <span><i class="fa"></i></span>

                                                    <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                            <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                            <path fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 3.6V11H2V3.6a.6.6 0 0 1 .6-.6h18.8a.6.6 0 0 1 .6.6ZM18 7h1M2 11l.79 2.584A2 2 0 0 0 4.702 15H6m16-4l-.79 2.584A2 2 0 0 1 19.298 15H18m-8.5-.5s0 7-3.5 7m8.5-7s0 7 3.5 7m-6-7v7" />
                                                        </svg></span>
                                                    <span>air conditioner</span>
                                                </div>
                                            </label>
                                        </div>


                                        <div class="main__contact">

                                            <label>
                                                <input type="checkbox" value="1" name="pet_friendly_home">
                                                <div class="bglk">
                                                    <span><i class="fa"></i></span>

                                                    <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                                                            <path fill="#797875" d="M11.9 8.4c1.3 0 2.1-1.9 2.1-3.1c0-1-.5-2.2-1.5-2.2c-1.3 0-2.1 1.9-2.1 3.1c0 1 .5 2.2 1.5 2.2zm-3.8 0c1 0 1.5-1.2 1.5-2.2C9.6 4.9 8.8 3 7.5 3C6.5 3 6 4.2 6 5.2c-.1 1.3.7 3.2 2.1 3.2zm7.4-1c-1.3 0-2.2 1.8-2.2 3.1c0 .9.4 1.8 1.3 1.8c1.3 0 2.2-1.8 2.2-3.1c0-.9-.5-1.8-1.3-1.8zm-8.7 3.1c0-1.3-1-3.1-2.2-3.1c-.9 0-1.3.9-1.3 1.8c0 1.3 1 3.1 2.2 3.1c.9 0 1.3-.9 1.3-1.8zm3.2-.2c-2 0-4.7 3.2-4.7 5.4c0 1 .7 1.3 1.5 1.3c1.2 0 2.1-.8 3.2-.8c1 0 1.9.8 3 .8c.8 0 1.7-.2 1.7-1.3c0-2.2-2.7-5.4-4.7-5.4z" />
                                                        </svg></span>
                                                    <span>Pet friendly home </span>
                                                </div>
                                            </label>
                                        </div>



                                    </div>















                                </div>

                            </div>
                        </div>








                </div>












                <br>
                <br>

                <div class="stepthird ">
                    <div class="titlestep mb-4">
                        <h3>About your home</h3>
                        <h2>My Room preference

                        </h2>
                    </div>
                    <br>


                    <div class="row">

                        <div class="col-12  kjas">

                            <div class="main_data">


                                <div class="main__contact">

                                    <label>
                                        <input type="checkbox" name="queen_bed" value="1">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path fill="#797875" d="M19 10V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3a2 2 0 0 0-2 2v5h1.33L5 19h1l.67-2h10.66l.67 2h1l.67-2H21v-5a2 2 0 0 0-2-2M7 7h10v3H7m12 5H5v-3h14Z" />
                                                </svg></span>
                                            <span>Queen Bed </span>
                                        </div>
                                    </label>
                                </div>







                                <div class="main__contact">
                                    <label>
                                        <input type="checkbox" name="bed_side_table" value="1">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                    <path fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 18h40v12H4zm0 12h40v12H4zm18-6h4m-4 12h4M8 42v4m32-4v4M24 18v-8m8 0H16" />
                                                </svg></span>
                                            <span>Bedside table</span>
                                        </div>
                                    </label>
                                </div>


                                <div class="main__contact">

                                    <label>
                                        <input type="checkbox" name="mattress" value="0">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>

                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                                                    <path fill="#797875" d="M256 448H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h192v384zM64 352c0 17.7 14.33 32 32 32h64c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H96c-17.67 0-32 14.3-32 32v192zM288 64h288c35.3 0 64 28.65 64 64v256c0 35.3-28.7 64-64 64H288V64z" />
                                                </svg></span>
                                            <span>Mattress not required </span>
                                        </div>
                                    </label>
                                </div>


                                <div class="main__contact">

                                    <label>
                                        <input type="checkbox" value="1" name="study_desk">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>

                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path fill="#797875" fill-rule="evenodd" d="M13 18h2a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2h2v-2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-7v2ZM4 6v8h16V6H4Z" />
                                                </svg></span>
                                            <span>Desk </span>
                                        </div>
                                    </label>
                                </div>

                            </div>

                            <div class="main_data2">

                                <div class="main__contact">

                                    <label>
                                        <input type="checkbox" name="wardrobe" value="1">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <path fill="#797875" d="M6 2a2 2 0 0 0-2 2v15c0 1.11.89 2 2 2v1h2v-1h8v1h2v-1c1.11 0 2-.89 2-2V4a2 2 0 0 0-2-2H6m0 2h5v15H6V4m7 0h5v15h-5V4m-5 6v3h2v-3H8m6 0v3h2v-3h-2Z" />
                                                </svg></span>
                                            <span>Wardrobe</span>
                                        </div>
                                    </label>
                                </div>





                                <div class="main__contact">

                                    <label>
                                        <input type="checkbox" name="mattress" value="1">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                    <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                    <circle cx="7" cy="6" r="2" fill="#797875" />
                                                    <path fill="#797875" d="M11.15 12c-.31-.22-.59-.46-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5c-.29-.14-.62-.23-.96-.23h-.03C6.01 9 5 10.01 5 11.25V12H2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8H11.15zM7 20H5v-6h2v6zm4 0H9v-6h2v6zm4 0h-2v-6h2v6zm4 0h-2v-6h2v6zM17.42 7.21c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L18 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06zm-4 0c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L14 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06z" />
                                                </svg></span>
                                            <span>Mattress required </span>
                                        </div>
                                    </label>
                                </div>



                                <div class="main__contact">


                                    <label>
                                        <input type="checkbox" value="1" name="lamp">
                                        <div class="bglk">
                                            <span><i class="fa"></i></span>
                                            <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                                    <g fill="#797875">
                                                        <path fill-rule="evenodd" d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z" />
                                                        <path d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265a.301.301 0 0 0-.052.075l-.001.004l-.004.01V14l.002.008a.147.147 0 0 0 .016.033a.62.62 0 0 0 .145.15c.165.13.435.27.813.395c.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15a.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09a1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977c-.29.228-.68.413-1.116.558c-.878.293-2.059.465-3.34.465c-1.281 0-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243c.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411Z" />
                                                    </g>
                                                </svg></span>
                                            <span>Lamp </span>
                                        </div>
                                    </label>
                                </div>

                                <div class="main__contact">


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="chair">
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                                                        <g fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                                            <path d="M15 28V15.652C15 13 18 10 24 10s9 3 9 5.652V28m-21 6v-6h24v6H12Zm8-30h8" />
                                                            <path d="M8 16v12h32V16M17 43h14m-7-9v9m0-39v6" />
                                                        </g>
                                                    </svg></span>
                                                <span> Chair</span>
                                            </div>
                                        </label>
                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>


                    <br>
                    <br>


                    <div class="stepbutton">

                        <button>
                            Next
                        </button>

                        <a href="">Back</a>

                        </form>

                    </div>









                </div>
            </div>
        </section>
    </div>

    <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>