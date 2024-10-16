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
<section class="feature-categories find-block-main rec-pro padding-fit">
    <div class="">
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
            <div class="col-xl-6 col-lg-8 col-md-8 col-sm-12 mmmmmmmm">
                <div class="graphiccs">
                    <img src="{{url('public/images/Group_1000004874.png')}}">
                </div>
            </div>
        </div>
</section>
<section class="featured portfolio rec-pro disc featured__modify_nk bg-white " id="newfsafsf">
    <div class="padding-fit">
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
<section class="reviews__block mb-5">
    <div class="padding-fit leftside__box">
        <div class="review-row">
            <div class="text-section">
                <div class="text-area">
                    <p class="quote-text">After what felt like ages searching for a new place, <br>
                        I came across <span class="myfont">OkRoomie.com</span>. In just one week,<br>
                        I found my new home and amazing roommates.</p>
                    <a href="#" class="custom-btn">Find your perfect place →</a>
                </div>
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
    function scc()
    {
        $('html, body').animate({
                    scrollTop: $(".graphiccs").offset().top
                }, 20);
    }
    function paginatedata(page = 1, type = '') {
        $.post("{{route('paginate')}}", {
            page: page,
            type: type,
            _token: "{{csrf_token()}}"
        }, function(data) {
            $("#dataadll").html(data)
            if(type!=1)
        {
            scc()
        }
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
        paginatedata(1,1)
        PaginateCount(1,1)
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