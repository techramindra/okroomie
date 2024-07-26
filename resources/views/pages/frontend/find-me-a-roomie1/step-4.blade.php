<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Okroomie</title>
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('public/assets/frontend/list-my-place/css/stylenew.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://use.fontawesome.com/c03345a92c.js"></script>
    <style>
        .error p {
            color: red;
        }
    </style>
</head>
<style type="text/css">
    .xdstep-1 .cRadiosub {
        width: 20%;
        text-align: center;
        padding: 0 5px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .xdstep-1 .cRadiosub .ui-checkboxradio-label {
        margin: 0 auto 10px;
        font-size: 25px;
    }

    .xdstep-1 .cRadiosub span {
        height: 50px;
        display: block;
    }

    .custumradiosettwo .cRadiosub {
        width: 50%;
        padding: 0;
    }

    .xdstep-1 .cRadiosub span {
        height: unset;
        margin: 0;
    }

    .custumradiosettwo .cRadiosub .ui-checkboxradio-label {
        margin: 0;
        font-size: 17px;
    }



    .col-12.kjas .main__contact input:checked+.bglk {
        background-color: #45bec56e;


    }

    .col-12.kjas .main__contact input[type="checkbox"] {
        display: none;
    }

    .bglk {
        padding: 5px 34px;
    border-radius: 30px;
    }

    button {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
    outline: none;
    width: fit-content;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5rem;
    border: 0.0625rem solid #6e6658;
    background-color: #6e6658;
    color: rgb(255, 255, 255);
    border-radius: 8px;
    padding: calc(0.6875rem) 1.5rem;
    cursor: pointer;
    margin: auto;
}

    .bglk i.fa::before {

        content: "\f05d";
    font-family: 'FontAwesome';
    position: absolute;
    top: -23px;
    right: 6px;
    display: none;
}

.bglk i.fa {
    position: relative;
}


.col-12.kjas .main__contact input:checked+.bglk i.fa::before {
  
display: block;
}
</style>

<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                    
                    </div>
                    <div class="logo">
                        <a href="#">
                            <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="">Close</a>
                    </div>
                </div>
            </div>
        </header>


        <section class="bg__blue">
            <div class="container">
                <div class="stepthird mt-5">
                    <div class="titlestep mb-4">
                        <h3>About your home</h3>
                        <h2>Now Provide us with some of your room inclusions?</h2>
                    </div>
                    <br>
                    <form id="step-1" action="{{route('roomieUpdate4view')}}" method="post">
                    <input type="hidden" name="id" value="{{encrypt($data->id)}}">


                    @csrf
                      
                        <div class="row">

                            <div class="col-12  kjas">

                                <div class="main_data">


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="kitchen" value="1" {{$data->kitchen==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                                <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><rect x="0" y="0" width="32" height="32" fill="none" stroke="none" /><path fill="#797875" d="M22.406 4L17.78 8.594c-1.152 1.153-1.152 3.065 0 4.22L16 14.56l-1.28-1.28l-7.5-7.5l-.72-.688l-.72.687a4.569 4.569 0 0 0 0 6.44l6.282 6.28l-7.78 7.78l1.437 1.44l7.78-7.782l1.188 1.156l.718.718l.688-.718l1.78-1.782l8.407 8.407l1.44-1.44l-9.126-9.093L17.437 16l1.75-1.78h.032l.03.03c1.158 1.1 3.02 1.105 4.156-.03l.094-.126l4.5-4.5l-1.406-1.406L22 12.78c-.435.436-.937.445-1.375.033l5.28-5.313L24.5 6.094l-5.313 5.28c-.412-.437-.403-.94.032-1.374l4.593-4.594L22.405 4zM6.78 8.22l9.69 9.686l-1.064 1.063l-8.187-8.19c-.742-.74-.764-1.676-.44-2.56z"/></svg></span>
                                                <span>kitchen</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" >
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#797875" d="m20.772 10.156l-1.368-4.105A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.105A2.003 2.003 0 0 0 2 12v5c0 .753.423 1.402 1.039 1.743c-.013.066-.039.126-.039.195V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.062c0-.069-.026-.13-.039-.195A1.993 1.993 0 0 0 22 17v-5c0-.829-.508-1.541-1.228-1.844zM4 17v-5h16l.002 5H4zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6z"/><circle cx="6.5" cy="14.5" r="1.5" fill="#797875"/><circle cx="17.5" cy="14.5" r="1.5" fill="#797875"/></svg></span>
                                                <span>free parking on premises</span>
                                            </div>
                                        </label>
                                    </div>



                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="tv" value="1" {{$data->tv==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512"><rect x="0" y="0" width="640" height="512" fill="none" stroke="none" /><path fill="#797875" d="M512 448H127.1c-16.8 0-31.1 14.3-31.1 31.1s14.3 32.9 31.1 32.9h384c18.6 0 32.9-14.3 32.9-32s-14.3-32-32-32zM592 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h544c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h512v288z"/></svg></span>
                                                <span>40" HDTV with Netflix</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">
                                        <label>
                                            <input type="checkbox" name="dryer" value="1" {{$data->dryer==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none" /><g fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path d="m19.193 21.544l2.319 18.552a3.473 3.473 0 0 1-6.892.862l-2.374-18.99"/><path d="M13 4a9 9 0 0 0 0 18c1.578 0 3.74-.175 6.193-.456l12.403-2.022L44 17.5v-9L28.5 6.25L13 4Zm24 4.2v9.6m7-.3l-12.404 2.022M44 8.5L28.5 6.25"/><path d="M16 13a3 3 0 1 1-6 0a3 3 0 0 1 6 0Z"/></g></svg></span>
                                                <span>dryer</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="microwave" value="1"  {{$data->microwave==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none" /><g fill="none"><rect width="40" height="30" x="4" y="6" stroke="#797875" stroke-width="4" rx="2"/><path stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M38 15h-4m4 6h-4m-24-6h17v12H10z"/><circle cx="36" cy="27" r="2" fill="#797875"/><path stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M12 36v6m24-6v6"/></g></svg></span>
                                                <span>microwave</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="balcony" {{$data->balcony==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#797875" d="M20 14.27V10c0-4.42-3.58-8-8-8s-8 3.58-8 8v4.27c-.6.34-1 .99-1 1.73v4c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-4c0-.74-.4-1.39-1-1.73zM7 20H5v-4h2v4zm4 0H9v-4h2v4zm0-6H6v-4c0-2.97 2.16-5.44 5-5.92V14zm2-9.92A6 6 0 0 1 18 10v4h-5V4.08zM15 20h-2v-4h2v4zm4 0h-2v-4h2v4zM8 11c0-.55.45-1 1-1s1 .45 1 1s-.45 1-1 1s-1-.45-1-1zm8 0c0 .55-.45 1-1 1s-1-.45-1-1s.45-1 1-1s1 .45 1 1z"/></svg></span>
                                                <span>balcony/ outdoor area</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="big_yard_space" {{$data->big_yard_space==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#797875" d="M12 19q2.125 0 3.725-1.288q1.6-1.287 2.1-3.237q.15-.6-.275-1.025q-.425-.425-1.025-.275q-1.95.5-3.237 2.1Q12 16.875 12 19Zm0 0q0-2.125-1.287-3.725q-1.288-1.6-3.238-2.1q-.6-.15-1.025.275q-.425.425-.275 1.025q.5 1.95 2.1 3.237Q9.875 19 12 19Zm0-5.05q.65 0 1.1-.45q.45-.45.45-1.1v-.15q.2.15.413.225q.212.075.487.075q.65 0 1.1-.45q.45-.45.45-1.1q0-.5-.238-.875q-.237-.375-.662-.525q.425-.15.662-.525Q16 8.7 16 8.2q0-.65-.45-1.1q-.45-.45-1.1-.45q-.275 0-.487.075q-.213.075-.413.225V6.8q0-.65-.45-1.1q-.45-.45-1.1-.45q-.65 0-1.1.45q-.45.45-.45 1.1v.15q-.2-.15-.412-.225q-.213-.075-.488-.075q-.65 0-1.1.45Q8 7.55 8 8.2q0 .5.238.875q.237.375.662.525q-.425.15-.662.525Q8 10.5 8 11q0 .65.45 1.1q.45.45 1.1.45q.275 0 .488-.075q.212-.075.412-.225v.15q0 .65.45 1.1q.45.45 1.1.45Zm0-2.8q-.65 0-1.1-.438q-.45-.437-.45-1.112q0-.65.45-1.1q.45-.45 1.1-.45q.65 0 1.1.45q.45.45.45 1.1q0 .675-.45 1.112q-.45.438-1.1.438ZM4 22q-.825 0-1.412-.587Q2 20.825 2 20V4q0-.825.588-1.413Q3.175 2 4 2h16q.825 0 1.413.587Q22 3.175 22 4v16q0 .825-.587 1.413Q20.825 22 20 22Zm0-2h16V4H4v16Zm0 0V4v16Z"/></svg></span>
                                                <span>big yard space</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="air_conditioner" {{$data->air_conditioner==1 ?"checked" : ""}} >
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M22 3.6V11H2V3.6a.6.6 0 0 1 .6-.6h18.8a.6.6 0 0 1 .6.6ZM18 7h1M2 11l.79 2.584A2 2 0 0 0 4.702 15H6m16-4l-.79 2.584A2 2 0 0 1 19.298 15H18m-8.5-.5s0 7-3.5 7m8.5-7s0 7 3.5 7m-6-7v7"/></svg></span>
                                                <span>air conditioner</span>
                                            </div>
                                        </label>
                                    </div>

                                </div>

                                <div class="main_data2">


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="wifi" value="1" {{$data->wifi==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#797875" d="M12 6c3.537 0 6.837 1.353 9.293 3.809l1.414-1.414C19.874 5.561 16.071 4 12 4c-4.071.001-7.874 1.561-10.707 4.395l1.414 1.414C5.163 7.353 8.463 6 12 6zm5.671 8.307c-3.074-3.074-8.268-3.074-11.342 0l1.414 1.414c2.307-2.307 6.207-2.307 8.514 0l1.414-1.414z"/><path fill="#797875" d="M20.437 11.293c-4.572-4.574-12.301-4.574-16.873 0l1.414 1.414c3.807-3.807 10.238-3.807 14.045 0l1.414-1.414z"/><circle cx="12" cy="18" r="2" fill="#797875"/></svg></span>
                                                <span>Wi-Fi</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="hot_tub" value="1" {{$data->hot_tub==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><circle cx="7" cy="6" r="2" fill="#797875"/><path fill="#797875" d="M11.15 12c-.31-.22-.59-.46-.82-.72l-1.4-1.55c-.19-.21-.43-.38-.69-.5c-.29-.14-.62-.23-.96-.23h-.03C6.01 9 5 10.01 5 11.25V12H2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8H11.15zM7 20H5v-6h2v6zm4 0H9v-6h2v6zm4 0h-2v-6h2v6zm4 0h-2v-6h2v6zM17.42 7.21c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L18 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06zm-4 0c.57.62.82 1.41.67 2.2l-.11.59h1.91l.06-.43c.21-1.36-.27-2.71-1.3-3.71l-.07-.07c-.57-.62-.82-1.41-.67-2.2L14 3h-1.89l-.06.43c-.2 1.36.27 2.71 1.3 3.72l.07.06z"/></svg></span>
                                                <span>private hot tub</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="washing_mashine" value="1" {{$data->washing_mashine==1 ?"checked" : ""}} >
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none" /><g fill="none"><rect width="32" height="40" x="8" y="4" stroke="#797875" stroke-width="4" rx="2"/><path stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M8 15.5h32"/><circle cx="28" cy="10" r="2" fill="#797875"/><circle cx="34" cy="10" r="2" fill="#797875"/><circle cx="24" cy="30" r="7" stroke="#797875" stroke-width="4"/></g></svg></span>
                                                <span>washing machine</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">


                                        <label>
                                            <input type="checkbox" value="1" name="refrigerator"  {{$data->refrigerator==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><rect x="0" y="0" width="48" height="48" fill="none" stroke="none" /><g fill="none" stroke="#797875" stroke-linejoin="round" stroke-width="4"><rect width="28" height="36" x="9" y="4" rx="2"/><path stroke-linecap="round" d="M9 22h28M9 20v4m28-4v4m-22 5v4m0-22v4m18 25v4m-20-4v4"/></g></svg></span>
                                                <span>refrigerator</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="dining_table" {{$data->dining_table==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#797875" d="M12 22H6a2 2 0 0 1 2-2V8H2V5h14v3h-6v12a2 2 0 0 1 2 2M22 2v20h-2v-7h-5v7h-2v-8a2 2 0 0 1 2-2h5V2Z"/></svg></span>
                                                <span>dining table</span>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" value="1" name="bbq_area"  {{$data->bbq_area==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><g fill="none" stroke="#797875" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M8.5 14.5L5 22M8 6s1-1.061 1-2c0-1.333-1-2-1-2m4 4s1-1.061 1-2c0-1.333-1-2-1-2m4 4s1-1.061 1-2c0-1.333-1-2-1-2"/><path stroke-linejoin="round" d="M16.5 17.5h-9"/><path stroke-linecap="round" stroke-linejoin="round" d="m15.5 14.5l2.1 4.5m.9 3a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z"/><path d="M12 15a7 7 0 0 0 6.975-6.4a.563.563 0 0 0-.575-.6H5.6a.563.563 0 0 0-.575.6A7 7 0 0 0 12 15Z"/></g></svg></span>
                                                <span>BBQ Area</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="gym" value="1" {{$data->gym==1 ?"checked" : ""}} >
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>

                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><g fill="none" stroke="#797875" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="M7.4 7H4.6a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6Zm12 0h-2.8a.6.6 0 0 0-.6.6v8.8a.6.6 0 0 0 .6.6h2.8a.6.6 0 0 0 .6-.6V7.6a.6.6 0 0 0-.6-.6Z"/><path d="M1 14.4V9.6a.6.6 0 0 1 .6-.6h1.8a.6.6 0 0 1 .6.6v4.8a.6.6 0 0 1-.6.6H1.6a.6.6 0 0 1-.6-.6Zm22 0V9.6a.6.6 0 0 0-.6-.6h-1.8a.6.6 0 0 0-.6.6v4.8a.6.6 0 0 0 .6.6h1.8a.6.6 0 0 0 .6-.6ZM8 12h8"/></g></svg></span>
                                                <span>gym Area</span>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="main__contact">

                                        <label>
                                            <input type="checkbox" name="heater" value="1"  {{$data->heater==1 ?"checked" : ""}}>
                                            <div class="bglk">
                                            <span><i class="fa"></i></span>
                                                <span><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><rect x="0" y="0" width="24" height="24" fill="none" stroke="none" /><path fill="#797875" d="M19 17c1.21 0 3-.8 3-3s-1.79-3-3-3h-2V9h2c2.2 0 3-1.79 3-3c0-2.2-1.79-3-3-3h-2V2h-1v1H8V2H7v1H2v2h5v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v2H5c-1.21 0-3 .8-3 3s1.79 3 3 3h2v1h1v-1h8v1h1v-1h5v-2h-5v-2h2m0-4c.45 0 1 .19 1 1s-.55 1-1 1h-2v-2h2m-3-2H8V9h8v2m3-6c.45 0 1 .2 1 1c0 .45-.19 1-1 1h-2V5h2M8 5h8v2H8V5m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m3 2h8v2H8v-2m-3 6c-.45 0-1-.19-1-1s.55-1 1-1h2v2H5m11 0H8v-2h8v2Z"/></svg></span>
                                                <span>heating</span>
                                            </div>
                                        </label>
                                    </div>

                                </div>

                            </div>
                        </div>



                        <br>
                        <br>

                        <button  value="submit" name="submit">Update</button>
                       

                    </form>

                </div>








            </div>
    </div>
    </section>
    </div>

    <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function() {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>