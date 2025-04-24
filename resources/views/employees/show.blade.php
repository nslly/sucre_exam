@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto p-6 bg-white rounded-lg shadow mt-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Employee Details</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <h3 class="text-sm text-gray-500">First Name</h3>
                <p class="text-lg font-semibold text-gray-800">{{ $employee->first_name }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500">Last Name</h3>
                <p class="text-lg font-semibold text-gray-800">{{ $employee->last_name }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500">Gender</h3>
                <p class="text-lg font-semibold text-gray-800">{{ $employee->gender->name }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500">Birthday</h3>
                <p class="text-lg font-semibold text-gray-800">{{ \Carbon\Carbon::parse($employee->birthday)->format('F d, Y') }}</p>
            </div>

            <div>
                <h3 class="text-sm text-gray-500">Monthly Salary</h3>
                <p class="text-lg font-semibold text-gray-800">₱{{ number_format($employee->monthly_salary, 2) }}</p>
            </div>
        </div>

        <div class="mt-6">
            <a href="{{ route('employees.index') }}" class="text-blue-600 hover:underline">← Back to Employee List</a>
        </div>
    </div>
@endsection
