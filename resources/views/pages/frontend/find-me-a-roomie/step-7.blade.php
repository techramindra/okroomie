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
        .custumradiosetSingle .cRadiosub {
            border: none;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('find-me-a-roomie/step-9')}}">Left</a> -->
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
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                     <!--    <h3>Describe your place</h3> -->
                        <h2>Roommate preference</h2>
                    </div>
                    <form id="step-1" action="{{url('find-me-a-roomie/step-7')}}" method="post">
                        @csrf
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-6 m-auto">

                                <div class="steptworadio" id="steptworadio">
                                    <!-- <label class="titlestep">Type of property</label> -->
                                    <div id="radioset2" class="custumradiosettwo custumradiosetSingle">
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->preferences_user=="Anyone" ? "checked" : ""}} value="Anyone" id="radio1" name="preferences_user" class="steprd">
                                            <label for="radio1">
                                               <span>Anyone</span> 
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->preferences_user=="No couples" ? "checked" : ""}} value="No couples" id="radio4" name="preferences_user"  class="steprd">
                                            <label
                                                for="radio4">
                                              <span>No couples</span>
                                            </label>
                                        </div>

                                         <div class="cRadiosub">
                                            <input type="radio" {{$data->preferences_user=="Couple" ? "checked" : ""}} value="Couple" id="radio5" name="preferences_user"  class="steprd">
                                            <label
                                                for="radio5">
                                              <span>Couple</span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->preferences_user=="Women only" ? "checked" : ""}} value="Women only" id="radio2" name="preferences_user"  class="steprd">
                                            <label
                                                for="radio2">
                                              <span>Women only</span>
                                            </label>
                                        </div>

                                        
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->preferences_user=="Men only" ? "checked" : ""}} value="Men only" id="radio3" name="preferences_user"  class="steprd">
                                            <label
                                                for="radio3">
                                              <span>Men only</span>
                                            </label>
                                        </div>
                                       
                                    </div>
                                            @error("preferences_user")
                                            <div class="error"><p>{{$message}}</p></div>
                                            @enderror
                                </div>

                                <!-- <div class="steptworadio" id="steptworadio">
                                    <label class="titlestep">Type of property</label>
                                    <div id="radioset2" class="custumradiosettwo">
                                        <div class="cRadiosub">
                                            <input type="radio" id="radio6" name="radio" class="steprd">
                                            <label for="radio6">
                                               <span>House</span> 
                                            </label>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="radio" id="radio7" name="radio" checked="checked" class="steprd">
                                            <label
                                                for="radio7">
                                              <span>Flat</span>
                                            </label>
                                        </div>

                                        
                                        <div class="cRadiosub">
                                            <input type="radio" id="radio8" name="radio"  class="steprd">
                                            <label
                                                for="radio8">
                                              <span>Flat</span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" id="radio9" name="radio"  class="steprd">
                                            <label
                                                for="radio9">
                                              <span>Flat</span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="notestep">Including the one you're offering.</span>
                                </div> -->

                                <input type="hidden" name="completed_step" value="7">

                                <div class="stepbutton">
                                    <a href="{{url('find-me-a-roomie/8/'.encrypt(208))}}">
                                        <button>
                                            Next
                                        </button>
                                    </a>

                                    <a href="{{url('find-me-a-roomie/6/'.encrypt(206))}}">Back</a> 
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
        $(function () {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>