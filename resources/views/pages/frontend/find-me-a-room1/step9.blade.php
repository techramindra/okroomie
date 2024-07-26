<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okroomie</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
       .error p
       {
           color:red;
       }
   </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <a href="">Left</a>
                    </div>
                    <div class="logo">
                        <a href="#">
                           <img src="https://okroomie.com/public/assets/frontend/images/logodarknk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="">Close</a>
                    </div>
                </div>
            </div>
        </header>

<section>
            <div class="container">
                <div class="stepthird">
                    <div class="titlestep mb-4">
                        <h3>INTODUCE YOURSELF</h3>
                        <h2>What makes you great to live with?</h2>
                    </div>
                    <form id="step-1" action="" method="post">
                       
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-6 m-auto">

                                <div class="stepform form-group">
                                    <!-- <label class="titlestep">Type of property</label> -->
                                    <div class="input-group mb-3">
                                       <textarea name="about_yourself" id=""  rows="5" class="form-control" placeholder="Say something about yourself..."></textarea>
                                    </div>
                                </div>

                                 
                                       <div class="error"><p></p></div>
                                      

                                <p>
                                Tell your potential flatmate a little about yourself and the other flatmates living in the home. Describe what you do for work, where you're all from and what you do for fun.
                                What's great about living at this property?
                                Include features like Netflix, a pool, air conditioning, great views or anything that will attract room seekers.</p>

                                       

                                <div class="stepbutton">
                                    <a href="">
                                        <button>
                                            Next
                                        </button>
                                    </a>

                                    <a href="">Back</a> 
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
        // $(function () {
        //     $("input.steprd").checkboxradio({
        //         icon: false
        //     });
        // });

        $( function() {
            $( "#datepicker" ).datepicker({
            showOn: "button",
            buttonImage: "<i class='fa fa-calendar-days'></i>",
            buttonImageOnly: false,
            buttonText: "Select date"
            });
        } );
    </script>
</body>

</html>