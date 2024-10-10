@extends('layouts.frontendMaster')
@section('contents')
<!-- END HEADER SEARCH -->
@php
$free_plan_id = '';
if (!empty($plan)) {
foreach ($plan->plan_roomie as $vals) {
if (((($vals->title == 'free') || ($vals->title == 'Free')) && (($vals->price == '') || ($vals->price == 0)))) {
$free_plan_id = $vals->id;
}
}
}
@endphp
@include('layouts.center')
<section class="feature-categories find-block-main rec-pro">
    <div class="container-fluid">
        <div class="row" id="myhfg">
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 mmmmmmmm">
                <div class="topboxes mt-5 d-flex flex-wrap">
                    <div data-aos="fade-up" data-aos-delay="150" id="sandar">
                        <a href="{{url('find-me-a-roomie/index', ['rowid' => ''])}}">
                            <span class="text" id="unpold"> List your room</span>
                        </a>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="150">
                        <a href="{{url('find-me-a-room/index/')}}">
                            <span class="text" id="unpold2"> Find your room</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 mmmmmmmm" >
                <div class="graphiccs">
                <img src="{{url('public/images/Group_1000004874.png')}}">
                </div>
            </div>
        </div>

</section>
<!-- <div id="live_img" class="row">
    <div class="lkimg col-md-3 col-sm-6">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M19.2 7.253a3.136 3.136 0 0 1 6.22.803M37.642 25.05a2.9 2.9 0 0 1-.148 2.83a3.136 3.136 0 0 1-5.431 0M31.2 5.838a3.136 3.136 0 0 1 5.137 3.597m2.403 26.473a11.563 11.563 0 0 1-10.123 7.532a12.202 12.202 0 0 1-11.438-18.788" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" stroke-width=".971" d="M29.74 19.32a10.611 10.611 0 0 1 7.9 5.73" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M32.703 34.184a3.335 3.335 0 0 1 2.334-2.248a3.136 3.136 0 0 1 3.704 3.972m-6.038-1.724c-1.129 2.42-3.627 3.319-6.246 2.798a5.796 5.796 0 0 1-.491-11.25c2.564-.746 4.761-.164 6.096 2.148M31.2 5.838L17.18 24.651m12.56-5.331l6.596-9.885M15.425 29.021L19.2 7.253m5.125 7.81l1.095-7.008M9.397 18.908a3.136 3.136 0 1 1 5.721-2.57m.692 18.672L9.398 18.909m7.492 1.667l-1.772-4.239" />
        </svg>
        <h2 class="mb-0">Create free listing</h2>
    </div>
    <div class="lkimg col-md-3 col-sm-6">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M19.2 7.253a3.136 3.136 0 0 1 6.22.803M37.642 25.05a2.9 2.9 0 0 1-.148 2.83a3.136 3.136 0 0 1-5.431 0M31.2 5.838a3.136 3.136 0 0 1 5.137 3.597m2.403 26.473a11.563 11.563 0 0 1-10.123 7.532a12.202 12.202 0 0 1-11.438-18.788" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" stroke-width=".971" d="M29.74 19.32a10.611 10.611 0 0 1 7.9 5.73" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M32.703 34.184a3.335 3.335 0 0 1 2.334-2.248a3.136 3.136 0 0 1 3.704 3.972m-6.038-1.724c-1.129 2.42-3.627 3.319-6.246 2.798a5.796 5.796 0 0 1-.491-11.25c2.564-.746 4.761-.164 6.096 2.148M31.2 5.838L17.18 24.651m12.56-5.331l6.596-9.885M15.425 29.021L19.2 7.253m5.125 7.81l1.095-7.008M9.397 18.908a3.136 3.136 0 1 1 5.721-2.57m.692 18.672L9.398 18.909m7.492 1.667l-1.772-4.239" />
        </svg>
        <h2 class="mb-0">Quick and Easy</h2>
    </div>
    <div class="lkimg col-md-3 col-sm-6">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M19.2 7.253a3.136 3.136 0 0 1 6.22.803M37.642 25.05a2.9 2.9 0 0 1-.148 2.83a3.136 3.136 0 0 1-5.431 0M31.2 5.838a3.136 3.136 0 0 1 5.137 3.597m2.403 26.473a11.563 11.563 0 0 1-10.123 7.532a12.202 12.202 0 0 1-11.438-18.788" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" stroke-width=".971" d="M29.74 19.32a10.611 10.611 0 0 1 7.9 5.73" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M32.703 34.184a3.335 3.335 0 0 1 2.334-2.248a3.136 3.136 0 0 1 3.704 3.972m-6.038-1.724c-1.129 2.42-3.627 3.319-6.246 2.798a5.796 5.796 0 0 1-.491-11.25c2.564-.746 4.761-.164 6.096 2.148M31.2 5.838L17.18 24.651m12.56-5.331l6.596-9.885M15.425 29.021L19.2 7.253m5.125 7.81l1.095-7.008M9.397 18.908a3.136 3.136 0 1 1 5.721-2.57m.692 18.672L9.398 18.909m7.492 1.667l-1.772-4.239" />
        </svg>
        <h2 class="mb-0">Communicate freely via message, text or in app calls</h2>
    </div>
    <div class="lkimg col-md-3 col-sm-6">
        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="35" height="35" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M19.2 7.253a3.136 3.136 0 0 1 6.22.803M37.642 25.05a2.9 2.9 0 0 1-.148 2.83a3.136 3.136 0 0 1-5.431 0M31.2 5.838a3.136 3.136 0 0 1 5.137 3.597m2.403 26.473a11.563 11.563 0 0 1-10.123 7.532a12.202 12.202 0 0 1-11.438-18.788" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" stroke-width=".971" d="M29.74 19.32a10.611 10.611 0 0 1 7.9 5.73" />
            <path fill="none" stroke="#70bfd1" stroke-linecap="round" stroke-linejoin="round" d="M32.703 34.184a3.335 3.335 0 0 1 2.334-2.248a3.136 3.136 0 0 1 3.704 3.972m-6.038-1.724c-1.129 2.42-3.627 3.319-6.246 2.798a5.796 5.796 0 0 1-.491-11.25c2.564-.746 4.761-.164 6.096 2.148M31.2 5.838L17.18 24.651m12.56-5.331l6.596-9.885M15.425 29.021L19.2 7.253m5.125 7.81l1.095-7.008M9.397 18.908a3.136 3.136 0 1 1 5.721-2.57m.692 18.672L9.398 18.909m7.492 1.667l-1.772-4.239" />
        </svg>
        <h2 class="mb-0">Easy to use platform</h2>
    </div>
