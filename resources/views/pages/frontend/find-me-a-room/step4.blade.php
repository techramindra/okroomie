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
   </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                       <!--  <a href="{{url('find-me-a-room/step-3')}}">Left</a> -->
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
                <div class="stepthird">
                    <div class="titlestep mb-4">
                        <h3>YOUR IDEAL PLACE</h3>
                        <h2>Property preferrences</h2>
                    </div>
                    <form id="step-5-form" action="{{url('find-me-a-room/step-3')}}" method="post">
                        @csrf
                        <div class="stepradio">
                            <div class="row">
                                <div class="col-md-6 m-auto">
                                
                                

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Room furnishing</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->room_furnishing=="is Flexible" ? "checked" : ""}} id="radio3" name="room_furnishing" value="is Flexible" class="steprd">
                                                <label for="radio3">
                                                <span>is flexible</span> 
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->room_furnishing=="is not required" ? "checked" : ""}} id="radio4" name="room_furnishing" value="is not required"  class="steprd">
                                                <label
                                                    for="radio4">
                                                <span>is not required</span>
                                                </label>
                                            </div>
                                            
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->room_furnishing=="is Required" ? "checked" : ""}} id="radio5" name="room_furnishing" value="is Required" class="steprd">
                                                <label
                                                    for="radio5">
                                                <span> is required</span>
                                                </label>
                                               
                                            </div>
                                        
                                        </div>
                                                @error("room_furnishing")
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror
                                    </div>

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Bathroom Type</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->bathroom=="Shared" ? "checked" : ""}} id="radio6" name="bathroom" value="Shared" class="steprd">
                                                <label for="radio6">
                                                <span>Shared</span> 
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->bathroom=="Own" ? "checked" : ""}}  id="radio7" name="bathroom" value="Own" class="steprd">
                                                <label
                                                    for="radio7">
                                                <span>Own</span>
                                                </label>
                                            </div>
                                            
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->bathroom=="Ensuite" ? "checked" : ""}}  id="radio8" name="bathroom" value="Ensuite"  class="steprd">
                                                <label
                                                    for="radio8">
                                                <span>Ensuite</span>
                                                </label>
                                                
                                            </div>
                                        
                                        </div>
                                        @error("bathroom")
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror
                                    </div>


                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Parking</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->parking=="Flexible" ? "checked" : ""}} id="radio21" name="parking" value="Flexible" class="steprd">
                                                <label for="radio21">
                                                <span>Flexible</span> 
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->parking=="Required" ? "checked" : ""}}  id="radio22" name="parking" value="Required" class="steprd">
                                                <label
                                                    for="radio22">
                                                <span>Required</span>
                                                </label>
                                            </div>
                                            
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->parking=="Not required" ? "checked" : ""}}  id="radio23" name="parking" value="Not required"  class="steprd">
                                                <label
                                                    for="radio23">
                                                <span>Not required</span>
                                                </label>
                                               
                                            </div>
                                           
                                        </div>
                                        @error("parking")
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror
                                    </div>
                                   

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Internet</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->internet=="Flexible" ? "checked" : ""}} id="radio24" name="internet" value="Flexible" class="steprd">
                                                <label for="radio24">
                                                <span>Flexible</span> 
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->internet=="Required" ? "checked" : ""}}  id="radio25" name="internet" value="Required" class="steprd">
                                                <label
                                                    for="radio25">
                                                <span>Required</span>
                                                </label>
                                            </div>
                                            
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->internet=="Not required" ? "checked" : ""}}  id="radio26" name="internet" value="Not required"  class="steprd">
                                                <label
                                                    for="radio26">
                                                <span>Not required</span>
                                                </label>
                                               
                                            </div>
                                          
                                        
                                        </div>
                                                 @error("internet")
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror
                                    </div>


                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Maximum number of flatemates</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->maximum_number_of_flatemates=="Flexible" ? "checked" : ""}} id="radio27" name="maximum_number_of_flatemates" value="Flexible" class="steprd">
                                                <label for="radio27">
                                                <span>Flexible</span> 
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->maximum_number_of_flatemates=="1 other" ? "checked" : ""}}  id="radio28" name="maximum_number_of_flatemates" value="1 other" class="steprd">
                                                <label
                                                    for="radio28">
                                                <span>1 other</span>
                                                </label>
                                            </div>
                                            
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->maximum_number_of_flatemates=="2 others" ? "checked" : ""}}  id="radio29" name="maximum_number_of_flatemates" value="2 others"  class="steprd">
                                                <label
                                                    for="radio29">
                                                <span>2 others</span>
                                                </label>
                                               
                                            </div>
                                           
                                        </div>
                                                @error('maximum_number_of_flatemates')
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror
                                    </div>


                                    <!-- <div class="stepform form-group">
                                        <label class="titlestep">Type of property</label>
                                    <select name="" id="" class="form-control">
                                        <option value="lorem 1">lorem text</option>
                                        <option value="lorem 1">lorem text</option>
                                        <option value="lorem 1">lorem text</option>
                                        <option value="lorem 1">lorem text</option>
                                    </select>
                                    </div>

                                    <div class="stepform form-group">
                                        <label class="titlestep">Type of property</label>
                                    <select name="" id="" class="form-control">
                                        <option value="lorem 1">lorem text</option>
                                        <option value="lorem 1">lorem text</option>
                                        <option value="lorem 1">lorem text</option>
                                        <option value="lorem 1">lorem text</option>
                                    </select>
                                    </div> -->


                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">My roommate preference</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" name="preferences_user" id="radio37" {{$data->preferences_user=="male" ? "checked" : ""}}  value="male" class="steprd">
                                                <label for="radio37">
                                                <span>male </span> 
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio"id="radio38" name="preferences_user"  value="females only" class="steprd" {{$data->preferences_user=="females only" ? "checked" : ""}} >
                                                <label
                                                    for="radio38">
                                                <span>females only</span>
                                                </label>
                                            </div>
                                            
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio39" name="preferences_user" value="is flexible"  class="steprd" {{$data->preferences_user=="is flexible" ? "checked" : ""}} >
                                                <label
                                                    for="radio39">
                                                <span>is flexible</span>
                                                </label>
                                               
                                            </div>
                                           
                                        </div>
                                                @error('preferences_user')
                                                <div class="error"><p>{{$message}}</p></div>
                                                @enderror
                                    </div>

                                    <div class="stepbutton">
                                        <a href="{{url('find-me-a-room/step-4')}}">
                                            <button>
                                                Next
                                            </button>
                                        </a>

                                        <a href="{{url('find-me-a-room/step-2')}}">Back</a> 
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

    </script>
</body>

</html>