@extends('layouts.frontendMaster')
@section('contents')


<style>
    /*section.new_about {
        margin-top: 65px;
        margin-left: 40px;
        margin-right: 40px;
    }

    section.new_about .main_about {
        width: 100%;

    }*/

    section.new_about .main_about {
        /*width: 100%;

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center top;*/
        background: #C1BEAA;
        border-radius: 10px;
    }

    .about_banner {
       /* width: 100%;
        color: white;
        padding: 20px 30px;*/
    }

    section.new_about .main_burron {
        /* background: bisque; */
        margin-top: 20px;
    }

    section.new_about .main_burron button {
        background: #444444;
        color: white;
        padding: 10px 20px;
        font-weight: 500;
        font-size: 20px;
        text-transform: capitalize;
        border-radius: 5px;
        border: none;
        outline: none;
        width: fit-content;
        margin-top: 10px;
    }

    .about_banner h2 {
       /* color: white;
        line-height: 1.5;
        font-weight: 600;*/
    }

    .about_banner {
        /*display: flex;
        justify-content: space-between;*/
        align-items: center;
        /*align-content: center;*/
    }

    .jhhh {
        /*width: 50%;
        padding-bottom: 50px;*/
    }

    section.second {
        /*padding: 30px 70px;*/
    }

    .displayh {
        margin: 10px 0px;
    }

    .mainjk {
       /* width: 100%;*/
    }

    .containt {
        /*text-align: justify;
        padding-right: 5%;*/
    }

    .maint_b {
       /* background-size: contain;
        background-size: cover;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
        text-align: right;*/
    }

    .HomeTab__block {
        padding: 2.6rem 0;
    }

    .sub__image {
        padding-left: 20px;
        margin-bottom: 25px;
        height: 150px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 200px;
        text-align: center;
        align-content: center;
    }

    .sub__block_content.row {
        display: flex;
        align-items: center;
        justify-content: center;
        align-content: center;
        margin-bottom: 70px;
        box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px;
        padding-top: 20px;
    }

    .uimg {
        width: 280px;
    }

    .main__content {
        width: 80%;
    }

    .sub__block_content .content_sub_sub {
        display: flex;
        justify-content: center;
        align-content: center;
        border-right: 10px dotted;

    }
@media (min-width: 768px) and (max-width: 1023px) {
        .main_about {padding: 16px !important;}
    .about_banner h2 {
        font-size: 1.8rem;
    }
    section.new_about .main_burron button {
        font-size: 1rem;
    }
}
@media (max-width: 767px) {
        .main_about {padding: 16px !important;}
    .maint_b {margin-top: 20px;}
    .about_banner h2 {
        font-size: 1.5rem;
    }
    section.new_about .main_burron button {
        font-size: 0.8rem;
    }

    .sub__block_content .content_sub_sub {
       border-right: none;
        order: 2;
    }
    .Number__cont {
        font-size: 16px;
    }
    .sub__image {
        order: 1;
        border-right: none !important;
        margin-bottom: 3rem;
    }
}
</style>

<section class="container-fluid new_about">

    <div class="row justify-content-center">
    <div class="col-md-11 col-sm-12">
    <div class="main_about p-5">
        <div class="about_banner row">
            <div class="jhhh col-md-6 col-sm-12">
                <h2>Finding you modern ways to move !</h2>

                <div class="main_burron">
                    <button>
                    Find your room
                    </button>

                </div>
            </div>
            <div class="maint_b col-md-6 col-sm-12">
                <img src="https://okroomie.com/public/assets/frontend/images/howhhhhhhhhh.png" alt="">
           </div>
                </div>

            
    </div>
 </div> </div>

