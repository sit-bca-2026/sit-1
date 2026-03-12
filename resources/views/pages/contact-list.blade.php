@extends('layouts/app')
@section('content')

<section class="bg-white py-10">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-2xl font-bold mb-5">Contact Messages</h2>

        <table class="w-full border">

            <tr class="bg-gray-200">
                <th class="p-2">Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>

            @foreach($contacts as $contact)

            <tr class="border">
                <td class="p-2">{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
            </tr>

            @endforeach

        </table>
    </div>
</section>
@endsection