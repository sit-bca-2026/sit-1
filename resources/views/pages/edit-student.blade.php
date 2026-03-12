@extends('layouts/app')
@section('content')
<section class="max-w-6xl mx-auto py-10 px-6">
    <div class="max-w-xl mx-auto mt-10">

        <h2 class="text-2xl font-bold mb-6">Edit Student</h2>

        <form action="{{ route('student.update',$student->id) }}" method="POST" class="space-y-4">

            @csrf

            <input type="text" name="student_name"
                value="{{ $student->student_name }}"
                class="w-full border p-2 rounded">

            <input type="text" name="class"
                value="{{ $student->class }}"
                class="w-full border p-2 rounded">

            <input type="number" name="roll"
                value="{{ $student->roll }}"
                class="w-full border p-2 rounded">

            <input type="email" name="email"
                value="{{ $student->email }}"
                class="w-full border p-2 rounded">

            <input type="date" name="birth_date"
                value="{{ $student->birth_date }}"
                class="w-full border p-2 rounded">

            <select name="gender" class="w-full border p-2 rounded">

                <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male</option>

                <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>Female</option>

            </select>

            <select name="status" class="w-full border p-2 rounded">

                <option value="1" {{ $student->status == 1 ? 'selected' : '' }}>Active</option>

                <option value="0" {{ $student->status == 0 ? 'selected' : '' }}>Inactive</option>

            </select>

            <button class="bg-blue-500 text-white px-5 py-2 rounded">
                Update Student
            </button>

        </form>

    </div>
</section>
@endsection()