</section>
<section id="how_it_work" class="container-fluid py-5 text-justify">


    <div class="row justify-content-center">
        <div class="col-md-10 col-sm-12">
            <h2 class="mb-3 text-center">how it works</h2>
        </div>
    </div>


    <section class="HomeTab__block">
        <div class="container">
            <div class="tab__heads">
                <!-- Nav pills -->
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home">For tenants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1">For landlords</a>
                    </li>
                </ul>
            </div>
            <div class="Tabs__content">
                <div class="tab-content">
                    <div class="tab-pane container active" id="home">
                        <div class="row" id="jamamam">
                            <div class="col-md-12">
                                <div class="sub__block_content  row">

                                    <div class="content_sub_sub col-md-6 col-sm-12">
                                        <span class="Number__cont">1.</span>
                                        <div class="main__content">
                                            <h2>Search fast, search smart</h2>
                                            <p>Browse hundreds of properties in your city of choice. Save your favorites and set up search alerts so you don't miss your dream place!</p>
                                        </div>
                                    </div>
                                    <div class="sub__image  col-md-6 col-sm-12">
                                        <div class="uimg">
                                            <img src="https://okroomie.com/public/assets/frontend/images/img_ah.png" />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 jadu">
                                <div class="sub__block_content row">
                                    <div class="sub__image  col-md-6 col-sm-12" style="border-right: 10px dotted;">
                                        <div class="uimg">
                                            <img src="https://okroomie.com/public/assets/frontend/images/chat (2).png" />
                                        </div>
                                    </div>
                                    <div class="content_sub_sub  col-md-6 col-sm-12" style="border:none ;   ">
                                        <span class="Number__cont">2.</span>
                                        <div class="main__content">
                                            <h2>Real-time chat with real people</h2>
                                            <p>Communicate directly with advertisers. If all goes well, one of these verified users will become your new landlord!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12  jadu" id="">
                                <div class="sub__block_content  row">

                                    <div class="content_sub_sub col-md-6 col-sm-12">
                                        <span class="Number__cont">3.</span>
                                        <div class="main__content">
                                            <h2>Meet, Greet and finalise</h2>
                                            <p>Once you have inspected the property and you have found the right room, finalise your agreement</p>
                                        </div>
                                    </div>
                                    <div class="sub__image  col-md-6 col-sm-12">
                                        <div class="uimg">
                                            <img src="https://okroomie.com/public/assets/frontend/images/meet (2).png" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 jadu">
                                <!--  <div class="learnmore__button"> 
                            <button>Learn More</button>
                        </div> -->
                                <div class="bg-all mt-5">
                                    <a href="#" class="btn btn-outline-light">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane container fade" id="menu1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub__block_content row">
                                <div class="content_sub_sub   col-md-6 col-sm-12">
                                        <span class="Number__cont">1</span>
                                        <div class="main__content">
                                            <h2>List your properties</h2>
                                            <p>Seamless Advertising : manually within minutes or through a panel of available integrations.</p>
                                        </div>
                                    </div>
                                    <div class="sub__image   col-md-6 col-sm-12">
                                        <div class="uimg">
                                            <img src="https://okroomie.com/public/assets/frontend/images/ump3.png" />
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="sub__block_content row">
     
                                    <div class="sub__image   col-md-6 col-sm-12" style="   border-right: 10px dotted;">
                                        <div class="uimg">
                                            <img src="https://okroomie.com/public/assets/frontend/images/ump1.png" />
                                        </div>
                                    </div>
                                    <div class="content_sub_sub   col-md-6 col-sm-12" style="border: none;">
                                        <span class="Number__cont">2.</span>
                                        <div class="main__content">
                                            <h2>Find & select premium tenants</h2>
                                            <p>Reach thousands of high quality and verified tenants thanks to our global audience !</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="sub__block_content row">
                                <div class="content_sub_sub   col-md-6 col-sm-12">
                                        <span class="Number__cont">3.</span>
                                        <div class="main__content">
                                            <h2>Maximse your earnings</h2>
                                            <p>Ensure your rental income all year long and relist again for when you have to through your portal</p>
                                        </div>
                                    </div>
                                    <div class="sub__image   col-md-6 col-sm-12">
                                        <div class="uimg">
                                            <img src="https://okroomie.com/public/assets/frontend/images/ump2.png" />
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <!-- <div class="learnmore__button"> 
                            <button>Learn More</button>
                        </div> -->
                                <div class="bg-all mt-5">
                                    <a href="#" class="btn btn-outline-light">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









</section>








































@endsection('contents')