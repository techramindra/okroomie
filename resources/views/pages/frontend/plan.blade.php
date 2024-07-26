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
            .top_plan_content {
            }

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

            .plan_describe_nk,
            .responsive-table {
                /*margin: auto;
                min-width: 1024px;*/
                margin-top: 2.5rem;
            }

            .styles__plansContainerRow {
                /*display: grid;
                justify-content: : center;
                color: #6d7580;
                grid-template-columns: repeat(5, 1fr);
                column-gap: 5px;*/
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
            .plan_row_one .styles__plansContainerRow,
            .styles__plansContainerRow {
                /*grid-template-columns: repeat(5, 1fr);*/
                display: flex;
			    align-items: stretch;
			    justify-content: space-evenly;
            }
            .styles__plansContainerRow>div,
            .styles__plansContainerRow>div {
			    width: 25%;
			}
			@media (max-width: 1024px) {
				.plan__description {
				    height: 161px;
				}
			}
            .styles__content p {
                margin: 0;
            }
            .plan_row_two .styles__plansContainerRow {
                grid-template-columns: repeat(4, 1fr);
            }
            @media (max-width: 767px) {
            	.top_plan_content {
            		display: none;
            	}
            }
            .responsive-table {
			  width: 100%;
			  margin-bottom: 1.5em;
			  border-spacing: 0;
			}
			@media (min-width: 48em) {
			  .responsive-table {
			    font-size: 0.9em;
			  }
			}
			@media (min-width: 62em) {
			  .responsive-table {
			    font-size: 1em;
			  }
			}
			.responsive-table thead {
			  position: absolute;
			  clip: rect(1px 1px 1px 1px);
			  /* IE6, IE7 */
			  padding: 0;
			  border: 0;
			  height: 1px;
			  width: 1px;
			  overflow: hidden;
			}
			@media (min-width: 48em) {
			  .responsive-table thead {
			    position: relative;
			    clip: auto;
			    height: auto;
			    width: auto;
			    overflow: auto;
			  }
			}
			.responsive-table thead th {
			  background-color: #26890d;
			  border: 1px solid #86bc25;
			  font-weight: normal;
			  text-align: center;
			  color: white;
			}
			.responsive-table thead th:first-of-type {
			  text-align: left;
			}
			.responsive-table tbody,
			.responsive-table tr,
			.responsive-table th,
			.responsive-table td {
			  display: block;
			  padding: 0;
			  text-align: center;
			  white-space: normal;
			}
			.responsive-table tbody th[scope=row] div:not(:last-of-type) {
				margin-bottom: 1rem;
			}
			.responsive-table tbody tr.free th {
				background: #FAA11F;
			}
			.responsive-table tbody tr.standard th {
				background: #DC493F;
			}
			.responsive-table tbody tr.popular th {
				background: #04A5AF;
			}
			.responsive-table tbody tr.ultimate th {
				background: #444156;
			}
			.responsive-table tbody tr.free .btn-outline-light:hover,
			.responsive-table tbody tr.free .btn-outline-light:active {
			    color: #FAA11F;
			}

			.responsive-table tbody tr.standard .btn-outline-light:hover,
			.responsive-table tbody tr.standard .btn-outline-light:active {
			    color: #DC493F;
			}

			.responsive-table tbody tr.popular .btn-outline-light:hover,
			.responsive-table tbody tr.popular .btn-outline-light:active {
			    color: #04A5AF;
			}

			.responsive-table tbody tr.ultimate .btn-outline-light:hover,
			.responsive-table tbody tr.ultimate .btn-outline-light:active {
			    color: #444156;
			}
			@media (min-width: 768px) {
				.responsive-table {
					display: none;
				}
			}
			@media (min-width: 48em) {
			  .responsive-table tr {
			    display: table-row;
			  }
			}
			.responsive-table th,
			.responsive-table td {
			  padding: 0.5em;
			  vertical-align: middle;
			}
			@media (min-width: 30em) {
			  .responsive-table th,
			.responsive-table td {
			    padding: 0.75em 0.5em;
			  }
			}
			@media (min-width: 48em) {
			  .responsive-table th,
			.responsive-table td {
			    display: table-cell;
			    padding: 0.5em;
			  }
			}
			@media (min-width: 62em) {
			  .responsive-table th,
			.responsive-table td {
			    padding: 0.75em 0.5em;
			  }
			}
			@media (min-width: 75em) {
			  .responsive-table th,
			.responsive-table td {
			    padding: 0.75em;
			  }
			}
			.responsive-table caption {
			  margin-bottom: 1em;
			  font-size: 1em;
			  font-weight: bold;
			  text-align: center;
			}
			@media (min-width: 48em) {
			  .responsive-table caption {
			    font-size: 1.5em;
			  }
			}
			.responsive-table tfoot {
			  font-size: 0.8em;
			  font-style: italic;
			}
			@media (min-width: 62em) {
			  .responsive-table tfoot {
			    font-size: 0.9em;
			  }
			}
			@media (min-width: 48em) {
			  .responsive-table tbody {
			    display: table-row-group;
			  }
			}
			.responsive-table tbody tr {
			  margin-bottom: 1em;
			}
			@media (min-width: 48em) {
			  .responsive-table tbody tr {
			    display: table-row;
			    border-width: 1px;
			  }
			}
			.responsive-table tbody tr:last-of-type {
			  margin-bottom: 0;
			}
			@media (min-width: 48em) {
			  .responsive-table tbody tr:nth-of-type(even) {
			    background-color: rgba(0, 0, 0, 0.12);
			  }
			}
			.responsive-table tbody th[scope=row] {
			  /*background-color: #26890d;*/
			  color: white;
			}
			@media (min-width: 30em) {
			  .responsive-table tbody th[scope=row] {
			    /*border-left: 1px solid #86bc25;
			    border-bottom: 1px solid #86bc25;*/
			  }
			}
			@media (min-width: 48em) {
			  .responsive-table tbody th[scope=row] {
			    background-color: transparent;
			    color: #000001;
			    text-align: left;
			  }
			}
			.responsive-table tbody td {
			  text-align: right;
			}
			.fa.fa-times {
			    color: red;
			}
			.fa.fa-check {
			    color: #8bc34a;
			}
			@media (min-width: 48em) {
			  .responsive-table tbody td {
			    /*border-left: 1px solid #86bc25;
			    border-bottom: 1px solid #86bc25;*/
			    text-align: center;
			  }
			}
			@media (min-width: 48em) {
			  .responsive-table tbody td:last-of-type {
			    /*border-right: 1px solid #86bc25;*/
			  }
			}
			.responsive-table tbody td[data-type=currency] {
			  text-align: right;
			}
			.responsive-table tbody td[data-title]:before {
			  content: attr(data-title);
			  float: left;
			  font-size: 0.8em;
			  color: rgba(0, 0, 0, 0.54);
			}
			@media (min-width: 30em) {
			  .responsive-table tbody td[data-title]:before {
			    font-size: 0.9em;
			  }
			}
			@media (min-width: 48em) {
			  .responsive-table tbody td[data-title]:before {
			    content: none;
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
                <div class="container-fluid">
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
                                <div class="tab-pane active" id="home">
                                    <div class="top_plan_content plan_row_one">
                                        <div class="plan_describe_nk ">
                                            <div class="styles__plansContainerRow">
                                                <div class="styles__headerBox___MRFFl"></div>
                                                @foreach($plan_roomie as $key=>$plan_roomieVal)
                                                <div class="styles__planOptionSummary">
                                                    <div class="Sub__plan__block {{$css[$key]}}">
                                                        <span class="Plan__title">{{$plan_roomieVal->title}}</span>
                                                        <div class="plan___icon">
                                                            <i class="fa fa-{{$icon[$key]}}" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pric__plan">
                                                            <span class="price_span">
                                                                <strong><sup>$</sup>{{$plan_roomieVal->price}}<sub></sub></strong>
                                                            </span>
                                                        </div>
                                                        <div class="plan__description">
                                                            <p>
                                                            {{$plan_roomieVal->description}}
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
                                             
                                                <!-- <div class="styles__planOptionSummary">
                                                    <div class="Sub__plan__block plan__two">
                                                        <span class="Plan__title">Standard </span>
                                                        <div class="plan___icon">
                                                            <i class="fa fa-bolt" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pric__plan">
                                                            <span class="price_span">
                                                                <strong><sup>$</sup>23.99</strong>
                                                            </span>
                                                        </div>
                                                        <div class="plan__description">
                                                            <p>
                                                               Rank higher in the search results, contact anyone, and reply to all enquiries.

                                                            </p>
                                                        </div>
                                                        <div class="plan__button">
                                                            <button>Buy Now</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="styles__planOptionSummary">
                                                    <div class="Sub__plan__block plan__three">
                                                        <span class="Plan__title">Popular plan</span>
                                                        <div class="plan___icon">
                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pric__plan">
                                                            <span class="price_span">
                                                                <strong><sup>$</sup>31.99</strong>
                                                            </span>
                                                        </div>
                                                        <div class="plan__description">
                                                            <p>
                                                               Let even more people see your listing over a longer time than on our Basic plan. 

                                                            </p>
                                                        </div>
                                                        <div class="plan__button">
                                                            <button>Buy Now</button>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="styles__planOptionSummary">
                                                  <div class="Sub__plan__block plan__four">
                                                     <span class="Plan__title">Ultimate </span>
                                                     <div class="plan___icon">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                     </div>
                                                     <div class="pric__plan">
                                                        <span class="price_span">
                                                            <strong><sup>$</sup>44.99</strong>
                                                        </span>
                                                     </div>
                                                     <div class="plan__description">
                                                        <p>
                                                           for those who need to activate 3 or more property listings.

                                                        </p>
                                                     </div>
                                                     <div class="plan__button">
                                                        <button>Buy Now</button>
                                                    </div>
                                                </div> -->

                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="styles__desktopTableBenefits">
                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Total Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($days_roomie as $days_roomieVal)
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">{{$days_roomieVal}}</p></div>
                                                </div>
                                                @endforeach

                                                <!-- <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free</p></div>
                                                </div>

                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">14 Days</p></div>
                                                </div>


                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">30 Days</p></div>
                                                </div>


                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">45 Days</p></div>
                                                </div> -->
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Listed as a featured property</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($listed_as_a_featured_property_roomie as $listed_as_a_featured_property_roomieVal)
                                                @if($listed_as_a_featured_property_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @endif
                                                @endforeach

                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Listings included </span>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($listing_included_roomie as $listing_included_roomieVal)
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">{{$listing_included_roomieVal}}</p></div>
                                                </div>
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper">1</div>
                                                <div class="styles__defaultWrapper">2</div>
                                                <div class="styles__defaultWrapper">3 or more</div> -->
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Book inspections </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach($book_inspections_roomie as $book_inspections_roomieVal)
                                                @if($book_inspections_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @endif
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Mobile info</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($mobile_info_roomie as $mobile_info_roomieVal)
                                                @if($mobile_info_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @endif
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>30 day guarantee*</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($thirty_days_guarantee_roomie as $thirty_days_guarantee_roomieVal)
                                                @if($thirty_days_guarantee_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>

                                                @elseif($thirty_days_guarantee_roomieVal=="No")
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper">{{$thirty_days_guarantee_roomieVal}}</div>

                                                @endif
                                                
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Video Tours </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach($video_tours_roomie as $video_tours_roomieVal)
                                                @if($video_tours_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @endif
                                                @endforeach

                                               <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Receive messages</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach($receive_messages_roomie as $receive_messages_roomieVal)
                                                @if((!$receive_messages_roomieVal=="Yes")&&(!$receive_messages_roomieVal=="No"))
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free to Message listings only</p></div>
                                                </div>
                                                @elseif($receive_messages_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @endif
                                                @endforeach

                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Send messages</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($send_messages_roomie as $send_messages_roomieVal)
                                                @if((!$send_messages_roomieVal=="Yes")&&(!$send_messages_roomieVal=="No"))
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free to Message listings only</p></div>
                                                </div>
                                                @elseif($send_messages_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @endif
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Yes to paid listings only</p></div>
                                                </div>
                                               <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>


                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>In-app voice and video calls</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($in_app_voice_and_video_call_roomie as $in_app_voice_and_video_call_roomieVal)
                                                @if($in_app_voice_and_video_call_roomieVal=="Yes")
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>

                                                @elseif($in_app_voice_and_video_call_roomieVal=="No")
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper">{{$in_app_voice_and_video_call_roomieVal}}</div>

                                                @endif
                                                
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>
                                        </div>
                                    </div>

                                	 <table class="responsive-table">
									    <tbody>
									      <tr class="free">
									        <th scope="row">
									        	<div class="plan-title">Free</div>
									        	<div class="plan-icon"><i class="fa fa-wrench" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>0<sub></sub></strong></div>
									        	<div class="plan-description">Contact people who are Free to Message, and reply to all enquiries.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Current Plan</button></div>
									        </th>
									        <td data-title="Total Days">-</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-times"></i></td>
									        <td data-title="Listings included">1</td>
									        <td data-title="Book inspections"><i class="fa fa-times"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-times"></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-times"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-times"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									      <tr class="standard">
									        <th scope="row">
									        	<div class="plan-title">Standard</div>
									        	<div class="plan-icon"><i class="fa fa-bolt" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>24<sub></sub></strong></div>
									        	<div class="plan-description">Rank higher in the search results, contact anyone, and reply to all enquiries.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Buy Now</button></div>
									        </th>
									        <td data-title="Total Days">14 days</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included">1</td>
									        <td data-title="Book inspections"><i class="fa fa-check"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-check"></i></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-times"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-check"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									      <tr class="popular">
									       <th scope="row">
									        	<div class="plan-title">Popular</div>
									        	<div class="plan-icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>32<sub></sub></strong></div>
									        	<div class="plan-description">Let even more people see your listing over a longer time than on our Basic plan.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Buy Now</button></div>
									        </th>
									        <td data-title="Total Days">30 days</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included">2</td>
									        <td data-title="Book inspections"><i class="fa fa-check"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-check"></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-check"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-check"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									       <tr class="ultimate">
									       <th scope="row">
									        	<div class="plan-title">Ultimate</div>
									        	<div class="plan-icon"><i class="fa fa-star" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>45<sub></sub></strong></div>
									        	<div class="plan-description">for those who need to activate 3 or more property.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Buy Now</button></div>
									        </th>
									        <td data-title="Total Days">45 days</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included">3 or more</td>
									        <td data-title="Book inspections"><i class="fa fa-check"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-check"></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-check"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-check"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									    </tbody>
									  </table>
                                </div>

                                <div class="tab-pane fade" id="menu1">
                                    <div class="top_plan_content plan_row_two">
                                        <div class="plan_describe_nk ">
                                            <div class="styles__plansContainerRow">
                                                <div class="styles__headerBox___MRFFl"></div>
                                                @foreach($plan as $key =>$planVal)
                                                <div class="styles__planOptionSummary">
                                                    <div class="Sub__plan__block {{$css[$key]}}">
                                                        <span class="Plan__title">{{$planVal->title}}</span>
                                                        <div class="plan___icon">
                                                            <i class="fa fa-{{$icon[$key]}}" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pric__plan">
                                                            <span class="price_span">
                                                                <strong><sup>$</sup>{{$planVal->price}}<sub></sub></strong>
                                                            </span>
                                                        </div>
                                                        <div class="plan__description">
                                                            <p>
                                                            {{$planVal->description}}
                                                            </p>
                                                        </div>

                                                        @if(($planVal->title==$room_active_plan_id['free_paid']) && ($planVal->id==$room_active_plan_id['plan_id']))
                                                        <div class="plan__button">
                                                            <button>Current Plan</button>
                                                        </div>
                                                        @elseif(($room_active_plan_id['free_paid']=='paid') && ($planVal->id==$room_active_plan_id['plan_id']))
                                                        <div class="plan__button">
                                                            <a href="{{route('paymentView',['id'=>encrypt($planVal->id)])}}"><button>Renew {{$planVal->title}} ({{$room_active_plan_id['remaining_days']}})</button></a>
                                                        </div>

                                                        @elseif(($planVal->price=='0'))
                                                        <div class="plan__button">
                                                           <button disabled>Free</button>
                                                        </div>

                                                        @else
                                                        <div class="plan__button">
                                                           <a href="{{route('paymentView',['id'=>encrypt($planVal->id)])}}"> <button>Buy Now</button></a>
                                                        </div>
                                                        @endif


                                                       

                                                    </div>

                                                </div>
                                                @endforeach
                                                <!-- <div class="styles__planOptionSummary">
                                                    <div class="Sub__plan__block plan__two">
                                                        <span class="Plan__title">Standard </span>
                                                        <div class="plan___icon">
                                                            <i class="fa fa-bolt" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pric__plan">
                                                            <span class="price_span">
                                                                <strong><sup>$</sup>20.99</strong>
                                                            </span>
                                                        </div>
                                                        <div class="plan__description">
                                                            <p>
                                                              Rank higher in the search results, contact anyone, and reply to all enquiries.

                                                            </p>
                                                        </div>
                                                        <div class="plan__button">
                                                            <button>Buy Now</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="styles__planOptionSummary">
                                                    <div class="Sub__plan__block plan__three">
                                                        <span class="Plan__title">Popular plan</span>
                                                        <div class="plan___icon">
                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="pric__plan">
                                                            <span class="price_span">
                                                                <strong><sup>$</sup>30.99</strong>
                                                            </span>
                                                        </div>
                                                        <div class="plan__description">
                                                            <p>
                                                              Let even more people see your listing over a longer time than on our Basic plan. 

                                                            </p>
                                                        </div>
                                                        <div class="plan__button">
                                                            <button>Buy Now</button>
                                                        </div>
                                                    </div>

                                                </div> -->

                                            </div>
                                        </div>
                                        <div class="styles__desktopTableBenefits ">
                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Total Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 @foreach($days as $daysVal)
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">{{$daysVal}}</p></div>
                                                </div>
                                                @endforeach

                                                <!-- <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">14 Days</p></div>
                                                </div>


                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">30 Days</p></div>
                                                </div> -->

                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Appear in popular searches</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($appear_in_popular_searches as $key=>$appear_in_popular_searchesVal)
                                                @if(!$appear_in_popular_searchesVal)
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">{{$appear_in_popular_searchesVal}}</p></div>
                                                </div>
                                                @endif
                                                @endforeach


                                                <!-- <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">2 Weeks</p></div>
                                                </div> -->

                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Book inspections </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($book_inspections as $book_inspectionsVal)
                                                @if(!$book_inspectionsVal)
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach

                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Mobile info </span>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($mobile_info as $mobile_infoVal)
                                                @if(!$mobile_infoVal)
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>


                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                                
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>30 day guarantee*</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($thirty_days_guarantee as $thirty_days_guaranteeVal)
                                                @if(!$thirty_days_guaranteeVal)
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach
                                               <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Video Profile  </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($video_tours as $video_toursVal)
                                                @if(!$video_toursVal)
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach

                                               <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->

                                            </div>

                                            <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Receive messages</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($receive_messages as $receive_messagesVal)
                                                @if(!$receive_messagesVal)
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free to Message listings only</p></div>
                                                </div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach

                                                <!-- <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free to Message listings only</p></div>
                                                </div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->

                                            </div>

                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>Send messages</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($send_messages as $send_messagesVal)
                                                @if(!$send_messagesVal)
                                                <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free to Message listings only</p></div>
                                                </div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach
                                               <!-- <div class="styles__defaultWrapper">
                                                    <div class="styles__content"><p class="styles__benefitDescription">Free to Message listings only</p></div>
                                                </div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>


                                           <div class="styles__plansContainerRow">
                                                <div class="styles__alignLeft">
                                                    <div class="styles__content">
                                                        <div>
                                                            <div>
                                                                <span>In-app voice and video calls</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @foreach($in_app_voice_and_video_call as $in_app_voice_and_video_callVal)
                                                @if(!$in_app_voice_and_video_callVal)
                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                @else
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div>
                                                @endif
                                                @endforeach
                                                <!-- <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>

                                                <div class="styles__defaultWrapper"><i class="fa fa-times"></i></div>
                                                
                                                <div class="styles__defaultWrapper"><i class="fa fa-check"></i></div> -->
                                            </div>
                                        </div>
                                    </div>
                                     <table class="responsive-table">
									    <tbody>
									      <tr class="free">
									        <th scope="row">
									        	<div class="plan-title">Free</div>
									        	<div class="plan-icon"><i class="fa fa-wrench" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>0<sub></sub></strong></div>
									        	<div class="plan-description">Contact people who are Free to Message, and reply to all enquiries.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Current Plan</button></div>
									        </th>
									        <td data-title="Total Days">-</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-times"></i></td>
									        <td data-title="Listings included">1</td>
									        <td data-title="Book inspections"><i class="fa fa-times"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-times"></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-times"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-times"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									      <tr class="standard">
									        <th scope="row">
									        	<div class="plan-title">Standard</div>
									        	<div class="plan-icon"><i class="fa fa-bolt" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>24<sub></sub></strong></div>
									        	<div class="plan-description">Rank higher in the search results, contact anyone, and reply to all enquiries.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Buy Now</button></div>
									        </th>
									        <td data-title="Total Days">14 days</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included">1</td>
									        <td data-title="Book inspections"><i class="fa fa-check"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-check"></i></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-times"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-check"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									      <tr class="popular">
									       <th scope="row">
									        	<div class="plan-title">Popular</div>
									        	<div class="plan-icon"><i class="fa fa-lock" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>32<sub></sub></strong></div>
									        	<div class="plan-description">Let even more people see your listing over a longer time than on our Basic plan.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Buy Now</button></div>
									        </th>
									        <td data-title="Total Days">30 days</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included">2</td>
									        <td data-title="Book inspections"><i class="fa fa-check"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-check"></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-check"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-check"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									       <tr class="ultimate">
									       <th scope="row">
									        	<div class="plan-title">Ultimate</div>
									        	<div class="plan-icon"><i class="fa fa-star" aria-hidden="true"></i></div>
									        	<div class="plan-price"><strong><sup>$</sup>45<sub></sub></strong></div>
									        	<div class="plan-description">for those who need to activate 3 or more property.</div>
									        	<div class="plan-button"><button class="btn btn-outline-light">Buy Now</button></div>
									        </th>
									        <td data-title="Total Days">45 days</td>
									        <td data-title="Listed as a featured property"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included"><i class="fa fa-check"></i></td>
									        <td data-title="Listings included">3 or more</td>
									        <td data-title="Book inspections"><i class="fa fa-check"></i></td>
									        <td data-title="Mobile info"><i class="fa fa-check"></i></td>
									        <td data-title="30 day guarantee*">-</td>
									        <td data-title="Video Tours"><i class="fa fa-check"></i></td>
									        <td data-title="Receive messages"><i class="fa fa-check"></i></td>
									        <td data-title="Send messages"><i class="fa fa-check"></i></td>
									        <td data-title="In-app voice and video calls">-</td>
									      </tr>
									    </tbody>
									  </table>
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
            $(function () {
                $("input.steprd").checkboxradio({
                    icon: false,
                });
            });
        </script>
    </body>
</html>
