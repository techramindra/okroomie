@extends('layouts.frontendMaster')
@section('contents')

<style>
    section.varyfai {
        margin: 90px 0px;
        padding-top: 30px;
    }

    section.varyfai .idvarty {
        width: 50%;
    }

    section.varyfai .idvarty label {
        color: #2E3036;
        text-transform: capitalize;
        font-weight: 600;
    }

    .mainId h2 {
        color: #2E3036;
        text-transform: capitalize;
        font-weight: 700;
    }

    section.varyfai .idvarty {
        width: 50%;
        margin: auto;
        margin-top: 20px;
    }
    a:hover{
        text-decoration: none;
    }

   .australian.driver {
    display: block;
    width: -webkit-fill-available;
    background: transparent;
    padding: 8px 0px;
    border: 1px solid #ddd;
    text-transform: capitalize;
    font-weight: 500;
    text-decoration: none;
    outline: none;
}

a.australian.driver {
    text-align: center;
    color: gray;
}

#logo img {
    width: 200px;
    height: auto;
    transform: translate3d(0, 0, 0);
}
</style>



<section class="varyfai">

    <div class="container">
        <div class="mainId">
            <p>identity verifying?</p>
            <h2>what id are your verifying </h2>
            <p>step 1 of 3</p>
        </div>



        <div class="idvarty">
            <form>
            <div class="form-group">
            <label for="exampleInputEmail1">select id to verify</label>
                <a href="{{route('drivingLiscence')}}" class="australian driver">
                
                   australian driver licence

                   
                </a>
                </div>
                <a href="{{route('passport')}}" class="australian driver">
                   
                      australian passport


                   
                </a>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div>

    </div>


</section>



































@endsection('contents')