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

        .stepthird textarea.form-control {
            height: auto;
            border-radius: 20px;
            resize: none;
            height: 150px !important;
            overflow: auto;
        }

         button {
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
    border: 0.0625rem solid #6e6658;
    background-color: #6e6658;
    color: rgb(255, 255, 255);
    border-radius: 8px;
    padding: calc(0.6875rem) 1.5rem;
    cursor: pointer;
    margin: auto;
}




        .icone {
            position: absolute;
            right: 0px;
            top: 0px;
            z-index: -1;
            background: #80D6DB;
            width: 13%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            align-content: center;
            color: white;
            font-size: 25px;
        }

        input#datepicker {
            background: transparent;
            opacity: 0.5;
        }

        i.fa.fa-calendar {
            z-index: 8;
            display: block;
            /* background: radial-gradient(black, transparent); */
            background: #80D6DB;
        }
        .stepradio .row.my-5 {
    margin: 0 !important;
}

.custumradiosetone {
   
    padding: 30px 0 !important;
   
}
    </style>
    
</head>

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

        <section class="list_step_Main_3 bg__blue">

            <div class="container">
                <div class="titlestep mt-5">
                    <h3>Describe your place</h3>
                    <!-- <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2> -->
                </div>
                <div class="stepthird">
                <form  action="{{route('roomieUpdateIndexPost')}}" method="POST"> 
                        <input type="hidden" name="id" value="{{encrypt($data->id)}}">
                      
                        @csrf
                        <div class="stepradio">
                            <div class="row my-5">
                                <div class="col-md-8 m-auto">


                                    <div class="stepform form-group">
                                        <label class="titlestep">The Listing Address</label>
                                        <input type="text" value="{{$data->property_address}}" name="property_address" id="property_address" class="form-control" placeholder="Address">
                                    </div>

                                    <div class="error">
                                        <p></p>
                                    </div>





                                    <div class="error">
                                        <p></p>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="steptworadio" id="steptworadio">
                                                <label class="titlestep">Number of Bedrooms</label>

                                                <div class="countArea__block">
                                                    <a href="javascript:;" onclick="bedroomIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                                    <!--  <span class="count" id="bedroomCount1">0</span> -->
                                                    <input type="text" name="total_bedrooms" value="{{$data->total_bedrooms}}" class="count" id="bedroomCount" />
                                                    <a href="javascript:;" onclick="bedroomDecrease()" class=" button_mod"><i class="fa fa-minus"></i></a>
                                                </div>
                                            </div>

                                            <div class="error">
                                                <p></p>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="steptworadio" id="steptworadio">
                                                <label class="titlestep">Number of Bathrooms</label>

                                                <div class="countArea__block">
                                                    <a href="javascript:;" onclick="bathroomIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                                    <!--  <span class="count" id="bedroomCount1">0</span> -->
                                                    <input type="text" name="total_bathrooms" value="{{$data->total_bathrooms}}" class="count" id="bathroomCount" />
                                                    <a href="javascript:;" onclick="bathroomDecrease()" class=" button_mod"><i class="fa fa-minus"></i></a>
                                                </div>
                                            </div>


                                            <div class="error">
                                                <p></p>
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <div class="steptworadio">
                                                <label class="titlestep">Total number of Roommates </label>
                                                <div class="countArea__block">
                                                    <a href="javascript:;" onclick="totalNumberOfRoommatesIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                                    <!--  <span class="count" id="bedroomCount1">0</span> -->
                                                    <input type="text" name="total_number_of_flatemates" value="{{$data->total_number_of_flatemates}}" class="count" id="totalNumberOfRoommatesCount" />
                                                    <a href="javascript:;" onclick="totalNumberOfRoommatesDecrease()" class=" button_mod"><i class="fa fa-minus"></i></a>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>

                                    </div>






                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Parking</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio34" value="Available on premises" name="parking" class="steprd" {{$data->parking=="Available on premises" ? "checked" : ""}}>
                                                <label for="radio34">
                                                    <span>Available on premises</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio32" value="Off street Parking" name="parking" class="steprd" {{$data->parking=="Off street Parking" ? "checked" : ""}}>
                                                <label for="radio32">
                                                    <span>Off street Parking</span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" id="radio33" value="No Parking" name="parking" class="steprd" {{$data->parking=="No Parking" ? "checked" : ""}}>
                                                <label for="radio33">
                                                    <span> No Parking </span>
                                                </label>
                                            </div>
                                        </div>

                                        <!--  <span class="notestep">Including the one you're offering.</span> -->
                                    </div>

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Public Transport Nearby</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio35" value="Train station" name="public_transport" class="steprd" {{$data->public_transport=="Train station" ? "checked" : ""}}>
                                                <label for="radio35">
                                                    <span>Train station</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio36" value="Bus" name="public_transport" class="steprd" {{$data->public_transport=="Bus" ? "checked" : ""}}>
                                                <label for="radio36">
                                                    <span>Bus</span>
                                                </label>
                                            </div>
                                        </div>

                                        <!--  <span class="notestep">Including the one you're offering.</span> -->
                                    </div>




                                    <div class="error">
                                        <p></p>
                                    </div>


                                    


                                </div>
                            </div>
                        </div>



                        <div class="stepradio">
                            <div class="row ">
                                <div class="col-md-8 m-auto">
                                <label class="titlestep">What type of place would you like to list ? </label>
                                <div id="radioset" class="custumradiosetone">
                            

