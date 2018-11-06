@extends('layout')
@php
	function convert_department($value){
	$values =[
		1=>'CSE',
		2=>'BBA',
		3=>'ECE',
		4=>'EEE',
		5=>'MBA',
	];
	return $values[$value];
}
@endphp
@section('content')

<!-- partial -->
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-6">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="{{URL::to($student_description_profile->student_image)}}" alt="">
                  <p class="name">{{$student_description_profile ->student_name}}</p>
                  <p class="designation">{{$student_description_profile ->student_roll}}</p>
                  <a class="email" href="#">{{$student_description_profile ->student_email}}</a>
                  <a class="number" href="#">{{$student_description_profile ->student_phone}}</a>
                </div>
              </div>
              <div class="card mb-6">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>34</p><p>Projects</p></li>
                    <li><p>23</p><p>Task</p></li>
                    <li><p>29</p><p>Completed</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-6 mb-3">About</h2>
                    <p>The total information of this student are given below</p>
                  </div>
                  <div class="info-links">
                    <a class="website">
                      <i class="icon-globe icon"> Father name :</i>
                      <span style="font-family: vernada;font-size: 16px;">{{$student_description_profile ->student_fathername}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon">Mother name :</i>
                      <span style="font-family: vernada;font-size: 16px;">{{$student_description_profile ->student_mothername}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon"> Student Department :</i>
                      <span style="font-family: vernada;font-size: 16px;">{{convert_department($student_description_profile ->student_department)}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon"> Student address :</i>
                      <span style="font-family: vernada;font-size: 16px;">{{$student_description_profile ->student_address}}</span>
                    </a>
                    <a class="website">
                      <i class="icon-globe icon"> Student admission year :</i>
                      <span style="font-family: vernada;font-size: 16px;">{{$student_description_profile ->student_admissionyear}}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>


@endsection