@extends('master')
@section('content')

<h2 class="my-3">Create Employee</h2>

@if($errors->all())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </div>
@endif


<form action="{{route('employee.store')}}" method="post">
  @csrf

  <div class="form-group">
    <label for="employee_id">Employee ID</label>
    <input type="number" name="employee_id" id="employee_id" class="form-control">
  </div>

  <div class="form-group">
    <label for="name_prefix">Name Prefix</label>
    <input type="text" name="name_prefix" id="name_prefix" placeholder="'Dr.', 'Mr.', 'Mrs.', etc" class="form-control">
  </div>

  <div class="form-group">
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control">
  </div>

  <div class="form-group">
    <label for="middle_initial">Middle Initial</label>
    <input type="text" name="middle_initial" id="middle_initial" minlength="1" maxlength="1" class="form-control">
  </div>

  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control">
  </div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" minlength="1" maxlength="1" placeholder="Capital 'M' or 'F'" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="sample@domain.com" class="form-control">
  </div>

  <div class="form-group">
    <label for="father_name">Father's Name</label>
    <input type="text" name="father_name" id="father_name" class="form-control">
  </div>

  <div class="form-group">
    <label for="mother_name">Mother's Name</label>
    <input type="text" name="mother_name" id="mother_name" class="form-control">
  </div>

  <div class="form-group">
    <label for="mother_maiden_name">Mother's Maiden Name</label>
    <input type="text" name="mother_maiden_name" id="mother_maiden_name" class="form-control">
  </div>

  <div class="form-group">
    <label for="date_of_birth">Date of Birth</label>
    <input type="text" name="date_of_birth" id="date_of_birth" placeholder="MM/DD/YYYY" minlength="10" maxlength="10" class="form-control">
  </div>

  <div class="form-group">
    <label for="date_of_joining">Date of Joining</label>
    <input type="text" name="date_of_joining" id="date_of_joining" placeholder="MM/DD/YYYY" minlength="10" maxlength="10" class="form-control">
  </div>

  <div class="form-group">
    <label for="salary">Salary</label>
    <input type="number" name="salary" id="salary" class="form-control">
  </div>

  <div class="form-group">
    <label for="ssn">SSN</label>
    <input type="text" name="ssn" id="ssn" placeholder="###-##-####" minlength="11" maxlength="11" class="form-control">
  </div>

  <div class="form-group">
    <label for="phone_no">Phone Number</label>
    <input type="text" name="phone_no" id="phone_no" placeholder="###-###-####" minlength="12" maxlength="12" class="form-control">
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input type="text" name="city" id="city" class="form-control">
  </div>

  <div class="form-group">
    <label for="state">State</label>
    <input type="text" name="state" id="state" minlength="2" maxlength="2" placeholder="'CA', 'VA', etc." class="form-control">
  </div>

  <div class="form-group">
    <label for="zip_code">Zip Code</label>
    <input type="number" name="zip_code" id="zip_code" class="form-control">
  </div>



  <div class="form-group">
    <button type="submit" class="btn btn-outline-info">Add Employee</button>
  </div>

</form>
@endsection