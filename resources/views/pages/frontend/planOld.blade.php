<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Okroomie</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}" />
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        .top_plan_content {}

        .plan-title {
            margin: auto;
            text-align: center;
        }

        h1.styles__title {
            padding: 0 1rem;
            margin-top: 2.5rem;
            font-size: 2rem;
            font-weight: 400;
        }

        .styles__description {
            text-align: center;
            margin: 1rem 0 0;
            padding: 0;
            color: #2f3a4a;
            font-size: 1.125rem;
            max-width: 550px;
            margin: auto;
        }

        .plan_describe_nk {
            margin: auto;
            min-width: 1024px;
            margin-top: 2.5rem;
        }


        .styles__planOptionSummary {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-align: center;
            height: 100%;
            border-radius: 12px 12px 0 0;
            padding: 0px;
        }

        .Sub__plan__block {
            background-color: #fff;
            text-align: center;
            padding: 20px 0;
            width: 300px;
            border-radius: 5px;
            box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
            margin: 0px 10px;
        }


        .donk {
    display: flex;
    justify-content: space-between;
    padding: 0px 10px;
}
.parat p {
    color: #92979C;
    font-size: 16px;
}

.donk p.bhgfr {
    font-size: 12px;
    font-weight: 700;
    color: #1A1C24;
}
        .styles__wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .styles__wrappe span {
            margin-bottom: 10px;
            display: block;
        }

        h2.styles__planType {
            font-family: inherit;
            color: #003e9b;
            font-weight: 600;
            font-size: 1.5rem;
            text-align: center;
            margin: 0;
            padding-top: 1.5rem;
        }

        span.styles__amoun {
            color: #005ce6;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .styles__alignLeft {
            padding: 1rem;
        }

        button.ButtonBase-sc {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            outline: none;
            width: fit-content;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5rem;
            border: 0.0625rem solid rgb(0, 105, 119);
            background-color: rgb(0, 105, 119);
            color: rgb(255, 255, 255);
            border-radius: 8px;
            padding: calc(0.6875rem) 1.5rem;
            cursor: pointer;
            width: 100%;
        }

        .styles__planHeade {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .styles__planOptionSummary section {
            padding: 10px 1rem 1rem;
        }

        .styles__desktopTableBenefits .styles__plansContainerRow {
            border-bottom: 1px solid #dde3e3;
        }

        .styles__defaultWrapper {
            background-color: #fff;
            padding: 1rem;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 1rem;
        }

        .top_plan_header ul.nav.nav-tabs {
            border: none;
            background: #fff;
            max-width: 450px;
            margin: auto;
            border-radius: 50px;
            box-shadow: 0px 2px 20px -15px black;
            padding: 10px;
            margin-top: 40px;
        }

        .top_plan_header ul.nav.nav-tabs li.nav-item {
            width: 50%;
        }

        .top_plan_header ul.nav.nav-tabs li.nav-item a.nav-link {
            text-align: center;
            border-radius: 40px;
        }

        .top_plan_header ul.nav.nav-tabs li.nav-item a.nav-link.active {
            border: 1px solid black;
            background: #444444;
            color: #fff;
        }

        .plan_row_one .styles__plansContainerRow {
            grid-template-columns: repeat(5, 1fr);
        }

        .styles__content p {
            margin: 0;
        }

        .plan_row_two .styles__plansContainerRow {
            grid-template-columns: repeat(4, 1fr);
        }

        .styles__plansContainerRow {
    display: grid;
    justify-content: space-around;
    align-items: center;
    align-content: center;
}


/* ******************
	Responsive CSS
*******************/


/*******************
	Large Screen
*******************/
@media screen and (max-width: 1199px) {

}

/*******************
	Monitor Screen
*******************/
 @media screen and (max-width: 1024px) {

}

/*******************
	Tablet Screen
*******************/
@media screen and (max-width: 990px) {


}
/*******************
Large Mobile Screen
*******************/
@media screen and (max-width: 768px) {

.styles__planOptionSummary.col-sm-3 {
    margin-top: 15px;
}
.top_plan_header ul.nav.nav-tabs {
    width: 400px;
}
.top_plan_header {
    font-size: 8px;
}
p.styles__description {
    font-size: 20px;
}
h1.styles__title {
    font-size: 30px;
}
}



/*******************
	Mobiles Screen
*******************/
@media screen and (max-width: 560px) {
    .container {
    padding-right: 175px;
    padding-left: 40px;
}
.styles__planOptionSummary.col-sm-3 {
    margin-top: 10px;
}
.top_plan_header ul.nav.nav-tabs {
    width: 245px;
}
.top_plan_header {
    font-size: 8px;
}
p.styles__description {
    font-size: 13px;
}
h1.styles__title {
    font-size: 20px;
}
}

    </style>
</head>

<body>
    @include('layouts.success_error');
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('list-my-place/step-5')}}">Left</a> -->
                    </div>
                    <div class="logo">
                        <a href="#">
                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="{{url('/')}}"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg__blue">
            <div class="container">
                <div class="plan-page-main">
                    <div class="plan-title">
                        <h1 class="styles__title">Choose your desired plans</h1>
                        <p class="styles__description">Upgrade to find your house mate sooner and maximize your earnings</p>
                    </div>
                    <div class="top_plan_header">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Find Me A Roomie</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#menu1">Find Me A Room</a>
                            </li>
                        </ul>
                    </div>
                    <div class="plan-content__main ">
                        <div class="tab-content">
                            <div class="tab-pane container active" id="home">
                                <div class="top_plan_content plan_row_one">
                                    <div class="plan_describe_nk ">
                                        <div class="styles__plansContainerRow row">

                                            @foreach($plan_roomie as $key=>$plan_roomieVal)
                                            <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two  ">
                                                    <div class="parat">
                                                        <p>{{$plan_roomieVal->title}} </p>

                                                       

                                                        <p class="cobcont">{{$plan_roomieVal->description}} </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->days}}</p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->appear_in_popular_searches}} </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->book_inspections}}</p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->mobile_info}}</p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->thirty_days_guarantee}}</p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->video_profile}}</p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->receive_messages}} </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->send_messages}}
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">{{$plan_roomieVal->in_app_voice_and_video_call}}
                                                        </p>
                                                    </div>
                                                    @if(($plan_roomieVal->title==$roomie_active_plan_id['free_paid']) && ($plan_roomieVal->id==$roomie_active_plan_id['plan_id']))
                                                        <div class="plan__button">
                                                            <button>Current Plan</button>
                                                        </div>
                                                        @elseif(($roomie_active_plan_id['free_paid']=='paid') && ($plan_roomieVal->id==$roomie_active_plan_id['plan_id']))
                                                        <div class="plan__button">
                                                            <a href="{{route('paymentView',['id'=>encrypt($plan_roomieVal->id)])}}"><button>Renew {{$plan_roomieVal->title}} ({{$roomie_active_plan_id['remaining_days']}})</button></a>
                                                        </div>

                                                        @elseif(($plan_roomieVal->price=='0'))
                                                        <div class="plan__button">
                                                           <button disabled>Free</button>
                                                        </div>

                                                        @else
                                                        <div class="plan__button">
                                                            <a href="{{route('paymentView',['id'=>encrypt($plan_roomieVal->id)])}}"><button>Buy Now</button></a>
                                                        </div>
                                                        @endif
                                                </div>
                                            </div>
                                            @endforeach

                                            <!-- <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> -->


                                        </div>
                                    </div>
                            

                                  
                                </div>
                            </div>
                            <div class="tab-pane container" id="menu1">
                                <div class="top_plan_content plan_row_one">
                                    <div class="plan_describe_nk ">
                                        <div class="styles__plansContainerRow row">

                                        @foreach($plan as $key=>$plan_roomVal)
                                            <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two  ">
                                                    <div class="parat">
                                                        <p>{{$plan_roomVal->title}} </p>

                                                       

                                                        <p class="cobcont">{{$plan_roomVal->description}} </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr">{{$plan_roomVal->days}}</p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">{{$plan_roomVal->appear_in_popular_searches}} </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">{{$plan_roomVal->book_inspections}}</p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">{{$plan_roomVal->mobile_info}}</p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">{{$plan_roomVal->thirty_days_guarantee}}</p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">{{$plan_roomVal->video_profile}}</p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">{{$plan_roomVal->receive_messages}} </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">{{$plan_roomVal->send_messages}}
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">{{$plan_roomVal->in_app_voice_and_video_call}}
                                                        </p>
                                                    </div>

                                                    @if(($plan_roomVal->title==$room_active_plan_id['free_paid']) && ($plan_roomVal->id==$room_active_plan_id['plan_id']))
                                                        <div class="plan__button">
                                                            <button>Current Plan</button>
                                                        </div>
                                                        @elseif(($room_active_plan_id['free_paid']=='paid') && ($plan_roomVal->id==$room_active_plan_id['plan_id']))
                                                        <div class="plan__button">
                                                            <a href="{{route('paymentView',['id'=>encrypt($plan_roomVal->id)])}}"><button>Renew {{$plan_roomVal->title}} ({{$room_active_plan_id['remaining_days']}})</button></a>
                                                        </div>

                                                        @elseif(($plan_roomVal->price=='0'))
                                                        <div class="plan__button">
                                                           <button disabled>Free</button>
                                                        </div>

                                                        @else
                                                        <div class="plan__button">
                                                           <a href="{{route('paymentView',['id'=>encrypt($plan_roomVal->id)])}}"> <button>Buy Now</button></a>
                                                        </div>
                                                        @endif
                                                </div>
                                            </div>
                                            @endforeach
                                            

                                            <!-- <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="styles__planOptionSummary col-sm-3">
                                                <div class="Sub__plan__block plan__two">
                                                    <div class="parat">
                                                        <p>Free </p>

                                                        <p>Basic </p>

                                                        <p class="cobcont">Contact people who are Free to Message, and reply to all enquiries. </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Total days </p>
                                                        <p class="bhgfr"></p>
                                                    </div>

                                                    <div class="donk">
                                                        <p class="bhgfr">Appear in popular searches </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>
                                                    <div class="donk">
                                                        <p class="bhgfr">Book inspections </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Mobile info </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">30 day guarantee* </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Video Profile </p>
                                                        <p class="bhgfr">No </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">Receive messages </p>
                                                        <p class="bhgfr">Free to Message listings only </p>
                                                    </div>


                                                    <div class="donk">
                                                        <p class="bhgfr">Send messages </p>
                                                        <p class="bhgfr">Free to Message listings only
                                                        </p>
                                                    </div>



                                                    <div class="donk">
                                                        <p class="bhgfr">In-app voice and video calls </p>
                                                        <p class="bhgfr">No
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> -->


                                        </div>
                                    </div>
                            

                                  
                                </div>
                            </div>
                        </div>
                    </div>
        </section>


        <!-- <section>
               <div class="plan__Page__main">
                    <div class="container">
                        <div class="row">
                           <div class="col-md-3 p-0">
                               <div class="Sub__plan__block plan__one">
                                   <span class="Plan__title">Basic</span>
                                   <div class="plan___icon">
                                       <i class="fa fa-wrench" aria-hidden="true"></i>
                                   </div>
                                   <div class="pric__plan">
                                       <span class="price_span"><strong><sup></sup>Free<sub></sub></strong></span>
                                   </div>
                                   <div class="plan__description">
                                     

                                      <ul>
                                          <li>With the online text generator</li>
                                          <li>With the online text generator</li>
                                          <li><del>With the online text generator</del></li>
                                          <li>With the online text generator</li>
                                          <li>With the online text generator</li>
                                      </ul>
                                   </div>
                                   <div class="plan__button">
                                       <button>Buy Now</button>
                                   </div>
                               </div>
                           </div> 

                           <div class="col-md-3 p-0">
                               <div class="Sub__plan__block plan__two">
                                   <span class="Plan__title">Standard </span>
                                   <div class="plan___icon">
                                       <i class="fa fa-bolt" aria-hidden="true"></i>
                                   </div>
                                   <div class="pric__plan">
                                       <span class="price_span"><strong><sup>$</sup>23.99<sub>/14 Days</sub></strong></span>
                                   </div>
                                   <div class="plan__description">
                                       <p>With the online text generator you can process your personal Lorem <strong>Ipsum</strong> enriching it with html elements that define its structure, with the<strong>Ipsum</strong> possibility to insert external links, but not only</p>
                                   </div>
                                   <div class="plan__button">
                                       <button>Buy Now</button>
                                   </div>
                               </div>
                           </div>

                           <div class="col-md-3 p-0">
                               <div class="Sub__plan__block plan__three">
                                   <span class="Plan__title">Popular plan</span>
                                   <div class="plan___icon">
                                       <i class="fa fa-lock" aria-hidden="true"></i>
                                   </div>
                                   <div class="pric__plan">
                                       <span class="price_span"><strong><sup>$</sup>31.99<sub>/Month</sub></strong></span>
                                   </div>
                                   <div class="plan__description">
                                       <p>With the online text generator you can process your personal Lorem <strong>Ipsum</strong> enriching it with html elements that define its structure, with the<strong>Ipsum</strong> possibility to insert external links, but not only</p>
                                   </div>
                                   <div class="plan__button">
                                       <button>Buy Now</button>
                                   </div>
                               </div>
                           </div>

                           <div class="col-md-3 p-0">
                               <div class="Sub__plan__block plan__four">
                                   <span class="Plan__title">Ultimate </span>
                                   <div class="plan___icon">
                                       <i class="fa fa-star" aria-hidden="true"></i>
                                   </div>
                                   <div class="pric__plan">
                                       <span class="price_span"><strong><sup>$</sup>44.99 <sub>/45 days</sub></strong></span>
                                   </div>
                                   <div class="plan__description">
                                       <p>With the online text generator you can process your personal Lorem <strong>Ipsum</strong> enriching it with html elements that define its structure, with the<strong>Ipsum</strong> possibility to insert external links, but not only</p>
                                   </div>
                                   <div class="plan__button">
                                       <button>Buy Now</button>
                                   </div>
                               </div>
                           </div>   
                        </div>
                    </div>
               </div>
            </section> -->
    </div>

    <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false,
            });
        });
    </script>
</body>

</html>