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
    <!--  <script src="https://use.fontawesome.com/c03345a92c.js"></script> -->
    <!-- <script src="https://kit.fontawesome.com/5ad3d14274.js" crossorigin="anonymous"></script> -->

    <style>
        .error p {
            color: red;
        }

        .step__Modify .custumradiosetone {
            padding: 0;
        }


        .um input[type="radio"] {
  display:none;
}

/* The label is what's left to style. 
As long as its 'for' attribute matches the input's 'id', it will maintain the function of a radio button. */
.um label {
  
    margin: 0;
    padding: 15px 30px;
    border: none;
    width: 100%;
    display: block;
    border-radius: 0;
    position: relative;
    background-color: #E1F1F2;
    border-radius: 30px;
    margin: 0 5px;
}


.stepthird textarea.form-control {
    height: auto;
    border-radius: 20px;
    resize: none;
    height: 150px !important;
    overflow: auto;
}

.um .blank-label {
  display: none;
}

/* The '+' is the adjacent sibling selector.
It selects what ever element comes right after it,
as long as it is a sibling. */
.um input[type="radio"]:checked + label {
  background: grey;
  color: #fff;
}
.main_fg{
    display: flex;
}

.main_fg .main_r {
    margin: 0px 5px;
    
}
    </style>
</head>

