@extends('layouts.app')
@section('content')

      <div class="card">
        <div class="card-header">
            <h5>
                STUDENT EDIT PAGE
                <a class="btn btn-primary float-end" href="{{ route('students.index') }}"><strong>BACK</strong></a>
            </h5>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('students.update', $student->id ) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="student_id">ID</label>
                     <div class="control">
                        <input class="form-control" type="text" name="student_id" id="student_id" value="{{$student->student_id}}" readonly>
                     </div>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="gender">Gender</label>
                     <div class="control">
                         <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input {{ $errors->has('gender') ? 'Male' : 'is-invalid'}}" type="radio" value="Male" {{ $student->gender == 'Male' ? 'checked' : ''}} id="male" name="gender" >
                        <label class="custom-control-label" for="male">Male</label>
                         </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input {{ $errors->has('gender') ? 'Female' : 'is-invalid'}}" type="radio" value="Female" {{ $student->gender == 'Female' ? 'checked' : ''}} id="female" name="gender" >
                        <label class="custom-control-label" for="female">Female</label>
                        </div>
                        @if($errors->has('gender'))
                        <p class="help-block text-danger">{{ $errors->first('gender') }}</p>
                        @endif
                     </div>
                  </div>
               </div>            
         </div>

         
             
            
            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="student_name">Name</label>
                     <div class="control">
                        <input class="form-control {{ $errors->has('student_name') ? 'is-invalid' : ''}}" type="text" name="student_name" id="student_name" placeholder="enter student name" value="{{$student->student_name}}">
                        @if($errors->has('student_name'))
                        <p class="help-block text-danger">{{ $errors->first('student_name') }}</p>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="student_father_name">Father Name</label>
                     <div class="control">
                        <input class="form-control {{ $errors->has('student_father_name') ? 'is-invalid' : ''}}" type="text" name="student_father_name" id="student_father_name" placeholder="enter student father name" value="{{$student->student_father_name}}">
                        @if($errors->has('student_father_name'))
                        <p class="help-block text-danger">{{ $errors->first('student_father_name') }}</p>
                        @endif
                     </div>
                  </div>
               </div>

               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="mobile">Mobile</label>
                     <div class="control">
                        <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" type="text" name="mobile" id="mobile" maxlength="10" onkeypress="return onlyNumberKey(event)" placeholder="enter 10 digit mobile number only " value="{{$student->mobile}}">
                        @if($errors->has('mobile'))
                        <p class="help-block text-danger">{{ $errors->first('mobile') }}</p>
                        @endif
                     </div>
                  </div>
               </div>
               
            </div>

            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="class_section">Class & Section</label>
                     <div class="control">
                        <input class="form-control {{ $errors->has('class_section') ? 'is-invalid' : ''}}" type="text" name="class_section" id="class_section" placeholder="enter student class & section" value="{{$student->class_section}}">
                        @if($errors->has('class_section'))
                        <p class="help-block text-danger">{{ $errors->first('class_section') }}</p>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="dob">Birth Date</label>
                     <div class="control">
                        <input class="form-control {{ $errors->has('dob') ? 'is-invalid' : ''}}" type="date" name="dob" id="dob" value="{{$student->dob}}">
                        @if($errors->has('dob'))
                        <p class="help-block text-danger">{{ $errors->first('dob') }}</p>
                        @endif
                     </div>
                  </div>
               </div>
               <div class="col-sm-4">
                  <div class="form-group">
                      <label class="label" for="blood_group">Blood Group</label>
                     <div class="control">
                         <select class="form-control {{ $errors->has('blood_group') ? 'is-invalid' : ''}}" name="blood_group" id="blood_group" >
                        <option value="">select blood group</option>
                        <option value="A+"  {{ $student->blood_group == 'A+' ? 'selected' : ''}}>A+</option>
                        <option value="A-"  {{ $student->blood_group == 'A-' ? 'selected' : ''}}>A-</option>
                        <option value="B+"  {{ $student->blood_group == 'B+' ? 'selected' : ''}}>B+</option>
                         <option value="B-"  {{ $student->blood_group == 'B-' ? 'selected' : ''}}>B-</option>
                        <option value="AB+"  {{ $student->blood_group == 'AB+' ? 'selected' : ''}}>AB+</option>
                        <option value="AB-"  {{ $student->blood_group == 'AB-' ? 'selected' : ''}}>AB-</option>
                         <option value="O+"  {{ $student->blood_group == 'O+' ? 'selected' : ''}}>O+</option>
                        <option value="O-"  {{ $student->blood_group == 'O-' ? 'selected' : ''}}>O-</option>
                       
                     </select>
                      @if($errors->has('blood_group'))
                     <p class="help-block text-danger">{{ $errors->first('blood_group') }}</p>
                     @endif
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               
               <div class="col-sm-12">
                  <div class="form-group">
                     <label class="label" for="contact_address">Address</label>
                      <div class="control">
                     <textarea id="contact_address" name = "contact_address" rows="4" class="form-control {{ $errors->has('contact_address') ? 'is-invalid' : ''}}" placeholder="enter address">{{ $student->contact_address}}</textarea>
                     @if($errors->has('contact_address'))
                     <p class="help-block text-danger">{{ $errors->first('contact_address') }}</p>
                     @endif
                  </div>
                  </div>
               </div>               
            </div>

            <div class="row">

               <div class="col-sm-12">
                  <div class="form-group">
                    <label for="student_image" class="form-label">Student Image</label>
                     <div class="control justify-content-center">
                        <input type="file" name="student_image" class="form-control {{ $errors->has('class_section') ? 'is-invalid' : ''}}" id="student_image">

                         @if ($student->student_image !== "")
                            <img src="{{ asset('uploads/students/'.$student->student_image)}}" alt="" style="width:140px;height:140px">
                        @endif
                       
                        @if($errors->has('student_image'))
                        <p class="help-block text-danger">{{ $errors->first('student_image') }}</p>
                        @endif
                     </div>
                  </div>
               </div>
            </div>             

            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                    
                     <div class="control">
                        <input type="reset" name="reset" value="RESET" class="btn btn-danger" style="font-weight: bold;">
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-warning" style="font-weight: bold;">
                     </div>
                  </div>
               </div> 
            </div> 
</form>

        </div>
    </div>


@endsection

             



           
           
         
