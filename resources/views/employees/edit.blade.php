@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Edit Employee</h2>

        <form action="{{ route('employees.update', $employee) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" name="first_name" id="first_name" required value="{{ old('first_name', $employee->first_name) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('first_name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" name="last_name" id="last_name" required value="{{ old('last_name', $employee->last_name) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('last_name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select name="gender" id="gender" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select gender</option>
                    @foreach(App\Enums\GenderIdentification::cases() as $gender)
                        <option value="{{ $gender->value }}"
                            @selected(old('gender', $employee->gender->value) == $gender->value)>
                            {{ $gender->name }}
                        </option>
                    @endforeach
                </select>
                @error('gender')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>
            

            <div>
                <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                <input type="date" name="birthday" id="birthday" required 
                    value="{{ old('birthday', $employee->birthday ? \Carbon\Carbon::parse($employee->birthday)->format('Y-m-d') : '') }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('birthday')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="monthly_salary" class="block text-sm font-medium text-gray-700">Monthly Salary</label>
                <input type="number" name="monthly_salary" id="monthly_salary" required min="1" step="0.01"
                    value="{{ old('monthly_salary', $employee->monthly_salary) }}"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                @error('monthly_salary')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                    Update Employee
                </button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('employees.index') }}" class="text-blue-600 hover:underline">← Back to Employee List</a>
        </div>
    </div>
@endsection
