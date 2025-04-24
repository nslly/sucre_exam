@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10 px-6">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Add New Employee</h2>

        <form action="{{ route('employees.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6 space-y-6">
            @csrf

            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                @error('first_name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                @error('last_name')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <select id="gender" name="gender" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Select gender</option>
                    <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Male</option>
                    <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="birthday" class="block text-sm font-medium text-gray-700">Birthday</label>
                <input type="date" id="birthday" name="birthday" value="{{ old('birthday') }}" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                @error('birthday')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="monthly_salary" class="block text-sm font-medium text-gray-700">Monthly Salary (₱)</label>
                <input type="number" id="monthly_salary" name="monthly_salary" value="{{ old('monthly_salary') }}" step="0.01" required
                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                @error('monthly_salary')
                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <a href="{{ route('employees.index') }}" class="mr-3 inline-block px-4 py-2 text-sm text-gray-600 bg-gray-200 rounded hover:bg-gray-300">
                    Cancel
                </a>
                <button type="submit"
                        class="inline-block px-6 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700">
                    Save Employee
                </button>
            </div>
        </form>
    </div>
@endsection
