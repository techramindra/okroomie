<div class="col-sm-4 mb-4">
    <div class="card h-100">
        <div class="imgc">
            <div id="carouselExampleControls<?php echo $key + 2; ?>" class="carousel slide" data-ride="carousel9">
                <div class="carousel-inner">
                    <?php
                        $i2 = 1;
                        $length2 = '';
                        $active2 = '';
                        foreach ($val['room_image'] as $room_imageVal2) {

                            $length2 = count($val['room_image']);
                            if ($i2 == $length2) {
                                $active2 = "active";
                            } else {
                                $active2 = '';
                            }
                    ?>
                    <div class="carousel-item <?php    echo $active2; ?>">
                        <div class="img_div"> <img class="card-img-top"
                                src="{{url('public/images/' . ($room_imageVal2['image'] != null ? $room_imageVal2['image'] : ''))}}"
                                alt="Card image cap" /> </div>
                    </div>
                    <?php  $i2++; } ?>
                </div>
                <button class="carousel-control-prev" type="button"
                    data-target="#carouselExampleControls<?php echo $key + 2; ?>" data-slide="prev"> <span
                        class="carousel-control-prev-icon" aria-hidden="true"></span> <span
                        class="sr-only">Previous</span> </button>
                <button class="carousel-control-next" type="button"
                    data-target="#carouselExampleControls<?php echo $key + 2; ?>" data-slide="next"> <span
                        class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span>
                </button>
            </div>
            <div class="like" id="likeroomie{{$val['id']}}">
                @if($val['like_status'] != 1)
                    <a href="javascript:;" id="notlikeheartroomie{{$val['id']}}" onclick="like('ROOMIE',1,{{$val['id']}})">
                        <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                @else
                    <a href="javascript:;" id="likeheartroomie{{$val['id']}}" onclick="like('ROOMIE',0,{{$val['id']}})"> <i
                            class="fa fa-heart" aria-hidden="true"></i> </a>
                @endif
            </div>
        </div>
        <div class="property-details">
            <div class="section-1 mt-2">
                <div class="price-container">
                    <span class="price">${{$val['weekely_rent']}} pw</span>
                    <span class="inc-bills">Bills {{$val['bills']}}</span>
                </div>
                <div class="message-btn-div">
                @php
                 $slug_string=$val['accomodation_type'].' '.$val['property_address'].' '.$val['id'].'
                '.'Ok'.$val['user_id'];
                $slug_array=explode(" ",$slug_string);
                $slug_array=array_filter($slug_array, fn($value) => !is_null($value) && $value !== '');
               
                $slug=implode("-",$slug_array);
                
                @endphp
                <a href="{{route('roomieDetailss',parameters: ['slug'=>$slug])}}"> <button class="message-btn">
                        <i class="fa fa-commenting-o"></i>Message</button></a>
                </div>
            </div>
            <div class="location-availability mt-2">
                <span class="location">{{$val['property_address']}}</span>
                <span class="availability">Available {{date('d M y',strtotime($val['date_available']))}}</span>
            </div>

            <div class="room-details mt-2">
                <div class="room-icon">
                    <i class="fa fa-bed"></i> {{$val['total_bedrooms']}} bed
                </div>
                <div class="room-icon">
                    <i class="fa fa-bath"></i> {{$val['total_bathrooms']}} bath
                </div>
                <div class="room-icon">
                    <i class="fa fa-users"></i> {{$val['total_number_of_flatemates']}} roomies
                </div>
            </div>
        </div>
    </div>
</div>