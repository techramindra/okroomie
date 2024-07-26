@extends('layouts.frontendMaster')
@section('contents')
<style>
    /* section.new_about {
    margin-top: 90px;
    margin-left: 40px;
    margin-right: 40px;
} */
    /* section.new_about .main_about {
    width: 100%;

} */

    section.new_about .main_about {
        /* width: 100%;
   
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center top; */
        background: #C1BEAA;
        border-radius: 10px;
    }

    .about_banner {
        /* width: 100%;
    color: white;
    padding: 20px 30px; */
    }

    section.new_about .main_burron {
        /* background: bisque; */
        margin-top: 20px;
    }

    section.new_about .main_burron button {
        background: #444444;
        color: white;
        padding: 10px 20px;
        font-weight: 500;
        font-size: 20px;
        text-transform: capitalize;
        border-radius: 5px;
        border: none;
        outline: none;
        width: fit-content;
        margin-top: 10px;
    }

    .main_burron {
        /*  display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center; */
    }

    /* .about_banner h2 {color: white;line-height: 1.5;font-weight: 600;} */

    .about_banner {
        /* display: flex;
    justify-content: space-between; */
        align-items: center;
        /*  align-content: center; */
    }

    .jhhh {
        /*  width: 50%; */
        /* padding-bottom: 50px; */
    }

    section.second {
        /* padding: 30px 70px; */
    }

    .displayh {
        margin: 10px 0px;
    }

    .mainjk {
        /* width: 100%; */
    }

    .containt {
        /* text-align: justify; */
        /*padding-right: 5%;*/
    }

    /* .maint_b {
    background-size: contain;
    background-size: cover;
    background-repeat: no-repeat;
    width: 50%;
    height: auto;
    height: 340px !important;
    text-align: right;
} */
    /* .maint_b img {
    height: 100% !important;
} */

    @media (min-width: 768px) and (max-width: 1023px) {
        .main_about {
            padding: 16px !important;
        }

        .about_banner h2 {
            font-size: 1.8rem;
        }

        section.new_about .main_burron button {
            font-size: 1rem;
        }
    }

    @media (max-width: 767px) {
        .main_about {
            padding: 16px !important;
        }

        .maint_b {
            margin-top: 20px;
        }

        .about_banner h2 {
            font-size: 1.5rem;
        }

        section.new_about .main_burron button {
            font-size: 0.8rem;
        }
    }

    .col.mb-12.favi {
        text-align: center;
        margin: 8% 0%;
        left: 40%;
        background: #008fb49c;
    }

    .col.mb-12.favi h3 {
        color: #fff;
        margin: 5%;
    }
