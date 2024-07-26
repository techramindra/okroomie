@extends('layouts.frontendMaster')
@section('contents')



<style>
section#form {
    /*width: 100%;
    height: 100vh;
    background:white;
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    background-size: cover;

    background-repeat: no-repeat;
    background-position: top;*/
}
.mainform .row {
   /* display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    height: 100%;*/
}

.mainform {
   /* background: white;
    margin: 120px;
    overflow: hidden;*/
    border-radius: 20px;
   /* width: 70%;*/
    box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;
}





input {background: #F4F2FF;/* width: 87%; */}
.mainform .form-group input {
    background: #F5F2FF !important;
    border: none !important;
    outline: none !important;
    border-radius: 30px !important;
    /* padding: 20px !important; */
    /* width: 90% !important; */
    height: 50px !important;
    text-transform: capitalize;
}

.mainform .row .col-6 {text-align: left;}

.mainform button.btn {
    width: 100%;
    background: #444444 !important;
    padding: 10px !important;
    border-radius: 30px;
    color: white;
    font-weight: 800;
    letter-spacing: 1px;
    font-size: 20px;
}
section.new_about {
        /*margin-top: 65px;
        margin-left: 40px;
        margin-right: 40px;*/
    }

    section.new_about .main_about {
       /* width: 100%;*/

    }

    section.new_about .main_about {
       /* width: 100%;

        background-repeat: no-repeat;
        background-size: cover;
        background-position: center top;*/
        background: #C1BEAA;
        border-radius: 10px;
    }

    .about_banner {
        /*width: 100%;
        color: white;
        padding: 20px 30px;*/
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
    }

    .MYGGGGGG div#search {
   
    margin-left: 180px;
   
}

    li {
    margin-bottom: 10px;
}

    .about_banner h2 {
       /* color: white;
        line-height: 1.5;
        font-weight: 600;*/
    }

    .about_banner {
       /* display: flex;
        justify-content: space-between;*/
        align-items: center;
       /* align-content: center;*/
    }

    .jhhh {
       /* width: 50%;
        padding-bottom: 50px;*/
    }

    section.second {
        /*padding: 30px 70px;*/
    }

    .displayh {
        margin: 10px 0px;
    }

    .mainjk {
       /* width: 100%;*/
    }

    .containt {
       /* text-align: justify;
        padding-right: 5%;*/
    }

    .maint_b {
        /*background-size: contain;
        background-size: cover;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
        text-align: right;*/
    }

    .mainform textarea#exampleFormControlTextarea1 {
    background: #F5F2FF !important;
    height: 150px;
    resize: none;
    border: none;
    border-radius: 10px;
    text-transform: capitalize;
}


.mainform .col-12 form {
    /*padding: 35px 70px;*/
}
@media (min-width: 768px) and (max-width: 1023px) {
        .main_about {padding: 16px;}
        .about_banner h2 {
            font-size: 1.8rem;
        }
        section.new_about .main_burron button {
            font-size: 1rem;
        }
    }
    @media (max-width: 767px) {
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
                <h2>Finding you modern ways to move !</h2>

                <div class="main_burron">
                    <button>
                        Lorem, ipsum dolor.
                    </button>

                </div>
            </div>
            <div class="maint_b col-md-6 col-sm-12">
                <img src="https://okroomie.com/public/assets/frontend/images/formumesh.png" alt="">
            </div>
        </div>


    </div>
</div>
</div>

</section>
<section id="form">
  
    <div class="mainform container-fluid p-5">
        <div class="row justify-content-center">
            <!-- <div class="col-6">
              <div class="img_div">
              <img src="https://okroomie.com/public/assets/frontend/images/formumesh.png" alt="">
              </div>


            </div> -->
            <div class="col-lg-4 col-md-6 col-sm-12">

        
                <form>
                   
                <h2 style="text-align: center;">Contact Us</h2>
                <br>
                    <div class="form-group">

                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" your name">

                    </div>


                    <div class="form-group">

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" your email">

                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone number">
                    </div>

                    <div class="form-group">
   
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="your message"></textarea>
  </div>

                    <button type="submit" class="btn ">Send message <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="white" d="M5.694 12L2.299 3.27c-.236-.607.356-1.188.942-.981l.093.039l18 9a.75.75 0 0 1 .097 1.284l-.097.058l-18 9c-.583.291-1.217-.245-1.065-.848l.03-.095L5.694 12L2.299 3.27L5.694 12ZM4.402 4.54l2.61 6.71h6.627a.75.75 0 0 1 .743.648l.007.102a.75.75 0 0 1-.649.743l-.101.007H7.01l-2.609 6.71L19.322 12L4.401 4.54Z"/></svg></button>
                </form>
            </div>
        </div>
    </div>
</section>
</main>




































@endsection('contents')