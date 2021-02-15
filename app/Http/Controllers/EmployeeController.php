<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function __construct () {
        $this->middleware('auth')->except(['index', 'show']);
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //this can be accessed by non-logged in user
        return view('employee.index',
            ['employees' => Employee::orderBy('last_name', 'asc')->get()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'employee_id'         => 'required',
            'name_prefix'         => 'required',
            'first_name'          => 'required',
            'middle_initial'      => 'required|max:1|min:1',
            'last_name'           => 'required',
             'gender'             => 'required|max:1|min:1',
             'email'              => 'required',
             'father_name'        => 'required',
             'mother_name'        => 'required',
             'mother_maiden_name' => 'required',
             'date_of_birth'      => 'required|max:10|min:10',
             'date_of_joining'    => 'required|max:10|min:10',
             'salary'             => 'required',
             'ssn'                => 'required|max:11|min:11',
             'phone_no'           => 'required|max:12|min:12',
             'city'               => 'required',
             'state'              => 'required|max:2|min:2',
             'zip_code'           => 'required',
        ]);

        Employee::create([
            'employee_id'         => $request->employee_id,
            'name_prefix'         => $request->name_prefix,
            'first_name'          => $request->first_name,
            'middle_initial'      => $request->middle_initial,
            'last_name'           => $request->last_name,
             'gender'             => $request->gender,
             'email'              => $request->email,
             'father_name'        => $request->father_name,
             'mother_name'        => $request->mother_name,
             'mother_maiden_name' => $request->mother_maiden_name,
             'date_of_birth'      => $request->date_of_birth,
             'date_of_joining'    => $request->date_of_joining,
             'salary'             => $request->salary,
             'ssn'                => $request->ssn,
             'phone_no'           => $request->phone_no,
             'city'               => $request->city,
             'state'              => $request->state,
             'zip_code'           => $request->zip_code,
        ]);

        session()->flash('message', 'New Employee has been added successfully!');
        return redirect(route('employee.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employee.show', ['employee' => $employee] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $this->validate($request, [
            'employee_id'         => 'required',
            'name_prefix'         => 'required',
            'first_name'          => 'required',
            'middle_initial'      => 'required|max:1|min:1',
            'last_name'           => 'required',
             'gender'             => 'required|max:1|min:1',
             'email'              => 'required',
             'father_name'        => 'required',
             'mother_name'        => 'required',
             'mother_maiden_name' => 'required',
             'date_of_birth'      => 'required|max:10|min:10',
             'date_of_joining'    => 'required|max:10|min:10',
             'salary'             => 'required',
             'ssn'                => 'required|max:11|min:11',
             'phone_no'           => 'required|max:12|min:12',
             'city'               => 'required',
             'state'              => 'required|max:2|min:2',
             'zip_code'           => 'required',
        ]);


        $employee->employee_id         = $request->employee_id;
        $employee->name_prefix         = $request->name_prefix;
        $employee->first_name          = $request->first_name;
        $employee->middle_initial      = $request->middle_initial;
        $employee->last_name           = $request->last_name;
        $employee->gender              = $request->gender;
        $employee->email               = $request->email;
        $employee->father_name         = $request->father_name;
        $employee->mother_name         = $request->mother_name;
        $employee->mother_maiden_name  = $request->mother_maiden_name;
        $employee->date_of_birth       = $request->date_of_birth;
        $employee->date_of_joining     = $request->date_of_joining;
        $employee->salary              = $request->salary;
        $employee->ssn                 = $request->ssn;
        $employee->phone_no            = $request->phone_no;
        $employee->city                = $request->city;
        $employee->state               = $request->state;
        $employee->zip_code            = $request->zip_code;

        $employee->save();

        session()->flash('message', 'Employee updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect(route('employee.index'));
    }
}
