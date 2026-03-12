@extends('layouts/app')
@section('content')
<section class="max-w-6xl mx-auto py-10 px-6">
    <div class="max-w-5xl mx-auto mt-10">

        <div class="flex justify-between mb-6">
            <h2 class="text-2xl font-bold">Student List</h2>

            <a href="{{ route('student.add') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded">
                Add Student
            </a>
        </div>

        <table class="w-full border border-gray-300">

            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2 border">ID</th>
                    <th class="border">Name</th>
                    <th class="border">Class</th>
                    <th class="border">Roll</th>
                    <th class="border">Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($students as $student)

                <tr class="text-center">
                    <td class="border p-2">{{ $student->id }}</td>
                    <td class="border">{{ $student->student_name }}</td>
                    <td class="border">{{ $student->class }}</td>
                    <td class="border">{{ $student->roll }}</td>

                    <td class="border">

                        <a href="{{ route('student.edit',$student->id) }}"
                            class="text-blue-500 mr-2">Edit</a>

                        <a href="{{ route('student.delete',$student->id) }}"
                            class="text-red-500">Delete</a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</section>
@endsection()