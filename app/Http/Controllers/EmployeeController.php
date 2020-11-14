<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function viewAll()
    {
        $employees = Employee::orderBy('created_at', 'DESC');
        $employees = $employees->get();

        return view('all-employee')->with('employees', $employees);
    }

    public function edit(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();

        return view('edit-employee')->with('employee', $employee);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::where('id', $id)->first();

        $employee->name = $request->name;
        $employee->lastname = $request->lastname;
        $employee->birthdate = $request->birthdate;
        $employee->personal_id = $request->personal_id;
        $employee->salary = $request->salary;

        $employee->save();

        return redirect()->route('employees.all');
    }

    public function addNew(Request $request)
    {
        Employee::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'birthdate' => $request->birthdate,
            'personal_id' => $request->personal_id,
            'salary' => $request->salary,
        ]);

        return redirect()->route('employees.all');
    }

    public function delete(Request $request)
    {
        Employee::where('id', $request->employee_id)->delete();

        return redirect()->route('employees.all');
    }
}
