<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use App\Models\UserType;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\EmployeeDepartment;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','department']);
    }
    public function create()
    {
        $user_types = UserType::get();
        $departments = Department::where('status','=','A')->get();
        return view('employee.create', compact('departments'), compact('user_types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','confirmed','min:8'],
            'dni' => ['required','string','min:6', 'max:8', 'unique:employees'],
            'name' => ['required','string' ,'min:6', 'max:255'],
            'date_birth' => ['required','date'],
            'gender' => ['required'],
            'department' => ['required'],
            'user_type' => ['required']
        ]);

        $user = User::create([
            'user_type'=> $data['user_type'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $employee = Employee::create([
            'user_id' => $user->id,
            'dni' => $data['dni'],
            'names' => $data['name'],
            'date_birth'=> $data['date_birth'],
            'gender' => $data['gender'],
            'status' => 'A'
        ]);

        EmployeeDepartment::create([
            'department_id' =>$data['department'],
            'employee_id' => $employee->id
        ]);
        return redirect('/employee')->with('message','Empleado registrado correctamente');
    }
}
