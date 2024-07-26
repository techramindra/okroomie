@extends('layouts.frontendMaster')
@section('contents')


<style>
    section.h-tab {
        padding-top: 80px;
        background: #E2E2E2;
    }



    a.nav-link {
        color: #fff !important;
        font-weight: 700 !important;
    }


    section.h-tab a.nav-link.active {
        border-bottom: 2px solid white !important;
        background: transparent;
    }


    section.h-tab .nav-tabs .nav-link {
        border: none;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    ul#nvm {
        padding: 10px 0px;
    }

    .ackj {
        height: 200px;
        width: 100%;
        background: url(https://img.Okroomie.com/image/fetch/q_auto,f_auto/https://images.ctfassets.net/8urtyqugdt2l/DUNnSjwcro3AMkmcIpKwM/1abd03e7566b988b5dfd561c1248165f/Banner_GSC.jpg);
        background-position: center top;

        background: #162736 !important;
    }


    .ackj h2 {
        text-align: center;
        color: white;
        font-size: 50px;
        margin-left: 20px;
        /* margin-top: 100px; */

    }

    .full_b {
        background: #162736;
    }

    .nav-tabs {
        border: none;
    }


    .fliexd {
        display: flex;
        justify-content: space-between;
        padding: 0px 15px;
    }

    .fliexd .iopu {
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
    }

    .fliexd .iopu .imghg {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        overflow: hidden;
        margin-right: 10px;
    }

    .fliexd .iopu .imghg img {
        width: 100%;
        height: 100%;
    }


    .card-body p.card-text {
        line-height: 26px;
        text-align: justify;
        /* word-spacing: -1px; */
        font-size: 14px;
    }

    .card {
        box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
        margin-bottom: 30px;
        padding-bottom: 10px;
    }

    a.anad {
        text-transform: capitalize;
        font-weight: 700;
        font-size: 14px;
        display: block;
        padding: 10px 0px;
    }

    .card-body p.card-text b {
        text-align: justify;
    }

    .fliexd .iopu span {
        font-weight: 700;
        font-size: 12px;
    }

    .card-body {
        padding: 5px 10px;
    }


    .ackj {
        height: 200px;
        width: 100%;

        background-position: center top;
        background: #162736 !important;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
    }

    .ijhgimg1 {
        height: 100%;
        width: 100%;
    }

    #logo img {
        width: 200px;
        height: auto;
        transform: translate3d(0, 0, 0);
    }

    .nnew-lkj {
        /* width: 100%; */
        height: 50%;
        display: flex;
        align-items: center;
    }

    .ijhgimg1 img {
        height: 100%;
        width: 100%;
    }

    .nnew-lkj .ijhgimg {

        border-right: 2px solid whitesmoke;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        padding-right: 15px;
    }

    button.load.more {
        position: relative;
        font-family: Montserrat, Helvetica, Arial, sans-serif;
        text-transform: uppercase;

        border-radius: 5rem;
        cursor: pointer;
        background-color: #162736;
        color: rgb(255, 255, 255);
        /* padding: 1.5rem 3rem; */
        font-weight: 700;
        outline: none;
        margin: 0px auto 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        padding: 10px 20px;
        border: none;
    }

    section.h-tab {
        padding-bottom: 5px;
    }
</style>


<section class="h-tab ">

    <div class="full_b">
        <div class="container">
            <div class="row" id="back">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="mg-jh">

                        <ul class="nav nav-tabs nav-justified" role="tablist" id="nvm">
                            <li class="nav-item">
                            <a class="nav-link " href="https://okroomie.com/helpcenter">Home </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="https://okroomie.com/helpcenter/how_to_s">How to's </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="https://okroomie.com/helpcenter/current-articles">Current Articles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://okroomie.com/helpcenter/agreements-and-legal-info"> Agreements and legal</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="https://okroomie.com/helpcenter/forms">Forms</a>
                            </li>

                        </ul>
                        <div class="ackj">


                            <div class="nnew-lkj">
                                <div class="ijhgimg1">
                                    <img src="https://okroomie.com/public/assets/frontend/images/logonk.png" alt="">
                                </div>

                            </div>
                            <div class="nnew-lkj">
                                <div class="ijhgimg">
                                    <!-- <img src="https://okroomie.com/public/assets/frontend/images/logonk.png" alt=""> -->
                                </div>
                                <h2>help center </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content mt-3">





        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="https://okroomie.com/public/assets/frontend/images/dima-pechurin-JUbjYFvCv00-unsplash (1) (1).jpg">
                        <div class="card-body">
                            <a href="" class="anad">Okroomie</a>
                            <p class="card-text"><b>Roll Models Rue-Ann Paisley and Devante Walters On Their Inspiring Skating Journeys And Actioning Change In Their Community</b></p>
                            <p>Following their Black History Month event with Okroomie last October, the influential roller skaters open up about what they stand for and the responsibilities they shoulder for the greater good.</p>
                        </div>
                        <div class="fliexd">
                            <div class="iopu">
                                <div class="imghg">
                                    <img src="https://okroomie.com/public/assets/frontend/images/JHJHJHHJHHJHHHJHHJ.png" alt="">

                                </div>
                                <span>By Okroomie.com</span>
                            </div>
                            <div class="iopu">

                                <span> Posted 11 Mar 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button class="load more">load more</button>
        </div>
    </div>






</section>



































@endsection('contents')