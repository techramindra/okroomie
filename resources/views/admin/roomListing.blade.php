@extends('layouts.adminMaster')

@section('contents')

  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Room Listings</h1>

          </div>

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>

              <li class="breadcrumb-item active">Room Listings</li>

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

                    <th>Name</th>

                    <th>Email</th>

                    <th>Suburb</th>

                    <th>Weekely budget</th>

                    <th>Availability date</th>

                    <th>preferred_length_of_stay</th>

                    <th>Listing date</th>

                  

                  </tr>

                  </thead>

                  <tbody>

                  @foreach($payments as $key=>$val) 

                  <tr>

                    <td>{{$key+1}}</td>

                    <td>{{$val->your_first_name}}</td>

                    <td>{{$val->email}}</td>
                    <td>{{$val->suburb}}</td>
                    <td>{{$val->weekely_budget}}</td>


                   
                    <td>{{$val->date_available}}</td>
                    <td>{{$val->preferred_length_of_stay}}</td>
                  
                   
                    <td>{{date('d-m-Y',strtotime($val->created_at))}}</td>
                  
                    <!-- <td><a href="{{url('admin/users/'.encrypt($val->id))}}"><button  class="btn btn-warning">{{$val->user_block!=1? "Block" : "Unblock"}}</buttton></a></td> -->
                   
                    
                    

                  </tr>

                  @endforeach

                  

                  </tbody>

                  <tfoot>

                   

                  <tr>

                    <th>S.N</th>

                    <th>Name</th>

                    <th>Email</th>

                    <th>Suburb</th>

                    <th>Weekely budget</th>

                    <th>Availability date</th>

                    <th>preferred_length_of_stay</th>

                    <th>Listing date</th>

                   

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