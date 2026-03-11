@extends('layouts/app')
@section('content')
<!-- BANNER -->

<section>
    <img
        src="https://www.sittechno.org/flashphotos/photos/a82abf2114cd06cc931b6457367bdee1.jpg"
        class="w-full" />
</section>

<!-- ABOUT SECTION -->

<section class="max-w-6xl mx-auto py-10 px-6">
    <h2 class="text-3xl font-bold text-center mb-6">
        About Siliguri Institute of Technology
    </h2>

    <p class="text-gray-700 leading-relaxed text-center">
        Siliguri Institute of Technology is one of the leading engineering
        institutes in North Bengal. The institute offers undergraduate and
        postgraduate programs in engineering, technology, management and
        computer applications. The campus provides modern infrastructure,
        laboratories, libraries and facilities to support academic excellence
        and student development.
    </p>
</section>

<!-- CONTACT FORM -->

<section class="bg-white py-10">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>

        <form class="space-y-4">
            <input
                type="text"
                placeholder="Your Name"
                class="w-full border border-gray-300 p-3 rounded" />

            <input
                type="email"
                placeholder="Your Email"
                class="w-full border border-gray-300 p-3 rounded" />

            <input
                type="text"
                placeholder="Phone Number"
                class="w-full border border-gray-300 p-3 rounded" />

            <textarea
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
@endsection('content')