@extends('layouts.frontendMaster')

@section('contents')
<style>
    img.imglogo {
        width: 45%;
        margin: 1% 28% 6%;
    }

    .login-and-register-form .soc-log {
        padding: 40px 30px 15px;
    }

    .iconss {
    display: flex;
    flex-direction: column;
}


.log-submitBtn button.log-submit-btn {
    margin-top: 0px !important;
}

.login-and-register-form .soc-log a.facebook-log {
    background: #4168B3 !important;
    border: 1px solid gray;
    color: white !important;
 
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

.login-and-register-form .soc-log a.facebook-log {
    background: #4168B3 !important;
    border: 1px solid gray;
    color: white !important;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    display: flex;
    align-items: center;
    justify-content:center;
    align-content: center;
    padding: 10px;
}

.custom-form a:hover {
    background: transparent !important;
}

a.google-log {
    position: relative !important;
    display: flex !important;
    align-items: center;
    justify-content: center;
    align-content: center;
}

a.facebook-log {
    position: relative;
}

a.google-log img.mr-2 {
    position: absolute;
    left: 10px;
}



.login-and-register-form .soc-log a i {
    font-size: 15px !important;
    background: white;
    color: #4168B3;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    margin-right: 15px;
    border-radius: 50%;
    position: absolute;
    left: 10px;
    top: 13%;
    /* transform: translate(0px, -50px); */
}

    .iconss a.google-log {
        background: #dcdcdc00;
        border: 1px solid gray;
        color: darkslategray;
        font-weight: 700;
       
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .login-and-register-form .custom-form .log-submit-btn {
        background: #008FB4 !important;
        border-color: #008FB4 !important;
        box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px !important;
    }

    a {
        color: #008FB4 !important;
        text-decoration: none;
        background-color: transparent;
        font-weight: 500 !important;
    }

    .login-and-register-form .custom-form input {
        border: 1px solid gray !important;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .login-and-register-form .log-separator span {
    position: relative;
    width: 100%;
    font-size: 16px;
    display: inline-block;
    background: #fff;
    z-index: 2;
    text-align: center;
    margin-bottom: 20px;
    font-weight: 700;
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

                <div class="soc-log fl-wrap">
                    <!-- 
                        <p>Login to your account</p> -->
                    <img class="imglogo" src="{{url('public/assets/frontend/images/logonk.png')}}" alt="logo">
                    @include('layouts.success_error')



                    

                <div id="tabs-container">

                    <!-- <ul class="tabs-menu">

                            <li class="current"><a href="#tab-1">Login</a></li>

                            <li><a href="#tab-2">Register</a></li>

                        </ul> -->
                    <div class="custom-form">

                        <form method="post" name="form-login">

                            @csrf

                          

                            <input name="email" type="text" onClick="this.select()" value="" placeholder=" Your Email ">
                            <div class="errror">
                                <p id="error_email_login"></p>
                            </div>

                   

                            <input name="password" type="password" onClick="this.select()" value="" placeholder="Your Password ">
                            <div class="errror">
                                <p id="error_password_login"></p>
                            </div>



                            <div class="clearfix"></div>

                            <div class="flexnk">
                                <!-- <div class="filter-tags">

                                        <input id="check-a" type="checkbox" name="check">

                                        <label for="check-a">Remember me</label>

                                    </div> -->
                                <div class="lost_password">

                                    <a href="{{url('forgot-password')}}">Lost Your Password?</a>

                                </div>
                            </div>
                            <div class="log-submitBtn">
                                <button type="submit" class="log-submit-btn"><span>Login</span></button>
                            </div>
                            <div class="footer-link"><a href="{{url('register')}}" class="join-link">Don't have an account? Create one here.</a></div>

                            <div class="log-separator fl-wrap"><span>Or</span></div>
                            
                    <div class="iconss">
                        <a href="{{route('login.facebook')}}" class="facebook-log"><i class="fa fa-facebook" aria-hidden="true"></i>Login with Facebook</a>

                        <a href="{{route('login.google')}}" class="google-log"><!-- <i class="fa fa-google"></i> --><img src="https://okroomie.com/public/assets/frontend/images/g-png.png" width="25" class="mr-2"> Login with Google</a>
                    </div>
                </div>

                

                        </form>



                    </div>



                </div>
               
            </div>

        </div>

    </div>
</section>


<style type="text/css">
 

    footer {
        display: none;
    }
</style>

@endsection('contents')

@push('user-login')

<script type="text/javascript">
    $(document).ready(function(ddds) {

        $("#form-login").on('submit', (function(ddds) {


            ddds.preventDefault();

            // alert("you rached");

            $.ajax({

                url: "{{url('login')}}",

                type: "POST",

                data: new FormData(this),

                contentType: false,

                cache: false,

                processData: false,

                success: function(data) {
                    console.log(data);

                    $("#error_password_login").html("");
                    $("#error_email_login").html("");

                    if (data.validation_errors) {
                        $("#error_password_login").html(data.validation_errors.password);
                        $("#error_password_login").addClass('text-danger');

                        $("#error_email_login").html(data.validation_errors.email);
                        $("#error_email_login")..addClass('text-danger');

                    }

                    if (data.status == 401) {
                        toastr.error("Access Denied", "Error");
                        $("#error_email_login").html(data.message);
                    }

                    if (data.status === 200) {
                        toastr.success("Login Successfully please wait...!", "Success");
                        window.location.href = data.route;
                    }
                },
                error: function() {
                    alert("error");
                }
            });

        }));

    });
</script>

@endpush