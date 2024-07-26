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

        .coupleonclick2 {
            padding: 10px 0;
            margin-bottom: 10px;
            border-bottom: 1px solid #f3f3f3;
        }

        .appentcouple,
        .removeappent {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .appentcouple i,
        .removeappent i {
            margin-right: 5px;
        }

        .coupleonclick {
            border-top: 1px solid #f3f3f3;
            border-bottom: 1px solid #f3f3f3;
            margin-bottom: 20px;
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


        <section class="bg__blue">
            <div class="container">
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                        <h2></h2>
                    </div>
                    <form id="step-5-form" action="{{route('roomUpdate1')}}" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="id" value="{{encrypt($data->id)}}" >
                        @csrf

                        <div class="stepradio">
                            <div class="row">
                                <div class="col-md-8 m-auto">

                                    <div class="stepform form-group">
                                        <div class="general-label">
                                            <label class="titlestep"> Your first name
                                            </label>
                                        </div>
                                        <div class="general-tag">
                                            <input class="form-control" value="{{$data->your_first_name}}" type="text" name="your_first_name" placeholder="Enter Name">
                                        </div>
                                    </div>

                                    <div class="error">
                                        <p></p>
                                    </div>



                                    <div class="stepform form-group">
                                        <div class="general-label">
                                            <label class="titlestep"> Age
                                            </label>
                                        </div>
                                        <div class="general-tag">
                                            <input class="form-control" value="{{$data->age}}" type="number" name="age" placeholder="Enter age">
                                        </div>
                                    </div>


                                    <div class="error">
                                        <p></p>
                                    </div>
<!-- 

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">This Listing is for</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio3" name="this_place_is_for" value="Me" class="steprd">
                                                <label for="radio3">
                                                    <span>me</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio4" name="this_place_is_for" value="Couple" class="steprd">
                                                <label for="radio4">
                                                    <span>a couple</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio5" name="this_place_is_for" value="Group" class="steprd">
                                                <label for="radio5">
                                                    <span>a group</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio55" name="this_place_is_for" value="Family" class="steprd">
                                                <label for="radio55">
                                                    <span>a family</span>
                                                </label>
                                            </div>

                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>

                                    </div> -->






                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">The gender you identify as</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio21" name="gender" value="Woman" class="steprd" {{$data->gender=="Woman" ? "checked" : ""}}>
                                                <label for="radio21">
                                                    <span>Woman</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio22" name="gender" value="Man" class="steprd" {{$data->gender=="Man" ? "checked" : ""}}>
                                                <label for="radio22">
                                                    <span>Man</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio23" name="gender" value="Non-binary" class="steprd" {{$data->gender=="Non-binary" ? "checked" : ""}}>
                                                <label for="radio23">
                                                    <span>Non-binary</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio45" name="gender" value="Undisclosed" class="steprd" {{$data->gender=="Undisclosed" ? "checked" : ""}}>
                                                <label for="radio45">
                                                    <span>Undisclosed</span>
                                                </label>
                                            </div>



                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>

                                    </div>

                            <div class="row">
                                <div class="col-md-12 m-auto">

                                    <div class="stepform form-group">
                                        <label class="titlestep">Weekly Budget</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text"  class="form-control" value="{{$data->weekely_budget}}" placeholder="" name="weekely_budget">

                                        </div>
                                        <p> <a href="https://www.consumer.vic.gov.au/housing/renting/rent-bond-bills-and-condition-reports/rent/rent-calculator">help me calculate my rent</a></p>
                                        @error("weekely_budget")
                                        <div class="error">
                                            <p>{{$message}}</p>
                                        </div>
                                        @enderror
                                    </div>


                                    <div class="stepform form-group">
                                        <label class="titlestep">Date available</label>
                                        <div class="input-group mb-3" id="my-date">
                                            <!-- <div class="input-group-append">
                                            <span class="input-group-text">$</span>
                                        </div> -->
                                            <input type="text" name="date_available" value="{{$data->date_available}}"  id="datepicker" class="form-control" placeholder="Select A Date">

                                        </div>
                                    </div>


                                    @error("date_available")
                                    <div class="error">
                                        <p>{{$message}}</p>
                                    </div>
                                    @enderror
                                    <!-- 
                                <div class="stepform form-group">
                                    <label class="titlestep">My ideal locations</label>
                                    <input type="text" value="" class="form-control" placeholder="" name="ideal_location"> 
                                    @error("ideal_location")
                                       <div class="error"><p>{{$message}}</p></div>
                                       @enderror
                                </div> -->


                                    <div class="stepform form-group">
                                        <label class="titlestep">Length of Stay</label>
                                        <select name="preferred_length_of_stay" id="" class="form-control">
                                             <option {{$data->preferred_length_of_stay=="1 week" ? "selected" : ""}} value="1 week">1 week</option>
                                        <option {{$data->preferred_length_of_stay=="2 week" ? "selected" : ""}} value="2 week">2 week</option>
                                        <option {{$data->preferred_length_of_stay=="1 month" ? "selected" : ""}} value="1 month">1 month</option>
                                        <option {{$data->preferred_length_of_stay=="2 month" ? "selected" : ""}} value="2 month">2 month</option>
                                           

                                        </select>
                                        @error("preferred_length_of_stay")
                                        <div class="error">
                                            <p>{{$message}}</p>
                                        </div>
                                        @enderror

                                    </div>


                                    <div class="stepbutton">
                                       
                                            <button>
                                                Update
                                            </button>
                                            <a href="{{route('editListingRoom',['id'=>encrypt($data->id)])}}">Back</a>

                                      
                                    </div>
                                </div>
                            </div>


                                    <div class="coupleonclick" style="display: none;" id="coupleonclick">

                                        <div class="stepform form-group">
                                            <div class="general-label">
                                                <label class="titlestep"> Your Partner's Name
                                                </label>
                                            </div>
                                            <div class="general-tag">
                                                <input class="form-control" value="" type="text" name="partner_name" placeholder="Your Partner's Name">
                                            </div>
                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>


                                        <div class="stepform form-group">
                                            <div class="general-label">
                                                <label class="titlestep">Your Partner's age
                                                </label>
                                            </div>
                                            <div class="general-tag">
                                                <input class="form-control" value="" type="number" name="partner_age" placeholder="Your Partner's age">
                                            </div>
                                        </div>

                                        <div class="error">
                                            <p></p>
                                        </div>



                                        <div class="steptworadio" id="steptworadio">
                                            <label class="titlestep">The gender you identify as</label>
                                            <div id="radioset2" class="custumradiosettwo">
                                                <div class="cRadiosub">
                                                    <input type="radio" id="radio25" name="partner_gender" value="Woman" class="steprd">
                                                    <label for="radio25">
                                                        <span>Woman</span>
                                                    </label>
                                                </div>
                                                <div class="cRadiosub">
                                                    <input type="radio" id="radio26" name="partner_gender" value="Man" class="steprd">
                                                    <label for="radio26">
                                                        <span>Man</span>
                                                    </label>
                                                </div>

                                                <div class="cRadiosub">
                                                    <input type="radio" id="radio27" name="partner_gender" value="Non-binary" class="steprd">
                                                    <label for="radio27">
                                                        <span>Non-binary</span>
                                                    </label>
                                                </div>



                                            </div>

                                            <div class="error">
                                                <p></p>
                                            </div>

                                        </div>

                                    </div>



                                    <div class="appent-con" id="appent-con"></div>


                                    <div class="appentcouple" id="appentcouple" style="display: none;">
                                        <a href="Javascript:;"><i class="fa fa-plus"></i>Add Another Person</a>
                                    </div>







                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </section>
    </div>
    <input type="hidden" value="0" name="dynamicID" id="dynamicID">

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



        //first

        $("#radio4").click(function() {
            $("#coupleonclick").show();
        });

        $("#radio3,#radio5").click(function() {
            $("#coupleonclick").hide();
        });
        //first
        //second
        $("#radio5").click(function() {
            $("#appentcouple").show();
        });

        $("#radio3,#radio4").click(function() {
            $("#appentcouple").hide();
        });
        //second
        //Third
        $("#radio5").click(function() {
            $(".coupleonclick2").show();
        });

        $("#radio3,#radio4").click(function() {
            $(".coupleonclick2").hide();
        });



        //Third     
        //appent

        $("#appentcouple").click(function() {

            let defaultval = $("#dynamicID").val();
            let newdefault = parseInt(defaultval) + 1;
            $("#dynamicID").val(newdefault);
            $("#appent-con").append('<div class=coupleonclick2><div class=removeappent><a href=Javascript:;><i class="fa fa-minus"></i>Remove Person</a></div><div class="form-group stepform"><div class=general-label><label>Your Partner Name</label></div><div class=general-tag><input class=form-control name=group_partner_name[] value=""placeholder="Enter partner name"></div></div><div class="form-group stepform"><div class=general-label><label>your Partner age</label></div><div class=general-tag><input class=form-control name=group_partner_age[] value=""type=number placeholder="Enter age"></div></div><div class=steptworadio id=steptworadio><label class=titlestep>The gender you identify as</label><div class=custumradiosettwo id=radioset2><div class=cRadiosub><input class=steprd name="group_partner_gender[' + defaultval + ']" value="Woman" type=radio id=radio25  > <label for=radio25><span>Woman</span></label></div><div class=cRadiosub><input class=steprd name="group_partner_gender[' + defaultval + ']" value="Man" type=radio id=radio26  > <label for=radio26><span>Man</span></label></div><div class=cRadiosub><input class=steprd name="group_partner_gender[' + defaultval + ']" value="Non-binary" type=radio id=radio27  > <label for=radio27><span>Non-binary</span></label></div></div>@error("group_partner_gender")<div class=error><p>{{$message}}</div>@enderror</div></div>');
        });

        //apent
    </script>
</body>

</html>