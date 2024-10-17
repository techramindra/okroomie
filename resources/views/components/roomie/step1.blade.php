<div class="padding-fit xdstep-1">
    <div class="stepsecond mt-5">
        <form id="step-1" action="{{url('find-me-a-roomie/step-2')}}" method="post">
            @csrf
            <div class="stepradio">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">The Listing Address</label>
                        </div>
                        <div class="stepform form-group">
                            <div class="input-clssss">
                                <i class="fa fa-map-marker"></i>
                                <input type="text" value="" name="property_address" id="property_address" class="form-control" placeholder="Enter Your Address">
                            </div>

                            <input type="hidden" name="latitute" id="cityLat">
                            <input type="hidden" name="longitute" id="cityLng">
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">What type of place would you like to list</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(place_type() as $key=> $place_type)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="radio{{$key}}" value="{{$place_type}}" name="accomodation_type">
                                    <label class="radio-btn" for="radio{{$key}}">{{$place_type}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Select your property</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(property_type() as $key1=> $property_type)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="radiohouse_flate{{$key1}}" value="{{$property_type}}" name="house_flate">
                                    <label class="radio-btn" for="radiohouse_flate{{$key1}}">{{$property_type}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Choose a title for your listing</label>
                        </div>
                        <div class="stepform form-group">
                            <select name="internet" id="internet" class="form-control select-form">
                                @foreach (your_listing() as $your_listing )
                                <option value="{{$your_listing}}">{{$your_listing}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Tell us a little bit about your home</label>
                        </div>
                        <div class="stepform form-group">
                            <div class="">
                                <textarea name="about_yourself" id="" rows="5" class="form-control select-form" placeholder="A brief description about your house ..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Type of Room</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Typeofroom() as $key1=> $Typeofroom)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="room_size{{$key1}}" value="{{$Typeofroom}}" name="room_size">
                                    <label class="radio-btn" for="room_size{{$key1}}">{{$Typeofroom}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="lable-title">
                                    <label class="titlestep">Number of Bedrooms</label>
                                </div>
                                <div class="countArea__block">
                                    <a href="javascript:;" onclick="bedroomIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>

                                    <input type="text" name="total_bedrooms" value="0" class="count" id="bedroomCount" />
                                    <a href="javascript:;" onclick="bedroomDecrease()" class=" button_mod"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="lable-title">
                                    <label class="titlestep">Number of Bathrooms</label>
                                </div>
                                <div class="countArea__block">
                                    <a href="javascript:;" onclick="bathroomIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                    <input type="text" name="total_bathrooms" value="0" class="count" id="bathroomCount" />
                                    <a href="javascript:;" onclick="bathroomDecrease()" class=" button_mod"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="lable-title">
                                    <label class="titlestep">Total number of Roommates</label>
                                </div>
                                <div class="countArea__block">
                                    <a href="javascript:;" onclick="totalNumberOfRoommatesIncrease()" class=" button_mod"><i class="fa fa-plus"></i></a>
                                    <!--  <span class="count" id="bedroomCount1">0</span> -->
                                    <input type="text" name="total_number_of_flatemates" value="0" class="count" id="totalNumberOfRoommatesCount" />
                                    <a href="javascript:;" onclick="totalNumberOfRoommatesDecrease()" class=" button_mod"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Parking</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Parking() as $key1=> $Parking)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="Parking{{$key1}}" value="{{$Parking}}" name="parking">
                                    <label class="radio-btn" for="Parking{{$key1}}">{{$Parking}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Public Transport Nearby</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Public_Transport() as $key1=> $Public_Transport)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="public_transport{{$key1}}" value="{{$Public_Transport}}" name="public_transport">
                                    <label class="radio-btn" for="public_transport{{$key1}}">{{$Public_Transport}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Internet</label>
                        </div>
                        <div class="stepform form-group">
                            <select name="internet" id="internet" class="form-control select-form">
                                @foreach (Internet() as $Internet )
                                <option value="{{$Internet}}">{{$Internet}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="stepbutton">
                            <!-- <button class="back-button btn btn-default">Back</button> -->
                            <button onclick="loadform(1)" type="button" class="continue-button btn btn-default">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>