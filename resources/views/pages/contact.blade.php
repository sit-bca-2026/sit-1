@extends('layouts/app')
@section('content')

<section class="bg-white py-10">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>

        @if(session('success'))

        <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>

        @endif

        @if ($errors->any())

        <div class="bg-red-200 text-red-800 p-3 rounded mb-4">

            <ul>

                @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif


        <form class="space-y-4" action="{{ route('submit-contact') }}" method="post">
            @csrf
            <input
                name="fullname"
                type="text"
                placeholder="Your Name"
                value="{{old('fullname')}}"
                class="w-full border border-gray-300 p-3 rounded" />
            @error('fullname')

            <p class="text-red-500 text-sm">
                {{ $message }}
            </p>

            @enderror
            <input
                name="youremail"
                type="text"
                placeholder="Your Email"
                class="w-full border border-gray-300 p-3 rounded" />

            <input
                name="yourphone"
                type="text"
                placeholder="Phone Number"
                class="w-full border border-gray-300 p-3 rounded" />

            <textarea
                name="yourmessage"
                rows="4"
                placeholder="Your Message"
                class="w-full border border-gray-300 p-3 rounded"></textarea>

            <button
                type="submit"
                class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
                Send Message
            </button>
        </form>
    </div>
</section>
@endsection