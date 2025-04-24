@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Employee List</h2>
        <div class="space-x-8">
            <a href="{{ route('employees.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                + Add Employee
            </a>
            <a href="{{ route('employees.summary') }}" class="inline-block px-4 py-2 bg-green-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-green-700 transition">
                Summary
            </a>
        </div>
        
    </div>

    @if(session('success'))
        <div class="mb-4 text-green-600 font-medium">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">First Name</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Last Name</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Gender</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Birthday</th>
                    <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Monthly Salary</th>
                    <th class="px-6 py-3 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse($employees as $employee)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $employee->first_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $employee->last_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ $employee->gender->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">{{ \Carbon\Carbon::parse($employee->birthday)->format('M d, Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-700">₱{{ number_format($employee->monthly_salary, 2) }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-right">
                            <a href="{{ route('employees.show', $employee) }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                View
                            </a>
                            <a href="{{ route('employees.edit', $employee) }}" class="ml-3 text-yellow-600 hover:text-yellow-800 text-sm font-medium">
                                Edit
                            </a>
                            <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="inline ml-3"
                                onsubmit="return confirm('Are you sure you want to delete this employee?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 text-sm font-medium">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                            No employees found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
