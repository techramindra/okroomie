@extends('layouts.adminMaster')

@section('contents')

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Plans</h1>
            <!-- <a href="{{route('admin.plan.show')}}" class="btn btn-info mt3">add Plan</a> -->

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>

              <!-- <li class="breadcrumb-item active">Users</li> -->

            </ol>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section>



    <!-- Main content -->

    <section class="content">

      <div class="container-fluid">

        <div class="row">

          <div class="col-12">

            <div class="card">

              <div class="card-header">

                <!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->

              </div>

              <!-- /.card-header -->

              <div class="card-body">

                <table id="example2" class="table table-bordered table-hover">

                  <thead>

                  <tr>
                    <th>S.N</th>
                    <th>Room/Roomie</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Days</th>
                    <th>Description</th>
                    <th>Help</th>
                    <th>Registered On</th>
                    <th>Action</th>
                  </tr>

                  </thead>

                  <tbody>

                  @foreach($plan as $key=>$val) 

                  <tr>

                    <td>{{$key+1}}</td>
                    <td>{{$val->room_roomie}}</td>
                    <td>{{$val->title}}</td>
                    <td>{{$val->price}}</td>
                    <td>{{$val->days}}</td>
                    <td>{{$val->description}}</td>
                    <td>{{$val->help}}</td>
                    <td>{{date('d-m-Y',strtotime($val->created_at))}}</td>
                    <td>
                      <a href="{{url('admin/plan/'.encrypt($val->id))}}"><button  class="btn btn-warning">Update</buttton></a>
                      <a href="{{url('admin/deleteplan/'.encrypt($val->id))}}"><button  class="btn btn-warning">Delete</buttton></a>
                  </td>
                    
                   
                    
                    

                  </tr>

                  @endforeach

                  

                  </tbody>

                  <tfoot>

                   

                  <tr>

                    <th>S.N</th>
                    <th>Room/Roomie</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Days</th>
                    <th>Description</th>
                    <th>Help</th>
                    <th>Registered On</th>
                    <th>Action</th>

                  </tr>

                

                  </tfoot>

                </table>

              </div>

              <!-- /.card-body -->

            </div>

            <!-- /.card -->



            

            <!-- /.card -->

          </div>

          <!-- /.col -->

        </div>

        <!-- /.row -->

      </div>

      <!-- /.container-fluid -->

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  

  @endsection('contents')