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

        button {
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
    margin: auto;
}
    </style>
</head>

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

        <section class="list_step_Main_3 bg__blue">

            <div class="container">
                <div class="titlestep mt-5">
                    <h3>Describe your place</h3>
                    <h2>What type of accommodation are you offering?</h2>
                </div>
                <div class="stepthird">
                <form id="step-1" action="{{route('roomieUpdate5view')}}" method="post">
                    <input type="hidden" name="id" value="{{encrypt($data->id)}}">


                    @csrf

                        <div class="stepradio">
                            <div class="row my-5">
                                <div class="col-md-8 m-auto">



                                    <div class="stepform form-group">
                                        <label class="titlestep">Weekly Rent</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" value="{{$data->weekely_rent}}" class="form-control" placeholder="" name="weekely_rent">
                                        </div>
                                        <p> <a href="https://www.consumer.vic.gov.au/housing/renting/rent-bond-bills-and-condition-reports/rent/rent-calculator">help me calculate my rent</a></p>

                                    </div>

                                    <div class="stepform form-group">
                                        <label class="titlestep">Bond</label>
                                        <select name="bond" id="" class="form-control">
                                        <option value="0" {{$data->bond==0 ? "selected" : ""}}>Select</option>
                                            <option value="None" {{$data->bond=="None" ? "selected" : ""}}>None</option>
                                            <option value="1 week" {{$data->bond=="1 week" ? "selected" : ""}}>1 week</option>
                                            <option value="2 weeks" {{$data->bond=="2 weeks" ? "selected" : ""}}>2 weeks</option>
                                            <option value="3 weeks" {{$data->bond=="3 weeks" ? "selected" : ""}}>3 weeks</option>
                                            <option value="4 weeks" {{$data->bond=="4 weeks" ? "selected" : ""}}>4 weeks</option>

                                        </select>
                                    </div>
                                    <div class="stepform form-group">
                                        <label class="titlestep">Minimum rental period </label>
                                        <select name="min_length_of_stay" id="" class="form-control">
                                        <option value="0" {{$data->min_length_of_stay=="0" ? "selected" : ""}}> Select </option>
                                            <option value="No Minimum stay" {{$data->min_length_of_stay=="No Minimum stay" ? "selected" : ""}}>No Minimum stay</option>
                                            <option value="1 week" {{$data->min_length_of_stay=="1 week" ? "selected" : ""}}>1 Week</option>
                                            <option value="2 weeks" {{$data->min_length_of_stay=="2 weeks" ? "selected" : ""}}>2 Weeks</option>
                                            <option value="1 month" {{$data->min_length_of_stay=="1 month" ? "selected" : ""}}>1 month</option>
                                            <option value="2 months" {{$data->min_length_of_stay=="2 months" ? "selected" : ""}}>2 months</option>
                                            <option value="3 months" {{$data->min_length_of_stay=="3 months" ? "selected" : ""}}>3 months</option>
                                            <option value="4 months" {{$data->min_length_of_stay=="4 months" ? "selected" : ""}}>4 months</option>
                                            <option value="6 months" {{$data->min_length_of_stay=="6 months" ? "selected" : ""}}>6 months</option>
                                            <option value="9 months" {{$data->min_length_of_stay=="9 months" ? "selected" : ""}}>9 months</option>
                                            <option value="12 months+" {{$data->min_length_of_stay=="12 months+" ? "selected" : ""}}>12 months+</option>

                                        </select>
                                    </div>

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Bathroom</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio6" name="bathroom" value="Shared" class="steprd" {{$data->bathroom=="Shared" ? "checked" : ""}}>
                                                <label for="radio6">
                                                    <span>Shared</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio7" name="bathroom" value="Own" class="steprd" {{$data->bathroom=="Own" ? "checked" : ""}}>
                                                <label for="radio7">
                                                    <span>Own</span>
                                                </label>
                                            </div>

                                            <div class="cRadiosub">
                                                <input type="radio" id="radio8" name="bathroom" value="Ensuite" class="steprd" {{$data->bathroom=="Ensuite" ? "checked" : ""}}>
                                                <label for="radio8">
                                                    <span>Ensuite</span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Type of Room</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio21" value="Small" name="room_size" class="steprd"  {{$data->room_size=="Small" ? "checked" : ""}}>
                                                <label for="radio21">
                                                    <span>Small Room</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio22" value="Medium" name="room_size" class="steprd" {{$data->room_size=="Medium" ? "checked" : ""}}>
                                                <label for="radio22">
                                                    <span>Medium Room</span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" id="radio23" value="Large" name="room_size" class="steprd" {{$data->room_size=="Large" ? "checked" : ""}}>
                                                <label for="radio23">
                                                    <span>Large Room</span>
                                                </label>
                                            </div>
                                        </div>

                                        <!--  <span class="notestep">Including the one you're offering.</span> -->
                                    </div>


                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Room Furnishing</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio55" value="Not Furnished" name="furniture" class="steprd" {{$data->furniture=="Not Furnished" ? "checked" : ""}}>
                                                <label for="radio55">
                                                    <span>Not Furnished</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio56" value="Furnished Fully" name="furniture" class="steprd" {{$data->furniture=="Furnished Fully" ? "checked" : ""}}>
                                                <label for="radio56">
                                                    <span>Furnished Fully</span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" id="radio57" value="Semi furnished" name="furniture" class="steprd" {{$data->furniture=="Semi furnished" ? "checked" : ""}}>
                                                <label for="radio57">
                                                    <span>Semi furnished</span>
                                                </label>
                                            </div>
                                        </div>

                                        <!--  <span class="notestep">Including the one you're offering.</span> -->
                                    </div>

                                 



                                    <div class="steptworadio" id="steptworadio">
                                        <label class="titlestep">Parking</label>
                                        <div id="radioset2" class="custumradiosettwo">
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio31" value="Available on premises" name="parking" class="steprd" {{$data->parking=="Available on premises" ? "checked" : ""}}>
                                                <label for="radio31">
                                                    <span>Available on premises</span>
                                                </label>
                                            </div>
                                            <div class="cRadiosub">
                                                <input type="radio" id="radio32" value="Off street Parking" name="parking" class="steprd" {{$data->parking=="Off street Parking" ? "checked" : ""}}>
                                                <label for="radio32">
                                                    <span>Off street Parking</span>
                                                </label>
                                            </div>


                                            <div class="cRadiosub">
                                                <input type="radio" id="radio33" value="No Parking" name="parking" class="steprd" {{$data->parking=="No Parking" ? "checked" : ""}}>
                                                <label for="radio33">
                                                    <span> No Parking </span>
                                                </label>
                                            </div>
                                        </div>

                                        <!--  <span class="notestep">Including the one you're offering.</span> -->
                                    </div>






                                    <button  value="submit" name="submit">Update</button>


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
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>
<script>
    function bedroomIncrease() {

        let counter = $("#bedroomCount").val();
        counter = parseInt(counter) + 1;
        $("#bedroomCount").val(counter);


    }

    function bedroomDecrease() {
        let counter = $("#bedroomCount").val();
        if (counter != 0) {
            counter = parseInt(counter) - 1;
            $("#bedroomCount").val(counter);
        } else {
            $("#bedroomCount").val(0);
        }

    }

    function bathroomIncrease() {

        let counter2 = $("#bathroomCount").val();
        counter2 = parseInt(counter2) + 1;
        $("#bathroomCount").val(counter2);


    }

    function bathroomDecrease() {
        let counter2 = $("#bathroomCount").val();
        if (counter2 != 0) {
            counter2 = parseInt(counter2) - 1;
            $("#bathroomCount").val(counter2);
        } else {
            $("#bathroomCount").val(0);
        }
    }

    function totalNumberOfRoommatesIncrease() {

        let counter2 = $("#totalNumberOfRoommatesCount").val();
        counter2 = parseInt(counter2) + 1;
        $("#totalNumberOfRoommatesCount").val(counter2);


    }

    function totalNumberOfRoommatesDecrease() {
        let counter2 = $("#totalNumberOfRoommatesCount").val();
        if (counter2 != 0) {
            counter2 = parseInt(counter2) - 1;
            $("#totalNumberOfRoommatesCount").val(counter2);
        } else {
            $("#totalNumberOfRoommatesCount").val(0);
        }
    }
</script>