<div class="cRadiosub">
    <input type="radio" class="steprd" id="radio53" value="Single Room" name="accomodation_type" {{$data->accomodation_type=="Single Room" ? "checked" : ""}}>
    <label for="radio53" >
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
            <path fill="#898986" d="M12.487 10a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0ZM9.605 2.014A.5.5 0 0 0 9 2.502v15a.5.5 0 0 0 .605.489l7-1.501a.5.5 0 0 0 .394-.49V4a.5.5 0 0 0-.395-.488l-7-1.499ZM10 16.883V3.12l6 1.285v11.192l-6 1.286Zm-1.998.115v-1H4V4.003h4.002v-1H3.5a.5.5 0 0 0-.5.5v12.995a.5.5 0 0 0 .5.5h4.502Z" />
        </svg>
    </label>
    <span>Single Room</span>
</div>
<div class="cRadiosub">
    <input type="radio" class="steprd" id="radio52" value="Entire House" name="accomodation_type" {{$data->accomodation_type=="Entire House" ? "checked" : ""}}>
    <label for="radio52">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
            <path fill="#898986" fill-rule="evenodd" d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207l-5-5l-5 5V13.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7.207Zm-5-.225C9.664 5.309 13.825 8.236 8 12C2.175 8.236 6.336 5.309 8 6.982Z" />
        </svg>
    </label>
    <span>Entire House</span>
</div>
<div class="cRadiosub">
    <input type="radio" class="steprd" value="Student Housing" id="radio51" name="accomodation_type" {{$data->accomodation_type=="Student Housing" ? "checked" : ""}}>
    <label for="radio51">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
            <path fill="#898986" d="m16 7.78l-.313.095l-12.5 4.188L.345 13L2 13.53v8.75c-.597.347-1 .98-1 1.72a2 2 0 1 0 4 0c0-.74-.403-1.373-1-1.72v-8.06l2 .655V20c0 .82.5 1.5 1.094 1.97c.594.467 1.332.797 2.218 1.093c1.774.59 4.112.937 6.688.937c2.576 0 4.914-.346 6.688-.938c.886-.295 1.624-.625 2.218-1.093C25.5 21.5 26 20.82 26 20v-5.125l2.813-.938L31.655 13l-2.843-.938l-12.5-4.187L16 7.78zm0 2.095L25.375 13L16 16.125L6.625 13L16 9.875zm-8 5.688l7.688 2.562l.312.094l.313-.095L24 15.562V20c0 .01.004.126-.313.375c-.316.25-.883.565-1.625.813C20.58 21.681 18.395 22 16 22c-2.395 0-4.58-.318-6.063-.813c-.74-.247-1.308-.563-1.624-.812C7.995 20.125 8 20.01 8 20v-4.438z" />
        </svg>
    </label>
    <span>Student Housing</span>
</div>

<div class="cRadiosub">
    <input type="radio" class="steprd" id="radio50" value="Homestay" name="accomodation_type" {{$data->accomodation_type=="Homestay" ? "checked" : ""}}>
    <label for="radio50">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path fill="#898986" d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm9-8.586l6 6V15l.001 5H6v-9.586l6-6z" />
            <path fill="#898986" d="M12 18c3.703 0 4.901-3.539 4.95-3.689l-1.9-.621c-.008.023-.781 2.31-3.05 2.31c-2.238 0-3.02-2.221-3.051-2.316l-1.899.627C7.099 14.461 8.297 18 12 18z" />
        </svg>
    </label>
    <span>Homestay</span>
</div>

