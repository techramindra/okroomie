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
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <a href="#"></a>
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
               <div class="row">
                   <div class="col-md-6 m-auto">
                    <div class="short-Details">
                        <h1>
                             Hi I'm Haris and I'm going to help you list your Room
                        </h1>
                        <div class="img-block-step">
                            <img src="{{url('public/assets/frontend/images/b-man-tra.png')}}" alt="">
                          <!--  https://okroomie.com/ -->
                        </div>
                        <h2>let's get a few details about your place</h2>
                        <!-- <p>(Rooms, Amenities, Bathroom and so on..)</p> -->
                        <!-- <span class="steppage">
                            1 of 3
                        </span> -->
                        <div class="stepbutton mt-3"> 
                        <form action="{{url('find-me-a-roomie/index1')}}" method="post">
                                    <input type="hidden" value="{{isset($_rowid)? $_rowid : ''}}" name="_rowid" >
                                    @csrf
                                    <button>
                                        Lets Begin
                                    </button>
                                </form>
                             
                        </div>
                    </div>
                   </div>
               </div>
            </div>
        </section>
    </div>
</body>
</html>