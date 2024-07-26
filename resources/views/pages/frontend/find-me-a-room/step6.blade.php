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
    .error p
    {
       color:red;
    }
    .coupleonclick2 {
    padding: 10px 0;
    margin-bottom: 10px;
    border-bottom: 1px solid #f3f3f3;
    }
        .appentcouple ,.removeappent{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px  0;
    }
    .appentcouple i, .removeappent i {
        margin-right: 5px;
    }
    .coupleonclick {
    border-top: 1px solid #f3f3f3;
    border-bottom: 1px solid #f3f3f3;
    margin-bottom: 20px;
}
</style>
</head>
<body>
<div id="wrapper">
        <header class="step-header">
            <div class="container">
                <div class="inner-block">
                    <div class="left">
                       <!--  <a href="{{url('find-me-a-room/step-5')}}">Left</a> -->
                    </div>
                    <div class="logo">
                        <a href="{{url('/')}}">
                           <img src="https://okroomie.com/public/assets/frontend/images/logonk.png">
                        </a>
                    </div>
                    <div class="right">
                        <a href="{{url('/')}}">Close</a>
                    </div>
                </div>
            </div>
        </header>


       <section class="bg__blue">
          <div class="container">
              <div class="stepthird mt-5">
                  <div class="titlestep mb-4">
                      <h2>More About You</h2>
                  </div>
                  <form id="step-5-form" action="{{url('find-me-a-room/step-2')}}" enctype="multipart/form-data" method="post">
                      @csrf
                      <div class="stepradio">
                          <div class="row">
                              <div class="col-md-8 m-auto">
                              
                                 <div class="stepform form-group">
                                     <div class="general-label">
                                         <label class="titlestep"> Your first name
                                          </label>
                                     </div>
                                      <div class="general-tag">
                                          <input class="form-control" value="{{$data->your_first_name}}" type="text" name="your_first_name" placeholder="Enter Name" >
                                      </div>
                                 </div>
                                 @error("your_first_name")
                                     <div class="error"><p>{{$message}}</p></div>
                                  @enderror


                                  <div class="stepform form-group">
                                     <div class="general-label">
                                         <label  class="titlestep"> Age
                                          </label>
                                     </div>
                                      <div class="general-tag">
                                          <input class="form-control" value="{{$data->age}}" type="number" name="age" placeholder="Enter age" >
                                      </div>
                                 </div>

                                 @error("age")
                                     <div class="error"><p>{{$message}}</p></div>
                                @enderror

                                  <div class="steptworadio" id="steptworadio">
                                      <label class="titlestep">This Listing is for</label>
                                      <div id="radioset2" class="custumradiosettwo">
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio3" name="this_place_is_for" value="Me" class="steprd" {{$data->this_place_is_for=="Me" ? "checked" : ""}} >
                                              <label for="radio3">
                                              <span>me</span> 
                                              </label>
                                          </div>

                                          <div class="cRadiosub">
                                              <input type="radio" id="radio4" name="this_place_is_for" value="Couple"  class="steprd" {{$data->this_place_is_for=="Couple" ? "checked" : ""}} >
                                              <label
                                                  for="radio4">
                                              <span>a couple</span>
                                              </label>
                                          </div>
                                          
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio5" name="this_place_is_for" value="Group" class="steprd" {{$data->this_place_is_for=="Group" ? "checked" : ""}} >
                                              <label
                                                  for="radio5">
                                              <span>a group</span>
                                              </label>
                                          </div>

                                          <div class="cRadiosub">
                                              <input type="radio" id="radio55" name="this_place_is_for" value="Family" class="steprd" {{$data->this_place_is_for=="Group" ? "checked" : ""}} >
                                              <label
                                                  for="radio55">
                                              <span>a family</span>
                                              </label>
                                          </div>
                                      
                                      </div>
                                      @error("this_place_is_for")
                                     <div class="error"><p>{{$message}}</p></div>
                                       @enderror
                                  </div>

                               

                                


                                  <div class="steptworadio" id="steptworadio">
                                      <label class="titlestep">The gender you identify as</label>
                                      <div id="radioset2" class="custumradiosettwo">
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio21" name="gender" value="Woman" class="steprd" {{$data->gender=="Woman" ? "checked" : ""}} >
                                              <label for="radio21">
                                              <span>Woman</span> 
                                              </label>
                                          </div>
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio22" name="gender" value="Man" class="steprd" {{$data->gender=="Man" ? "checked" : ""}}  >
                                              <label
                                                  for="radio22">
                                              <span>Man</span>
                                              </label>
                                          </div>
                                          
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio23" name="gender" value="Non-binary"  class="steprd" {{$data->gender=="Non-binary" ? "checked" : ""}}  >
                                              <label
                                                  for="radio23">
                                              <span>Non-binary</span>
                                              </label>
                                          </div>

                                          <div class="cRadiosub">
                                              <input type="radio" id="radio45" name="gender" value="Undisclosed"  class="steprd" {{$data->gender=="Undisclosed" ? "checked" : ""}}  >
                                              <label
                                                  for="radio45">
                                              <span>Undisclosed</span>
                                              </label>
                                          </div>

                                          
                                      
                                      </div>
                                      @error("gender")
                                     <div class="error"><p>{{$message}}</p></div>
                                     @enderror
                                  </div>


                                   <div class="coupleonclick" style="display: none;" id="coupleonclick">
                                   
                                      <div class="stepform form-group">
                                         <div class="general-label">
                                             <label class="titlestep"> Your Partner's Name
                                              </label>
                                         </div>
                                          <div class="general-tag">
                                              <input class="form-control" value="{{$data->partner_name}}" type="text" name="partner_name" placeholder="Your Partner's Name" >
                                          </div>
                                       </div>
                                       @error("partner_name")
                                         <div class="error"><p>{{$message}}</p></div>
                                         @enderror

                                       <div class="stepform form-group">
                                         <div class="general-label">
                                             <label class="titlestep">Your Partner's age
                                              </label>
                                         </div>
                                          <div class="general-tag">
                                              <input class="form-control" value="{{$data->partner_age}}" type="number" name="partner_age" placeholder="Your Partner's age" >
                                          </div>
                                       </div>
                                       @error("partner_age")
                                         <div class="error"><p>{{$message}}</p></div>
                                         @enderror


                                       <div class="steptworadio" id="steptworadio">
                                          <label class="titlestep">The gender you identify as</label>
                                          <div id="radioset2" class="custumradiosettwo">
                                              <div class="cRadiosub">
                                                  <input type="radio" id="radio25" name="partner_gender" value="Woman" class="steprd" {{$data->partner_gender=="Woman" ? "checked" : ""}} >
                                                  <label for="radio25">
                                                  <span>Woman</span> 
                                                  </label>
                                              </div>
                                              <div class="cRadiosub">
                                                  <input type="radio" id="radio26" name="partner_gender" value="Man" class="steprd" {{$data->partner_gender=="Man" ? "checked" : ""}}  >
                                                  <label
                                                      for="radio26">
                                                  <span>Man</span>
                                                  </label>
                                              </div>
                                              
                                              <div class="cRadiosub">
                                                  <input type="radio" id="radio27" name="partner_gender" value="Non-binary"  class="steprd" {{$data->partner_gender=="Non-binary" ? "checked" : ""}}  >
                                                  <label
                                                      for="radio27">
                                                  <span>Non-binary</span>
                                                  </label>
                                              </div>

                                              
                                          
                                          </div>
                                          @error("partner_gender")
                                         <div class="error"><p>{{$message}}</p></div>
                                         @enderror
                                       </div>
                                       
                                   </div>


                                 <!--  <div class="steptworadio" id="steptworadio">
                                      <label class="titlestep">Sexual Orientation</label>
                                      <div id="radioset2" class="custumradiosettwo">
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio71" name="this_place_is_for" value="Me" class="steprd" {{$data->this_place_is_for=="Me" ? "checked" : ""}} >
                                              <label for="radio71">
                                              <span>Straight</span> 
                                              </label>
                                          </div>

                                          <div class="cRadiosub">
                                              <input type="radio" id="radio72" name="this_place_is_for" value="Couple"  class="steprd" {{$data->this_place_is_for=="Couple" ? "checked" : ""}} >
                                              <label
                                                  for="radio72">
                                              <span>LGBTQI</span>
                                              </label>
                                          </div>
                                          
                                          <div class="cRadiosub">
                                              <input type="radio" id="radio73" name="this_place_is_for" value="Group" class="steprd" {{$data->this_place_is_for=="Group" ? "checked" : ""}} >
                                              <label
                                                  for="radio73">
                                              <span> Undisclosed</span>
                                              </label>
                                          </div>
                                      
                                      </div>
                                      @error("this_place_is_for")
                                     <div class="error"><p>{{$message}}</p></div>
                                       @enderror
                                  </div> -->


                                  <div class="appent-con" id="appent-con"></div>
                                   <!-- <div class="image-box">
                                       <div class="image-label">
                                           <label class="titlestep"> Profile picture
                                            </label>
                                       </div>
                                        <div class="profile-pic upload-picturs">
                                            <input type="file" name="image" >
                                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                            <span>Upload Image</span>
                                        </div>
                                        <div class="image-description">
                                           <label>*Add image now to get more responses
                                            </label>
                                       </div>
                                       @error("image")
                                       <div class="error"><p>{{$message}}</p></div>
                                       @enderror
                                   </div> -->
                                 
                                   <div class="appentcouple" id="appentcouple" style="display: none;">
                                     <a  href="Javascript:;"><i class="fa fa-plus"></i>Add Another Person</a>
                                   </div>
                                 

                                
                                  
                                  <!-- <div class="stepform form-group">
                                      <label class="titlestep">Type of property</label>
                                  <select name="" id="" class="form-control">
                                      <option value="lorem 1">lorem text</option>
                                      <option value="lorem 1">lorem text</option>
                                      <option value="lorem 1">lorem text</option>
                                      <option value="lorem 1">lorem text</option>
                                  </select>
                                  </div>

                                  <div class="stepform form-group">
                                      <label class="titlestep">Type of property</label>
                                  <select name="" id="" class="form-control">
                                      <option value="lorem 1">lorem text</option>
                                      <option value="lorem 1">lorem text</option>
                                      <option value="lorem 1">lorem text</option>
                                      <option value="lorem 1">lorem text</option>
                                  </select>
                                  </div> -->

                                  <div class="stepbutton">
                                      <!-- <a href="{{url('find-me-a-room/step-7')}}"> -->
                                      <a href="#">
                                          <button>
                                              Next
                                          </button>
                                      </a>

                                      <a href="{{url('find-me-a-room/step-1')}}">Back</a> 
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>

                 
              </div>
          </div>
      </section>
