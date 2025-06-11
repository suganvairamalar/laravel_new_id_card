@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-12">
       @if(Session::has('success_msg'))
            <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
            @endif
            
            @if(Session::has('update_msg'))
            <div class="alert alert-warning">{{ Session::get('update_msg') }}</div>
            @endif

            @if(Session::has('delete_msg'))
            <div class="alert alert-danger">{{ Session::get('delete_msg')}}</div>
            @endif
<div class="card" style="background-color: ivory;">
   <div class="card-header">
      <div class="row">
        <div class="col-lg-12 margin-tb">
               
                    <a href="{{ route('students.get_card') }}" class="btn btn-secondary"><strong>GET ID CARD</strong></a>

                    <a href="{{ route('students.create') }}" class="btn btn-primary float-end"><strong>ADD NEW</strong></a>
               
        </div>
    </div>
     
   </div>
   <div class="card-body" >
      @if(!empty($students))   
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <table class="table table-bordered table-striped table-hover table-condensed ">
                <thead >
                    <tr >
                    <th >S.NO</th>
                    <th >IMAGE</th>
                    <th >ID</th>
                    <th >NAME</th>
                    <th >DOB</th>
                    <th >FATHER NAME</th>
                    <th >MOBILE</th>
                    <th >ACTION</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($students as $student)
                 
                    <tr>
                        <td class="table-text">
                            <div>{{ $loop->iteration + (($students->currentPage() - 1) * $students->perPage()) }}</div>
                        </td>
                        <td class="table-text">
                           @if ($student->student_image !== "")
                            <div>
                            <img src="{{ asset('uploads/students/'.$student->student_image)}}" alt="" style="width:75px;height:75px">
                       </div>
                        @endif
                        </td> 
                        <td class="table-text">
                            <div>{{ $student->student_id }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $student->student_name }}</div>
                        </td>
                         <td class="table-text">
                            <div>{{ date('d-m-Y', strtotime($student->dob)) }}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $student->student_father_name}}</div>
                        </td>                       
                        <td class="table-text">
                            <div>{{ $student->mobile}}</div>
                        </td>
                        <td>
                            <a href="{{ route('students.card', $student->id) }}" class="btn btn-success"><strong>CARD</strong></a>
                            <a href="{{ route('students.detail', $student->id) }}" class="btn btn-info"><strong>DETAIL</strong></a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning"><strong>EDIT</strong></a>
                            <a href="{{ route('students.delete', $student->id) }}" class="btn btn-danger" onclick="return confirm('Are sure want to delete this record?')"><strong>DELETE</strong></a>

                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
      @endif
      {{ $students->links('pagination::bootstrap-5') }}
   </div>
</div>

</div>
</div>
@endsection