<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Livewire\Department;
use App\Http\Livewire\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if (Schema::hasTable('users') && count(DB::table('users')->get())>0)
{
    Route::get('/register', function() {
        return redirect('/login');
    });
}
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth','department'])->get('/department', Department::class)->name('department.index');
Route::middleware(['auth','department'])->get('/employee', Employee::class)->name('employee.index');
Route::get('/employee/create',[EmployeesController::class, 'create'])->name('employee.create');
Route::post('/employee/store',[EmployeesController::class, 'store'])->name('employee.store');
