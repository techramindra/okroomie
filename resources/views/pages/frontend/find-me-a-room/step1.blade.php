<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okroomie</title>
  
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
   </style>
 <style type="text/css">

.xdstep-1 .cRadiosub {
    width: 20%;
    text-align: center;
    padding: 0 5px;
}

.xdstep-1 .cRadiosub .ui-checkboxradio-label {
    margin: 0 auto 10px;
        font-size: 25px;
}

.xdstep-1 .cRadiosub span {
    height: 50px;
    display: block;
}

.custumradiosettwo 
 .cRadiosub {
    width: 50%;
    padding: 0;
}

.custumradiosettwo .cRadiosub span {
    height: unset;
    margin: 0;
}

.custumradiosettwo .cRadiosub .ui-checkboxradio-label {
    margin: 0;
    font-size: 17px;
}
</style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('list-my-place/index')}}">Left</a> -->
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
                <div class="stepsecond xdstep-1 mt-5">
                    <div class="titlestep">
                        <h3>Describe your place</h3>
                        <h2>What type of accommodation are you offering? </h2>
                    </div>
                    <form id="step-1" action="{{url('find-me-a-room/step-1')}}" method="post">
                        @csrf
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-7 m-auto h-60">
                                <div id="radioset" class="custumradiosetone">
                                    <div class="cRadiosub">
                                        <input type="radio" name="accomodation_type" value="Room(s) in an existing sharehouse"  class="steprd" id="radio1" {{$data->accomodation_type=="Room(s) in an existing sharehouse" ?"checked" : ""}} >
                                        <label for="radio1">
                                        	<i class="fa fa-home" aria-hidden="true"></i>
                                        </label>
                                        <span>Room(s) in an existing sharehouse</span>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" value="Whole property for rent" name="accomodation_type" class="steprd" id="radio2" {{$data->accomodation_type=="Whole property for rent" ?"checked" : ""}}  >
                                        <label
                                            for="radio2">
                                            <i class="fa fa-building-o" aria-hidden="true"></i>
                                        </label>
                                        <span>Whole property for rent</span>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" name="accomodation_type" class="steprd" value="Student accommodation" id="radio3"  {{$data->accomodation_type=="Student accommodation" ?"checked" : ""}}>
                                        <label for="radio3"><i class="fa fa-user-o" aria-hidden="true"></i>
                                        </label>
                                        <span>Student accommodation</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="radio" name="accomodation_type" class="steprd" id="radio4"   {{$data->accomodation_type=="Homestay" ?"checked" : ""}} value="Homestay">
                                        <label for="radio4"><i class="fa fa-bed" aria-hidden="true"></i>
                                        </label>
                                        <span>Homestay</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="radio"  class="steprd" id="radio9" name="accomodation_type" {{$data->accomodation_type=="Disaster Relief" ?"checked" : ""}} value="Disaster Relief">
                                        <label for="radio9"><i class="fa fa-home" aria-hidden="true"></i>
                                        </label>
                                        <span>Disaster Relief</span>
                                    </div>
                                                
                                    
                                </div>
                                                @error("accomodation_type")
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror

                                <div class="steptworadio" id="steptworadio" style="display: none;">
                                    <label class="titlestep">Type of property</label>
                                    <div id="radioset2" class="custumradiosettwo">
                                        <div class="cRadiosub">
                                            <input type="radio" value="House" class="steprd" id="radio15" name="house_flate" {{$data->house_flate=="House" ?"checked" : ""}}>
                                            <label for="radio15">
                                               <span>House</span> 
                                            </label>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="radio" value="Flate" class="steprd" id="radio16" name="house_flate" {{$data->house_flate=="Flate" ?"checked" : ""}}>
                                            <label
                                                for="radio16">
                                              <span>Flat</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

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

                   
                </div>
            </div>
        </section>
    </div>

    <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //$(function () {
            //$("input").checkboxradio({
          //      icon: false
           // });
      //  });

         $(function () {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });

        $("#radio1").click(function(){
        $("#steptworadio").show();
        });

        $("#radio2,#radio3,#radio4").click(function(){
        $("#steptworadio").hide();
        });
    </script>
</body>

</html>

<!-- @push('step-1')

<script type="text/javascript">

$(document).ready(function(ddds){

$("#form-login").on('submit',(function(ddds){

ddds.preventDefault();

// alert("you rached");

$.ajax({

url:"{{url('login')}}",

type:"POST",

data:new FormData(this),

contentType:false,

cache:false,

processData:false,

success:function(data)
{ 
    
        $("#error_password_login").html("");
        $("#error_email_login").html("");

    if(data.validation_errors)
   {
        $("#error_password_login").html(data.validation_errors.password);
        $("#error_email_login").html(data.validation_errors.email);
    }

    if(data.status===200)
    {
        window.location.href=data.route;  
    }
},

error:function(){alert("error");}



});

}));

});

</script>

@endpush -->