<div class="cRadiosub">
    <input type="radio" class="steprd" id="radio9" value="Help And Relief In a  Apartment" name="accomodation_type" {{$data->accomodation_type=="Help And Relief In a  Apartment" ? "checked" : ""}}>
    <label for="radio9">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
            <path fill="#898986" d="m21 3.031l-.656.719c-1.469 1.617-2.68 2.34-3.688 2.813c-1.008.472-1.855.613-2.687 1.25c-.887.68-2.176 1.984-2.719 4.312c-1.164.254-2.016.7-2.688 1.281c-.664.574-1.164 1.227-1.78 1.938c-.005.008.003.023 0 .031c-.884 1.016-1.657 2.11-3.157 2.688l-.625.25V29h19.063c1.093-.059 1.851-.816 2.312-1.563c.46-.746.715-1.554.844-2.218c.332-1.692.937-6.563.937-6.563l.032-.093v-.094c-.032-.676-.31-1.25-.657-1.782l1.125-3.343l1.782-2.688l.5-.719l-.657-.593l-6.562-5.688zm.063 2.75l5.218 4.532l-1.375 2.03l-.093.095l-.032.156l-.906 2.687c-.473-.195-.96-.332-1.5-.312h-.063L16 15h-1v3.875c-.14 1.09-.746 1.512-1.5 1.813c-.25.101-.281.046-.5.093V14.97c-.164-3.707 1.156-4.774 2.188-5.563c.285-.219 1.12-.472 2.312-1.031c.996-.469 2.234-1.309 3.563-2.594zm-10 8.594c-.004.227-.075.387-.063.625v8h1s1.07-.012 2.219-.469c1.148-.457 2.535-1.527 2.781-3.406V17l5.375-.031h.031a1.662 1.662 0 0 1 1.75 1.562c-.004.016-.05.387-.062.469H20v2h3.844c-.106.773-.203 1.258-.313 2H20v2h3.219a5.002 5.002 0 0 1-.563 1.375c-.273.445-.508.613-.718.625H5v-7.469c1.621-.86 2.629-2.097 3.281-2.843c.676-.774 1.14-1.36 1.594-1.75c.297-.254.762-.399 1.188-.563z" />
        </svg>
    </label>
    <span>Help And Relief </span>
</div>



