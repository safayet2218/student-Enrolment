@extends('layout')
@section('content')

<!-- partial -->
          
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <p class="alert-success">
                      <?php
                      $exception=Session::get('exception');
                      if($exception){
                        echo $exception;
                        Session::put('exception',null);

                      }
                      ?>
                     </p>

              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Teacher Name</th>
                          <th>Teacher phone</th>
                          <th>Teacher Address</th>
                          <th>Teacher image</th>
                          <th>Teacher Department</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($all_teacher_info as $v_teacher)
                      <tr>
                          <td>{{$v_teacher->teachers_name}}</td>
                          <td>{{$v_teacher->teachers_phone}}</td>
                          <td>{{$v_teacher->teachers_address}}</td>
                          <td><img src="{{URL::to($v_teacher->teachers_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>
                          		@if($v_teacher->teachers_department==1)
                          			<span class="label label-success">{{'CSE'}}</span>
                          		@elseif($v_teacher->teachers_department==2)
                          			<span class="label label-success">{{'BBA'}}</span>
                          		@elseif($v_teacher->teachers_department==3)
                          			<span class="label label-success">{{'EEE'}}</span>
                          		@elseif($v_teacher->teachers_department==4)
                          			<span class="label label-success">{{'ECE'}}</span>
                          		@elseif($v_teacher->teachers_department==5)
                          			<span class="label label-success">{{'MBA'}}</span>
                          		@else
                          			<span class="label label-success">{{'Not defined'}}</span>
                          		@endif
                          </td>
                          
                          <td>
                            <a href="{{URL::to('')}}" id="delete"><button class="btn btn-outline-danger">Delete</button></a>


                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        

@endsection