</div>
<input type="hidden" value="0" name="dynamicID" id="dynamicID">

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


       
//first

        $("#radio4").click(function(){
          $("#coupleonclick").show();
          });

        $("#radio3,#radio5").click(function(){
        $("#coupleonclick").hide();
        });
//first
//second
        $("#radio5").click(function(){
          $("#appentcouple").show();
          });

        $("#radio3,#radio4").click(function(){
        $("#appentcouple").hide();
        });
//second
//Third
        $("#radio5").click(function(){
          $(".coupleonclick2").show();
          });

        $("#radio3,#radio4").click(function(){
        $(".coupleonclick2").hide();
        });

        

//Third     
        //appent
      
         $("#appentcouple").click(function(){

            let defaultval=$("#dynamicID").val();
            let newdefault=parseInt(defaultval)+1;
        $("#dynamicID").val(newdefault);
          $("#appent-con").append('<div class=coupleonclick2><div class=removeappent><a href=Javascript:;><i class="fa fa-minus"></i>Remove Person</a></div><div class="form-group stepform"><div class=general-label><label>Your Partner Name</label></div><div class=general-tag><input class=form-control name=group_partner_name[] value=""placeholder="Enter partner name"></div></div><div class="form-group stepform"><div class=general-label><label>your Partner age</label></div><div class=general-tag><input class=form-control name=group_partner_age[] value=""type=number placeholder="Enter age"></div></div><div class=steptworadio id=steptworadio><label class=titlestep>The gender you identify as</label><div class=custumradiosettwo id=radioset2><div class=cRadiosub><input class=steprd name="group_partner_gender['+defaultval+']" value="Woman" type=radio id=radio25  > <label for=radio25><span>Woman</span></label></div><div class=cRadiosub><input class=steprd name="group_partner_gender['+defaultval+']" value="Man" type=radio id=radio26  > <label for=radio26><span>Man</span></label></div><div class=cRadiosub><input class=steprd name="group_partner_gender['+defaultval+']" value="Non-binary" type=radio id=radio27  > <label for=radio27><span>Non-binary</span></label></div></div>@error("group_partner_gender")<div class=error><p>{{$message}}</div>@enderror</div></div>');
        });
       
        //apent
    </script>
</body>

</html>