<div class="padding-fit xdstep-1">
    <div class="stepsecond mt-5">
        <form id="step-2" action="{{url('find-me-a-roomie/step-2')}}" method="post">
            @csrf
            <div class="stepradio">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Now Provide us with some of your room inclusions?</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(room_inclusions() as $key=> $icon)
                            <div class="col-md-6 mb-2">
                                <div class="cRadiosub">
                                    <input type="checkbox" class="steprd" id="radio{{$key}}" value="{{$key}}" name="kitchen[]">
                                    <label class="radio-btn checkbox-btn" for="radio{{$key}}">{!! $icon !!} &nbsp;{{$key}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                    <div class="lable-title">
                            <label class="titlestep">Tell us a bit about the room</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Bed size</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Bed_size() as $key1=> $Bed_size)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="radiBed_size{{$key1}}" value="{{$Bed_size}}" name="bedsize">
                                    <label class="radio-btn" for="radiBed_size{{$key1}}">{{$Bed_size}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Pets allowed</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Pets_allowed() as $key1=> $Pets_allowed)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="radiohouse_flate{{$key1}}" value="{{$Pets_allowed}}" name="pets">
                                    <label class="radio-btn" for="radiohouse_flate{{$key1}}">{{$Pets_allowed}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Pets preference</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Pets_preference() as $key1=> $Pets_preference)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="Pets_preference{{$key1}}" value="{{$Pets_preference}}" name="Pets_preference">
                                    <label class="radio-btn" for="Pets_preference{{$key1}}">{{$Pets_preference}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Mattress included with bed</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Mattress_included_with_bed() as $key1=> $Mattress_included_with_bed)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="Mattress_included_with_bed{{$key1}}" value="{{$Mattress_included_with_bed}}" name="mattress">
                                    <label class="radio-btn" for="Mattress_included_with_bed{{$key1}}">{{$Mattress_included_with_bed}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Bathroom</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Bathroom() as $key1=> $Bathroom)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="Bathroom{{$key1}}" value="{{$Bathroom}}" name="bathroom">
                                    <label class="radio-btn" for="Bathroom{{$key1}}">{{$Bathroom}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Room add-ons</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Room_add_ons() as $key=> $icon)
                            <div class="col-md-2 mb-2">
                                <div class="cRadiosub">
                                    <input type="checkbox" class="steprd" id="radio{{$key}}" value="{{$key}}" name="{{$key}}">
                                    <label class="radio-btn box-btn" for="radio{{$key}}">{!! $icon !!}</label>
                                </div>
                                <div class="sub-text">
                                {{$key}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    
                    
                   
                   
                    
                    
                    
                    <div class="col-md-12 mb-4">
                        <div class="stepbutton">
                            <button onclick="loadform(0)" type="button" class="back-button btn btn-default">Back</button>
                            <button onclick="loadform(2)" type="button" class="continue-button btn btn-default ml-3">Continue</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>