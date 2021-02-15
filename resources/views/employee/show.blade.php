@extends('master')

@section('content')
 
<div class="card">

  <div class="card-header">
    <h2>{{$employee->name_prefix}} {{$employee->first_name}}  {{$employee->middle_initial}} {{$employee->last_name}} </h2>
  </div>

  <div class="card-body">
    <h3>Contact Information</h3>
    <p>
      {{$employee->email}} {{$employee->phone_no}}
    </p>
  </div>

  @auth
  <div class="card-body">
    <h3>Address</h3>
    <p>
      {{$employee->city}} {{$employee->state}} {{$employee->zip_code}} 
    </p>
  </div>

  <div class="card-body">
    <h3>Company Details</h3>

    <p>
      Employee ID: {{$employee->employee_id}} 
    </p>

    <p>
      Date of Joining: {{$employee->date_of_joining}} 
    </p>

    <p>
      Salary: {{$employee->salary}} 
    </p>

  </div>


  <div class="card-body">
    <h3>Personal Information</h3>
    <p>
      Gender: {{$employee->gender}}  
    </p>

    <p>
      DOB: {{$employee->date_of_birth}}  
    </p>

    <p>
      SSN: {{$employee->ssn}}  
    </p>

    <p>
      Father's Name: {{$employee->father_name}}  
    </p>

    <p>
      Mother's Name: {{$employee->mother_name}}  
    </p>

    <p>
      Mother's Maiden Name: {{$employee->mother_maiden_name}}  
    </p>
  </div>

  <div class="card-body">
        <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-info">Edit</a>

         <form onsubmit="return confirm('Are you sure you want to delete this Employee?')" class="d-inline-block" method="post" action="{{route('employee.destroy', $employee->id)}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger ">Delete</button>
        </form>
   </div>
   @endauth

</div>
@endsection