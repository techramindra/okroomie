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
    /* loader css */
    .loader {
    border: 3px solid #666262;
    border-radius: 50%;
    border-top: 0px solid blue;
    border-bottom: -1px solid blue;
    width: 50px;
    height: 50px;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    /* background: gray; */
}

a#livebutton {
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
    border: 0.0625rem solid #292B32;
    background-color: #292B32;
    color: rgb(255, 255, 255);
    border-radius: 8px;
    padding: calc(0.6875rem) 1.5rem;
    cursor: pointer;
    margin-bottom: 10px;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.profile-pic.upload-picturs {
    background: white !important;
    height: 250px !important;
    border: 1px solid #E9EAEC;
    padding: 5px 10px;
    position: relative;
}

.csose_icone {border-radius: 50%;right: 20px;padding: 10px;background: white;display: flex;align-items: center;justify-content: center;align-content: center;width: 50px;height: 50px;text-align: center;position: absolute;top: 20px;     z-index: 9999999999 !important;}

.csose_icone i.fa.fa-times {display: block;text-align: center;display: flex;align-items: center;justify-content: center;align-content: center;color: gray;font-weight: 100;margin-left: -10px; cursor: pointer;}

.profile-pic.upload-picturs input[type="file"] {padding: 20px !important;background: white !important;}
.fileover:hover {
    background: #d3d4d7;
    transition: 0.8s;
}

    /* loader css */
    .error p
    {
       color:red;
    }

    div#galleryid .imageclass .main_img_icone {position: absolute;bottom: 0;background: #ffffff9c;text-align: center;left: 45px;padding: 18px;border-radius: 10px; display: none; cursor: pointer;}

div#galleryid .imageclass .main_img_icone i.fa.fa-trash-o {font-size: 20px;color: red;}


div#galleryid .imageclass:hover .main_img_icone{
    display: block;
    transition: 0.5s;

}

    div#galleryid {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 70px;
}

.fileimg {
    background: #E4E6EB;
    padding: 10px;
    border-radius: 50%;
}

    c {display: flex;flex-wrap: wrap;}

div#galleryid .imageclass {width: 120px !important;margin: 0px 10px;height: 120px;object-fit: contain; position: relative;}

div#galleryid {display: flex;flex-wrap: wrap;}

div#galleryid .imageclass img {width: 100% !important;height: 100% !important;}
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


.upload-picturs {
 
    height: 70px !important;
 
}

.profile-pic.upload-picturs {
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
}

.fileover {
    margin: 5px;
    background: #F7F8FA;
    width: 100%;
    height: 100%;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.upload-picturs input {

    cursor: pointer;
}



.profile-pic.upload-picturs span {color: #050505;font-size: 500;font-weight: 500;font-size: 22px;/* padding: 5px 0px; */font-family: unset;}





.gallery {width: 100%;height: 100px;margin-bottom: 25px;}

.gallery img {width: 125px;height: 100%;margin: 10px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;border-radius: 5px;}
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
                      <h2>Upload images</h2>
                  </div>
                  <form id="upload_form"  enctype="multipart/form-data" method="post">
                      @csrf
                      <div class="stepradio">
                          <div class="row">
                              <div class="col-md-8 m-auto">
                                  <div class="appent-con" id="appent-con"></div>
                                   <div class="image-box">
                                       <div class="image-label">
                                           <label> Room images ( minimum 5)
                                            </label>
                                       </div>
                                        <div class="profile-pic upload-picturs">
                                            <div class="csose_icone">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                            </div>
                                        <div class="fileover">
                                        <input type="file" id="image_loader_onchange_hide" name="image[]" multiple required>
                                            <!-- <input type="file" name="image"   id="gallery-photo-add"> -->
                                        <div class="fileimg">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="50" height="50" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#666262" d="M4 5h13v7h2V5c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h8v-2H4V5z"/><path fill="#666262" d="m8 11l-3 4h11l-4-6l-3 4z"/><path fill="#666262" d="M19 14h-2v3h-3v2h3v3h2v-3h3v-2h-3z"/></svg>
                                        </div>
                                            <span>Add photos/videos</span>
                                            <p>or drag and drop</p>
                                            <div  id="loader"></div>
                                        </div>
                                        </div>
                                        <div class="image-description">
                                           <label>*Add image now to get more responses
                                            </label>
                                       </div>
                                   
                                       <div  class="gallery" id="galleryid"></div>
                                       @error("image")
                                       <div class="error"><p>{{$message}}</p></div>
                                       @enderror
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

                                  <input type="hidden" id="completed_step" name="completed_step" value="9">
                                  <input type="hidden" value="{{request()->route('rid')}}" name="_rowid" >
                                  </form>
                                  <div class="stepbutton">
                                      <!-- <a href="{{url('find-me-a-room/step-7')}}"> -->
                               
                                    <a href="javascript:;" onclick="checkValidation()" id="livebutton" style="color:white;">
                                          
                                          
                                          Next
                                               
                                             
                                          </a>
                                    
                                     

                                      <a href="{{url('find-me-a-roomie/8/'.encrypt(208).'/'.request()->route('rid'))}}">Back</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  

                 
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

        //preview image by jquery

        $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
    </script>




<script>
$(document).ready(function(){
 $('#upload_form').on('change', function(event){
    //alert();
    var fuData = document.getElementById('image_loader_onchange_hide');
    var FileUploadPath = fuData.files;
    //alert(FileUploadPath);
    if(fuData.files.length>5)
    {
    alert("You Can not Select More Then 5 image ");
    exit();
    }
    $("#loader").addClass('loader'); 
    //  $("#image_loader_onchange_hide").prop('disabled', true);
  event.preventDefault();

  $.ajax({
   url:"{{url('find-me-a-roomie/step-99')}}",
   method:"POST",
   data:new FormData(this),
   //dataType:'JSON',
   contentType: false,
   cache: false,
   processData: false,
   success:function(data)
   {
      // alert(data);
    $("#image_loader_onchange_hide").prop('disabled', false);
       if(data.imageData!='')
       {
        $("#loader").removeClass('loader'); 
        $("#galleryid").append(data.imageData);
       }
       else
       {
        $("#loader").addClass('loader'); 
       
       }
   }
  })
 });

});


function checkValidation()
{
    var fuData = document.getElementById('image_loader_onchange_hide');
    if(fuData.files.length<1)
    {
        alert("You Can not remain image empty ");
        exit();
    }
    else
    {
        encid="{{encrypt(210).'/'.request()->route('rid')}}";
        url=window.location.origin;
        newurl=url+'/find-me-a-roomie/10/'+encid;
        window.location.href=newurl;
    }
    
}
function deleteImage(id)
{
    alert('Are you sure!');
    let token= $("input[name=_token]").val();       
  $.post("{{url('deleteImages')}}",{id:id,_token:token},function(data){
   $("#imageid"+id).remove();
  
  });

}
</script>
</body>
</html>
