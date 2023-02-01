<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmployeeDepartment;
use Illuminate\Support\Facades\DB;
use App\Models\Department as ModelsDepartment;

class Department extends Component
{
    public $departments;
    public ModelsDepartment $department;

    protected  $rules = ['department.name'=>'required|max:40|min:3'];
    public function mount()
    {
        $this->departments = ModelsDepartment::orderBy('id','desc')->get();
        $this->department = new ModelsDepartment();
    }
    public function save()
    {
        $this->validate();
        $this->department->save();
        $this->mount();

        session()->flash('message','Departamento guardado correctamente');

    }
    public function edit(ModelsDepartment $department)
    {
        $this->department = $department;
    }

    public function delete($id)
    {
        $departmentToDelete = ModelsDepartment::find($id);
        if(!is_null($departmentToDelete))
        {
            $employee_department = EmployeeDepartment::where('department_id','=',$id)->get();
            if(count($employee_department)>0)
            {
                session()->flash('message-error','No se puede eliminar este departamento, hay empleados asociados al mismo.');
            }
            else{
                $departmentToDelete->delete();
                session()->flash('message','Departamento eliminado correctamente.');
                $this->mount();
            }
        }
    }
    public function render()
    {

        return view('livewire.department');
    }
}
