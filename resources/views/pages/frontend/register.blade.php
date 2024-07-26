@extends('layouts.frontendMaster')
@section('contents')



<style>
    input {
    border: 1px solid gray !important;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    background: #f9f9f9;
}


div#tabs-container img.imglogo {

    width: 45%;
    margin: 6% 28% 6%;
}

.footer-link {
    margin: 20px 0px;
}
.login-link {
    color: #008FB4 !important;
    color: #008FB4 !important;
    text-decoration: none;
    background-color: transparent;
    font-weight: 500 !important;
}





a.facebook-log {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
}

i.fa.fa-facebook {
    position: absolute !important;
    left: 10px;
    width: 30px;
    height: 30px;
    background: white;
    top: 8px !important;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    color: #3B5998 !important;
}


span {
    font-weight: 700;
}


span {
    font-weight: 700;
}

a.google-log {
    background: transparent;
    color: #008FB4 !important;
    background: #dcdcdc00;
    border: 1px solid gray;
    color: darkslategray;
    font-weight: 700;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    position: relative;
    display: flex !important;
    align-items: center;
    justify-content: center;
    align-content: center;
}


.nkmagicform .login-and-register-form .soc-log a img.mr-2 {
    position: absolute;
    left: 10px;
}

#bita:hover {
    background: transparent !important;
}

.login-and-register-form .main-register-holder {
  
 
    margin: 20px auto !important;

}
</style>
<section class="nkmagicform">
    
     <div class="login-and-register-form">

            <div class="main-overlay"></div>

            <div class="main-register-holder">

                <div class="main-register fl-wrap">

                    <div class="close-reg"><a href="{{url('/')}}"><i class="fa fa-times"></i></a></div>

                    <!-- <h3>Welcome to <span>Ok<strong>Roomie</strong></span></h3> -->

              

                    

                    <div id="tabs-container">
                    <img class="imglogo" src="{{url('public/assets/frontend/images/logonk.png')}}" alt="logo">
                         <div class="custom-form">


                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <form method="post" name="registerform" id="form-register"  class="main-register-form" id="main-register-form2" action="{{url('register')}}">

                            @csrf

                              

                                <input name="your_first_name" type="text"  value="" placeholder="Your First Name">

                                <div class="errror"><p id="error_name"></p></div>

                            

                                <input name="email" type="text"  value="" placeholder="Your Email ">

                                <div class="errror"><p id="error_email"></p></div>

                             

                                <input name="password" type="password"  value="" placeholder="Your Password ">

                                <div class="errror"><p id="error_password"></p></div>

                                

                                <input name="password_confirmation" type="password"  value="" placeholder="Your Confirm Password  ">

                              

                                <div class="log-submitBtn">
                                    <button type="submit" class="log-submit-btn"><span>Create account</span></button>
                               </div>
                               <div class="footer-link"><a href="{{url('login')}}"  class="login-link">Already have an account? Login here.</a></div>
                               <div class="log-separator fl-wrap"><span>Or</span></div>
                               <div class="soc-log fl-wrap">



<a href="#" class="facebook-log"><i class="fa fa-facebook"></i>Login with Facebook</a>

<a id="bita" href="{{route('login.google')}}" class="google-log"><!-- <i class="fa fa-google"></i> --><img src="https://okroomie.com/public/assets/frontend/images/g-png.png" width="25" class="mr-2"> Login with Google</a>

</div>

                            </form>

                        </div>

                    </div>
                 

                </div>

            </div>

       </div>
</section>


<style type="text/css">
  
     footer{
        display: none;
    }
</style>

@endsection('contents')


@push('user-register')

<script type="text/javascript">

$(document).ready(function(ddds){

$("#form-register").on('submit',(function(ddds){

ddds.preventDefault();

// alert("you rached");

$.ajax({

url:"{{url('register')}}",

type:"POST",

data:new FormData(this),

contentType:false,

cache:false,

processData:false,

success:function(data)
{ 
 console.log(data);

        $("#error_password").html("");
        $("#error_name").html("");
        $("#error_email").html("");

    if(data.validation_errors)
   {
        $("#error_password").html(data.validation_errors.password);
        $("#error_name").html(data.validation_errors.your_first_name);
        $("#error_email").html(data.validation_errors.email);
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

@endpush