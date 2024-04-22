<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index()
{
    $employees = Employee::all();
    $allEmployeesCount = $employees->count(); // Get the total count of all employees
    $currentEmployeesCount = Employee::where('status', 'current')->count();
    $pastEmployeesCount = Employee::where('status', 'past')->count();
    return view('pages.index', compact('employees', 'allEmployeesCount', 'currentEmployeesCount', 'pastEmployeesCount'));
}

public function edit($id)
{
    $employee = Employee::findOrFail($id);
    return view('pages.edit', compact('employee'));
}

public function show($id)
{
    $employee = Employee::findOrFail($id);
    return view('pages.profile', compact('employee'));
}

public function store(Request $request)
{
    $employee = new Employee();
    // Set employee attributes from request data
    $employee->full_name = $request->input('full_name');
    $employee->personal_email_address = $request->input('personal_email_address');
    $employee->phone_number = $request->input('phone_number');
    $employee->home_address = $request->input('home_address');
    $employee->dob = $request->input('dob');
    $employee->sex = $request->input('sex');
    $employee->national_id = $request->input('national_id');
    $employee->next_of_kin = json_encode(explode(',', $request->input('next_of_kin'))); // Convert to a JSON string
    $employee->dependents = json_encode(explode(',', $request->input('dependents'))); // Convert to a JSON string
    $employee->company_id = $request->input('company_id');
    $employee->company_email_address = $request->input('company_email_address');
    $employee->position = $request->input('position');
    $employee->department = $request->input('department');
    $employee->start_date = $request->input('start_date');
    $employee->status = $request->input('status');
    
    if ($request->hasFile('cv')) {
        $cv = $request->file('cv');
        $cvName = time().'.'.$cv->getClientOriginalExtension();
        $cv->storeAs('cvs', $cvName, 'public');
        $employee->cv = $cvName;
    }
    
    // Save the employee
    $employee->save();
    
    return redirect('/')->with('success', 'Employee Added Successfully');
}

public function downloadAttachment($id)
    {
        $employee = Employee::findOrFail($id);
        $file = public_path('storage/cvs').'/'. $employee->cv;
        return response()->download($file);
    }

public function add(){
    return view("pages.add");
}

public function update(Request $request, $id)
{
    $employee = Employee::findOrFail($id);
    // Update employee attributes from request data
    $employee->full_name = $request->input('full_name');
    $employee->personal_email_address = $request->input('personal_email_address');
    $employee->phone_number = $request->input('phone_number');
    $employee->home_address = $request->input('home_address');
    $employee->dob = $request->input('dob');
    $employee->sex = $request->input('sex');
    $employee->national_id = $request->input('national_id');
    $employee->next_of_kin = json_encode(explode(',', $request->input('next_of_kin'))); // Convert to a JSON string
    $employee->dependents = json_encode(explode(',', $request->input('dependents'))); // Convert to a JSON string
    $employee->company_id = $request->input('company_id');
    $employee->company_email_address = $request->input('company_email_address');
    $employee->position = $request->input('position');
    $employee->department = $request->input('department');
    $employee->start_date = $request->input('start_date');
    $employee->status = $request->input('status');

    if ($request->hasFile('cv')) {
        $cv = $request->file('cv');
        $cvName = time().'.'.$cv->getClientOriginalExtension();
        $cv->storeAs('cvs', $cvName, 'public');
        $employee->cv = $cvName;
    }
    // Update other attributes as needed
    $employee->save();

    return redirect('/');
}

public function destroy($id)
{
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect('/');
}

public function pastEmployees() {
    $employees = Employee::where('status', 'past')->get();
    return view('pages.past', ['employees' => $employees]);
}

public function currentEmployees() {
    $employees = Employee::where('status', 'current')->get();
    return view('pages.current', ['employees' => $employees]);
}

}


