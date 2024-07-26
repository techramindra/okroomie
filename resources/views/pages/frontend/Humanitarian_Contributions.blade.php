@extends('layouts.frontendMaster')
@section('contents')


<style>
    section.new_about {
        margin-top: 65px;
        margin-left: 40px;
        margin-right: 40px;
    }

    section.new_about .main_about {
        width: 100%;

    }

    section.new_about .main_about {
        width: 100%;

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center top;
        background: #C1BEAA;
        border-radius: 10px;
    }

    .about_banner {
        width: 100%;
        color: white;
        padding: 20px 30px;
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
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
    }

    .about_banner h2 {
        color: white;
        line-height: 1.5;
        font-weight: 600;
    }

    .about_banner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        align-content: center;
    }

    .jhhh {
        width: 50%;
        padding-bottom: 50px;
    }

    section.second {
        padding: 30px 70px;
    }

    .displayh {
        margin: 10px 0px;
    }

    .mainjk {
        width: 100%;
    }

    .containt {
        text-align: justify;
        padding-right: 5%;
    }

    .maint_b {
        background-size: contain;
        background-size: cover;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
        text-align: right;
    }


    section#bag {
    margin: 30px 40px;
}

section#bag h2 {
    margin: 20px 0px;
}

section#bag p {
    width: 95%;
    text-align: justify;
}


section#bag h2 {
    font-family: 'Montserrat', sans-serif;
    color: #222;
    font-size: 1.5rem;
    font-weight: 800;
    text-transform: uppercase;
}

</style>

<section class="new_about">


    <div class="main_about">
        <div class="about_banner">
            <div class="jhhh">
                <h2>Volunteer and help make a difference</h2>

                <div class="main_burron">

                    <button>
                        Find your Home
                    </button>

                </div>
            </div>
            <div class="maint_b">
                <img src="https://okroomie.com/public/assets/frontend/images/bande he ham rab ke.png" alt="">
            </div>
        </div>


    </div>

</section>



<section id="bag">

<h2 style="text-align: center;">humanitarian Contributions</h2>


    <p>Following the escalation in Afghanistan and Ukraine, OkRoomie team have decided to assist people in need by offering to assist those who would like to offer their home during emergency situations.

    </p>

<p>There are many different charities and organizations that work to provide refugees a home such as VolunteerMatch, Integrated Refugee and Immigrant Services and World Relief. Through these organizations, you can fill out a form and get matched up with a refugee or refugees who need a place to call home in the mean time.</p>


<p>
The OkRoomie team are currently working on a process to help assist those in need of a home. We will continue to update any new changes on this page as soon as we have finalized our process.</p>


<p>
In the mean time you may contact okroomie.com team by emailing us on support@okroomie.com</p>
</section>



































@endsection('contents')