@extends('layouts.app')
@section('content')
<script type="text/javascript">
         function generate_studentid() {
  var min = 1;
  var max = 999999;
  var num = Math.floor(Math.random() * (max - min + 1)) + min;
  //var timeNow = new Date().getTime();
  //document.getElementById('field10').value = num + '_' + timeNow;
  $('#student_id').val(num);
}
window.onload = generate_studentid;
setTimeout(function () {
  console.log($('#student_id').val());
}, 500);

/*function digitsOnly(obj) {
   obj.value = obj.value.replace(/\D/g, "");
}*/

function onlyNumberKey(evt) { 
      
      // Only ASCII charactar in that range allowed 
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
          return false; 
      return true; 
} 
      </script>

      <div class="card">
        <div class="card-header">
            <h5>
                STUDENT ADD PAGE
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

            <form action="{{ route('students.store') }}" method="GET" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="student_id">ID</label>
                     <div class="control">
                        <input class="form-control" type="text" name="student_id" id="student_id" readonly>
                     </div>
                  </div>
            </div>
            <div class="col-sm-4">
                  <div class="form-group">
                     <label class="label" for="gender">Gender</label>
                     <div class="control">
                         <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input {{ $errors->has('gender') ? 'Male' : 'is-invalid'}}" type="radio" value="Male" id="male" name="gender" >
                        <label class="custom-control-label" for="male">Male</label>
                         </div>
                        <div class="custom-control custom-radio custom-control-inline">
                        <input class="custom-control-input {{ $errors->has('gender') ? 'Female' : 'is-invalid'}}" type="radio" value="Female" id="female" name="gender" >
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
                        <input class="form-control {{ $errors->has('student_name') ? 'is-invalid' : ''}}" type="text" name="student_name" id="student_name" placeholder="enter student name">
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
                        <input class="form-control {{ $errors->has('student_father_name') ? 'is-invalid' : ''}}" type="text" name="student_father_name" id="student_father_name" placeholder="enter student father name">
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
                        <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" type="text" name="mobile" id="mobile" maxlength="10" onkeypress="return onlyNumberKey(event)" placeholder="enter 10 digit mobile number only ">
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
                        <input class="form-control {{ $errors->has('class_section') ? 'is-invalid' : ''}}" type="text" name="class_section" id="class_section" placeholder="enter student class & section">
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
                        <input class="form-control {{ $errors->has('dob') ? 'is-invalid' : ''}}" type="date" name="dob" id="dob">
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
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
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
                     <textarea id="contact_address" name = "contact_address" rows="4" class="form-control {{ $errors->has('contact_address') ? 'is-invalid' : ''}}" placeholder="enter address"></textarea>
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
                     <div class="control">
                        <input type="file" name="student_image" class="form-control {{ $errors->has('class_section') ? 'is-invalid' : ''}}" id="student_image">
                       
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
                        <input type="submit" name="submit" value="SUBMIT" class="btn btn-success" style="font-weight: bold;">
                     </div>
                  </div>
               </div> 
            </div>
</form>

        </div>
    </div>


@endsection

             



           
           
         
