@extends('master')

@section('content')

@if (session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
  </div>
@endif

        <h1>All Employees</h1>

        @foreach ($employees as $employee)

            <div class="card mt-4">
                <div class="card-body">
                    <h2>
                        <a href="{{ route('employee.show', $employee->id)}}">
                            {{$employee->first_name}} {{$employee->last_name}}
                        </a>
                    </h2>
                </div>
            </div>
            
        @endforeach

@endsection