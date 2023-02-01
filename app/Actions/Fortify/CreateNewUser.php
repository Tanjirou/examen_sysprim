<?php

namespace App\Actions\Fortify;

use App\Models\Employee;
use App\Models\EmployeeDepartment;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'dni' => ['required','string','min:6', 'max:8', 'unique:employees'],
            'name' => ['required','string' ,'min:6', 'max:255'],
            'date_birth' => ['required','date'],
            'gender' => ['required']
        ])->validate();

        $user = User::create([
            'user_type'=> 1,
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        $employee = Employee::create([
            'user_id' => $user->id,
            'dni' => $input['dni'],
            'names' => $input['name'],
            'date_birth'=> $input['date_birth'],
            'gender' => $input['gender'],
            'status' => 'A'
        ]);

        EmployeeDepartment::create([
            'department_id' =>1,
            'employee_id' => $employee->id
        ]);
        return $user;
    }
}