</div> -->
<!-- <section>
    <div class="iddex_s">
        <div class="posision-relativenk">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12" data-aos="fade-up" data-aos-delay="150">
                    <div class="m-banner">
                        <p>Help those in need of a home</p> <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contaner">
            <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="img "><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><g fill="none" stroke="#444" stroke-width="1.5"><path d="M20.485 3h-3.992l.5 5s1 1 2.5 1a3.23 3.23 0 0 0 2.139-.806a.503.503 0 0 0 .15-.465L21.076 3.5a.6.6 0 0 0-.591-.5Z"/><path d="m16.493 3l.5 5s-1 1-2.5 1s-2.5-1-2.5-1V3h4.5Z"/><path d="M11.993 3v5s-1 1-2.5 1s-2.5-1-2.5-1l.5-5h4.5Z"/><path d="M7.493 3H3.502a.6.6 0 0 0-.592.501L2.205 7.73a.504.504 0 0 0 .15.465c.328.29 1.061.806 2.138.806c1.5 0 2.5-1 2.5-1l.5-5Z"/><path d="M3 9v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9"/><path stroke-miterlimit="16" d="M14.833 21v-6a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v6"/></g></svg> </div>
                    <div class="cont">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="img "><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="#444" d="M441.884 109.647A32.029 32.029 0 0 0 415.669 96H48a32.036 32.036 0 0 0-32 32v248h41.082a67.982 67.982 0 0 0 133.836 0h122.164a67.982 67.982 0 0 0 133.836 0H496V194.521a23.886 23.886 0 0 0-4.338-13.763ZM180 128h144v96H180Zm-132 0h100v96H48Zm76 272a36 36 0 1 1 36-36a36.04 36.04 0 0 1-36 36Zm256 0a36 36 0 1 1 36-36a36.04 36.04 0 0 1-36 36Zm84-56h-19.006a68 68 0 0 0-129.988 0H188.994a68 68 0 0 0-129.988 0H48v-88h416Zm0-120H356v-96h59.669L464 197.043Z"/></svg> </div>
                    <div class="cont">
                        <h2>Lorem, ipsum dolor.</h2>
                        <p>Lorem ipsum dolor sit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
     </div> 
        </div>
