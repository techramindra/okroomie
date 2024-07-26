<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okroomie</title>
   <!--  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/c03345a92c.js"></script>

    <style type="text/css">
        .xdstep-5 .cRadiosub {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .xdstep-5 .cRadiosub label.ui-checkboxradio-label {
            font-size: 25px !important;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                       <!--  <a href="{{url('find-me-a-room/step-6')}}">Left</a> -->
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
                <div class="stepsecond xdstep-5 mt-5">
                    <div class="titlestep">
                        <h3>INTRODUCE YOURSELF</h3>
                        <h2>Employment status</h2>
                    </div>
                    <form id="step-1" action="" method="post">
                      
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <div id="radioset" class="custumradiosetone custumradiosetten">
                                    <div class="cRadiosub">
                                        <input type="checkbox" class="steprd" id="radio1" name="self_employed" value="1">
                                        <label for="radio1">
                                            <i class="fa fa-male" aria-hidden="true"></i>
                                        </label>
                                        <span> Self Employed</span>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="checkbox" class="steprd" value="1" id="radio2" name="working_full_time" >
                                        <label
                                            for="radio2">
                                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                                        </label>
                                        <span>Working Full time</span>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="checkbox" class="steprd" value="1" id="radio3" name="working_part_time" >
                                        <label for="radio3">
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                        </label>
                                        <span>Working part time</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1"  id="radio4" name="backpackers" class="steprd" >
                                        <label for="radio4">
                                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                        </label>
                                        <span>Backpacker</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1"  id="radio5" name="students" class="steprd"  >
                                        <label for="radio5">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        </label>
                                        <span>student</span>
                                    </div>


                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1"  id="radio6" name="unemployed" class="steprd" >
                                        <label for="radio6">
                                            <i class="fa fa-user-times" aria-hidden="true"></i>
                                        </label>
                                        <span>Unemployed</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1"  id="radio7" name="children" class="steprd" >
                                        <label for="radio7">
                                            <i class="fa fa-male" aria-hidden="true"></i>
                                        </label>
                                        <span>Retired</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1"  id="radio8" name="self_funded" class="steprd"  >
                                        <label for="radio8">
                                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                                        </label>
                                        <span>Self Funded </span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1"  id="radio9" name="other" class="steprd" >
                                        <label for="radio9">
                                            <i class="fa fa-stop-circle-o" aria-hidden="true"></i>
                                        </label>
                                        <span>Other</span>
                                    </div>
                                    
                                </div>

                                <div class="stepbutton">
                                    <a href="">
                                        <button>
                                            Next
                                        </button>
                                    </a>

                                    <a href="s">Back</a> 
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