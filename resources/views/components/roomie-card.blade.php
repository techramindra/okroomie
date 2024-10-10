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
                        <div class="carousel-item <?php echo $active2; ?>">
                            <div class="img_div"> <img class="card-img-top"
                                    src="{{url('public/images/' . ($room_imageVal2['image'] != null ? $room_imageVal2['image'] : ''))}}"
                                    alt="Card image cap" /> </div>
                        </div>
                    <?php $i2++;
                    } ?>
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
            <!-- <div class="price2">{{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</div>
            <div class="price">
                <div class="icone_div1">
                    <a href=""> <i class="fa fa-link" aria-hidden="true"></i> </a>
                </div>
                <div class="icone_div1">
                    <a href=""> <i class="fa fa-video-camera" aria-hidden="true"></i> </a>
                </div>
                <div class="icone_div1">
                    <a href=""> <i class="fa fa-picture-o" aria-hidden="true"></i> </a>
                </div>
            </div> -->
        </div>
        {{-----
        <div class="card-body">
            <div class="name">
                @php
                $slug_string=$val['accomodation_type'].' '.$val['property_address'].' '.$val['id'].'
                '.'Ok'.$val['user_id'];
                $slug_array=explode(" ",$slug_string);
                $slug=implode("-",$slug_array);
                @endphp
                <div class="innercard-price">
                    <span>{{$val['weekely_rent']}}/Week</span>
    </div>
    <div class="innercardd-title">
        <h3>
            <a href="{{route('roomieDetailss',['slug'=>$slug])}}">{{$val['total_bedrooms']}} bedroom
                {{$val['accomodation_type']}}</a>
        </h3>
    </div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 8.4666665 8.4666669" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                    <g>
                        <g xmlns="http://www.w3.org/2000/svg" id="layer2">
                            <path id="path824" d="m4.2333334.26458337c-2.1887462 0-3.96875003 1.78000383-3.96875003 3.96875003 0 2.188746 1.78000383 3.9687499 3.96875003 3.9687499 2.188746 0 3.9687499-1.7800039 3.9687499-3.9687499 0-2.1887462-1.7800039-3.96875003-3.9687499-3.96875003zm0 .52916667c1.9027632 0 3.4416502 1.53681996 3.4416502 3.43958336 0 1.9027632-1.538887 3.4416502-3.4416502 3.4416502-1.9027634 0-3.43958336-1.538887-3.43958336-3.4416502 0-1.9027634 1.53681996-3.43958336 3.43958336-3.43958336zm-.0036169 1.32446696a.26460979.26460979 0 0 0 -.259933.2676839v.2227254c-.4272102.0801429-.7927162.3552394-.7927165.8319906 0 .3307291.1490956.5982189.3493328.753959s.4263305.2247926.624768.2909385c.1984375.066146.3697359.1293849.467155.2051552.097419.07577.1441772.1395265.1441772.337964 0 .4409723-1.0562663.4409723-1.0562663 0a.26464844.26464844 0 1 0 -.5291667 0c0 .4763793.3658309.7519969.7927165.8325075v.2216917a.26464844.26464844 0 1 0 .5291667 0v-.2216917c.426961-.080468.7932332-.3560628.7932332-.8325075 0-.3307292-.149612-.598219-.3498495-.7539591-.2002372-.1557401-.4263305-.2253093-.624768-.2914552-.1984375-.0661458-.3697359-.1288682-.467155-.2046385-.097419-.0757706-.1441772-.1395264-.1441772-.3379639.0000002-.4409718 1.0562663-.4409718 1.0562663 0a.2648417.2648417 0 1 0 .5296834 0c0-.4760347-.366396-.7508571-.7932332-.8314738v-.2232422a.26460979.26460979 0 0 0 -.2692342-.2676839z" fill="#626262" data-original="#626262" class=""></path>
                        </g>
                    </g>
                </svg> -->

</div>
<div class="locen mb-2">
    <a href=""> <span>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0"
                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                class="">
                <g>
                    <g xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m243.519 505.32c2.782 4.173 7.466 6.68 12.481 6.68s9.699-2.506 12.481-6.68c35.499-53.247 87.786-119.008 124.222-185.889 29.134-53.476 43.297-99.085 43.297-139.431 0-99.252-80.748-180-180-180s-180 80.748-180 180c0 40.346 14.163 85.955 43.297 139.431 36.409 66.83 88.796 132.752 124.222 185.889zm12.481-475.32c82.71 0 150 67.29 150 150 0 35.204-12.967 76.118-39.641 125.079-31.407 57.649-76.225 116.128-110.359 165.29-34.129-49.155-78.95-107.638-110.359-165.29-26.674-48.961-39.641-89.875-39.641-125.079 0-82.71 67.29-150 150-150z"
                            fill="#626262" data-original="#626262" class=""></path>
                        <path
                            d="m256 270c49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90 40.374 90 90 90zm0-150c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60z"
                            fill="#626262" data-original="#626262" class=""></path>
                    </g>
                </g>
            </svg>
            <span>{{$val['property_address']}}</span> </span>
    </a>
</div>
<div class="proinfo">
    <ul class="homes-list clearfix pb-3">
        <li class="the-icons">
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="#626262"
                    d="M6 17h1.5v-1.5h9V17H18v-4.15q0-.75-.413-1.338q-.412-.587-1.087-.862V9q0-.825-.587-1.413Q15.325 7 14.5 7h-5q-.825 0-1.412.587Q7.5 8.175 7.5 9v1.65q-.675.275-1.088.862Q6 12.1 6 12.85Zm3-6.5v-2h6v2ZM7.5 14v-1.15q0-.35.25-.6t.6-.25h7.3q.35 0 .6.25t.25.6V14ZM4 22q-.825 0-1.412-.587Q2 20.825 2 20V4q0-.825.588-1.413Q3.175 2 4 2h16q.825 0 1.413.587Q22 3.175 22 4v16q0 .825-.587 1.413Q20.825 22 20 22Zm0-2h16V4H4v16Zm0 0V4v16Z" />
            </svg> <span>{{$val['total_bedrooms']}}</span>
        </li>
        <li class="the-icons meiii"> <span>
                <i class="bi bi-building"></i>

                {{$val['total_bathrooms']}}
            </span> </li>
        <li class="the-icons">
            <!-- <i class="bi bi-calendar-check"></i> -->
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24"
                preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                <path fill="#626262"
                    d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z" />
                <path fill="#626262"
                    d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z" />
            </svg>
            <span> {{$val['date_available']}}</span>
        </li>
        <li class="the-icons" id="dctdtdd">
            <i class="bi bi-bookmark"></i>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15">
                                            <path fill="none" stroke="#626262" d="M2.5 3v3m0 2v3m0 2.5V15m10-1.5V15m-3-5.5a2 2 0 1 1 0-4a2 2 0 0 1 0 4Zm-8-9h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-11a1 1 0 0 1 1-1Z" />
                                        </svg>  -->
            <span>​{{$val['bond']}}</span>
        </li>
    </ul>
</div>
</div>
<div class="card-footer price-properties footer">
    <h3 class="title">
        <a href="#">
            <span class="mt-0"> Response rate: 100%</span>
        </a>
    </h3>
    <div class="compare"> <a href="{{route('roomieDetailss',['slug'=>$slug])}}" class="new_miss"> Message </a>
        <!-- <a href="#" title="Favorites"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
    </div>
</div> -------}}
<div class="property-details">
    <div class="section-1 mt-2">
        <div class="price-container">
            <span class="price">$500 pw</span>
            <span class="inc-bills">Inc. bills</span>
        </div>
        <div class="message-btn-div">
            <button class="message-btn">
            <i class="fa fa-commenting-o"></i>Message</button>
        </div>
    </div>



    <div class="location-availability mt-2">
        <span class="location">Belrose, Sydney</span>
        <span class="availability">Available 8 June 2025</span>
    </div>

    <div class="room-details mt-2">
        <div class="room-icon">
            <i class="fa fa-bed"></i> 1 bed
        </div>
        <div class="room-icon">
            <i class="fa fa-bath"></i> 2 bath
        </div>
        <div class="room-icon">
            <i class="fa fa-users"></i> 2 roomies
        </div>
    </div>
</div>




</div>
</div>