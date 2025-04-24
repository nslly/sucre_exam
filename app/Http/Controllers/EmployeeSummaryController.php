<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Enums\GenderIdentification;

class EmployeeSummaryController extends Controller
{
    /**
     * Display summary statistics of employees.
     * 
     * @return View
     */
    public function __invoke(): View
    {
        $employees = Employee::all();
    
        $maleCount = $employees->where('gender', 1)->count();
        $femaleCount = $employees->where('gender', 2)->count();
    
        $averageAge = $employees->average(function ($employee) {
            return Carbon::parse($employee->birthday)->age;
        });
    
        $totalSalary = $employees->sum('monthly_salary');
    
        return view('employees.summary', compact('maleCount', 'femaleCount', 'averageAge', 'totalSalary'));
    }
}
