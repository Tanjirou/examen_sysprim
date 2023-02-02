<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Employee as ModelEmployee;

class Employee extends Component
{
    public $employees;
    public ModelEmployee $employee;

    public function mount()
    {
        $this->employees = DB::table('employees')
            ->join('employee_departments', 'employees.id','=','employee_departments.employee_id')
            ->join('departments', 'departments.id','=','employee_departments.department_id')
            ->select('employees.*','departments.name as departments')->get();
        $this->employee = new ModelEmployee();
    }

    public function remove($id)
    {
        DB::table('employees')->where('id','=',$id)->update(['status'=> 'R']);
        $this->mount();
    }

    public function disincorporate($id)
    {
        DB::table('employees')->where('id','=',$id)->update(['status'=> 'D']);
        $this->mount();
    }

    public function render()
    {
        return view('livewire.employee');
    }
}