</div>
                                    <div class="stepform form-group">
                                        <label class="titlestep">Weekly Rent</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" value="{{$data->weekely_rent}}" class="form-control" placeholder="" name="weekely_rent" >
                                        </div>
                                        <p> <a href="https://www.consumer.vic.gov.au/housing/renting/rent-bond-bills-and-condition-reports/rent/rent-calculator">help me calculate my rent</a></p>

                                        <div class="error">
                                            <p></p>
                                        </div>

                                    </div>

                                    <div class="stepform form-group">
                                        <label class="titlestep">Bond</label>
                                        <select name="bond" id="" class="form-control">
                                            <option value="0" {{$data->bond==0 ? "selected" : ""}}>Select</option>
                                            <option value="None" {{$data->bond=="None" ? "selected" : ""}}>None</option>
                                            <option value="1 week" {{$data->bond=="1 week" ? "selected" : ""}}>1 week</option>
                                            <option value="2 weeks" {{$data->bond=="2 weeks" ? "selected" : ""}}>2 weeks</option>
                                            <option value="3 weeks" {{$data->bond=="3 weeks" ? "selected" : ""}}>3 weeks</option>
                                            <option value="4 weeks" {{$data->bond=="4 weeks" ? "selected" : ""}}>4 weeks</option>

                                        </select>
                                    </div>

                                    <div class="error">
                                        <p></p>
                                    </div>




                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Bills are</label>
                                        <div id="radioset22" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio30" name="bills" value="Included in Rent" class="steprd" {{$data->bills=="Included in Rent" ? "checked" : ""}}>
                                                <label for="radio30">
                                                    <span>Included in Rent </span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" id="radio31" name="bills" value="Not Included in Rent" class="steprd" {{$data->bills=="Not Included in Rent" ? "checked" : ""}}>
                                                <label for="radio31">
                                                    <span>Not Included in Rent</span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>

                                    </div>

                                    <div class="stepform form-group">
                                        <label class="titlestep">Date available</label>
                                        <div class="input-group mb-3" id="my-date">
                                            <!-- <div class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </div> -->
                                            <input type="text" name="date_available" value="{{$data->date_available}}" id="datepicker" class="form-control" placeholder="Select A Date" >

                                        </div>
                                    </div>

                                    <div class="error">
                                        <p></p>
                                    </div>



                                    <div class="stepform form-group">
                                        <label class="titlestep">Minimum rental period </label>
                                        <select name="min_length_of_stay" id="" class="form-control">
                                            <option value="0" {{$data->min_length_of_stay=="0" ? "selected" : ""}}> Select </option>
                                            <option value="No Minimum stay" {{$data->min_length_of_stay=="No Minimum stay" ? "selected" : ""}}>No Minimum stay</option>
                                            <option value="1 week" {{$data->min_length_of_stay=="1 week" ? "selected" : ""}}>1 Week</option>
                                            <option value="2 weeks" {{$data->min_length_of_stay=="2 weeks" ? "selected" : ""}}>2 Weeks</option>
                                            <option value="1 month" {{$data->min_length_of_stay=="1 month" ? "selected" : ""}}>1 month</option>
                                            <option value="2 months" {{$data->min_length_of_stay=="2 months" ? "selected" : ""}}>2 months</option>
                                            <option value="3 months" {{$data->min_length_of_stay=="3 months" ? "selected" : ""}}>3 months</option>
                                            <option value="4 months" {{$data->min_length_of_stay=="4 months" ? "selected" : ""}}>4 months</option>
                                            <option value="6 months" {{$data->min_length_of_stay=="6 months" ? "selected" : ""}}>6 months</option>
                                            <option value="9 months" {{$data->min_length_of_stay=="9 months" ? "selected" : ""}}>9 months</option>
                                            <option value="12 months+" {{$data->min_length_of_stay=="12 months+" ? "selected" : ""}}>12 months+</option>

                                        </select>
                                    </div>

                                   


                                    <!-- <div class="stepform form-group">
                                        <label class="titlestep">Tell us a little about the roommates living on premises?</label>
                                        <div class=" mb-3">
                                            <textarea name="about_roommates" id="" rows="5" class="form-control" placeholder="Say something about roommates..."></textarea>
                                        </div>
                                    </div> -->

                                   


                                    


                                </div>
                            </div>
                        </div>



                        <!-- <div class="stepradio">
                            <div class="row">
                                <div class="col-md-8 m-auto">

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Roommate preference</label>
                                        <div id="radioset2" class="custumradiosettwo custumradiosetSingle">
                                            <div class="cRadiosub">
                                                <input type="radio" value="Anyone" id="radio1" name="preferences_user" class="steprd">
                                                <label for="radio1">
                                                    <span>Anyone</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" value="No couples" id="radio4" name="preferences_user" class="steprd">
                                                <label for="radio4">
                                                    <span>No couples</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" value="Couple" id="radio5" name="preferences_user" class="steprd">
                                                <label for="radio5">
                                                    <span>Couple</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" value="Women only" id="radio2" name="preferences_user" class="steprd">
                                                <label for="radio2">
                                                    <span>Women only</span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" value="Men only" id="radio3" name="preferences_user" class="steprd">
                                                <label for="radio3">
                                                    <span>Men only</span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>

                                    </div>



                                    <input type="hidden" name="completed_step" value="7">


                                </div>
                            </div>
                        </div> -->

                    <button  value="submit" name="submit">Update</button>
                    </form>


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

        $(function() {
            $("#datepicker").datepicker({
                showOn: "button",
                buttonImage: "<i class='fa fa-calendar-days'></i>",
                buttonImageOnly: false,
                buttonText: "Select date"
            });
        });
    </script>


    <script>
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });

        // $("#radio1").click(function(){
        // $("#steptworadio").show();
        // });

        // $("#radio2,#radio3,#radio4").click(function(){
        // $("#steptworadio").hide();
        // });
    </script>
</body>

</html>
<script>
    function bedroomIncrease() {

        let counter = $("#bedroomCount").val();
        counter = parseInt(counter) + 1;
        $("#bedroomCount").val(counter);


    }

    function bedroomDecrease() {
        let counter = $("#bedroomCount").val();
        if (counter != 0) {
            counter = parseInt(counter) - 1;
            $("#bedroomCount").val(counter);
        } else {
            $("#bedroomCount").val(0);
        }

    }

    function bathroomIncrease() {

        let counter2 = $("#bathroomCount").val();
        counter2 = parseInt(counter2) + 1;
        $("#bathroomCount").val(counter2);


    }

    function bathroomDecrease() {
        let counter2 = $("#bathroomCount").val();
        if (counter2 != 0) {
            counter2 = parseInt(counter2) - 1;
            $("#bathroomCount").val(counter2);
        } else {
            $("#bathroomCount").val(0);
        }
    }

    function totalNumberOfRoommatesIncrease() {

        let counter2 = $("#totalNumberOfRoommatesCount").val();
        counter2 = parseInt(counter2) + 1;
        $("#totalNumberOfRoommatesCount").val(counter2);


    }

    function totalNumberOfRoommatesDecrease() {
        let counter2 = $("#totalNumberOfRoommatesCount").val();
        if (counter2 != 0) {
            counter2 = parseInt(counter2) - 1;
            $("#totalNumberOfRoommatesCount").val(counter2);
        } else {
            $("#totalNumberOfRoommatesCount").val(0);
        }
    }
</script>