@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: '{{ asset('uploads/' . ($villa->images->where('is_cover', 1)->first()->filename ?? 'images/no-image.jpg')) }}' }">

        <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-8">

            <!-- Left Side: Image + Property Description -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Image Slider -->
                <div class="relative">
                    <img :src="selectedImage" alt="Property Image" class="rounded-lg shadow w-full h-[400px] object-cover">

                    <!-- Thumbnails -->
                    <div class="flex mt-2 gap-2 overflow-x-auto">
                        @foreach ($villa->images as $img)
                            <img src="{{ asset('uploads/' . $img->filename) }}"
                                @click="selectedImage = '{{ asset('uploads/' . $img->filename) }}'"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === '{{ asset('uploads/' . $img->filename) }}' ? 'border-red-500' :
                                    'border-gray-200'">
                        @endforeach
                    </div>
                </div>

                <!-- Property Description -->
                <div>
                    <h3 class="text-red-600 font-bold text-lg mb-2">{{ $villa->property_code }}</h3>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">{{ $villa->property_title }}</h2>

                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Property Description</h4>
                    <p class="text-gray-700 leading-relaxed mb-4">{{ strip_tags($villa->property_description) }}</p>

                    <p class="text-gray-700 mb-2"><span class="font-semibold">Asking Price:</span>
                        @php
                            if ($villa->price >= 10000000) {
                                $formattedPrice = round($villa->price / 10000000, 2) . ' Cr';
                            } elseif ($villa->price >= 100000) {
                                $formattedPrice = round($villa->price / 100000, 2) . ' L';
                            } else {
                                $formattedPrice = number_format($villa->price, 0);
                            }
                        @endphp
                        ₹{{ $formattedPrice }}
                    </p>

                    <p class="text-gray-700 mb-2">
                        <span class="font-semibold">Contact:</span> {{ $villa->contact_number }}
                    </p>

                    <div class="flex justify-between items-center mt-8">
                        <p class="text-xl font-bold text-red-600">
                            {{ $villa->locality->locality_name ?? 'N/A' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Enquiry Form -->
            <div class="bg-white rounded-lg shadow-lg p-6 md:h-3/4">
                <h3 class="text-xl font-bold text-gray-900 my-4">Enquire About This Property</h3>

                <form class="space-y-4">
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Your Name</label>
                        <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Phone</label>
                        <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email Id</label>
                        <input type="email" class="w-full border border-gray-300 rounded-md px-3 py-2">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Property ID</label>
                        <input type="text" value="{{ $villa->property_code }}" readonly
                            class="w-full border border-gray-300 rounded-md px-3 py-2 bg-gray-100 cursor-not-allowed">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Type your message</label>
                        <textarea rows="4" class="w-full border border-gray-300 rounded-md px-3 py-2"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-700 transition">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/alpinejs" defer></script>
@endsection
