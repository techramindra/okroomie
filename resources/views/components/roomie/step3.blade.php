<div class="padding-fit xdstep-1">
    <div class="stepsecond mt-5">
        <form id="step-2" action="{{url('find-me-a-roomie/step-2')}}" method="post">
            @csrf
            <div class="stepradio">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Tell us a little about the bond, rent and utilities</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4 row">
                        <div class="col-sm-6">
                            <div class="lable-title">
                                <label class="titlestep small-title">The Listing Address</label>
                            </div>
                            <div class="stepform form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" value="200" class="form-control input-amout" placeholder="" name="weekely_rent">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="lable-title">
                                <label class="titlestep small-title">The Listing Address</label>
                            </div>
                            <div class="stepform form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" value="200" class="form-control" placeholder="" name="weekely_rent">
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Bills are</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Bills_are() as $key1 => $Bills_are)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="radiBed_size{{$key1}}" value="{{$Bills_are}}"
                                        name="bills">
                                    <label class="radio-btn" for="radiBed_size{{$key1}}">{{$Bills_are}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                            <div class="lable-title">
                                <label class="titlestep small-title">Available date</label>
                            </div>
                            <div class="stepform form-group">
                                <div class="input-group mb-3">
                                <input type="date" id="date-pickers" class="form-control input-amout" placeholder="" name="weekely_rent">
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text" id="custom-calendar-icon"><i class="fa fa-calendar"></i></span>
                                    </div> -->
                                    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Minimum rental period</label>
                        </div>
                        <div class="stepform form-group">
                            <select name="max_length_of_stay" id="max_length_of_stay" class="form-control select-form">
                                @foreach (Minimum_rental_period() as $Minimum_rental_period )
                                <option value="{{$Minimum_rental_period}}">{{$Minimum_rental_period}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Maximum rental period</label>
                        </div>
                        <div class="stepform form-group">
                            <select name="max_length_of_stay" id="max_length_of_stay" class="form-control select-form">
                                @foreach (Maximum_rental_period() as $Maximum_rental_period )
                                <option value="{{$Maximum_rental_period}}">{{$Maximum_rental_period}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Tell us a little about the roommates living on premises</label>
                        </div>
                        <div class="stepform form-group">
                            <div class="">
                                <textarea name="about_roommates" id="" rows="5" class="form-control select-form" placeholder="Select something about roomates..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="stepbutton">
                            <button onclick="loadform(1)" type="button" class="back-button btn btn-default">Back</button>
                            <button onclick="loadform(3)" type="button" class="continue-button btn btn-default ml-3">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
