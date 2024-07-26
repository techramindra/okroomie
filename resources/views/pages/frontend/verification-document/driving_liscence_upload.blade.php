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
            <h2>australian driver licence</h2>
            <p>step 3 of 3</p>
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
            <form action="{{route('drivingLiscenceUpload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="573777377" required>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn continue">Upload</button>
            </form>
        </div>

    </div>


</section>



































@endsection('contents')