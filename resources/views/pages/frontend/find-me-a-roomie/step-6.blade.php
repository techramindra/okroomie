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
        .error p
        {
            color:red;
        }

        .stepthird textarea.form-control {
    height: auto;
    border-radius: 20px;
    resize: none;
    height: 150px !important;
    overflow: auto;
}


.icone {position: absolute;right: 0px;top: 0px;z-index: -1;background: #80D6DB;width: 13%;height: 100%;display: flex;align-items: center;justify-content: center;align-content: center;color: white;font-size: 25px;}


i.fa.fa-calendar {z-index: 8;display: block;/* background: radial-gradient(black, transparent); */background: #80D6DB;}


    </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('find-me-a-roomie/step-6')}}">Left</a> -->
                    </div>
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="{{url('/')}}">Close</a>
                    </div>
                </div>
            </div>
        </header>

<section class="bg__blue">
     <!-- <div class="title__block">
            <div class="container">
                <div class="titlestep">
                   <h3>About your home</h3>
                    <h2>Room Availablity?</h2>
                </div>
            </div>
        </div> -->
            <div class="container">
                <div class="stepthird">
                    <div class="titlestep mt-5">
                        <h3>Describe your place</h3>
                        <h2>Bond, Rent and Utilities </h2>
                    </div>
                    <form id="step-1" action="{{url('find-me-a-roomie/step-6')}}" method="post">
                        @csrf
                    <div class="stepradio">
                        <div class="row mt-5">
                            <div class="col-md-7 m-auto">

                                <div class="stepform form-group">
                                    <label class="titlestep">Weekly Rent</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" value="{{$data->weekely_rent}}" class="form-control" placeholder="" name="weekely_rent">
                                    </div>
                                    <p> <a href="https://www.consumer.vic.gov.au/housing/renting/rent-bond-bills-and-condition-reports/rent/rent-calculator">help me calculate my rent</a></p>
                                             @error("weekely_rent")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror
                                </div>

                                <div class="stepform form-group">
                                    <label class="titlestep">Bond</label>
                                    <select name="bond" id="" class="form-control">
                                    <option {{$data->bond==0 ? "selected" : ""}} value="0">Select</option>
                                        <option {{$data->bond=="None" ? "selected" : ""}}  value="None">None</option>
                                        <option {{$data->bond=="1 week" ? "selected" : ""}}  value="1 week">1 week</option>
                                        <option {{$data->bond=="2 weeks" ? "selected" : ""}}  value="2 weeks">2 weeks</option>
                                        <option {{$data->bond=="3 weeks" ? "selected" : ""}}  value="3 weeks">3 weeks</option>
                                        <option {{$data->bond=="4 weeks" ? "selected" : ""}}  value="4 weeks">4 weeks</option>
                                       
                                    </select>
                                </div>
                                            @error("bond")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror

                                <!-- <div class="stepform form-group">
                                    <label class="titlestep">Bills</label>
                                    <select name="bills" id="" class="form-control">
                                    <option {{$data->bills==0 ? "selected" : ""}} value="0">Select</option>
                                        <option {{$data->bills=="Additional to the rent" ? "selected" : ""}} value="Additional to the rent">Additional to the rent</option>
                                        <option {{$data->bills=="Some included in the rent" ? "selected" : ""}} value="Some included in the rent">Some included in the rent</option>
                                        <option {{$data->bills=="Included in the rent" ? "selected" : ""}} value="Included in the rent">Included in the rent</option>
                                        
                                    </select>
                                </div>
                                @error("bills")
                                <div class="error"><p>{{$message}}</p></div>
                                @enderror -->

                                <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Bills are</label>
                                        <div id="radioset22" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio30" name="bills" value="Included in Rent" class="steprd" {{$data->bills=="Included in Rent" ? "checked" : ""}} >
                                                <label for="radio30">
                                                <span>Included in Rent </span> 
                                                </label>
                                            </div>
                                          

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio31" name="bills" value="Not Included in Rent"  class="steprd" {{$data->bills=="Not Included in Rent" ? "checked" : ""}} >
                                                <label
                                                    for="radio31">
                                                <span>Not Included in Rent</span>
                                                </label>
                                            </div>
                                        
                                        </div>
                                        @error("bills")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror
                                </div>

                                  <div class="stepform form-group">
                                    <label class="titlestep">Date available</label>
                                    <div class="input-group mb-3" id="my-date">
                                        <!-- <div class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </div> -->
                                        <input type="text" name="date_available" value="{{$data->date_available}}" id="datepicker" class="form-control" placeholder="Select A Date">
                                       
                                    </div>
                                </div>
                                            @error("date_available")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror

                                <div class="stepform form-group">
                                    <label class="titlestep">Minimum rental period  </label>
                                    <select name="min_length_of_stay" id="" class="form-control">
                                    <option value="0" {{$data->min_length_of_stay==0 ? "selected" : ""}}> Select  </option>
                                        <option {{$data->min_length_of_stay=="No Minimum stay" ? "selected" : ""}} value="No Minimum stay">No Minimum stay</option>
                                        <option {{$data->min_length_of_stay=="1 week" ? "selected" : ""}} value="1 week">1 Week</option>
                                        <option {{$data->min_length_of_stay=="2 weeks" ? "selected" : ""}} value="2 weeks">2 Weeks</option>
                                        <option {{$data->min_length_of_stay=="1 month" ? "selected" : ""}} value="1 month">1 month</option>
                                        <option {{$data->min_length_of_stay=="2 months" ? "selected" : ""}} value="2 months">2 months</option>
                                        <option {{$data->min_length_of_stay=="3 months" ? "selected" : ""}} value="3 months">3 months</option>
                                        <option {{$data->min_length_of_stay=="4 months" ? "selected" : ""}} value="4 months">4 months</option>
                                        <option {{$data->min_length_of_stay=="6 months" ? "selected" : ""}} value="6 months">6 months</option>
                                        <option {{$data->min_length_of_stay=="9 months" ? "selected" : ""}} value="9 months">9 months</option>
                                        <option {{$data->min_length_of_stay=="12 months+" ? "selected" : ""}} value="12 months+">12 months+</option>
                                       
                                    </select>
                                </div>
                                            @error("min_length_of_stay")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror

                                <div class="stepform form-group">
                                    <label class="titlestep">Maximum rental period  </label>
                                    <select name="max_length_of_stay" id="" class="form-control">
                                        <option value="0" {{$data->max_length_of_stay==0 ? "selected" : ""}}> Select  </option>
                                        <option {{$data->max_length_of_stay=="No Maximum stay" ? "selected" : ""}} value="No Maximum stay">No Maximum stay</option>
                                        <option {{$data->max_length_of_stay=="1 week" ? "selected" : ""}} value="1 week">1 Week</option>
                                        <option {{$data->max_length_of_stay=="2 weeks" ? "selected" : ""}} value="2 weeks">2 Weeks</option>
                                        <option {{$data->max_length_of_stay=="1 month" ? "selected" : ""}} value="1 month">1 month</option>
                                        <option {{$data->max_length_of_stay=="2 months" ? "selected" : ""}} value="2 months">2 months</option>
                                        <option {{$data->max_length_of_stay=="3 months" ? "selected" : ""}} value="3 months">3 months</option>
                                        <option {{$data->max_length_of_stay=="4 months" ? "selected" : ""}} value="4 months">4 months</option>
                                        <option {{$data->max_length_of_stay=="6 months" ? "selected" : ""}} value="6 months">6 months</option>
                                        <option {{$data->max_length_of_stay=="9 months" ? "selected" : ""}} value="9 months">9 months</option>
                                        <option {{$data->max_length_of_stay=="12 months+" ? "selected" : ""}} value="12 months+">12 months+</option>
                                      
                                    </select>
                                </div>
                                            @error("max_length_of_stay")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror 


                                <div class="stepform form-group">
                                    <label class="titlestep">Tell us a little about the roommates  living on premises?</label>
                                    <div class=" mb-3">
                                       <textarea name="about_roommates" id=""  rows="5" class="form-control" placeholder="Say something about roommates...">{{$data->about_roommates}}</textarea>
                                    </div>
                                </div>  
                                            @error("about_roommates")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror

                                <input type="hidden" name="completed_step" value="6">             

                                <div class="stepbutton">
                                    <a href="{{url('find-me-a-roomie/7/'.encrypt(206))}}">
                                        <button>
                                            Next
                                        </button>
                                    </a>

                                    <a href="{{url('find-me-a-roomie/5/'.encrypt(205))}}">Back</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </form> -->


                </div>
            </div>
        </section>
    </div>

    <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
        var $j = jQuery.noConflict();
          $( function() {
            $j( "#datepicker" ).datepicker({
            showOn: "button",
            buttonImage: "<i class='fa fa-calendar-days'></i>",
            buttonImageOnly: false,
            buttonText: "Select date"
            });
        } );
    </script>
</body>

</html>