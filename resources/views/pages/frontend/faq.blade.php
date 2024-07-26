@extends('layouts.frontendMaster')
@section('contents')



<style>
    section#form {
        /*width: 100%;
        height: 100vh;
        background: white;
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
        /*background: white;
        margin: 120px;
        overflow: hidden;
        border-radius: 20px;
        width: 70%;
        box-shadow: rgb(60 64 67 / 30%) 0px 1px 2px 0px, rgb(60 64 67 / 15%) 0px 2px 6px 2px;*/
    }





    input {
       /* background: #F4F2FF;*/
        /* width: 87%; */
    }

    .mainform .form-group input {
        /*background: #F5F2FF !important;
        border: none !important;
        outline: none !important;
        border-radius: 30px !important;
        padding: 20px !important;*/
        /* width: 90% !important; */
       /* height: 50px !important;
        text-transform: capitalize;*/
    }

    .mainform .row .col-6 {
       /* text-align: left;*/
    }

    .mainform button.btn {
        /*width: 100%;
        background: #444444 !important;
        padding: 10px !important;
        border-radius: 30px;
        color: white;
        font-weight: 800;
        letter-spacing: 1px;
        font-size: 20px;*/
    }

    section.new_about {
       /* margin-top: 65px;
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
       /* width: 100%;
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
        width: fit-content;
        margin-top: 10px;
    }

    .MYGGGGGG div#search {

        /*margin-left: 180px;*/

    }

    li {
        margin-bottom: 10px;
    }

    .about_banner h2 {
        /*color: white;
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
        /*width: 50%;
        padding-bottom: 50px;*/
    }

    section.second {
       /* padding: 30px 70px;*/
    }

    .displayh {
        margin: 10px 0px;
    }

    .mainjk {
        /*width: 100%;
*/    }

    .containt {
       /* text-align: justify;
        padding-right: 5%;*/
    }

    .maint_b {
       /* background-size: contain;
        background-size: cover;
        background-repeat: no-repeat;
        width: 50%;
        height: auto;
        text-align: right;*/
    }

    .mainform textarea#exampleFormControlTextarea1 {
        /*background: #F5F2FF !important;
        height: 150px;
        resize: none;
        border: none;
        border-radius: 30px;
        text-transform: capitalize;*/
    }


    .mainform .col-12 form {
        /*padding: 35px 70px;*/
    }




    /* aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa */

    .accordion_one .panel-group {
    
    border: 1px solid #f1f1f1;
    margin-top:100px;
    
    
}

a:link {
    text-decoration: none
}

.accordion_one .panel {
    background-color: transparent;
    box-shadow: none;
    border-bottom: 0px solid transparent;
    border-radius: 0;
    margin: 0;
}

.accordion_one .panel-default {
    border: 0;
}

.accordion-wrap .panel-heading {
    padding: 0px;
    border-radius: 0px;
}

h4 {
    font-size: 18px;
    line-height: 24px;
}

.accordion_one .panel .panel-heading a.collapsed {
    color: #999999;
    display: block;
    padding: 12px 30px;
    border-top: 0px;
}

.accordion_one .panel .panel-heading a {
    display: block;
    padding: 12px 30px;
    background: #fff;
    color: #313131;
    border-bottom: 1px solid #f1f1f1;
}

.accordion-wrap .panel .panel-heading a {
    font-size: 14px;
}

.accordion_one .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 0;
    padding-top: 0;
    padding: 25px 30px 30px 35px;
    background: #fff;
    color: #999999;
}

.img-accordion {
    width: 81px;
    float: left;
    margin-right: 15px;
    display: block;
}

.accordion_one .panel .panel-heading a.collapsed:after {
    content: "\2b";
    color: #999999;
    background: #f1f1f1;
}

.accordion_one .panel .panel-heading a:after, .accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
   
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px;
}
.accordion_one .panel .panel-heading a:after {
    content: "\2212";
}

.accordion_one .panel .panel-heading a:after, .accordion_one .panel .panel-heading a.collapsed:after {
    font-family: 'FontAwesome';
    font-size: 15px;
    width: 36px;
    height: 48px;
    line-height: 48px;
    text-align: center;
    background: #F1F1F1;
    float: left;
    margin-left: -31px;
    margin-top: -12px;
    margin-right: 15px;
}

section#faq_form {
  /*  margin: 70px 0px;*/
}


section#faq_form button.btn.btn-link {
    background: #444444;
    color: white;
    text-decoration: none !important;
    font-size: 20px;
}
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
        section#faq_form button.btn.btn-link {
            font-size: 14px;
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
 </div> </div>

</section>





<section id="faq_form" class="container-fluid py-5 text-justify">
<div class="row justify-content-center">
    <div class="col-md-10 col-sm-12">
        <h2 class="mb-3 text-center">FAQS</h2>
    </div>
</div>
    <div class="container">
        <div class="ufaq">
        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>






  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #4
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree9" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #5
        </button>
      </h5>
    </div>
    <div id="collapseThree9" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>





  <div class="card">
    <div class="card-header" id="headingThree10">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree10" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #6
        </button>
      </h5>
    </div>
    <div id="collapseThree10" class="collapse" aria-labelledby="headingThree10" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
    </div>

</section>






























@endsection('contents')