@extends('layouts.adminMaster')

@section('contents')
<style>
.content
{
    margin-left:20%;

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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Inclusion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="add-inclusion">
             
                  @csrf
                <div class="card-body">

                <div class="form-group">
                        <label for="title">Select Room/Roomie</label>
                        <select class="form-control" id="room_roomie" name="room_roomie">
                            <option value="Room">Room</option>
                            <option value="Roomie">Roomie</option>
                        </select>
                    </div>
                  <div class="error"><p id="error_room_roomie"></p></div>

                  <div class="form-group">
                    <label for="inclusion">Inclusion</label>
                    <input type="text" class="form-control" id="inclusion" name="inclusion" placeholder="Enter inclusion">
                  </div>
                  <div class="error"><p id="error_inclusion"></p></div>

                  <div class="form-group">
                    <label for="free">Free</label>
                    <input type="text"  class="form-control" id="free" name="free" placeholder="Enter free">
                  </div>
                  <div class="error"><p id="error_free"></p></div>

                  <div class="form-group">
                    <label for="basic">Basic</label>
                    <input type="text"  class="form-control" id="basic" name="basic" placeholder="Enter basic">
                  </div>
                  <div class="error"><p id="error_basic"></p></div>

                  <div class="form-group">
                    <label for="full">Full</label>
                    <input type="text"  class="form-control" id="full" name="full" placeholder="Enter full">
                  </div>
                  <div class="error"><p id="error_full"></p></div>

                  <div class="form-group">
                    <label for="help">Help</label>
                    <input type="text"  class="form-control" id="help" name="help" placeholder="Enter help">
                  </div>
                  <div class="error"><p id="error_help"></p></div>

                  
                  <!-- <div class="form-group">
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
                  <button type="submit" class="btn btn-primary">Add Plan</button>
                 
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

  @push('add-inclusion')

<script type="text/javascript">
$(document).ready(function(ddds){
$("#add-inclusion").on('submit',(function(ddds){
ddds.preventDefault();
$.ajax({
url:"{{route('admin.inclusion.create')}}",
type:"POST",
data:new FormData(this),
contentType:false,
cache:false,
processData:false,
success:function(data)
{ 
    console.log(data);

        $("#error_inclusion").html("");
        $("#error_free").html("");
        $("#error_help").html("");
        $("#error_basic").html("");
        $("#error_full").html("");

  if(data.validation_errors)
   {
    $("#error_inclusion").html(data.validation_errors.inclusion);
        $("#error_free").html(data.validation_errors.free);
        $("#error_help").html(data.validation_errors.help);
        $("#error_basic").html(data.validation_errors.basic);
        $("#error_full").html(data.validation_errors.full);
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