<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!--  <a href="{{url('find-me-a-roomie/step-4')}}"></a> -->
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


        <section class="bg__blue step__Modify">
            <!--   <div class="title__block">
            <div class="container">
                <div class="titlestep">
                   <h3>About your home</h3>
                    <h2>Now Provide us with some of your room inclusions?</h2>
                </div>
            </div>
        </div> -->
            <div class="container">
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                        <h3>Describe your place</h3>
                        <h2>Now tell us a bit about the room ?</h2>
                    </div>
                    <form id="step-5-form" action="{{url('find-me-a-roomie/step-55')}}" method="post">
                        @csrf
                        <div class="stepradio">
                            <div class="row mt-5">
                                <div class="col-md-8 m-auto">



                                   
                                 

                                    <div class="steptworadio" id="steptworadio">
                                    <label class="titlestep"> Bed size</label>
                                    <div id="radioset22" class="custumradiosettwo">
                                        
                                       
                                            <div class="cRadiosub">

                                           
                                                <input type="radio" id="radio61" name="bedsize" value="Single" class="steprd" {{$data->bedsize=="Single" ? "checked" : ""}}>
                                                <label for="radio61">
                                                    <span>Single</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio62" name="bedsize" value="Double" class="steprd" {{$data->bedsize=="Double" ? "checked" : ""}}>
                                                <label for="radio62">
                                                    <span>Double</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio63" name="bedsize" value="Queen" class="steprd" {{$data->bedsize=="Queen" ? "checked" : ""}}>
                                                <label for="radio63">
                                                    <span>Queen</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio64" name="bedsize" value="King" class="steprd" {{$data->bedsize=="King" ? "checked" : ""}}>
                                                <label for="radio64">
                                                    <span>King</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio65" name="bedsize" value="None" class="steprd" {{$data->bedsize=="None" ? "checked" : ""}}>
                                                <label for="radio65">
                                                    <span>None</span>
                                                </label>
                                            </div>
                                          

                                        </div>
                                        @error("bedsize")
                                        <div class="error">
                                            <p>{{$message}}</p>
                                        </div>
                                        @enderror
                                        </div>

















                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Mattress included with Bed</label>
                                        <div id="radioset22" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio30" name="mattress" value="1" class="steprd" {{$data->mattress=="1" ? "checked" : ""}}>
                                                <label for="radio30">
                                                    <span>Yes</span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" id="radio31" name="mattress" value="0" class="steprd" {{$data->mattress=="0" ? "checked" : ""}}>
                                                <label for="radio31">
                                                    <span>No</span>
                                                </label>
                                            </div>

                                        </div>
                                        @error("room_size")
                                        <div class="error">
                                            <p>{{$message}}</p>
                                        </div>
                                        @enderror
                                    </div>





























                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Bathroom</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->bathroom=="Shared" ? "checked" : ""}} id="radio6" name="bathroom" value="Shared" class="steprd">
                                                <label for="radio6">
                                                    <span>Shared</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->bathroom=="Own" ? "checked" : ""}} id="radio7" name="bathroom" value="Own" class="steprd">
                                                <label for="radio7">
                                                    <span>Own</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->bathroom=="Ensuite" ? "checked" : ""}} id="radio8" name="bathroom" value="Ensuite" class="steprd">
                                                <label for="radio8">
                                                    <span>Ensuite</span>
                                                </label>
                                            </div>

                                        </div>
                                        @error("bathroom")
                                        <div class="error">
                                            <p>{{$message}}</p>
                                        </div>
                                        @enderror
                                    </div>










                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Room add-ons</label>
                                       
                                    <div id="radioset" class="custumradiosetone">
                                        <div class="cRadiosub">
                                            <input type="checkbox" class="steprd" id="radio1" value="1" name="bed_side_table" {{$data->bed_side_table=="1" ? "checked" : ""}} />
                                            <label for="radio1">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="M4 18h40v24H4V18Zm18 6h4M4 30h40m-22 6h4M8 42v4m32-4v4M24 18v-8"/><path d="M32 10a8 8 0 1 0-16 0h16Z" clip-rule="evenodd"/><path d="M44 26v8M4 26v8"/></g></svg>
                                            </label>
                                            <span>Bed side table</span>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="checkbox" class="steprd" id="radio2" value="1" name="wardrobe"  {{$data->wardrobe=="1" ? "checked" : ""}}/>
                                            <label for="radio2" class="ui-checkboxradio-label ui-corner-all ui-button ui-widget ui-checkboxradio-radio-label ui-checkboxradio-checked ">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#fff" d="M6 2a2 2 0 0 0-2 2v15c0 1.11.89 2 2 2v1h2v-1h8v1h2v-1c1.11 0 2-.89 2-2V4a2 2 0 0 0-2-2H6m0 2h5v15H6V4m7 0h5v15h-5V4m-5 6v3h2v-3H8m6 0v3h2v-3h-2Z"/></svg>
                                            </label>
                                            <span>Wardrobe</span>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="checkbox" class="steprd" value="1" id="radio3" name="drawers" {{$data->drawers=="1" ? "checked" : ""}} />
                                            <label for="radio3">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 14H3m0-6h18m-10 9h2m-2-6h2m-2-6h2m8-2.4v16.8a.6.6 0 0 1-.6.6H3.6a.6.6 0 0 1-.6-.6V2.6a.6.6 0 0 1 .6-.6h16.8a.6.6 0 0 1 .6.6ZM17.5 20v2m-11-2v2"/></svg>
                                            </label>
                                            <span>Drawers</span>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="checkbox" class="steprd" id="radio4" value="1" name="study_desk" {{$data->study_desk=="1" ? "checked" : ""}} />
                                            <label for="radio4">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#fff" d="M22 5v2h-5l-3.47 5H16v2h-1.54l3.71 8h-2.2l-.93-2H6.38l-1.03 2H3.1l4.13-8H7c-.45 0-.83-.3-.96-.7L2.87 3.84l.95-.34c.52-.16 1.09.13 1.26.65L7.72 12h4.38l3.47-5H12V5h10M9.5 14l-2.08 4h6.69l-1.85-4H9.5Z"/></svg>
                                            </label>
                                            <span>Study desk</span>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="checkbox" class="steprd" id="radio9" value="1" name="chair" {{$data->chair=="1" ? "checked" : ""}}/>
                                            <label for="radio9">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#fff" d="M22 10v3h-3v-3h3M2 13h3v-3H2v3m15-8c0-1.1-.9-2-2-2H9c-1.1 0-2 .9-2 2v8h10V5M7 15H6v2h5v1l-4 4h2.8l2.2-2.2l2.2 2.2H17l-4-4v-1h5v-2H7Z"/></svg>
                                            </label>
                                            <span>Chair </span>
                                        </div>
                                    </div>

                                    </div>
                                




                                   
                                    <input type="hidden" name="completed_step" value="5">
                                    <input type="hidden" value="{{$data->id}}" name="_rowid" >

                                    <div class="stepbutton mt-3">
                                        <a href="{{url('find-me-a-roomie/5/'.encrypt(205))}}">
                                            <button>
                                                Next
                                            </button>
                                        </a>

                                        <a href="{{url('find-me-a-roomie/4/'.encrypt(204).'/'.$data->id)}}">Back</a>
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
    <script src="https://kit.fontawesome.com/5ad3d14274.js" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>