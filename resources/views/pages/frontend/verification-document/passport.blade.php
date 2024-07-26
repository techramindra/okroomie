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

    #logo img {
        width: 200px;
        height: auto;
        transform: translate3d(0, 0, 0);
    }

    button.btn.continue {
        margin: auto;
        display: block;
        margin-top: 30px;
        color: white;
        text-transform: capitalize;
        padding: 10px 20px;
        font-weight: 700;
        background: #008FB4;
    }
</style>



<section class="varyfai">

    <div class="container">
        <div class="mainId">
            <p>identity verifying?</p>
            <h2>australian passport</h2>
            <p>step 2 of 3</p>
        </div>
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{$error}}
        </div>
        @endforeach
        @endif
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 10px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ session()->get('success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-top: 10px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {{ session()->get('error') }}
        </div>
        @endif



        <div class="idvarty">
            <form action="{{route('passportStore')}}" method="post">
                @csrf



                <div class="form-group">
                    <label for="exampleInputEmail1">passport number</label>
                    <input type="text" class="form-control" name="passport_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="573777377">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">family name</label>
                    <input type="text" class="form-control" name="family_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Family Name">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">first name</label>
                    <input type="text" name="first_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">other name <small>(if present)</small></label>
                    <input type="text" class="form-control" name="other_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Other Name">

                </div>



                <div class="form-group">
                    <label for="exampleInputEmail1">date of birth</label>
                    <input type="date" class="form-control" name="dob" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Australian Driver Licence">

                </div>


                <button type="submit" class="btn continue">continue</button>
            </form>
        </div>

    </div>


</section>



































@endsection('contents')