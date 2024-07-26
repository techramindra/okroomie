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

section.new_about .main_burron {/* background: bisque; */margin-top: 20px;}

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

section.second {/* padding: 30px 70px; */}

.displayh {margin: 10px 0px;}

.mainjk {/* width: 100%; */}

.containt {/* text-align: justify; *//*padding-right: 5%;*/}

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
        .main_about {padding: 16px !important;}
        .about_banner h2 {
            font-size: 1.8rem;
        }
        section.new_about .main_burron button {
            font-size: 1rem;
        }
    }
    @media (max-width: 767px) {
        .main_about {padding: 16px !important;}
        .maint_b {margin-top: 20px;}
        .about_banner h2 {
            font-size: 1.5rem;
        }
        section.new_about .main_burron button {
            font-size: 0.8rem;
        }
    }
</style>
<main>
<section class="container-fluid new_about">

    <div class="row justify-content-center">
    <div class="col-md-11 col-sm-12">
    <div class="main_about p-5">
        <div class="about_banner row">
            <div class="jhhh col-md-6 col-sm-12">
                    <h2>Our Story, Our Values, Our Mission</h2>

            <div class="main_burron">

                <button>
                Find your Home
                </button>

                    </div>
                    </div>
                    <div class="maint_b col-md-6 col-sm-12">
            <img src="https://okroomie.com/public/assets/frontend/images/adout's.png" alt="">
            </div>
                </div>

            
    </div>
 </div> </div>
</section>


<section class="container-fluid py-5 text-justify">
<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12">
        <h2 class="mb-3">About us</h2>
        <p>OK Roomie is the biggest database for furnished apartment rentals. <br>

<b>we are an Australian business</b> ! <a href="">OKRoomie.com</a> is based in Melbourne, Australia.
<br>

Looking for share accommodation ? Ok Roomie has you covered! Whether you are looking for an apartment for rent in Melbourne or a house to rent in Brisbane, choose from Ok Roomie’s widest selection of properties to find your next home.</p>



       <p>Easily search the city you are searching accommodation in and hit search! Shared accommodation places with rental prices, amenities and different districts will be presented to you.
       <br>
From Europe to America, Australia to Asia we offer different types of furnished accommodations such as rooms, apartments, flats, houses, student residencies and studios.
<br>
Moving to a different city is always very challenging and the first and main step for the move is to find the perfect apartment. Because we know the hassle, we want to make this process easier for anyone who is searching for accommodation in a new city and want to offer a platform where anyone and everyone can compare apartments by rental price, by location, by furniture type and so on. Search and compare now with Nestpick!

Today, Flatsharing is a way of life for so many of us, across all generations. Almost half of 21-35 year olds rent privately, and a huge proportion of us live in flatshares. However, the 40+ age bracket is actually the fastest growing group in flatsharing.
<br>
As more of us rent for longer, we believe flatsharing can be a positive thing. And it all starts with people. Choosing a flatshare is not just about choosing a property to live in. It's about choosing a group of people to share part of your life with.
<br>
OkRoomie’s mission is to make that part of your life as good as it can be.</p>
    </div>
</div>

</section>
</main>
    @endsection('contents')