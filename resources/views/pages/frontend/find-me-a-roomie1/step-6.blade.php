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
                <div class="stepthird">
                    <div class="titlestep mt-5">
                        <h3>Describe your place</h3>
                        <h2>Tell us a little about the roommates living on premises? </h2>
                    </div>
                    <form id="step-1" action="" method="post">

                        <div class="stepradio">
                            <div class="row mt-5">
                                <div class="col-md-7 m-auto">

                    

                                    <div class="stepform form-group">
                                        <label class="titlestep"></label>
                                        <div class=" mb-3">
                                            <textarea name="about_roommates" id="" rows="5" class="form-control" placeholder="Say something about roommates..."></textarea>
                                        </div>
                                    </div>

                                    <div class="error">
                                        <p></p>
                                    </div>


                                    <input type="hidden" name="completed_step" value="6">

                                
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
</body>

</html>