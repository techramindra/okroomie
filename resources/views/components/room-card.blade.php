<div class="col-sm-4 mb-4">
    <div class="card h-100">
        <div class="imgc">
            <div id="carouselExampleControls<?php echo $key + 1; ?>" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    $j = 1;
                    $length1 = '';
                    $active1 = '';
                    $count1 = '';
                    if ($val['user_images'] != null) {
                        $count1 = count($val['user_images']);
                    } else {
                        $count1 = 0;
                    }
                    if ($count1 > 0) {

                        foreach ($val['user_images'] as $user_imagesVal1) {

                            $length1 = count($val['user_images']);
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
                            <div class="img_div"> <img class="card-img-top" src="{{url('storage/app/'.($val['image']!=null ?$val['image'] : ''))}}" alt="Card image cap" /> </div>
                        </div>
                    <?php
                    }
                    ?>



                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls222" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls222" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </button>
            </div>
            <div class="like" id="likeroom{{$val['id']}}">
                @if($val['like_status']!=1)
                <a href="javascript:;" id="notlikeheartroom{{$val['id']}}" onclick="like('ROOM',1,{{$val['id']}})"> <i class="fa fa-heart-o" aria-hidden="true"></i> </a>
                @else
                <a href="javascript:;" id="likeheartroom{{$val['id']}}" onclick="like('ROOM',0,{{$val['id']}})"> <i class="fa fa-heart" aria-hidden="true"></i> </a>
                @endif
            </div>

            <!-- <div class="price2"> {{\Carbon\Carbon::parse($val['created_at'])->diffForHumans() }}</div> -->
            <!-- <div class="price">
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
        <div class="card-body">
            <div class="name">
                <h3>
                    <a href="{{route('roomDetailss',['id'=>$val['okroomie_id']])}}">{{$val['your_first_name']}}</a>
                </h3> <span>{{$val['age']}} year</span>
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
                        </svg> </span><span>Available {{$val['preferred_move_date']}}</span></a>
            </div>
            <div class="proinfo">
                <ul class="homes-list clearfix pb-3">
                    <li class="the-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="#626262" d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10s10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8s8 3.589 8 8s-3.589 8-8 8z" />
                            <path fill="#626262" d="M13 7h-2v5.414l3.293 3.293l1.414-1.414L13 11.586z" />
                        </svg> <span>{{$val['preferred_length_of_stay']}}</span>
                    </li>
                    <li class="the-icons meiii"> <span>

                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                                <path fill="#626262" d="M128 26a102 102 0 1 0 102 102A102.2 102.2 0 0 0 128 26Zm0 192a90 90 0 1 1 90-90a90.1 90.1 0 0 1-90 90Zm38-70a26.1 26.1 0 0 1-26 26h-6v10a6 6 0 0 1-12 0v-10h-18a6 6 0 0 1 0-12h36a14 14 0 0 0 0-28h-24a26 26 0 0 1 0-52h6V72a6 6 0 0 1 12 0v10h18a6 6 0 0 1 0 12h-36a14 14 0 0 0 0 28h24a26.1 26.1 0 0 1 26 26Z" />
                            </svg>
                            {{$val['weekely_budget']}}/Week
                        </span> </li>
                    <li class="the-icons">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                            <path fill="#626262" d="M8 2a1 1 0 1 1 0 2a1 1 0 0 1 0-2zm0-1a2 2 0 1 0 0 4a2 2 0 0 0 0-4zm1.23 4.49H6.77A1.77 1.77 0 0 0 5 7.26V9.9A1.06 1.06 0 0 0 6 11v2.33a1.2 1.2 0 0 0 1.2 1.2h1.6a1.2 1.2 0 0 0 1.2-1.24V11a1.06 1.06 0 0 0 1-1.1V7.26a1.77 1.77 0 0 0-1.77-1.77zM6 10V7.26a.76.76 0 0 1 .77-.77h2.46a.76.76 0 0 1 .77.77V10H9v3.31a.2.2 0 0 1-.2.2H7.2a.2.2 0 0 1-.2-.2V10H6z" />
                        </svg> <span>{{$val['gender']}}</span>
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
                <a href="#">
                    <span class="mt-0"> Response rate: 100%</span>
                </a>
            </h3>
            <div class="compare"> <a href="{{route('roomDetailss',['id'=>$val['okroomie_id']])}}" class="new_miss"> Message </a>
                <!-- <a href="#" title="Favorites"><i class="fa fa-heart-o" aria-hidden="true"></i></a> -->
            </div>
        </div>
    </div>
</div>