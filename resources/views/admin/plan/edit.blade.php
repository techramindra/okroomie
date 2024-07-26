@extends('layouts.adminMaster')
@section('contents')
<style>
.content
{
    margin-left:0%;

}
.error p
{
    color:red;
}
</style>


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>General Form</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
              <!-- <li class="breadcrumb-item active">General Form</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section  class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Plan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="edit-plan">
                  @csrf
                <div class="card-body row">

                    <div class="form-group col-md-6">
                        <label for="title">Select Room/Roomie</label>
                        <select class="form-control" id="room_roomie" name="room_roomie">
                            <option {{$plan->room_roomie=="Room" ? "selected" : ""}} value="Room">Room</option>
                            <option {{$plan->room_roomie=="Roomie" ?"selected" : ""}} value="Roomie">Roomie</option>
                        </select>
                    </div>
                  <div class="error"><p id="error_room_roomie"></p></div>

                  <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    <input type="text" value="{{$plan->title}}" class="form-control" id="title" name="title" placeholder="Enter title">
                  </div>
                  <div class="error"><p id="error_title"></p></div>

                  <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="number" value="{{$plan->price}}" class="form-control" id="price" name="price" placeholder="Enter price">
                  </div>
                  <div class="error"><p id="error_price"></p></div>

                  <div class="form-group col-md-6">
                    <label for="days">Days</label>
                    <input type="text" value="{{$plan->days}}"  class="form-control" id="days" name="days" placeholder="Enter days">
                  </div>
                  <div class="error"><p id="error_days"></p></div>

                  <div class="form-group col-md-6">
                    <label for="description">Description</label>
                    <input type="text" value="{{$plan->description}}"  class="form-control" id="description" name="description" placeholder="Enter description">
                  </div>
                  <div class="error"><p id="error_description"></p></div>

                  <div class="form-group col-md-6">
                        <label for="title">30 day guarantee*</label>
                        <select class="form-control" id="thirty_days_guarantee" name="thirty_days_guarantee">
                            <option {{$plan->thirty_days_guarantee=="0" ? "selected" : ""}} value="0">Select</option>
                            <option  value="-" {{$plan->thirty_days_guarantee=="-" ? "selected" : ""}} >-</option>
                            <option value="No" {{$plan->thirty_days_guarantee=="No" ? "selected" : ""}}>No</option>
                            <option value="Yes" {{$plan->thirty_days_guarantee=="Yes" ? "selected" : ""}}>Yes</option>
                        </select>
                    </div>
                  <div class="error"><p id="error_thirty_days_guarantee"></p></div>

                  <div class="form-group col-md-6">
                        <label for="title">Listings included*</label>
                        <select class="form-control" id="listing_included" name="listing_included">
                            <option value="0"  {{$plan->listing_included=="0" ? "selected" : ""}} >Select</option>
                            <option value="1"  {{$plan->listing_included=="1" ? "selected" : ""}} >1</option>
                            <option value="2"  {{$plan->listing_included=="2" ? "selected" : ""}} >2</option>
                            <option value="3 or more"  {{$plan->listing_included=="3 or more" ? "selected" : ""}}>3 or more</option>
                        </select>
                    </div>
                  <div class="error"><p id="error_listing_included"></p></div>

                  <div class="form-group col-md-6">
                        <label for="receive_messages">Receive messages</label>
                        <select class="form-control" id="receive_messages" name="receive_messages">
                            <option value="No" {{$plan->receive_messages=="No" ? "selected" : ""}}>No</option>
                            <option value="Yes" {{$plan->receive_messages=="Yes" ? "selected" : ""}}>Yes</option>
                        </select>
                    </div>
                  <div class="error"><p id="error_receive_messages"></p></div>
                 

                  <div class="form-group col-md-6">
                        <label for="book_inspections">Book inspections</label>
                         <div class="form-check">
                          <input class="form-check-input" {{$plan->book_inspections=="Yes" ? "checked" : ""}} value="Yes" type="radio" name="book_inspections">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" {{$plan->book_inspections=="No" ? "checked" : ""}} value="No" type="radio" name="book_inspections" >
                          <label class="form-check-label">No </label>
                        </div>

                  </div>
                  <div class="error"><p id="error_book_inspections"></p></div>


                  <div class="form-group col-md-6">
                        <label for="help">Mobile info</label>
                         <div class="form-check">
                          <input class="form-check-input" {{$plan->mobile_info=="Yes" ? "checked" : ""}} value="Yes" type="radio" name="mobile_info">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" {{$plan->mobile_info=="No" ? "checked" : ""}} value="No" type="radio" name="mobile_info">
                          <label class="form-check-label">No</label>
                        </div>

                  </div>
                  <div class="error"><p id="error_mobile_info"></p></div>

                  
                 

                  <div class="form-group col-md-6">
                        <label for="video_tours">Video Tours</label>
                         <div class="form-check">
                          <input class="form-check-input" {{$plan->video_tours=="Yes" ? "checked" : ""}} value="Yes" type="radio" name="video_tours">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" {{$plan->video_tours=="No" ? "checked" : ""}} value="No" type="radio" name="video_tours">
                          <label class="form-check-label">No</label>
                        </div>

                  </div>
                  <div class="error"><p id="error_video_tours"></p></div>

                  <div class="form-group col-md-6">
                        <label for="listed_as_a_featured_property">Listed as a featured property</label>
                         <div class="form-check">
                          <input class="form-check-input" {{$plan->listed_as_a_featured_property=="Yes" ? "checked" : ""}}  value="Yes" type="radio" name="listed_as_a_featured_property">
                          <label class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" {{$plan->listed_as_a_featured_property=="No" ? "checked" : ""}} value="No" type="radio" name="listed_as_a_featured_property">
                          <label class="form-check-label">No</label>
                        </div>

                  </div>
                  <div class="error"><p id="error_listed_as_a_featured_property"></p></div>

                  

                  <div class="form-group col-md-6">
                        <label for="receive_messages">Receive messages</label>
                        <select class="form-control" id="receive_messages" name="receive_messages">
                            <option value="No" {{$plan->listed_as_a_featured_property=="No" ? "selected" : ""}}>No</option>
                            <option value="Yes" {{$plan->listed_as_a_featured_property=="Yes" ? "selected" : ""}}>Yes</option>
                           

                        </select>
                    </div>
                  <div class="error"><p id="error_receive_messages"></p></div>

                  <div class="form-group col-md-6">
                        <label for="title">Send messages</label>
                        <select class="form-control" id="send_messages" name="send_messages">
                            <option value="No" {{$plan->send_messages=="No" ? "selected" : ""}}>No</option>
                            <option value="Yes" {{$plan->send_messages=="Yes" ? "selected" : ""}}>Yes</option>
                            <option value="Yes to paid listings only" {{$plan->send_messages=="Yes to paid listings only" ? "selected" : ""}}>Yes to paid listings only</option>
                        </select>
                    </div>
                  <div class="error"><p id="error_send_messages"></p></div>

                  <div class="form-group col-md-6">
                        <label for="title">In-app voice and video calls</label>
                        <select class="form-control" id="in_app_voice_and_video_call" name="in_app_voice_and_video_call">
                            <option value="0" {{$plan->in_app_voice_and_video_call=="0" ? "selected" : ""}}>Select</option>
                            <option value="-" {{$plan->in_app_voice_and_video_call=="-" ? "selected" : ""}}>-</option>
                            <option value="No" {{$plan->in_app_voice_and_video_call=="No" ? "selected" : ""}}>No</option>
                            <option value="Yes" {{$plan->in_app_voice_and_video_call=="Yes" ? "selected" : ""}}>Yes</option>


                        </select>
                    </div>
                  <div class="error"><p id="error_in_app_voice_and_video_call"></p></div>

                 

                  
                  <!-- <div class="form-group col-md-6">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <input type="hidden" name="id" value="{{encrypt($plan->id)}}" />
                 
                </div>
              </form>
            </div>
            <!-- /.card -->

          
          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

  @endsection('contents')

  @push('edit-plan')

<script type="text/javascript">
$(document).ready(function(ddds){
$("#edit-plan").on('submit',(function(ddds){
ddds.preventDefault();
$.ajax({
url:"{{route('admin.plan.update')}}",
type:"POST",
data:new FormData(this),
contentType:false,
cache:false,
processData:false,
success:function(data)
{ 
    console.log(data);

        $("#error_title").html("");
        $("#error_days").html("");
        $("#error_help").html("");
        $("#error_description").html("");
        $("#error_price").html("");
  if(data.validation_errors)
   {
    $("#error_title").html(data.validation_errors.title);
        $("#error_days").html(data.validation_errors.days);
        $("#error_help").html(data.validation_errors.help);
        $("#error_description").html(data.validation_errors.description);
        $("#error_price").html(data.validation_errors.price);
    }
    
    if(data.status===200)
    {
      toastr.success(data.message,"Success!");
      setInterval(() => {
        window.location.href=data.route; 
      }, 1000);  
    }
},

error:function(){alert("error");}

});

}));

});

</script>

@endpush