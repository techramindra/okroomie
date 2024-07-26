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
     <!-- google map api link -->
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvF8ud8JKn9fbI7I36Y_zzxGOTNc3ai4&sensor=false&libraries=places"></script>
    <style>
       .error p
       {
           color:red;
       }

       textarea.form-control {
    overflow: auto;
    resize: none;
}
   </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('find-me-a-room/step-1')}}">Left</a> -->
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
                <h3>Your ideal place</h3>
                <h2>Where would you like to live?</h2>
            </div>
        </div> -->
            <div class="container">
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                        <h3>Your ideal place</h3>
                        <h2>Where would you like to live?</h2>
                    </div>
                    <form id="step-3-form" action="{{url('find-me-a-room/step-1')}}" method="post">
                        @csrf
                        <div class="stepradio">
                            <div class="row">
                                <div class="col-md-6 m-auto">

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Suburb </label>
                                       <input class="form-control"type="text" id="suburb" value="{{(!empty($data->suburb)? $data->suburb :'')}}" name="suburb" placeholder="Search for a suburb" />
                                       <input type="hidden" name="latituteRoom" id="cityLat" >
                                        <input type="hidden" name="longituteRoom" id="cityLng" >
                                        <span class="notestep">Please choose at least a minimum of 3 suburbs </span>
                                        @error("suburb")
                                       <div class="error"><p>{{$message}}</p></div>
                                       @enderror
                                    </div>

                                    <div class="stepform form-group">
                                        <label class="titlestep">Tell me a little bit about yourself</label>
                                        <div class=" mb-3">
                                           <textarea name="about_yourself" id="" rows="5" class="form-control" placeholder="A little bit about you...">{{(!empty($data->about_yourself)? $data->about_yourself : '')}}</textarea>
                                        </div>
                                    </div>
                                    @error("about_yourself")
                                       <div class="error"><p>{{$message}}</p></div>
                                       @enderror
                                       

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

                                    <div class="stepbutton">
                                        <a href="{{url('find-me-a-room/step-2')}}">
                                            <button>
                                                Next
                                            </button>
                                        </a>

                                        <a href="{{url('find-me-a-room/index')}}">Back</a> 
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

<script>
    function initialize() {
        var options = {
            types: ["(cities)"],
            componentRestrictions: { country: "AUS" },
        };
        var input = document.getElementById("suburb");
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            var place = autocomplete.getPlace();
            document.getElementById("suburb").value = place.name;
            document.getElementById("cityLat").value = place.geometry.location.lat();
            document.getElementById("cityLng").value = place.geometry.location.lng();
			change_map();
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);
</script> 

</body>

</html>