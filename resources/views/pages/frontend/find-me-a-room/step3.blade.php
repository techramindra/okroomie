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
    </style>
</head>

<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('find-me-a-room/step-2')}}">Left</a> -->
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
            <div class="container">
                <div class="stepthird">
                    <div class="titlestep mb-4">
                        <h3>YOUR IDEAL PLACE</h3>
                        <h2>Rent and Timeline</h2>
                    </div>
                    <form id="step-1" action="{{url('find-me-a-room/step-4')}}" method="post">
                        @csrf
                        <div class="stepradio">
                            <div class="row">
                                <div class="col-md-6 m-auto">

                                    <div class="stepform form-group">
                                        <label class="titlestep">Weekly Budget</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" value="{{$data->weekely_budget}}" class="form-control" placeholder="" name="weekely_budget">

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
                                            <input type="text" name="date_available" value="{{$data->date_available}}" id="datepicker" class="form-control" placeholder="Select A Date">

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
                                            <!--  <option {{$data->preferred_length_of_stay=="1 week" ? "selected" : ""}} value="1 week">1 week</option>
                                        <option {{$data->preferred_length_of_stay=="2 week" ? "selected" : ""}} value="2 week">2 week</option>
                                        <option {{$data->preferred_length_of_stay=="1 month" ? "selected" : ""}} value="1 month">1 month</option>
                                        <option {{$data->preferred_length_of_stay=="2 month" ? "selected" : ""}} value="2 month">2 month</option> -->
                                            <option>1 week</option>
                                            <option>Less than 1 month</option>
                                            <option>3 months</option>
                                            <option>6 months</option>
                                            <option>12 months</option>

                                        </select>
                                        @error("preferred_length_of_stay")
                                        <div class="error">
                                            <p>{{$message}}</p>
                                        </div>
                                        @enderror

                                    </div>


                                    <div class="stepbutton">
                                        <a href="{{url('find-me-a-room/step-4')}}">
                                            <button>
                                                Next
                                            </button>
                                        </a>

                                        <a href="{{url('find-me-a-room/step-3')}}">Back</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </script>
</body>

</html>