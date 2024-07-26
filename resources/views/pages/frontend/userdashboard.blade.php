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

    <style type="text/css">
        section.nkmagicform.UserDashboardmain {
            position: relative;
            background: #838462;
            padding-top: 30px;
        }

        .UserDashboardmain .main-register-holder {
            max-width: 100%;
            margin-top: 50px;
        }

        .link-edit i {
            padding-right: 10px;
        }

        .right-dashboard ul a i {
            padding-right: 10px;
        }

        .left_dashBoard {
            background: #ffffff;
            padding: 10px;
            text-align: center;
            position: relative;
            margin-top: 60px;
            padding-top: 40px;
            border-radius: 10px;
            max-width: 400px;
            margin: 60px auto 0;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .main-overlay {
            background: url(https://okroomie.com/public/assets/frontend/images/homenk7.png) !important;
            height: 110px;
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            background-position: center bottom !important;
            background-size: cover !important;
            background: #88bdbc !important;
            display: none;
        }

        /*.image-dashboard {
                width: 100px;
                height: 100px;
                position: absolute;
                top: -60px;
                left: 0;
                right: 0;
                margin: auto;
                border-radius: 100%;
                overflow: hidden;
                border: 1px solid #9e9e9e;
            }*/

        .image-dashboard img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 100%;
            padding: 2px;
        }

        .left_dashBoard h2 {
            border: 0;
            color: #333e4e;
            font-size: 1.25rem;
            margin-bottom: 0;
            margin-top: 1rem;
            padding-bottom: 0;
            text-align: center;
            overflow: hidden;
            text-overflow: ellipsis;
            text-transform: capitalize;
        }

        .left_dashBoard .free-account {
            color: #2f3a4a;
            margin: 0;
            text-align: center;
            display: block;
            margin-bottom: 10px;
        }

        .left_dashBoard .upgrade {
            display: flex;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            outline: none;
            width: 100%;
            font-family: inherit;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5rem;
            border: 0.0625rem solid #6e6658;
            background: #6e6658 !important;
            color: rgb(255, 255, 255);
            border-radius: 8px;
            padding: calc(0.6875rem) 1.5rem;
            cursor: pointer;
            margin-bottom: 15px;
            text-decoration: none;
        }

        .left_dashBoard a {
            color: #2f3a4a;
            font-size: .875rem;
            text-decoration: underline;
        }

        .middle-dashboard {
            width: 100%;
        }

        .top-head-middle {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .top-head-middle.top-one {
            border-bottom: 1px solid #444444;
        }

        .top-head-middle h1 {
            color: #444444;
            font-size: 1.25em;
            font-weight: normal;

            text-transform: capitalize;
        }

        .top-head-middle span {
            margin-top: 3.4em;
            font-size: 12px;
            color: #fff;
        }

        span.link-edit {
            color: white;
        }

        .top-head-middle span i {
            margin-right: 5px;
        }

        .middle-dashboard .labels {
            min-width: 94px;
        }

        .status-label.pending {
            background: #feb219;
        }


        .listing {
            font-size: 0.9em;
            margin-bottom: 0.75em;
            position: relative;
            display: flex;
            align-items: center;
        }

        .status-label {
            border-radius: 20px;
            display: inline-block;
            font-size: 0.75rem;
            line-height: 1.25rem;
            margin-right: 1rem;
            min-width: 75.18px;
            padding: 0 5px;
            text-align: center;
            text-transform: uppercase;
            color: #4f4841;
        }

        a.listing-link {
            display: flex;
            flex: auto;
            align-items: center;
            min-width: 64px;
            color: #4f4841;
        }

        .link-title {
            font-size: 14px;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            flex: 2;
        }

        .link-edit svg.edit {
            color: #4f4841;
            margin-right: 10px;
        }

        .middle-info {
            background-color: #dbfbff;
            border-radius: 0.75rem;
            padding: 1.5rem;
            max-width: 538px;
            margin-top: 1.5rem;
        }

        .styles__heading {
            display: flex;
            color: #2f3a4a;
            font-size: 1rem;
            line-height: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .styles__subheading {
            color: #2f3a4a;
            font-size: .875rem;
            line-height: 1.25rem;
            font-weight: 400;
        }

        .middle-info .ButtonBase {
            display: flex;
            position: relative;
            outline: none;
            width: fit-content;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5rem;
            border: 0.0625rem solid rgb(0, 105, 119);
            background-color: rgb(0, 105, 119);
            color: rgb(255, 255, 255);
            border-radius: 8px;
            padding: calc(0.6875rem) 1.5rem;
            cursor: pointer;
            display: inline-block;
            margin-right: 35px;
            margin-top: 20px;
        }

        .styles__link {
            display: inline-block;
        }

        .styles__link a {
            text-decoration: underline;
            color: black;
        }

        .listing__buttons {
            display: flex;
            flex-direction: row;
            -webkit-box-pack: start;
            justify-content: flex-start;
            -webkit-box-align: center;
            align-items: center;
            padding: 0px;
        }

        .listing__buttons button {
            -webkit-box-align: center;
            align-items: center;
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
            text-decoration: none;
            display: flex;
            text-align: center;
            -webkit-box-pack: center;
            justify-content: center;
            flex-grow: 1;
            margin: 0 5px;
        }

        .right-dashboard ul {
            list-style: none;
            padding: 0;
        }


        .right-dashboard ul a {
            color: #ffff;
            font-size: 0.9em;
            padding: 0;
            text-align: left;
        }

        .right-dashboard ul a span.icon svg {
            height: 14px;
            margin-right: 0.5rem;
            width: 18px;
            color: #4f4841;
        }

        .right-dashboard .top-head-middle {
            margin: 0;
            padding: 0;
        }

        ul.list-info li a {
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        ul.list-info li a.all-articles {
            color: #47aab7;
        }

        .link-edit svg.edit .fill {
            fill: #4f4841 !important;
        }

        .right-dashboard ul a span.icon svg .fill {
            fill: #4f4841;
        }

        .right-dashboard a,
        .middle-dashboard a {
            text-decoration: none;
            padding: 2px;
        }

        .right-dashboard a:hover,
        .middle-dashboard a:hover {
            background: #59616e52;
        }

        .UserDashboardmain .login-and-register-form .main-register {
            background: transparent;
            box-shadow: none;
        }

        .UserDashboardmain .login-and-register-form {
            background: #EAE7DC;
        }

        .main-overlay:before {
            content: "";
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            background: #e98074e0 !important;
            top: 0;
            display: none;
        }

        .iupload {
            position: relative;
            width: 110px;
            height: 110px;
            margin: auto;
            border: 1px solid #f3f3f3f3;
            border-radius: 100%;
            padding: 3px;
        }

        .iupload img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border: 1px solid #f3f3f3;
        }

        .iconUpload {
            position: absolute;
            background: #88bdbc;
            width: 30px;
            height: 30px;
            border-radius: 100%;
            color: #333;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .iconUpload input {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            opacity: 0;
        }

        section {
            padding: 0rem 0rem;
        }



        .may-N .row {
            display: flex;
            justify-content: space-between !important;

        }

        .may-N button {
            background: #6E6658;
            color: white;
            border: none;
            padding: 5px;
            border-radius: 5px;
        }

        .image-dashboard {
            position: absolute;
            top: -60px;
            left: 50%;
            transform: translate(-50%);
        }

        .main-overlay {
            background: url(https://okroomie.com/public/assets/frontend/images/logonk.png) !important;
            height: 60px;
            position: absolute;
            width: 100%;
            left: 0;
            top: 0;
            background-position: center bottom !important;
            background-size: cover !important;
            background: #88bdbc !important;
        }

        .logo img {
            width: 150px;
        }



        .step-header {
            background-color: #EEEEEE;
            position: absolute;
            width: 100%;
            top: 0px;
            background: #FFFFFF;
            z-index: 90;
            left: 0;
            box-shadow: rgb(149 157 165 / 20%) 0px 8px 24px;
        }

        .may-N h1 {
            color: #444444;
            font-size: 1.25em;
            font-weight: normal;
            text-transform: capitalize;
        }

        .link-title {
            font-size: 14px;
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            flex: 2;
            color: white;
        }
    </style>


</head>

<body>
    <div id="wrapper">
        <!-- <header class="step-header">
            <div class="container">
                <div class="inner-block">
                   
                    <div class="logo">
                        <a href="#">
                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="{{url('/')}}"><i class="fa fa-times"></i></a>
                    </div>
                </div>
            </div>
        </header> -->
        <section class="nkmagicform UserDashboardmain">
            <div class="container">
                <div class="main-overlay"></div>

                <div class="user-dashboard_inner">
                    <div class="row">

                        <div class="col-md-3">
                            <div class="right-dashboard">
                                <div class="rightcommon">
                                    <div class="top-head-middle">
                                        <h1> My dashboard</h1>
                                    </div>
                                    <div class="content-data">
                                        <ul>
                                            <li>
                                                <a href="#" class="verify-phone">
                                                    <span class="icon">
                                                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                    </span>
                                                    Verify mobile phone
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                                    </span>
                                                    My account settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                    </span>
                                                    My Email settings
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="icon">
                                                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                                                    </span>
                                                    FAQ and Support
                                                </a>
                                            </li>
                                            <li>
                                                <a id="logout" href="{{url('logout')}}">
                                                    <span class="icon">
                                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                                    </span>
                                                    Log me out
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rightcommon">
                                    <div class="top-head-middle">
                                        <h1>Additional helpful material</h1>
                                    </div>
                                    <ul class="list-info">
                                        <li><a href="#">Should I move out with friends or strangers?</a></li>
                                        <li><a href="#">How to be a good housemate</a></li>
                                        <li><a href="#">Australia’s cheapest share house suburbs 2022</a></li>
                                        <li><a href="#">Draft listings FAQ</a></li>
                                        <li><a class="all-articles" href="/info">+ View all articles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 pl-3 pr-3">
                            <div class="middle-dashboard">

                                <div class="may-N">
                                    <div class="row">
                                        <div class="col-6">
                                            <h1>My listings</h1>
                                        </div>
                                        <div class="col-6 " style="text-align: right;"><button>Create a new listings</button></div>
                                    </div>
                                </div>

                                <div class="top-head-middle top-one">
                                    <h1>Find me a roomie</h1>
                                    <span><i class="fa fa-line-chart" aria-hidden="true"></i>Bumped Up</span>
                                </div>
                                <div class="content-data">
                                    @if($data!=null)
                                    @foreach($data as $key=>$dataVal)
                                    <div class="listing">
                                        <div class="labels">
                                            <div class="status-label pending">
                                                <span>Pending</span>
                                            </div>
                                        </div>
                                        <a class="listing-link" href="#">
                                            <div class="icons"></div>
                                            <span class="link-title">{{$dataVal->property_address}}</span>
                                            <a href="{{route('editListingRoomie',['id'=>encrypt($dataVal->id)])}}"><span class="link-edit"><i class="fa fa-pencil" aria-hidden="true"></i><span>Edit</span></span></a>
                                        </a>
                                    </div>
                                    @endforeach
                                    @endif



                                </div>
                            </div>

                            <div class="middle-dashboard">
                                <div class="top-head-middle">
                                    <h1>Find me a Room</h1>
                                    <span><i class="fa fa-line-chart" aria-hidden="true"></i>Bumped Up</span>
                                </div>
                                <div class="content-data">
                                @if($room!=null)
                                
                                @foreach($room as $key=>$roomVal)
                                
                                    <div class="listing">
                                        <div class="labels">
                                            <div class="status-label pending">
                                                <span>Pending</span>
                                            </div>
                                        </div>
                                        <a class="listing-link" href="#">
                                            <div class="icons"></div>
                                            <span class="link-title">{{$roomVal->suburb}}</span><a href="{{route('editListingRoom',['id'=>encrypt($dataVal->id)])}}">
                                            <span class="link-edit"><i class="fa fa-pencil" aria-hidden="true"></i><span>Edit</span></span></a>
                                        </a>
                                    </div>
                                @endforeach
                                @endif

                                    

                                </div>

                                <!--  <div class="middle-info">
                                       <div class="styles__container">
                                            <div class="styles__heading"><i class="fa fa-shield-check"></i>Don't forget to verify your ID today</div>
                                            <div class="styles__subheading">It'll only take 5 minutes and you'll let potential flatmates know they can trust you. Jump on this today, before your upgrade expires!</div>
                                            <button type="button" class="ButtonBase">Verify your ID</button>
                                            <div class="styles__link"><a class="styles__link___3kED5" href="#">Learn how to get it right the first time</a></div>
                                        </div>

                                   </div> -->
                            </div>

                            <!-- <div class="middle-dashboard mt-4">
                                
                                <div class="content-data">
                                    <div class="listing__buttons">
                                        <a href="{{url('list-my-place/index')}}"><button>Find me a Roomie</button></a>
                                        <a href="{{url('find-me-a-room/index')}}"><button>Find me a Room</button></a>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <div class="col-md-3">
                            <div class="left_dashBoard">
                                <div class="image-dashboard">
                                    <!--  @if(isset($data->image))
                                        <img src="../storage/app/{{Auth::user()->image}}" />
                                        @else
                                        <img src="../storage/app/dummy.jpg" />
                                        @endif -->
                                        @auth
                                    <form id="imageUploadForm">
                                        <input type="hidden" id="tokencsrf" name="_token" value="<?php echo csrf_token(); ?>">
                                        <div class="iupload">
                                            @if(Auth::user()->image)
                                            <img src="../storage/app/{{Auth::user()->image}}" id="blah" alt="your image" />
                                            @else
                                            <img id="blah" src="https://okroomie.com/public/assets/frontend/images/homenk10.png" alt="your image" />
                                            @endif
                                            <div class="iconUpload">
                                                <i class="fa fa-plus"></i>
                                                <input accept="image/*" name="image" type='file' id="imgInp" />
                                            </div>
                                        </div>
                                        <form>
                                        @endauth



                                </div>
                                <h2></h2>
                                <span class="free-account">Free Account</span>
                                <a href="{{url('plans')}}" class="btn upgrade">Why upgrade?</a>
                                <a href="{{url('plans')}}" class="btn upgrade">Verify your ID</a>
                                <a href="#">Payment history</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">


                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <script type="text/javascript">
        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)



                // let token=$("#tokencsrf").val();
                // let image1=$("#imgInp").val();

                // $.post("/upload_image_dashboard",{image:image1,_token:token},function(data){
                //     alert(data);

                // });
            }
        }

        $(document).ready(function(e) {
            $('#imageUploadForm').on('submit', (function(e) {

                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "upload_image_dashboard",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        // console.log("success");
                        // console.log(data);
                    },
                    error: function(data) {
                        // console.log("error");
                        // console.log(data);
                    }
                });
            }));

            $("#imgInp").on("change", function() {
                $("#imageUploadForm").submit();
            });
        });
    </script>


    <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<script>

</script>