</style>
<section class="featured portfolio rec-pro disc featured__modify_nk">
    <div class="container-fluid">

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
            @if(!empty($data))
            @foreach($data as $key=>$val)
            @if($val['outputType']=="ROOM")

            <div class="col mb-4">
                <div class="card h-100">
                    <div class="imgc">
                        <div id="carouselExampleControls<?php echo $key + 1; ?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                <?php
                                $j = 1;
                                $length1 = '';
                                $active1 = '';
                                $count1 = '';
                                if ($val[0]['user_images'] != null) {
                                    $count1 = count($val[0]['user_images']);
                                } else {
                                    $count1 = 0;
                                }

                                if ($count1 > 0) {

                                    foreach ($val[0]['user_images'] as $user_imagesVal1) {

                                        $length1 = count($val[0]['user_images']);
                                        if ($j == $length1) {
                                            $active1 = "active";
                                        } else {
                                            $active1 = '';
                                        }
                                ?>

                                        <div class="carousel-item <?php echo $active1; ?>">
                                            <div class="img_div"> <img class="card-img-top" src="{{url('public/images/'.($user_imagesVal1['image']!=null ?$user_imagesVal1['image'] : ''))}}" alt="Card image cap" /> </div>
                                        </div>

                                    <?php $j++;
                                    } ?>

                                <?php
                                } else {

                                ?>

                                    <div class="carousel-item active">
                                        <div class="img_div"> <img class="card-img-top" src="{{url('storage/app/'.($val[0]['image']!=null ?$val[0]['image'] : ''))}}" alt="Card image cap" /> </div>
                                    </div>
                                <?php
                                }
                                ?>




                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls222" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </button>

                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls222" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </button>
                        </div>
                        <div class="like" id="likeroom{{$val[0]['id']}}">
                            @if($val['like_status']!=1)
                            <a href="javascript:;" id="notlikeheartroom{{$val[0]['id']}}" onclick="like('ROOM',1,{{$val[0]['id']}})"> <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                            @else
                            <a href="javascript:;" id="likeheartroom{{$val[0]['id']}}" onclick="like('ROOM',0,{{$val[0]['id']}})"> <i class="fa fa-heart" aria-hidden="true"></i> </a>
                            @endif

                        </div>

                        <div class="price2"> {{\Carbon\Carbon::parse($val[0]['created_at'])->diffForHumans() }}</div>
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
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="name">
                            <h3>
                                <a href="{{route('roomDetailss',['id'=>$val['okroomie_id']])}}">{{$val[0]['your_first_name']}}</a>
                            </h3> <span>{{$val[0]['age']}} year</span>
                        </div>
                        <div class="locen mb-2">
                            <a href=""> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path d="m243.519 505.32c2.782 4.173 7.466 6.68 12.481 6.68s9.699-2.506 12.481-6.68c35.499-53.247 87.786-119.008 124.222-185.889 29.134-53.476 43.297-99.085 43.297-139.431 0-99.252-80.748-180-180-180s-180 80.748-180 180c0 40.346 14.163 85.955 43.297 139.431 36.409 66.83 88.796 132.752 124.222 185.889zm12.481-475.32c82.71 0 150 67.29 150 150 0 35.204-12.967 76.118-39.641 125.079-31.407 57.649-76.225 116.128-110.359 165.29-34.129-49.155-78.95-107.638-110.359-165.29-26.674-48.961-39.641-89.875-39.641-125.079 0-82.71 67.29-150 150-150z" fill="#626262" data-original="#626262" class=""></path>
                                                <path d="m256 270c49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90 40.374 90 90 90zm0-150c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60z" fill="#626262" data-original="#626262" class=""></path>
                                            </g>
                                        </g>
                                    </svg> </span>
                                <span>Available {{$val[0]['preferred_move_date']}}</span>
                            </a>
                        </div>
                        <div class="proinfo">
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="#626262" d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8z" />
                                        <path fill="#626262" d="M13 7h-2v5.414l3.293 3.293l1.414-1.414L13 11.586z" />
                                    </svg> <span>{{$val[0]['preferred_length_of_stay']}}</span>
                                </li>
                                <li class="the-icons meiii"> <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                            <path fill="#626262" d="M128 26a102 102 0 1 0 102 102A102.2 102.2 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm38-70a26.1 26.1 0 0 1-26 26h-6v10a6 6 0 0 1-12 0v-10h-18a6 6 0 0 1 0-12h36a14 14 0 0 0 0-28h-24a26 26 0 0 1 0-52h6V72a6 6 0 0 1 12 0v10h18a6 6 0 0 1 0 12h-36a14 14 0 0 0 0 28h24a26.1 26.1 0 0 1 26 26Z" />
                                        </svg>
                                        {{$val[0]['weekely_budget']}}/Week
                                    </span> </li>
                                <li class="the-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                        <path fill="#626262" d="M8 2a1 1 0 1 1 0 2a1 1 0 0 1 0-2zm0-1a2 2 0 1 0 0 4a2 2 0 0 0 0-4zm1.23 4.49H6.77A1.77 1.77 0 0 0 5 7.26V9.9A1.06 1.06 0 0 0 6 11v2.33a1.2 1.2 0 0 0 1.2 1.2h1.6a1.2 1.2 0 0 0 1.2-1.24V11a1.06 1.06 0 0 0 1-1.1V7.26a1.77 1.77 0 0 0-1.77-1.77zM6 10V7.26a.76.76 0 0 1 .77-.77h2.46a.76.76 0 0 1 .77.77V10H9v3.31a.2.2 0 0 1-.2.2H7.2a.2.2 0 0 1-.2-.2V10H6z" />
                                    </svg> <span>{{$val[0]['gender']}}</span>
                                </li>
                                <li class="the-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <path fill="#626262" d="M16 32C7.125 32 0 24.776 0 16C0 7.125 7.125 0 16 0s16 7.125 16 16c0 8.776-7.125 16-16 16zm0-29.312c-7.328 0-13.318 5.984-13.318 13.313S8.672 29.319 16 29.319c7.328 0 13.318-5.99 13.318-13.318S23.328 2.688 16 2.688zm7.849 14.859H12.286a.927.927 0 0 1-.932-.917v-1.349c0-.521.411-.932.932-.932h11.661c.516 0 .927.417.927.932v1.339c-.099.516-.516.927-1.026.927zm-2.995-5.162H9.187a.925.925 0 0 1-.932-.917v-1.349c0-.417.417-.828.932-.828h11.661c.417 0 .828.417.828.828v1.339c0 .516-.411.927-.823.927zm-11.666 7.23h11.667c.516 0 .927.411.927.927v1.339a.928.928 0 0 1-.922.932H9.188c-.516-.104-.927-.516-.927-1.031v-1.344c-.005-.411.411-.823.927-.823z" />
                                    </svg> <span>web developer</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer price-properties footer">
                        <h3 class="title">
                            <a href="single-property-1.html">
                                <span class="mt-0"> Response rate: 100%</span>
                            </a>
                        </h3>
                        <div class="compare"> <a href="#" title="Compare" class="new_miss"> Message </a>
                            <!-- <a href="#" title="Favorites"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
            @else

            <div class="col mb-4">
                <div class="card h-100">
                    <div class="imgc">




                        <div id="carouselExampleControls<?php echo $key + 2; ?>" class="carousel slide" data-ride="carousel9">
                            <div class="carousel-inner">

                                <?php
                                $i2 = 1;
                                $length2 = '';
                                $active2 = '';
                                foreach ($val[0]['room_image'] as $room_imageVal2) {

                                    $length2 = count($val[0]['room_image']);
                                    if ($i2 == $length2) {
                                        $active2 = "active";
                                    } else {
                                        $active2 = '';
                                    }
                                ?>

                                    <div class="carousel-item <?php echo $active2; ?>">
                                        <div class="img_div"> <img class="card-img-top" src="{{url('public/images/'.($room_imageVal2['image']!=null ?$room_imageVal2['image'] : ''))}}" alt="Card image cap" /> </div>
                                    </div>

                                <?php $i2++;
                                } ?>



                            </div>
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls<?php echo $key + 2; ?>" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </button>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls<?php echo $key + 2; ?>" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </button>
                        </div>





                        <div class="like" id="likeroomie{{$val[0]['id']}}">
                            @if($val['like_status']!=1)
                            <a href="javascript:;" id="notlikeheartroomie{{$val[0]['id']}}" onclick="like('ROOMIE',1,{{$val[0]['id']}})"> <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                            @else
                            <a href="javascript:;" id="likeheartroomie{{$val[0]['id']}}" onclick="like('ROOMIE',0,{{$val[0]['id']}})"> <i class="fa fa-heart" aria-hidden="true"></i> </a>
                            @endif

                        </div>
                        <div class="price2">{{\Carbon\Carbon::parse($val[0]['created_at'])->diffForHumans() }}</div>
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
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="name">
                            @php
                            $slug_string=$val[0]['accomodation_type'].' '.$val[0]['property_address'].' '.$val[0]['id'].' '.'Ok'.$val[0]['user_id'];
                            $slug_array=explode(" ",$slug_string);
                            $slug=implode("-",$slug_array);
                            @endphp
                            <h3>
                                <a href="{{route('roomieDetailss',['slug'=>$slug])}}">{{$val[0]['total_bedrooms']}} bedroom {{$val[0]['accomodation_type']}}</a>
                            </h3> <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 8.4666665 8.4666669" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g xmlns="http://www.w3.org/2000/svg" id="layer2">
                                        <path id="path824" d="m4.2333334.26458337c-2.1887462 0-3.96875003 1.78000383-3.96875003 3.96875003 0 2.188746 1.78000383 3.9687499 3.96875003 3.9687499 2.188746 0 3.9687499-1.7800039 3.9687499-3.9687499 0-2.1887462-1.7800039-3.96875003-3.9687499-3.96875003zm0 .52916667c1.9027632 0 3.4416502 1.53681996 3.4416502 3.43958336 0 1.9027632-1.538887 3.4416502-3.4416502 3.4416502-1.9027634 0-3.43958336-1.538887-3.43958336-3.4416502 0-1.9027634 1.53681996-3.43958336 3.43958336-3.43958336zm-.0036169 1.32446696a.26460979.26460979 0 0 0 -.259933.2676839v.2227254c-.4272102.0801429-.7927162.3552394-.7927165.8319906 0 .3307291.1490956.5982189.3493328.753959s.4263305.2247926.624768.2909385c.1984375.066146.3697359.1293849.467155.2051552.097419.07577.1441772.1395265.1441772.337964 0 .4409723-1.0562663.4409723-1.0562663 0a.26464844.26464844 0 1 0 -.5291667 0c0 .4763793.3658309.7519969.7927165.8325075v.2216917a.26464844.26464844 0 1 0 .5291667 0v-.2216917c.426961-.080468.7932332-.3560628.7932332-.8325075 0-.3307292-.149612-.598219-.3498495-.7539591-.2002372-.1557401-.4263305-.2253093-.624768-.2914552-.1984375-.0661458-.3697359-.1288682-.467155-.2046385-.097419-.0757706-.1441772-.1395264-.1441772-.3379639.0000002-.4409718 1.0562663-.4409718 1.0562663 0a.2648417.2648417 0 1 0 .5296834 0c0-.4760347-.366396-.7508571-.7932332-.8314738v-.2232422a.26460979.26460979 0 0 0 -.2692342-.2676839z" fill="#626262" data-original="#626262" class=""></path>
                                    </g>
                                </g>
                            </svg><span>{{$val[0]['weekely_rent']}}/Week</span>
                        </div>
                        <div class="locen mb-2">
                            <a href=""> <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path d="m243.519 505.32c2.782 4.173 7.466 6.68 12.481 6.68s9.699-2.506 12.481-6.68c35.499-53.247 87.786-119.008 124.222-185.889 29.134-53.476 43.297-99.085 43.297-139.431 0-99.252-80.748-180-180-180s-180 80.748-180 180c0 40.346 14.163 85.955 43.297 139.431 36.409 66.83 88.796 132.752 124.222 185.889zm12.481-475.32c82.71 0 150 67.29 150 150 0 35.204-12.967 76.118-39.641 125.079-31.407 57.649-76.225 116.128-110.359 165.29-34.129-49.155-78.95-107.638-110.359-165.29-26.674-48.961-39.641-89.875-39.641-125.079 0-82.71 67.29-150 150-150z" fill="#626262" data-original="#626262" class=""></path>
                                                <path d="m256 270c49.626 0 90-40.374 90-90s-40.374-90-90-90-90 40.374-90 90 40.374 90 90 90zm0-150c33.084 0 60 26.916 60 60s-26.916 60-60 60-60-26.916-60-60 26.916-60 60-60z" fill="#626262" data-original="#626262" class=""></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <span>{{$val[0]['property_address']}}</span> </span>

                            </a>
                        </div>
                        <div class="proinfo">
                            <ul class="homes-list clearfix pb-3">
                                <li class="the-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="#626262" d="M6 17h1.5v-1.5h9V17H18v-4.15q0-.75-.413-1.338q-.412-.587-1.087-.862V9q0-.825-.587-1.413Q15.325 7 14.5 7h-5q-.825 0-1.412.587Q7.5 8.175 7.5 9v1.65q-.675.275-1.088.862Q6 12.1 6 12.85Zm3-6.5v-2h6v2ZM7.5 14v-1.15q0-.35.25-.6t.6-.25h7.3q.35 0 .6.25t.25.6V14ZM4 22q-.825 0-1.412-.587Q2 20.825 2 20V4q0-.825.588-1.413Q3.175 2 4 2h16q.825 0 1.413.587Q22 3.175 22 4v16q0 .825-.587 1.413Q20.825 22 20 22Zm0-2h16V4H4v16Zm0 0V4v16Z" />
                                    </svg> <span>{{$val[0]['total_bedrooms']}}</span>
                                </li>
                                <li class="the-icons meiii"> <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                            <path fill="#626262" d="M8 14c0-.55.45-1 1-1s1 .45 1 1s-.45 1-1 1s-1-.45-1-1zm4 1c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm-3-7.5c-1.76 0-3.22 1.31-3.46 3h6.93a3.52 3.52 0 0 0-3.47-3M12 6c2.76 0 5 2.24 5 5v1H7v-1c0-2.76 2.24-5 5-5zM9 18c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm5-14H4v16h16V4m0-2c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h16z" />
                                        </svg>
                                        {{$val[0]['total_bathrooms']}}
                                    </span> </li>
                                <li class="the-icons">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="#626262" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z" />
                                        <path fill="#626262" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z" />
                                    </svg> <span> {{$val[0]['date_available']}}</span>
                                </li>
                                <li class="the-icons" id="dctdtdd">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15">
                                        <path fill="none" stroke="#626262" d="M2.5 3v3m0 2v3m0 2.5V15m10-1.5V15m-3-5.5a2 2 0 1 1 0-4a2 2 0 0 1 0 4Zm-8-9h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-11a1 1 0 0 1 1-1Z" />
                                    </svg> <span>​
                                        {{$val[0]['bond']}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-footer price-properties footer">
                        <h3 class="title">
                            <a href="single-property-1.html">
                                <span class="mt-0"> Response rate: 100%</span>
                            </a>
                        </h3>
                        <div class="compare"> <a href="#" title="Compare" class="new_miss"> Message </a>
                            <!-- <a href="#" title="Favorites"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>

            @endif
            @endforeach
            @else
            <div class="col mb-12 favi">
                <h3>Sorry, You Currently Have No Favorites Saved.</h3>
            </div>
            @endif
        </div>
    </div>
</section>



























<script>
    function like(room_roomie, status, id) {
        $.post("{{route('roomRoomieLike')}}", {
            id: id,
            type: room_roomie,
            status: status,
            _token: "{{csrf_token()}}"
        }, function(data) {
            if (data != '') {
                if (data.find_me_a_room_id != null) {
                    if (data.status == 1) {


                        $("#likeroom" + id).html('<a href="javascript:;" id="likeheartroom' + data.find_me_a_room_id + '" onclick="like(\'' + room_roomie + '\',0,' + data.find_me_a_room_id + ')"> <i class="fa fa-heart" aria-hidden="true"></i> </a>');
                    } else {


                        $("#likeroom" + id).html('<a href="javascript:;" id="notlikeheartroom' + data.find_me_a_room_id + '" onclick="like(\'' + room_roomie + '\',1,' + data.find_me_a_room_id + ')"> <i class="fa fa-heart-o" aria-hidden="true"></i> </a>');
                    }
                } else {


                    if (data.status == 1) {

                        $("#likeroomie" + id).html('<a href="javascript:;" id="likeheartroomie' + data.find_me_a_roomie_id + '" onclick="like(\'' + room_roomie + '\',0,' + data.find_me_a_roomie_id + ')"> <i class="fa fa-heart" aria-hidden="true"></i> </a>');
                    } else {


                        $("#likeroomie" + id).html('<a href="javascript:;" id="notlikeheartroomie' + data.find_me_a_roomie_id + '" onclick="like(\'' + room_roomie + '\',1,' + data.find_me_a_roomie_id + ')"> <i class="fa fa-heart-o" aria-hidden="true"></i> </a>');
                    }
                }


            }


        });

    }
</script>

@endsection('contents')