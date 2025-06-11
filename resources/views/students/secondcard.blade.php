@extends('layouts.app')
@section('content')
<div class="row">    
  <div class="col-sm-6">
    <div class="card">
    	<div class="card-header">Header</div>
    	
      <div class="card-body"style="background-color:#da3826;width:140px;height:14 0px;" >
      	<div class="row">
    	<div class="col-sm-4">
    	 @if ($student->student_image !== "")
         <img src="{{ asset('uploads/students/'.$student->student_image)}}" alt="image" style="width:120px;height:120px;">
         @endif
         <strong style="color:ivory;margin-left: 20px;" >ID:{{$student->student_id}}</strong>         
         </div>
         <div class="col-sm-8" >
    	  <strong style="color:ivory;margin-left: -45px;margin-bottom: -15px;" >NAME:{{$student->student_name}}</strong> 
         </div>
         </div>
      
      
  </div> 
  <div class="card-footer">Footer</div>
    </div>
</div>

 <div class="col-sm-6">
    <div class="card">
    	<div class="card-header">Header</div>
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
      <div class="card-footer">Footer</div>
    </div>
    </div>
  </div>
</div>
@endsection