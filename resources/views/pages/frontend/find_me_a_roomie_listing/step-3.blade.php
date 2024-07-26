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
     <!-- google map api link -->
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOvF8ud8JKn9fbI7I36Y_zzxGOTNc3ai4&sensor=false&libraries=places"></script>
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
                        <!-- <a href="{{url('list-my-place/step-2-new1')}}"></a> -->
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

   <section class="list_step_Main_3 bg__blue">
     <!--    <div class="title__block">
            <div class="container">
                <div class="titlestep">
                    <h3>Describe your place</h3>
                    <h2>What type of accommodation are you offering?</h2>
                </div>
            </div>
        </div> -->
        <div class="container">
            <div class="titlestep mt-5">
                <h3>Describe your place</h3>
                <h2>What type of accommodation are you offering?</h2>
            </div>
            <div class="stepthird">
                <form id="step-3-form" action="{{url('find-me-a-roomie/step-33')}}" method="post"> 
                     @csrf 
                <div class="stepradio">
                    <div class="row my-5">
                        <div class="col-md-8 m-auto">
                           
                            
                            <div class="stepform form-group">
                                <label class="titlestep">The Listing Address</label>
                                <input type="text" value="{{$data->property_address}}" name="property_address" id="property_address" class="form-control" placeholder="Address">
                                <input type="hidden" name="latitute" id="cityLat" >
                                <input type="hidden" name="longitute" id="cityLng" >

                            </div>
                            @error("property_address")
                            <div class="error"><p>{{$message}}</p></div>
                            @enderror

                            <!-- <div class="stepform form-group">
                                <label class="titlestep">Tell us a little about the room</label>
                                <input type="text" value="{{$data->room_description}}" name="room_description" id="room_description" class="form-control">
                            </div>
                            @error("room_description")
                            <div class="error"><p>{{$message}}</p></div>
                            @enderror -->

                            <div class="steptworadio" id="steptworadio">
                                <label class="titlestep">Type of Room</label>
                                <div id="radioset2" class="custumradiosettwo">
                                    <div class="cRadiosub">
                                        <input type="radio" {{$data->room_size=="Small" ?"checked" : ""}} id="radio21" value="Small" name="room_size" class="steprd">
                                        <label for="radio21">
                                           <span>Small Room</span> 
                                        </label>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" id="radio22" {{$data->room_size=="Medium" ?"checked" : ""}} value="Medium" name="room_size"  class="steprd">
                                        <label
                                            for="radio22">
                                          <span>Medium Room</span>
                                        </label>
                                    </div>

                                    
                                    <div class="cRadiosub">
                                        <input type="radio" id="radio23" {{$data->room_size=="Large" ?"checked" : ""}} value="Large" name="room_size"  class="steprd">
                                        <label
                                            for="radio23">
                                          <span>Large Room</span>
                                        </label>
                                    </div>
                                </div>

                               <!--  <span class="notestep">Including the one you're offering.</span> -->
                            </div>
                            @error("room_size")
                            <div class="error"><p>{{$message}}</p></div>
                            @enderror

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="steptworadio" id="steptworadio">
                                    <label class="titlestep">Number of Bedrooms</label>
                                    <!-- <div id="radioset2" class="custumradiosettwo">
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bedrooms=="2" ?"checked" : ""}} id="radio1" value="2" name="total_bedrooms" class="steprd">
                                            <label for="radio1">
                                               <span>2</span> 
                                            </label>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bedrooms=="3" ?"checked" : ""}} id="radio2"  value="3" name="total_bedrooms"  class="steprd">
                                            <label
                                                for="radio2">
                                              <span>3</span>
                                            </label>
                                        </div>

                                        
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bedrooms=="4" ?"checked" : ""}} id="radio3"  value="4" name="total_bedrooms"  class="steprd">
                                            <label
                                                for="radio3">
                                              <span>4</span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio"  {{$data->total_bedrooms=="5" ?"checked" : ""}} id="radio4"  value="5" name="total_bedrooms"  class="steprd">
                                            <label
                                                for="radio4">
                                              <span>5</span>
                                            </label>
                                        </div>

                                        
                                    </div>
                                    <span class="notestep">Including the one you're offering.</span> -->
                                    <div class="countArea__block">
                                        <a href="javascript:;" onclick="bedroomIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                       <!--  <span class="count" id="bedroomCount1">0</span> -->
                                        <input type="text" name="total_bedrooms" value="0" class="count" id="bedroomCount" />
                                        <a href="javascript:;" onclick="bedroomDecrease()" class=" button_mod" ><i class="fa fa-minus"></i></a>
                                    </div>
                                    </div>
                                    @error("total_bedrooms")
                                    <div class="error"><p>{{$message}}</p></div>
                                    @enderror
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="steptworadio" id="steptworadio">
                                    <label class="titlestep">Number of Bathrooms</label>
                                    <!-- <div id="radioset2" class="custumradiosettwo">
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bathrooms=="1" ?"checked" : ""}} id="radio6"  value="1" name="total_bathrooms" class="steprd">
                                            <label for="radio6">
                                               <span>1</span> 
                                            </label>
                                        </div>
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bathrooms=="2" ?"checked" : ""}} id="radio7"  value="2" name="total_bathrooms"  class="steprd">
                                            <label
                                                for="radio7">
                                              <span>2</span>
                                            </label>
                                        </div>

                                        
                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bathrooms=="3" ?"checked" : ""}} id="radio8"  value="3" name="total_bathrooms"  class="steprd">
                                            <label
                                                for="radio8">
                                              <span>3</span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" {{$data->total_bathrooms=="4" ?"checked" : ""}} id="radio9"  value="4" name="total_bathrooms"  class="steprd">
                                            <label
                                                for="radio9">
                                              <span>4</span>
                                            </label>
                                        </div>
                                    </div>
                                    <span class="notestep">Including the one you're offering.</span> -->
                                    <div class="countArea__block">
                                        <a href="javascript:;" onclick="bathroomIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                       <!--  <span class="count" id="bedroomCount1">0</span> -->
                                        <input type="text" name="total_bathrooms" value="0" class="count" id="bathroomCount" />
                                        <a href="javascript:;" onclick="bathroomDecrease()" class=" button_mod" ><i class="fa fa-minus"></i></a>
                                    </div>
                                    </div>

                                    @error("total_bathrooms")
                                    <div class="error"><p>{{$message}}</p></div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <div class="steptworadio">
                                        <label class="titlestep">Total number of Roommates </label>
                                        <div class="countArea__block">
                                        <a href="javascript:;" onclick="totalNumberOfRoommatesIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                       <!--  <span class="count" id="bedroomCount1">0</span> -->
                                        <input type="text" name="total_number_of_flatemates" value="0" class="count" id="totalNumberOfRoommatesCount" />
                                        <a href="javascript:;" onclick="totalNumberOfRoommatesDecrease()" class=" button_mod" ><i class="fa fa-minus"></i></a>
                                    </div>
                                        <!-- <div  class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==1 ? "checked" : ""}} value="1" id="radio11" name="total_number_of_flatemates" class="steprd">
                                                <label for="radio11">
                                                <span>1</span> 
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==2 ? "checked" : ""}} id="radio12" name="total_number_of_flatemates" value="2"  class="steprd">
                                                <label
                                                    for="radio12">
                                                <span>2</span>
                                                </label>
                                            </div>

                                            
                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==3 ? "checked" : ""}} id="radio13" name="total_number_of_flatemates" value="3"   class="steprd">
                                                <label
                                                    for="radio13">
                                                <span>3</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==4 ? "checked" : ""}} id="radio14" name="total_number_of_flatemates" value="4"  class="steprd">
                                                <label
                                                    for="radio14">
                                                <span>4</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==5 ? "checked" : ""}} id="radio15" name="total_number_of_flatemates" value="5"  class="steprd">
                                                <label
                                                    for="radio15">
                                                <span>5</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==6 ? "checked" : ""}} id="radio16" name="total_number_of_flatemates" value="6"  class="steprd">
                                                <label
                                                    for="radio16">
                                                <span>6</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" {{$data->total_number_of_flatemates==7 ? "checked" : ""}} id="radio17" name="total_number_of_flatemates" value="7"  class="steprd">
                                                <label
                                                    for="radio17">
                                                <span>7</span>
                                                </label>
                                            </div>
                                        </div>
                                        <span class="notestep"> </span> -->
                                    </div>
                                </div>
                                @error("total_number_of_flatemates")
                            <div class="error"><p>{{$message}}</p></div>
                            @enderror
                            </div>
                           

                            

                            <!-- <div class="stepform form-group">
                                <label class="titlestep">Parking</label>
                               <select name="parking" id="parking" class="form-control">
                               <option {{$data->parking=="0" ?"selected" : ""}} value="0">Select</option>
                               <option {{$data->parking=="No parking" ?"selected" : ""}} value="No parking">No parking</option>
                                   <option {{$data->parking=="On Street" ?"selected" : ""}} value="On Street">On Street parking</option>
                                   <option {{$data->parking=="Off Street" ?"selected" : ""}} value="Off Street">Off Street parking</option>
                                  
                               </select>
                            </div>
                            @error("parking")
                            <div class="error"><p>{{$message}}</p></div>
                            @enderror -->

                            <div class="steptworadio" id="steptworadio">
                                <label class="titlestep">Parking</label>
                                <div id="radioset2" class="custumradiosettwo">
                                    <div class="cRadiosub">
                                        <input type="radio" {{$data->parking=="Available on premises" ?"checked" : ""}} id="radio31" value="Available on premises" name="parking" class="steprd">
                                        <label for="radio31">
                                           <span>Available on premises</span> 
                                        </label>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" id="radio32" {{$data->parking=="Off street Parking" ?"checked" : ""}} value="Off street Parking" name="parking"  class="steprd">
                                        <label
                                            for="radio32">
                                          <span>Off street Parking</span>
                                        </label>
                                    </div>

                                    
                                    <div class="cRadiosub">
                                        <input type="radio" id="radio33" {{$data->parking=="No Parking" ?"checked" : ""}} value="No Parking" name="parking"  class="steprd">
                                        <label
                                            for="radio33">
                                          <span> No Parking </span>
                                        </label>
                                    </div>
                                </div>

                               <!--  <span class="notestep">Including the one you're offering.</span> -->
                            </div>

                            <div class="steptworadio" id="steptworadio">
                                <label class="titlestep">Public Transport Nearby</label>
                                <div id="radioset2" class="custumradiosettwo">
                                    <div class="cRadiosub">
                                        <input type="radio" {{$data->public_transport=="Train station" ?"checked" : ""}} id="radio35" value="Train station" name="public_transport" class="steprd">
                                        <label for="radio35">
                                           <span>Train station</span> 
                                        </label>
                                    </div>
                                    <div class="cRadiosub">
                                        <input type="radio" id="radio36" {{$data->public_transport=="Bus" ?"checked" : ""}} value="Bus" name="public_transport"  class="steprd">
                                        <label
                                            for="radio36">
                                          <span>Bus</span>
                                        </label>
                                    </div>
                                </div>

                               <!--  <span class="notestep">Including the one you're offering.</span> -->
                            </div>



                            <div class="stepform form-group">
                                <label class="titlestep">Internet</label>
                               <select name="internet" id="internet" class="form-control">
                                  
                                   
                               <option {{$data->internet=="0" ?"selected" : ""}} value="0">Select</option>
                               
                                   <option {{$data->internet=="Included in rent" ?"selected" : ""}} value="Included in rent">Included in rent</option>

                                   <option {{$data->internet=="Not included in rent" ?"selected" : ""}} value="Not included in rent">Not included in rent</option>

                                  
                                   <option {{$data->internet=="Not Available" ?"selected" : ""}} value="Not Available">Not Available</option> -->
                                 
                               </select>
                            </div>
                            @error("internet")
                            <div class="error"><p>{{$message}}</p></div>
                            @enderror

                            <input type="hidden" name="completed_step" value="3">
                            <input type="hidden" value="{{$data->id}}" name="_rowid" >


                            <div class="stepbutton">
                                <a href="{{url('find-me-a-roomie/4/'.encrypt(4))}}">
                                    <button>
                                        Next
                                    </button>
                                </a>

                                <a href="{{url('find-me-a-roomie/2/'.encrypt(202).'/'.$data->id)}}">Back</a> 
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
<script>
    function bedroomIncrease()
    {
        
        let counter=$("#bedroomCount").val();
        counter=parseInt(counter)+1;
        $("#bedroomCount").val(counter);
   

    }
    function bedroomDecrease()
    {
        let counter=$("#bedroomCount").val();
        if(counter!=0)
        {
            counter=parseInt(counter)-1;
            $("#bedroomCount").val(counter);
        }
        else
        {
            $("#bedroomCount").val(0);
        }
        
    }

    function bathroomIncrease()
    {
        
        let counter2=$("#bathroomCount").val();
        counter2=parseInt(counter2)+1;
        $("#bathroomCount").val(counter2);
   

    }
    function bathroomDecrease()
    {
        let counter2=$("#bathroomCount").val();
        if(counter2!=0)
        {
            counter2=parseInt(counter2)-1;
            $("#bathroomCount").val(counter2);
        }
        else
        {
            $("#bathroomCount").val(0);
        } 
    }

    function totalNumberOfRoommatesIncrease()
    {
        
        let counter2=$("#totalNumberOfRoommatesCount").val();
        counter2=parseInt(counter2)+1;
        $("#totalNumberOfRoommatesCount").val(counter2);
   

    }
    function totalNumberOfRoommatesDecrease()
    {
        let counter2=$("#totalNumberOfRoommatesCount").val();
        if(counter2!=0)
        {
            counter2=parseInt(counter2)-1;
            $("#totalNumberOfRoommatesCount").val(counter2);
        }
        else
        {
            $("#totalNumberOfRoommatesCount").val(0);
        } 
    }
</script>

<script>
    function initialize() {
        var options = {
            types: ["(cities)"],
            componentRestrictions: { country: "AUS" },
        };
        var input = document.getElementById("property_address");
        var autocomplete = new google.maps.places.Autocomplete(input, options);
        google.maps.event.addListener(autocomplete, "place_changed", function () {
            var place = autocomplete.getPlace();
            document.getElementById("property_address").value = place.name;
            document.getElementById("cityLat").value = place.geometry.location.lat();
            document.getElementById("cityLng").value = place.geometry.location.lng();
			change_map();
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);
</script> 