@extends('layouts.app')

@section('content')
    <div class="max-w-4xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Employee Summary</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold">Gender Count</h2>
                <p>Male: {{ $maleCount }}</p>
                <p>Female: {{ $femaleCount }}</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-lg font-semibold">Average Age</h2>
                <p>{{ number_format($averageAge, 1) }} years</p>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 md:col-span-2">
                <h2 class="text-lg font-semibold">Total Monthly Salary</h2>
                <p>₱{{ number_format($totalSalary, 2) }}</p>
            </div>
        </div>
        <div class="mt-6">
            <a href="{{ route('employees.index') }}" class="text-blue-600 hover:underline">← Back to Employee List</a>
        </div>
    </div>
@endsection
