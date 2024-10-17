<div class="padding-fit xdstep-1">
    <div class="stepsecond mt-5">
        <form id="step-2" action="{{url('find-me-a-roomie/step-2')}}" method="post">
            @csrf
            <div class="stepradio">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="lable-title small-title">
                            <label class="titlestep small-title">Roommate preference</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Roommate_preference() as $key1 => $Roommate_preference)
                            <div class="col-md-4 mb-2">
                                <div class="cRadiosub">
                                    <input type="radio" class="steprd" id="Roommate_preference{{$key1}}" value="{{$Roommate_preference}}"
                                        name="preferences_user">
                                    <label class="radio-btn" for="Roommate_preference{{$key1}}">{{$Roommate_preference}}</label>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 mb-4">
                        <div class="lable-title">
                            <label class="titlestep">Accommodation suitable for ?</label>
                        </div>
                        <div id="radioset" class="custumradiosetone row">
                            @foreach(Accommodation_suitable() as $key => $icon)
                            <div class="col-md-2 mb-2">
                                <div class="cRadiosub">
                                    <input type="checkbox" class="steprd" id="radio{{$key}}" value="{{$key}}"
                                        name="{{$key}}">
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
                            <button onclick="loadform(2)" type="button" class="back-button btn btn-default">Back</button>
                            <button type="button" class="continue-button btn btn-default ml-3">Preview</button>
                            <button type="submit" class="continue-button btn btn-default ml-3">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
