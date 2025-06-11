@extends('layouts.app')
@section('content')

	 <a class="btn btn-primary float-end" href="{{ route('students.index') }}"><strong>BACK</strong></a>

<div class="row">
	<div class="col-md-6">
		<div class="card mb-3" style="max-width: 450px;height: 185px;background-color:ghostwhite;" >
  <div class="row g-0">
    <div class="col-md-3">
      <img src="{{ asset('uploads/students/'.$student->student_image)}}" class="img-fluid rounded-start" alt="" style="margin-left: 10px;width: 100px;height: 100px;">
      <h6 class="card-title text-center"><strong>ID : {{$student->student_id}}</strong></h6>
      <h6 class="card-title text-center"><strong>{{$student->gender}}</strong></h6>
      <h6 class="card-title text-center"><strong>BLOOD : {{$student->blood_group}}</strong></h6>
    
    </div>
    <div class="col-md-9" >
    	<div class="card-header">
      	<h6 class="text-uppercase" style="background-color:ghostwhite;"><strong>Tamil Nadu Educationcal School</strong></h6>
      	  </div>
      <div class="card-body" style="background-color:lightpink;max-width: 450px;height: 140px;" >
      
      	<div class="row">
      	  <div class="col-md-12">
      	  	<p class="card-text text-uppercase"><strong>NAME : {{$student->student_name}}</strong></p>
      	  </div>
      	  </div>

      	  <div class="row">
      	  <div class="col-md-6">
      	  	 <p class="card-text text-uppercase"><strong>DOB : {{ date('d-m-Y', strtotime($student->dob)) }}</strong></p> 
      	  </div>

      	  <div class="col-md-6">
      	  	 <p class="card-text text-uppercase"><strong>CLASS : {{$student->class_section}}</strong></p>
      	  </div> 
      	</div>

      	<div class="row">
      	  <div class="col-md-12">
      	  	<p class="card-text text-uppercase"><strong>FATHER NAME : {{$student->student_father_name}}</strong></p>
      	  </div>
      	  </div>

      	  <div class="row">
      	  <div class="col-md-12">
      	  	<p class="card-text text-uppercase"><strong>CONTACT NO : {{$student->mobile}}</strong></p>
      	  </div>
      	  </div>   	     	  	
              </div>
    </div>
  </div>
</div>
		
	</div>

	<div class="col-md-6">
		<div class="card mb-3" style="max-width: 450px;height: 185px;background-color:ghostwhite" >
  <div class="row g-0">
    <div class="col-md-3">
      <img src="{{ asset('uploads/students/'.$student->student_image)}}" class="img-fluid rounded-start" alt="" style="margin-left: 10px;width: 100px;height: 100px;">
      <h6 class="card-title text-center"><strong>ID : {{$student->student_id}}</strong></h6>
      <h6 class="card-title text-center"><strong>{{$student->gender}}</strong></h6>
      <h6 class="card-title text-center"><strong>BLOOD : {{$student->blood_group}}</strong></h6>
    
    </div>
    <div class="col-md-9" >
    	<div class="card-header">
      	<h6 class="text-uppercase" style="background-color:ghostwhite;"><strong>Tamil Nadu Educationcal School</strong></h6>
      	  </div>
      <div class="card-body" style="background-color:lightpink;max-width: 450px;height: 140px;" >
      
      	<div class="row">
      	  <div class="col-md-12">
      	  	<h6 class="card-text text-uppercase"><strong>CONTACT ADDRESS : </strong></h6>
      	  </div>
      	  </div>  
      	  <div class="row">
      	  <div class="col-md-12">
      	  	<h6 class="card-text text-uppercase text-wrap"><strong>{{$student->contact_address}}</strong></h6>
      	  </div>
      	  </div>
      </div>
    </div>
  </div>
</div>
		
	</div>
</div>

@endsection