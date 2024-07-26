@extends('layouts.frontendMaster')

@section('contents')
<style type="text/css">
.nkpasswordset #tabs-container {
    padding-bottom: 40px;
}
.f-password {
    font-weight: 400 !important;
    text-align: left !important;
    font-size: 16px !important;
    line-height: 1.5;
    margin: 0 !important;
}
</style>
<section class="nkmagicform nkpasswordset">
	
     <div class="login-and-register-form">

            <div class="main-overlay"></div>

            <div class="main-register-holder">

                <div class="main-register fl-wrap">

                    <div class="close-reg"><a href="{{url('/')}}"><i class="fa fa-times"></i></a></div>

                    <!-- <h3>Welcome to <span>Ok<strong>Roomie</strong></span></h3> -->

                    <div class="soc-log fl-wrap">

                        <p>Reset Password</p>

                        <!-- <a href="{{route('login.facebook')}}" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>

                        <a href="{{route('login.google')}}" class="google-log"><img src="https://okroomie.com/public/assets/frontend/images/g-png.png" width="25" class="mr-2"> Log in with Google</a> -->
                        <p class="f-password">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                    </div>

                   <!--  <div class="log-separator fl-wrap"><span>Or</span></div> -->

                    <div id="tabs-container">

                        <!-- <ul class="tabs-menu">

                            <li class="current"><a href="#tab-1">Login</a></li>

                            <li><a href="#tab-2">Register</a></li>

                        </ul> -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="custom-form">

                            <form method="POST" action="{{ route('password.update') }}">

                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <label> Email </label>
                                <input name="email" type="email"  value="">
                                <div class="errror"><p id="error_email_reset"></p></div>

                                <label>Password </label>
                                <input name="password" id="password" type="password"  value="">
                                <div class="errror"><p id="error_password_reset"></p></div>

                                <label> Confirm Password </label>
                                <input name="password_confirmation" id="password_confirmation" type="password"  value="">
                                <div class="errror"><p id="error_confirm_password_reset"></p></div>



                               <!--  <label>Password * </label>

                                <input name="password" type="password" onClick="this.select()" value="">
                                <div class="errror"><p id="error_password_login"></p></div> -->

                                

                                 <div class="clearfix"></div>

                                 <div class="flexnk">
                                    <!-- <div class="filter-tags">

                                        <input id="check-a" type="checkbox" name="check">

                                        <label for="check-a">Remember me</label>

                                    </div> -->
                                    <!--  <div class="lost_password">

                                        <a href="{{url('forgot-password')}}">Lost Your Password?</a>

                                    </div> -->
                                </div> 
                               <div class="log-submitBtn">
                                    <button type="submit" class="log-submit-btn"><span>Reset Password</span></button>
                               </div>

                            </form>

                           

                        </div>

                   

                    </div>
                    <!-- <div class="footer-link"><a href="{{url('register')}}" class="join-link">Don't have an account? Create one here.</a></div> -->

                </div>

            </div>

       </div>
</section>


<style type="text/css">
    header{
        display: none;
    }
     footer{
        display: none;
    }
</style>

@endsection('contents')