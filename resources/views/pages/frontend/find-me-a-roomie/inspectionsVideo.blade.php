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

        div#steptworadio label.titlestep {
            font-size: 19px;
            font-family: 'Poppins', sans-serif !important;
        }

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

        .custumradiosettwo .cRadiosub {
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

        .stepform.form-group textarea.form-control {
            border-radius: 15px;
            border: 1px solid #80D6DB;
            display: block;
            height: 150px !important;
            overflow: hiu;
            overflow: auto !important;
        }

        .stepform.form-group label.titlestep {
            font-size: 19px;
            /* font-family: sans-serif; */
            font-family: 'Poppins', sans-serif !important;
        }


        .stepform.form-group textarea.form-control {
            border-radius: 15px;
            border: 1px solid #80D6DB;
            resize: none;
        }

        .umesh_formkkk {
            width: 100%;
        }

        .umesh_formkkk .stepform.form-group {
            width: 100%;
        }

        .umesh_formkkk .stepform.form-group select#internet {
            /* background: #80D6DB; */
            /* color: white; */
            /* padding: 10px 20px; */
            /* height: 50px; */
            /* border-radius: 30px; */
            /* outline: none; */
            height: 50px;
            border: 1px solid #7FD4D9;
            border-radius: 100px;
            padding: 15px 30px;
        }

        .stepform.form-group {
            width: 100%;
        }

        .stepform.form-group textarea.form-control {
            border-radius: 15px;
            border: 1px solid #80D6DB;
        }



        .umeshr div#radioset2 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .umeshr div#radioset2 .cRadiosub {
            margin: 10px 0px;
        }

        .steptworadio {
            margin-bottom: 20px;

        }


        input {
            width: 100%;
        }


        .umeshr div#radioset2 .cRadiosub {
            width: 100%;
        }

        #ujs {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            outline: none;
            width: fit-content;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5rem;
            border: 0.0625rem solid #6e6658;
            background-color: #6e6658;
            color: rgb(255, 255, 255);
            border-radius: 8px;
            padding: calc(0.6875rem) 1.5rem;
            cursor: pointer;
            margin-bottom: 10px;

        }

        div#main_videosa input {
            border: 1px solid #80D6DB;
            padding: 10px 20px;
            border-radius: 5px;
            outline: none;
        }

        .h-80 {
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .col-4.my_video_b {
            display: flex;
            align-content: center;
            align-items: center;
        }

        .col-4.my_video_b button {
            display: flex;
            align-content: center;
            justify-content: center;
            align-items: center;
            padding: 10px 20px;
            border: 1px solid #80D6DB;
            color: white;
            background: #80D6DB;
            border-radius: 5px;
            font-weight: 600;
        }

        div#main_videosa {
            background: #F4F5F5;
            padding: 30px 20px;
        }

        .umeshhorijhantal button.one {display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    border: 1px solid #80D6DB;
    color: white;
    background: #80D6DB;
    border-radius: 5px;
    font-weight: 600;}

.umeshhorijhantal button.two {padding: 10px 20px;margin-bottom: 30px;border: 1opx solid #80D6DB;border: 1px solid #80D6DB;color: gray;background: transparent;border-radius: 5px;font-weight: 600;outline: none;}

        .umeshhorijhantal button.one {display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    padding: 10px 20px;
    border: 1px solid #80D6DB;
    color: white;
    background: #80D6DB;
    border-radius: 5px;
    font-weight: 600;}

       .umeshhorijhantal {display: flex;flex-direction: column;align-content: center;justify-content: center;align-items: center;width: 100%;}

.umeshhorijhantal  {display: flex;/* margin: 5px 0px; */flex-direction: column;}
    </style>
 @if ($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{$error}}
    </div>
    @endforeach
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        {{ session()->get('error') }}
    </div>
    @endif
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('find-me-a-roomie/index')}}">Left</a> -->
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
            <div class="container xdstep-1">
                <div class="stepsecond mt-5">
                    <div class="titlestep">
                        <h3>Your ideal place</h3>
                        <h2>Add a video tour </h2>
                    </div>
                    <div class="error">
                        <p></p>
                    </div>
                    <br>
                    <form  action="{{route('inspectionsVideo')}}" method="post">
                        <input type="hidden" name="id" value="{{request()->route()->id}}" >
                        @csrf

                        <div class="stepradio">
                            <div class="row">
                                <div class="col-md-7 m-auto h-80">



                                    <div class="error">
                                        <p></p>
                                    </div>
                                    <div class="umesh_formkkk">
                                        <div class="stepform form-group" id="main_videosa">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label class="titlestep">you tube link</label>
                                                    <input type="text" name="inspection_video" id="internet" class="mghay" required>
                                                    <br><small>a link to your video tour</small>
                                                </div>

                                                <div class="col-4 my_video_b">
                                                    <button>Upload</button>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                   

                                          <div class=" umeshhorijhantal">
                                              <div class="">
                                                  <button class="one">save with video tour only</button>
                                              </div>
                                              <br>
                                              <div class="">
                                              <button class="two">set up in person inspections</button>
                                              </div>
                                             
                                          </div>


                                  

                              

                                    <div class="stepbutton">
                                        <a href="" id="ujs">

                                            cancel

                                        </a>

                                       
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

        // $("#radio1").click(function(){
        // $("#steptworadio").show();
        // });

        // $("#radio2,#radio3,#radio4").click(function(){
        // $("#steptworadio").hide();
        // });
    </script>
    <script type="text/javascript">

$(document).ready(function(ddds){

$("#form-login").on('submit',(function(ddds){

ddds.preventDefault();

// alert("you rached");

$.ajax({

url:"{{url('#')}}",

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
</body>

</html>
