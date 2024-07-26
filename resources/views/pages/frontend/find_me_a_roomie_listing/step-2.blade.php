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
     select#internet {
    border-radius: 30px;
    border: 1px solid #008FB4 !important;
    height: 50px !important;
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
    border: 1px solid #008FB4;
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
    border: 1px solid #008FB4;
    resize: none;
}
    .stepform.form-group {width: 100%;}

.stepform.form-group textarea.form-control {border-radius: 15px;border: 1px solid #008FB4;}
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
                        <h2>What type of place would you like to list ? </h2>
                    </div>
                    <form id="step-1" action="{{url('find-me-a-roomie/step-22')}}" method="post">
                        @csrf
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-7 m-auto h-80">
                                <div id="radioset" class="custumradiosetone">
                                    <div class="cRadiosub">
                                        <input type="radio" class="steprd" id="radio1" {{$data->accomodation_type=="Single Room" ?"checked" : ""}} value="Single Room" name="accomodation_type">
                                        <label for="radio1">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20"><path fill="#fff" d="M12.487 10a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0ZM9.605 2.014A.5.5 0 0 0 9 2.502v15a.5.5 0 0 0 .605.489l7-1.501a.5.5 0 0 0 .394-.49V4a.5.5 0 0 0-.395-.488l-7-1.499ZM10 16.883V3.12l6 1.285v11.192l-6 1.286Zm-1.998.115v-1H4V4.003h4.002v-1H3.5a.5.5 0 0 0-.5.5v12.995a.5.5 0 0 0 .5.5h4.502Z"/></svg>
                                        </label>
                                        <span>Single Room</span>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" class="steprd" id="radio2" {{$data->accomodation_type=="Entire House" ?"checked" : ""}} value="Entire House" name="accomodation_type" >
                                        <label
                                            for="radio2">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#fff" fill-rule="evenodd" d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.707L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.646a.5.5 0 0 0 .708-.707L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207l-5-5l-5 5V13.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7.207Zm-5-.225C9.664 5.309 13.825 8.236 8 12C2.175 8.236 6.336 5.309 8 6.982Z"/></svg>
                                        </label>
                                        <span>Entire House</span>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" class="steprd" value="Student Housing" {{$data->accomodation_type=="Student Housing" ?"checked" : ""}} id="radio3" name="accomodation_type">
                                        <label for="radio3">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#fff" d="m16 7.78l-.313.095l-12.5 4.188L.345 13L2 13.53v8.75c-.597.347-1 .98-1 1.72a2 2 0 1 0 4 0c0-.74-.403-1.373-1-1.72v-8.06l2 .655V20c0 .82.5 1.5 1.094 1.97c.594.467 1.332.797 2.218 1.093c1.774.59 4.112.937 6.688.937c2.576 0 4.914-.346 6.688-.938c.886-.295 1.624-.625 2.218-1.093C25.5 21.5 26 20.82 26 20v-5.125l2.813-.938L31.655 13l-2.843-.938l-12.5-4.187L16 7.78zm0 2.095L25.375 13L16 16.125L6.625 13L16 9.875zm-8 5.688l7.688 2.562l.312.094l.313-.095L24 15.562V20c0 .01.004.126-.313.375c-.316.25-.883.565-1.625.813C20.58 21.681 18.395 22 16 22c-2.395 0-4.58-.318-6.063-.813c-.74-.247-1.308-.563-1.624-.812C7.995 20.125 8 20.01 8 20v-4.438z"/></svg>
                                        </label>
                                        <span>Student Housing</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="radio" class="steprd" id="radio4" {{$data->accomodation_type=="Homestay" ? "checked" : ""}} value="Homestay" name="accomodation_type">
                                        <label for="radio4">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#fff" d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm9-8.586l6 6V15l.001 5H6v-9.586l6-6z"/><path fill="#fff" d="M12 18c3.703 0 4.901-3.539 4.95-3.689l-1.9-.621c-.008.023-.781 2.31-3.05 2.31c-2.238 0-3.02-2.221-3.051-2.316l-1.899.627C7.099 14.461 8.297 18 12 18z"/></svg>
                                        </label>
                                        <span>Homestay</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="radio" class="steprd"  id="radio9" {{$data->accomodation_type=="Help And Relief In a  Apartment" ?"checked" : ""}} value="Help And Relief In a  Apartment" name="accomodation_type">
                                        <label for="radio9">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#fff" d="m21 3.031l-.656.719c-1.469 1.617-2.68 2.34-3.688 2.813c-1.008.472-1.855.613-2.687 1.25c-.887.68-2.176 1.984-2.719 4.312c-1.164.254-2.016.7-2.688 1.281c-.664.574-1.164 1.227-1.78 1.938c-.005.008.003.023 0 .031c-.884 1.016-1.657 2.11-3.157 2.688l-.625.25V29h19.063c1.093-.059 1.851-.816 2.312-1.563c.46-.746.715-1.554.844-2.218c.332-1.692.937-6.563.937-6.563l.032-.093v-.094c-.032-.676-.31-1.25-.657-1.782l1.125-3.343l1.782-2.688l.5-.719l-.657-.593l-6.562-5.688zm.063 2.75l5.218 4.532l-1.375 2.03l-.093.095l-.032.156l-.906 2.687c-.473-.195-.96-.332-1.5-.312h-.063L16 15h-1v3.875c-.14 1.09-.746 1.512-1.5 1.813c-.25.101-.281.046-.5.093V14.97c-.164-3.707 1.156-4.774 2.188-5.563c.285-.219 1.12-.472 2.312-1.031c.996-.469 2.234-1.309 3.563-2.594zm-10 8.594c-.004.227-.075.387-.063.625v8h1s1.07-.012 2.219-.469c1.148-.457 2.535-1.527 2.781-3.406V17l5.375-.031h.031a1.662 1.662 0 0 1 1.75 1.562c-.004.016-.05.387-.062.469H20v2h3.844c-.106.773-.203 1.258-.313 2H20v2h3.219a5.002 5.002 0 0 1-.563 1.375c-.273.445-.508.613-.718.625H5v-7.469c1.621-.86 2.629-2.097 3.281-2.843c.676-.774 1.14-1.36 1.594-1.75c.297-.254.762-.399 1.188-.563z"/></svg>
                                        </label>
                                        <span>Help And Relief  </span>
                                    </div>

                                  
                                    
                                </div>
                                    @error("accomodation_type")
                                    <div class="error"><p>{{$message}}</p></div>
                                    @enderror

                                <div class="steptworadio" id="steptworadio" >
                                    <label class="titlestep">Select your property</label>
                                    <div id="radioset2" class="custumradiosettwo">
                                        <div class="cRadiosub">
                                            <input type="radio" value="Townhouse" class="steprd" id="radio5" name="house_flate" {{$data->house_flate=="Townhouse" ?"checked" : ""}}>
                                            <label for="radio5">
                                               <span>Townhouse</span> 
                                            </label>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="radio" value="Unit" class="steprd" id="radio6" name="house_flate" {{$data->house_flate=="Unit" ? "checked" : ""}} >
                                            <label
                                                for="radio6">
                                              <span>Unit</span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" value="Apartment" class="steprd" id="radio7" name="house_flate" {{$data->house_flate=="Apartment" ?"checked" : ""}} >
                                            <label
                                                for="radio7">
                                              <span>Apartment</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
<br>

                                <div class="stepform form-group">
                                <label class="titlestep">Choose a title for your listing</label>
                               <select name="listing_title" id="listing_title" class="form-control">
                                  
                                   
                               <option  value="Spacious Room" {{$data->listing_title=="Spacious Room" ?"selected" : ""}}>Spacious Room</option>
                               
                                   <option  value="Room with a view Room with Ensuite" {{$data->listing_title=="Room with a view Room with Ensuite" ?"selected" : ""}}> Room with a view Room with Ensuite</option>

                                   <option  value="Beautiful Cozy Room" {{$data->listing_title=="Beautiful Cozy Room" ?"selected" : ""}}>Beautiful Cozy Room</option>

                                  
                                   <option  value="Room in a Perfect location" {{$data->listing_title=="Room in a Perfect location" ?"selected" : ""}}>Room in a Perfect location</option> 
                                   <option  value="Feel at home" {{$data->listing_title=="Feel at home" ?"selected" : ""}}>Feel at home</option>
                                 
                               </select>
                            </div>

<br>




                                @error("house_flate")
                                <div class="error"><p>{{$message}}</p></div>
                                @enderror
                                

                                <div class="stepform form-group">
                                    <label class="titlestep">Tell us a little bit about your home</label>
                                    <div class=" mb-3">
                                       <textarea name="about_yourself" id=""  rows="5" class="form-control" placeholder="A brief description about your house ..."  >{{!empty($data->about_yourself)? $data->about_yourself : ""}}</textarea>

                                    
                                    </div>
                                </div>
                                @error("about_yourself")
                                <div class="error"><p>{{$message}}</p></div>
                                @enderror
                                <input type="hidden" name="completed_step" value="2">
                                <input type="hidden" value="{{$data->id}}" name="_rowid" >

                                <div class="stepbutton">
                                <a href="{{url('find-me-a-roomie/3/'.encrypt(203))}}">
                                    <button>
                                        Next
                                    </button>
                                </a>

                                    <a href="{{url('find-me-a-roomie/index/'.$data->id)}}">Back</a> 
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