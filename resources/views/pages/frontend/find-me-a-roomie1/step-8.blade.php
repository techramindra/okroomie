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

     <style type="text/css">
         .custumradiosetten .cRadiosub {
            text-align: center;
        }
       .custumradiosetone .ui-corner-all {
                margin: 0 auto 10px;
            }
            .cRadiosub {
    border: none !important;
}

div#radioset {
    margin: 0;
    padding: 0;
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

     </style>
</head>
<body>
    <div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                        <!-- <a href="{{url('find-me-a-roomie/step-10')}}">Left</a> -->
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
                <div class="stepsecond mt-5">
                <form id="step-1" action="" method="post">

                    <div class="titlestep">
                    <div class="titlestep mb-4">
                     <!--    <h3>Describe your place</h3> -->
                        <h2>Roommate preference</h2>
                    </div>
                    <form id="step-1" action="{{route('roomieUpdate2view')}}" method="post">
                    <input type="hidden" name="id" value="{{encrypt($data->id)}}">

                        @csrf
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-6 m-auto">

                                <div class="steptworadio" id="steptworadio">
                                    <!-- <label class="titlestep">Type of property</label> -->
                                    <div id="radioset2" class="custumradiosettwo custumradiosetSingle">
                                        <div class="cRadiosub">
                                            <input type="radio" value="Anyone" id="radio555" name="preferences_user" class="steprd" {{$data->preferences_user=="Anyone" ? "checked" : ""}}>
                                            <label for="radio555">
                                               <span>Anyone</span> 
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio"  value="No couples" id="radio556" name="preferences_user"  class="steprd" {{$data->preferences_user=="No couples" ? "checked" : ""}}>
                                            <label
                                                for="radio556">
                                              <span>No couples</span>
                                            </label>
                                        </div>

                                         <div class="cRadiosub">
                                            <input type="radio"  value="Couple" id="radio557" name="preferences_user"  class="steprd" {{$data->preferences_user=="Couple" ? "checked" : ""}}>
                                            <label
                                                for="radio557">
                                              <span>Couple</span>
                                            </label>
                                        </div>

                                        <div class="cRadiosub">
                                            <input type="radio" value="Women only" id="radio558" name="preferences_user"  class="steprd" {{$data->preferences_user=="Women only" ? "checked" : ""}}>
                                            <label
                                                for="radio558">
                                              <span>Women only</span>
                                            </label>
                                        </div>

                                        
                                        <div class="cRadiosub">
                                            <input type="radio"  value="Men only" id="radio559" name="preferences_user"  class="steprd" {{$data->preferences_user=="Men only" ? "checked" : ""}}>
                                            <label
                                                for="radio559">
                                              <span>Men only</span>
                                            </label>
                                        </div>
                                       
                                    </div>
                                          
                                            <div class="error"><p></p></div>
                                          
                                </div>

                              

                                

                               
                            </div>
                        </div>
                    </div>

                        <h2>Accommodation suitable for ?</h2>
                    </div>
                  

                  









                        
                    <div class="stepradio">
                        <div class="row">
                            <div class="col-md-6 m-auto">
                                <div id="radioset" class="custumradiosetone custumradiosetten">
                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1" class="steprd"  id="radio1" name="backpackers" {{$data->backpackers==1 ? "checked" : ""}}>
                                        <label for="radio1">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#898986" d="M17.5 5.5q-.825 0-1.413-.588Q15.5 4.325 15.5 3.5t.587-1.413Q16.675 1.5 17.5 1.5q.825 0 1.413.587q.587.588.587 1.413q0 .825-.587 1.412q-.588.588-1.413.588ZM11 23l2.8-14.1l-1.8.7V13h-.7l-6.75 7.925q-.025-.025-.287-.225q-.263-.2-.763-.2q-.25 0-.662.15q-.413.15-.688.7l-1.1-.95q-.15-.125-.238-.3q-.087-.175-.112-.375q-.025-.2.038-.388Q.8 19.15.925 19l3.25-3.8q.125-.175.3-.25q.175-.075.375-.1q.2-.025.388.05q.187.075.337.2L7.1 16.4L10 13V8.3l5.05-2.15q.725-.325 1.475-.075q.75.25 1.175.925l1 1.6q.6 1.05 1.738 1.725Q21.575 11 23 11v2q-1.65 0-3.087-.688q-1.438-.687-2.413-1.812l-.6 3l2.1 2V23h-2v-6l-2.1-2l-1.8 8Zm-8.5-1q0-.425.288-.712Q3.075 21 3.5 21t.713.288q.287.287.287.712t-.287.712Q3.925 23 3.5 23t-.712-.288Q2.5 22.425 2.5 22Z"/></svg>
                                        </label>
                                        <span>Travellers</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1" class="steprd"  id="radio2" name="students" {{$data->students==1 ? "checked" : ""}}>
                                        <label
                                            for="radio2">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="#797875" d="m226.5 56.4l-96-32a8.5 8.5 0 0 0-5 0l-95.9 32h-.2l-1 .5h-.1l-1 .6c0 .1-.1.1-.2.2l-.8.7l-.7.8c0 .1-.1.1-.1.2l-.6.9c0 .1 0 .1-.1.2l-.4.9l-.3 1.1v.3A3.7 3.7 0 0 0 24 64v80a8 8 0 0 0 16 0V75.1l33.6 11.2A63.2 63.2 0 0 0 64 120a64 64 0 0 0 30 54.2a96.1 96.1 0 0 0-46.5 37.4a8.1 8.1 0 0 0 2.4 11.1a7.9 7.9 0 0 0 11-2.3a80 80 0 0 1 134.2 0a8 8 0 0 0 6.7 3.6a7.5 7.5 0 0 0 4.3-1.3a8.1 8.1 0 0 0 2.4-11.1a96.1 96.1 0 0 0-46.5-37.4a64 64 0 0 0 30-54.2a63.2 63.2 0 0 0-9.6-33.7l44.1-14.7a8 8 0 0 0 0-15.2ZM128 168a48 48 0 0 1-48-48a48.6 48.6 0 0 1 9.3-28.5l36.2 12.1a8 8 0 0 0 5 0l36.2-12.1A48.6 48.6 0 0 1 176 120a48 48 0 0 1-48 48Z"/></svg>
                                        </label>
                                        <span>Students</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1" class="steprd" id="radio3" name="smokers" {{$data->smokers==1 ? "checked" : ""}}>
                                        <label for="radio3">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#898986" d="M18 16h1.5v3H18zM2 16h15v3H2zm14.03-5.8H14.5c-1.02 0-1.85-.98-1.85-2s.83-1.75 1.85-1.75v-1.5a3.35 3.35 0 0 0 0 6.7h1.53c1.05 0 1.97.74 1.97 2.05V15h1.5v-1.64c0-1.81-1.6-3.16-3.47-3.16zM20.5 16H22v3h-1.5zm-1.65-8.27c.62-.61 1-1.45 1-2.38C19.85 3.5 18.35 2 16.5 2v1.5c1.02 0 1.85.83 1.85 1.85S17.52 7.2 16.5 7.2v1.5c2.24 0 4 1.83 4 4.07V15H22v-2.24c0-2.22-1.28-4.14-3.15-5.03z"/></svg>
                                        </label>
                                        <span>Smokers</span>
                                    </div>

                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1" class="steprd"  id="radio4" name="children" {{$data->children==1 ? "checked" : ""}}>
                                        <label for="radio4">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="#898986" d="M20 30h-3a2.002 2.002 0 0 1-2-2v-5h2v5h3v-5h2v-4a1.001 1.001 0 0 0-1-1h-8.72l-2-6H4a1.001 1.001 0 0 0-1 1v6h2v9h4v-7h2v7a2.002 2.002 0 0 1-2 2H5a2.002 2.002 0 0 1-2-2v-7a2.002 2.002 0 0 1-2-2v-6a3.003 3.003 0 0 1 3-3h6.28a1.998 1.998 0 0 1 1.897 1.367L13.72 16H21a3.003 3.003 0 0 1 3 3v4a2.002 2.002 0 0 1-2 2v3a2.002 2.002 0 0 1-2 2zm8 0h-2V19h3v-6a1.001 1.001 0 0 0-1-1h-4v-2h4a3.003 3.003 0 0 1 3 3v6a2.002 2.002 0 0 1-2 2h-1zM7 9a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4zm0-6a2 2 0 1 0 2 2a2.002 2.002 0 0 0-2-2zm18 6a4 4 0 1 1 4-4a4.005 4.005 0 0 1-4 4zm0-6a2 2 0 1 0 2 2a2.002 2.002 0 0 0-2-2z"/><path fill="#898986" d="M18.5 15a3.5 3.5 0 1 1 3.5-3.5a3.504 3.504 0 0 1-3.5 3.5Zm0-5a1.5 1.5 0 1 0 1.5 1.5a1.502 1.502 0 0 0-1.5-1.5Z"/></svg>
                                        </label>
                                        <span>Young Families </span>
                                    </div>



                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1" class="steprd" id="radio5" name="professionals" {{$data->professionals==1 ? "checked" : ""}}>
                                        <label for="radio5">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><g fill="#898986"><path fill-rule="evenodd" d="M34 16c0 5.523-4.477 10-10 10s-10-4.477-10-10S18.477 6 24 6s10 4.477 10 10Zm-2 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0Z" clip-rule="evenodd"/><path d="M30.5 28a.48.48 0 0 0-.54.262L26 39.572V36l-.575-4.021a1 1 0 0 0 .764-.736l.5-2A1 1 0 0 0 25.72 28h-3.438a1 1 0 0 0-.97 1.242l.5 2a1 1 0 0 0 .764.737L22 36v2.696l-3.96-10.434A.48.48 0 0 0 17.5 28a139.1 139.1 0 0 1-1.148.272c-2.262.53-5.058 1.184-6.544 2.16C8.045 31.589 7 32.953 7 34.5V41h34v-6.5c0-1.547-1.045-2.91-2.808-4.068c-1.486-.976-4.282-1.63-6.544-2.16c-.403-.094-.79-.184-1.148-.272Z"/></g></svg>
                                        </label>
                                        <span>Professionals</span>
                                    </div>



                                    <div class="cRadiosub">
                                        <input type="checkbox" value="1" class="steprd"  id="radio6" name="retirees" {{$data->retirees==1 ? "checked" : ""}}>
                                        <label for="radio6">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="24" height="24" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="none" stroke="#898986" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2 14a4 4 0 1 0 8 0a4 4 0 0 0-8 0Zm0 0V6m20 8a4 4 0 1 1-8 0a4 4 0 0 1 8 0Zm0 0V6m-8 8h-4"/></svg>
                                        </label>
                                        <span>Retirees</span>
                                    </div>

                                   










                                    
                                    
                                </div>

                                

                            
                            </div>
                        </div>
                    </div>
                    <button  value="submit" name="submit">Update</button>
                    </form>
                   
                </div>
            </div>
        </section>
        </div>

        <script src="{{url('public/assets/frontend/list-my-place/js/jquery.js')}}"></script>
    <script src="{{url('public/assets/frontend/list-my-place/js/jquery-ui.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(function () {
            $("input.steprd").checkboxradio({
                icon: false
            });
        });
    </script>
</body>

</html>