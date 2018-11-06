@extends('student_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Update your profile </h2>
                          <p class="alert-success">
			                <?php
			                $exception=Session::get('exception');
			                if($exception){
			                  echo $exception;
			                  Session::put('exception',null);

			                }
			                ?>
			               </p>

                          <form class="forms-sample" method="post" action="{{URL::to('/update_student',$student_description_profile->student_id)}}">
                          	{{ csrf_field() }}
                             
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone" value="{{($student_description_profile->student_phone)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student Addres</label>
                                  <input type="text" class="form-control p-input" name="student_address" value="{{($student_description_profile->student_address)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Student password</label>
                                  <input type="password" class="form-control p-input" name="student_password" value="{{($student_description_profile->student_password)}}">
                              
                              
                              
                              
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>

@endsection