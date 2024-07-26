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

.umesh_formkkk {width: 100%;}

.umesh_formkkk .stepform.form-group {width: 100%;}

.umesh_formkkk .stepform.form-group select#internet {/* background: #80D6DB; *//* color: white; *//* padding: 10px 20px; *//* height: 50px; *//* border-radius: 30px; *//* outline: none; */height: 50px;
    border: 1px solid #7FD4D9;
    border-radius: 100px;
    padding: 15px 30px;}
    .stepform.form-group {width: 100%;}

.stepform.form-group textarea.form-control {border-radius: 15px;border: 1px solid #80D6DB;}



.umeshr div#radioset2 {display: flex;flex-direction: column;align-items: flex-start;}

.umeshr div#radioset2 .cRadiosub {margin: 10px 0px;}

.steptworadio {
    margin-bottom: 20px;
 
}


input {width: 100%;}


.umeshr div#radioset2 .cRadiosub {width: 100%;}

#ujs{
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
</style>
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
                        <a href="">Close</a>
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
                        <h2>when would you like us to share your address </h2>
                    </div>
                    <div class="error"><p></p></div>
                    <br>
                    <form id="step-1" action="" method="post">
                        
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-7 m-auto h-80">
                       
                   
                         
                            <div class="error"><p></p></div>
                          
                            <input type="hidden" name="completed_step" value="3">

                                <div class="steptworadio" id="steptworadio" >
                                    <!-- <label class="titlestep"> property's time zone ?</label> -->
                                    <div class="umeshr">
                                    <div id="radioset2" class="custumradiosettwo">
                                        <div class="cRadiosub">
                                            <input type="radio" value="Townhouse" class="steprd" id="radio5" name="house_flate" >
                                            <label for="radio5">
                                               <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. consectetur </span> 
                                            </label>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="radio" value="Unit" class="steprd" id="radio6" name="house_flate" >
                                            <label
                                                for="radio6">
                                              <span>Lorem ipsum dolor sit amet consectetur, adipisicing consectetur,  </span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" value="Apartment" class="steprd" id="radio7" name="house_flate"  >
                                            <label
                                                for="radio7">
                                              <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit.consectetur,</span>
                                            </label>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                             
                                <div class="error"><p></p></div>
                            
                                <div class="umesh_formkkk">
                      <div class="stepform form-group">
                                <label class="titlestep">property's time zone ?</label>
                               <select name="internet" id="internet" class="form-control">
                                  
                                   
                               <option  value="0">Select</option>
                               
                                   <option  value="Included in rent">Included in rent</option>

                                   <option  value="Not included in rent">Not included in rent</option>

                                  
                                   <option value="Not Available">Not Available</option> 
                                 
                               </select>
                            </div>
                      </div>
                      <div class="error"><p></p></div>
                                <div class="stepform form-group">
                                    <label class="titlestep">Navigation instructions</label>
                                    <div class=" mb-3">
                                       <textarea name="about_yourself" id=""  rows="5" class="form-control" placeholder="instructions time booking"  ></textarea>

                                    
                                    </div>
                                </div>
                         
                                <div class="error"><p></p></div>
                              
                                <input type="hidden" name="completed_step" value="2">

                                <div class="stepbutton">
                                <a href="https://okroomie.com/find-me-a-roomie/inspectionsSettings" id="ujs">
                                  
                                        Next
                                   
                                </a>

                                    <a href="{{url('find-me-a-roomie/index')}}">Back</a> 
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

        // $("#radio1").click(function(){
        // $("#steptworadio").show();
        // });

        // $("#radio2,#radio3,#radio4").click(function(){
        // $("#steptworadio").hide();
        // });
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