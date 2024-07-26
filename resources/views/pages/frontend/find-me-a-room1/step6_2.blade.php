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
    </style>
</head>
<style type="text/css">
    .xdstep-1 .cRadiosub {
        width: 20%;
        text-align: center;
        padding: 0 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
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

    .xdstep-1 .cRadiosub span {
        height: unset;
        margin: 0;
    }

    .custumradiosettwo .cRadiosub .ui-checkboxradio-label {
        margin: 0;
        font-size: 17px;
    }



    .col-12.kjas .main__contact input:checked+.bglk {
        background-color: #45bec56e;


    }

    .col-12.kjas .main__contact input[type="checkbox"] {
        display: none;
    }

    .bglk {
        padding: 5px 34px;
        border-radius: 30px;
    }

    .bglk i.fa::before {

        content: "\f05d";
        font-family: 'FontAwesome';
        position: absolute;
        top: -23px;
        right: 6px;
        display: none;
    }

    .bglk i.fa {
        position: relative;
    }


    .col-12.kjas .main__contact input:checked+.bglk i.fa::before {

        display: block;
    }
</style>

<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                      
                    </div>
                    <div class="logo">
                        <a href="#">
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
            <div class="container">
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                        <h3>About your home</h3>
                        <h2>My Room preference
                        </h2>
                    </div>
                    <br>
                    <form id="step-5-form" action="{{route('update_update6')}}" method="post">
                        <input type="hidden" value="{{encrypt($data->id)}}" name="id" >
                        @csrf
                       

                        <div class="row">

                            <div class="col-12  kjas">

                                <div class="main_data">


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="queen_bed" value="1"  {{$data->queen_bed==1 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#797875" d="M19 10V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v3a2 2 0 0 0-2 2v5h1.33L5 19h1l.67-2h10.66l.67 2h1l.67-2H21v-5a2 2 0 0 0-2-2M7 7h10v3H7m12 5H5v-3h14Z"/></svg></span>
                                                <span>Queen Bed </span>
                                            </div>
                                        </label>
                                    </div>







                                    <div class="main__contact">
                                        <label>
                                            <input type="checkbox" name="bed_side_table" value="1" {{$data->bed_side_table==1 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M4 18h40v12H4zm0 12h40v12H4zm18-6h4m-4 12h4M8 42v4m32-4v4M24 18v-8m8 0H16"/></svg></span>
                                                <span>Bedside table</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="mattress" value="0" {{$data->mattress==0 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><path fill="#797875" d="M256 448H64c-35.35 0-64-28.7-64-64V128c0-35.35 28.65-64 64-64h192v384zM64 352c0 17.7 14.33 32 32 32h64c17.7 0 32-14.3 32-32V160c0-17.7-14.3-32-32-32H96c-17.67 0-32 14.3-32 32v192zM288 64h288c35.3 0 64 28.65 64 64v256c0 35.3-28.7 64-64 64H288V64z"/></svg></span>
                                                <span>Mattress not required  </span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="study_desk" {{$data->study_desk==1 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#797875" fill-rule="evenodd" d="M13 18h2a1 1 0 0 1 0 2H9a1 1 0 0 1 0-2h2v-2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-7v2ZM4 6v8h16V6H4Z"/></svg></span>
                                                <span>Desk  </span>
                                            </div>
                                        </label>
                                    </div>

                                </div>

                                <div class="main_data2">

                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="wardrobe" value="1" {{$data->wardrobe==1 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#797875" d="M6 2a2 2 0 0 0-2 2v15c0 1.11.89 2 2 2v1h2v-1h8v1h2v-1c1.11 0 2-.89 2-2V4a2 2 0 0 0-2-2H6m0 2h5v15H6V4m7 0h5v15h-5V4m-5 6v3h2v-3H8m6 0v3h2v-3h-2Z"/></svg></span>
                                                <span>Wardrobe</span>
                                            </div>
                                        </label>
                                    </div>





                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="mattress" value="1" {{$data->mattress==1 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                                        <rect x="0" y="0" width="24" height="24" fill="none" stroke="none" />
                                                        <circle cx="7" cy="6" r="2" fill="#797875" />
                                                        <path fill="#797875" d="M11.15 12c-.31-.22-.59-.46-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5c-.29-.14-.62-.23-.96-.23h-.03C6.01 9 5 10.01 5 11.25V12H2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8H11.15zM7 20H5v-6h2v6zm4 0H9v-6h2v6zm4 0h-2v-6h2v6zm4 0h-2v-6h2v6zM17.42 7.21c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L18 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06zm-4 0c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L14 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06z" />
                                                    </svg></span>
                                                <span>Mattress required </span>
                                            </div>
                                        </label>
                                    </div>



                                    <div class="main__contact">


                                        <label>
                                            <input type="checkbox" value="1" name="lamp" {{$data->lamp==1 ? "checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><g fill="#797875"><path fill-rule="evenodd" d="M5.04.303A.5.5 0 0 1 5.5 0h5c.2 0 .38.12.46.303l3 7a.5.5 0 0 1-.363.687h-.002c-.15.03-.3.056-.45.081a32.731 32.731 0 0 1-4.645.425V13.5a.5.5 0 1 1-1 0V8.495a32.753 32.753 0 0 1-4.645-.425c-.15-.025-.3-.05-.45-.08h-.003a.5.5 0 0 1-.362-.688l3-7ZM3.21 7.116A31.27 31.27 0 0 0 8 7.5a31.27 31.27 0 0 0 4.791-.384L10.171 1H5.83L3.209 7.116Z"/><path d="M6.493 12.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265a.301.301 0 0 0-.052.075l-.001.004l-.004.01V14l.002.008a.147.147 0 0 0 .016.033a.62.62 0 0 0 .145.15c.165.13.435.27.813.395c.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.62.62 0 0 0 .146-.15a.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09a1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977c-.29.228-.68.413-1.116.558c-.878.293-2.059.465-3.34.465c-1.281 0-2.462-.172-3.34-.465c-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243c.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411Z"/></g></svg></span>
                                                <span>Lamp	 </span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="main__contact">


                                        <div class="main__contact">

                                            <label>
                                                <input type="checkbox" value="1" name="chair" {{$data->chair==1 ? "checked" : ""}}>
                                                <div class="bglk">
                                                    <span><i class="fa"></i></span>

                                                    <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="M15 28V15.652C15 13 18 10 24 10s9 3 9 5.652V28m-21 6v-6h24v6H12Zm8-30h8"/><path d="M8 16v12h32V16M17 43h14m-7-9v9m0-39v6"/></g></svg></span>
                                                    <span> Chair</span>
                                                </div>
                                            </label>
                                        </div>


                                    </div>


                                </div>

                            </div>
                        </div>






                

                </div>












                <br>
                <br>

                <div class="stepthird ">
                    
                    
                        
                        <div class="stepbutton">
                           
                                <button>
                                    Next
                                </button>
                           
                            <a href="{{route('editListingRoom',['id'=>encrypt($data->id)])}}">Back</a>

                    </form>

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
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>