</section> -->
<section class="featured portfolio rec-pro disc featured__modify_nk bg-white">
    <div class="container-fluid">
        <section id="card_new">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-3 " id="dataadll">

            </div>
        </section>
        <section class="pagination__block">
            <div class="inner__block_pagination">
                <ul id="pagination__block">

                </ul>
            </div>
        </section>
    </div>
</section>
{{----------
<section class="featured portfolio rec-pro disc featured__modify_nk second__bg_gray">
    <div class="container-fluid">
        <div class="sec-title discover">
            <h2>Discover popular listings</h2>
            <p>Find your next room mate right here.</p>
        </div>
        <section id="card_new">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4">
                @if(!empty($data))
                @foreach($data as $key5=>$val5)
                @if($val5['outputType']!="ROOM")
                <div class="col mb-4">
                    <div class="card h-100">
                        <div class="imgc">
                            <div id="carouselExampleControls<?php echo $key5 + 6; ?>" class="carousel slide"
                                data-ride="carousel9">
                                <div class="carousel-inner">
                                    <?php
                                    $i6 = 1;
                                    $length6 = '';
                                    $active6 = '';
                                    foreach ($val5['room_image'] as $room_imageVal6) {

                                        $length6 = count($val5['room_image']);
                                        if ($i6 == $length6) {
                                            $active6 = "active";
                                        } else {
                                            $active6 = '';
                                        }
                                    ?>
                                    <div class="carousel-item <?php echo $active6; ?>">
                                        <div class="img_div"> <img class="card-img-top"
                                                src="{{url('public/images/'.($room_imageVal6['image']!=null ?$room_imageVal6['image'] : ''))}}"
alt="Card image cap" /> </div>
</div>
<?php $i6++;
                                    } ?>
</div>
<button class="carousel-control-prev" type="button"
    data-target="#carouselExampleControls<?php echo $key5 + 6; ?>" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span
        class="sr-only">Previous</span> </button>
<button class="carousel-control-next" type="button"
    data-target="#carouselExampleControls<?php echo $key5 + 6; ?>" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
        class="sr-only">Next</span> </button>
</div>
<div class="like">
    <a href=""> <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
</div>
<div class="price2">{{\Carbon\Carbon::parse($val5['created_at'])->diffForHumans() }}</div>
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
    @php
    $slug_string6=$val['accomodation_type'].' '.$val5['property_address'].' '.$val5['id'].'
    '.'Ok'.$val5['user_id'];
    $slug_array6=explode(" ",$slug_string6);
    $slug6=implode("-",$slug_array6);
    @endphp
    <div class="name">
        <h3>
            <a href="{{route('roomieDetailss',['slug'=>$slug6])}}">{{$val5['total_bedrooms']}}
                bedroom {{$val5['accomodation_type']}}</a>
        </h3><svg xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
            width="24" height="24" x="0" y="0" viewBox="0 0 8.4666665 8.4666669"
            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
            <g>
                <g xmlns="http://www.w3.org/2000/svg" id="layer2">
                    <path id="path824"
                        d="m4.2333334.26458337c-2.1887462 0-3.96875003 1.78000383-3.96875003 3.96875003 0 2.188746 1.78000383 3.9687499 3.96875003 3.9687499 2.188746 0 3.9687499-1.7800039 3.9687499-3.9687499 0-2.1887462-1.7800039-3.96875003-3.9687499-3.96875003zm0 .52916667c1.9027632 0 3.4416502 1.53681996 3.4416502 3.43958336 0 1.9027632-1.538887 3.4416502-3.4416502 3.4416502-1.9027634 0-3.43958336-1.538887-3.43958336-3.4416502 0-1.9027634 1.53681996-3.43958336 3.43958336-3.43958336zm-.0036169 1.32446696a.26460979.26460979 0 0 0 -.259933.2676839v.2227254c-.4272102.0801429-.7927162.3552394-.7927165.8319906 0 .3307291.1490956.5982189.3493328.753959s.4263305.2247926.624768.2909385c.1984375.066146.3697359.1293849.467155.2051552.097419.07577.1441772.1395265.1441772.337964 0 .4409723-1.0562663.4409723-1.0562663 0a.26464844.26464844 0 1 0 -.5291667 0c0 .4763793.3658309.7519969.7927165.8325075v.2216917a.26464844.26464844 0 1 0 .5291667 0v-.2216917c.426961-.080468.7932332-.3560628.7932332-.8325075 0-.3307292-.149612-.598219-.3498495-.7539591-.2002372-.1557401-.4263305-.2253093-.624768-.2914552-.1984375-.0661458-.3697359-.1288682-.467155-.2046385-.097419-.0757706-.1441772-.1395264-.1441772-.3379639.0000002-.4409718 1.0562663-.4409718 1.0562663 0a.2648417.2648417 0 1 0 .5296834 0c0-.4760347-.366396-.7508571-.7932332-.8314738v-.2232422a.26460979.26460979 0 0 0 -.2692342-.2676839z"
                        fill="#626262" data-original="#626262" class=""></path>
                </g>
            </g>
        </svg><span>{{$val5['weekely_rent']}}/Week</span>
    </div>
    <div class="locen mb-2">
        <a href="">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    xmlns:svgjs="http://svgjs.com/svgjs" width="24" height="24" x="0" y="0"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                    xml:space="preserve" class="">
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
                </svg> </span>
            <span>{{$val5['property_address']}}</span>
        </a>
    </div>
    <div class="proinfo">
        <ul class="homes-list clearfix pb-3">
            <li class="the-icons">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24"
                    height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="#626262"
                        d="M6 17h1.5v-1.5h9V17H18v-4.15q0-.75-.413-1.338q-.412-.587-1.087-.862V9q0-.825-.587-1.413Q15.325 7 14.5 7h-5q-.825 0-1.412.587Q7.5 8.175 7.5 9v1.65q-.675.275-1.088.862Q6 12.1 6 12.85Zm3-6.5v-2h6v2ZM7.5 14v-1.15q0-.35.25-.6t.6-.25h7.3q.35 0 .6.25t.25.6V14ZM4 22q-.825 0-1.412-.587Q2 20.825 2 20V4q0-.825.588-1.413Q3.175 2 4 2h16q.825 0 1.413.587Q22 3.175 22 4v16q0 .825-.587 1.413Q20.825 22 20 22Zm0-2h16V4H4v16Zm0 0V4v16Z" />
                </svg> <span>{{$val5['total_bedrooms']}}</span>
            </li>
            <li class="the-icons meiii"> <span>
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                        width="24" height="24" preserveAspectRatio="xMidYMid meet"
                        viewBox="0 0 24 24">
                        <path fill="#626262"
                            d="M8 14c0-.55.45-1 1-1s1 .45 1 1s-.45 1-1 1s-1-.45-1-1zm4 1c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm-3-7.5c-1.76 0-3.22 1.31-3.46 3h6.93a3.52 3.52 0 0 0-3.47-3M12 6c2.76 0 5 2.24 5 5v1H7v-1c0-2.76 2.24-5 5-5zM9 18c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm3 0c.55 0 1-.45 1-1s-.45-1-1-1s-1 .45-1 1s.45 1 1 1zm5-14H4v16h16V4m0-2c1.1 0 2 .9 2 2v16c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h16z" />
                    </svg>
                    {{$val5['total_bathrooms']}}
                </span> </li>
            <li class="the-icons">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24"
                    height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                    <path fill="#626262"
                        d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z" />
                    <path fill="#626262"
                        d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z" />
                </svg> <span> {{$val5['date_available']}}</span>
            </li>
            <li class="the-icons" id="dctdtdd">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24"
                    height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 15 15">
                    <path fill="none" stroke="#626262"
                        d="M2.5 3v3m0 2v3m0 2.5V15m10-1.5V15m-3-5.5a2 2 0 1 1 0-4a2 2 0 0 1 0 4Zm-8-9h12a1 1 0 0 1 1 1v11a1 1 0 0 1-1 1h-12a1 1 0 0 1-1-1v-11a1 1 0 0 1 1-1Z" />
                </svg> <span>​
                    {{$val5['bond']}}</span>
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
    <div class="compare"> <a href="{{route('roomieDetailss',['slug'=>$slug6])}}"
            class="new_miss"> Message </a>
        <!-- <a href="#" title="Favorites"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
    </div>
</div>
</div>
</div>
@endif
@endforeach
@endif
</div>
<!-- <div class="row">
                    <div class="col-12 matches">
                        <button id="matches">View more matches</button>
                    </div>
                </div> -->
</section>

<section class="pagination__block">
    <div class="inner__block_pagination">
        <ul>
            <li> <a href="#">1</a> </li>
            <li> <a href="#">2</a> </li>
            <li> <a href="#">3</a> </li>
            <li> <a href="#" class="active_page">4</a> </li>
            <li> <a href="#">5</a> </li>
            <li> <a href="#">6</a> </li>
        </ul>
    </div>
</section>
</div>
</section> ------}}
<section class="reviews__block mb-5">
    <div class="container leftside__box">
        <div class="review-row">
            <div class="text-section">
                <p class="quote-text">After what felt like ages searching for a new place, <br>
                    I came across <span class="myfont">OkRoomie.com</span>. In just one week,<br>
                    I found my new home and amazing roommates.</p>
                <a href="#" class="custom-btn">Find your perfect place →</a>
            </div>
            <div class="image-section">
                <img src="{{url('public/assets/frontend/images/pending-work.png')}}" alt="Image description">
            </div>
        </div>
    </div>
</section>



@endsection('contents')
@push('carousel_script')
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    function like(room_roomie, status, id) {
        if ("{{Auth::check()}}") {
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

        } //authenticated user
        else {
            alert('Login First');
        }

    }
</script>
<script>
    function paginatedata(page = 1, type = '') {
        $.post("{{route('paginate')}}", {
            page: page,
            type: type,
            _token: "{{csrf_token()}}"
        }, function(data) {
            $("#dataadll").html(data)
        });
    }

    function PaginateCount(page = 1, type = '') {
        $.post("{{route('PaginateCount')}}", {
            page: page,
            type: type,
            _token: "{{csrf_token()}}"
        }, function(data) {
            $("#pagination__block").html(data)
            fetchdata()
        });
    }
    $(document).ready(function() {
        paginatedata()
        PaginateCount()
    })

    function fetchdata() {
        $(".paginate").click(function() {
            page = $(this).attr('page')
            paginatedata(page)
            PaginateCount(page)
        })
    }
</script>
@endpush