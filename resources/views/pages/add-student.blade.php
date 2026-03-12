@extends('layouts/app')
@section('content')
<section class="max-w-6xl mx-auto py-10 px-6">
    <div class="max-w-xl mx-auto mt-10">

        <h2 class="text-2xl font-bold mb-6">Add Student</h2>

        <form action="{{ route('student.save') }}" method="POST" class="space-y-4">

            @csrf

            <input type="text" name="student_name" placeholder="Student Name"
                class="w-full border p-2 rounded">

            <input type="text" name="class" placeholder="Class"
                class="w-full border p-2 rounded">

            <input type="number" name="roll" placeholder="Roll"
                class="w-full border p-2 rounded">

            <input type="email" name="email" placeholder="Email"
                class="w-full border p-2 rounded">

            <input type="date" name="birth_date"
                class="w-full border p-2 rounded">

            <select name="gender" class="w-full border p-2 rounded">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <select name="status" class="w-full border p-2 rounded">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>

            <button class="bg-green-500 text-white px-5 py-2 rounded">
                Save Student
            </button>

        </form>

    </div>
</section>
@endsection()