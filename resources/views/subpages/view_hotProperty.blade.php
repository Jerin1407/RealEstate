@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: '{{ asset('uploads/hotproperties/' . ($hotProperties->images->where('is_cover', 1)->first()->filename ?? 'images/no-image.jpg')) }}' }">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-8">

            <!-- Left Side: Image + Property Description -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Image Slider -->
                <div class="relative">
                    <!-- Main Image -->
                    <img :src="selectedImage" alt="Property Image" class="rounded-lg shadow w-full h-[400px] object-cover">

                    <!-- Thumbnails -->
                    <div class="flex mt-2 gap-2 overflow-x-auto">
                        @foreach ($hotProperties->images as $img)
                            <img src="{{ asset('uploads/hotproperties/' . $img->filename) }}"
                                @click="selectedImage = '{{ asset('uploads/hotproperties/' . $img->filename) }}'"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === '{{ asset('uploads/hotproperties/' . $img->filename) }}' ?
                                    'border-red-500' :
                                    'border-gray-200'">
                        @endforeach
                    </div>
                </div>

                <!-- Property Description -->
                <section class="bg-white py-10 px-6">
                    <div class="max-w-4xl mx-auto">

                        <!-- Property ID -->
                        <p class="text-red-600 font-bold mb-2">Featured Property</p>

                        <!-- Title -->
                        <h2 class="text-xl font-bold text-gray-900 mb-4">
                            {{ $hotProperties->title }}
                        </h2>

                        <!-- Key Facts -->
                        {{-- <h3 class="text-lg font-semibold text-gray-800 mb-2">KEY FACTS</h3>
                      <p class="text-gray-700 mb-4">
                        3 bedroom 2000SqFt, Commercial Villa available for rent Poothole near Thrissur.
                      </p>  --}}

                        <!-- Rent -->
                        {{-- <p class="text-gray-700 mb-4">
                        <span class="font-semibold">Rent Per Month:</span> ₹ 32000/-
                      </p> --}}

                        <!-- Villa details -->
                        <p class="text-gray-700 mb-4">
                            <span class="font-semibold">Property comprises of:</span><br>
                            {{ $hotProperties->description }}
                        </p>

                        <!-- Assistance -->
                        <p class="text-gray-700 mb-4">
                            For Professional assistance and for Better Deals contact <span class="font-semibold">GOD’s OWN
                                Properties Pvt. Ltd</span> @
                            <span class="font-bold">9447111233</span>.
                        </p>
                        @if ($hotProperties->youtubeurl)
                            @php
                                // Extract YouTube Video ID from URL
                                preg_match(
                                    '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([\w\-]+)/',
                                    $hotProperties->youtubeurl,
                                    $matches,
                                );
                                $videoId = $matches[1] ?? null;
                            @endphp

                            @if ($videoId)
                                <div class="mt-4">
                                    <iframe width="100%" height="450"
                                        src="https://www.youtube.com/embed/{{ $videoId }}" title="YouTube video"
                                        frameborder="0" allowfullscreen>
                                    </iframe>
                                </div>
                            @endif
                        @endif

                        <div class="mt-4">
                            <p class="text-gray-700">
                                GODs OWN Properties & Developers Pvt. Ltd., Ground Floor, N.P.Tower, Guruvayur Road,
                                Westfort,
                                Thrissur
                            </p>
                        </div>

                        <!-- Price + Location -->
                        {{-- <div class="flex justify-between items-center  py-4">
                        <p class="text-lg font-bold text-red-600">Rs. 32000</p>
                        <p class="text-lg font-bold text-red-600">Poothole</p>
                      </div>  --}}
                        <!-- Contact Details -->
                        <div class="mt-6 space-y-2">
                            <p class="text-gray-700 font-medium">
                                <span class="font-semibold">Contact</span> : GOD’s OWN Properties
                            </p>
                            <p class="text-gray-700 font-medium">
                                <span class="font-semibold">Contact Number</span> :
                                <a href="tel:+919447112333" class="text-gray-900 font-bold">9447112333</a>
                            </p>
                        </div>
                    </div>
                </section>

            </div>

            <!-- Right Side: Enquiry Form -->
            <div class="bg-white rounded-lg shadow-lg p-6 ">
                <h3 class="text-xl font-bold text-gray-900 my-4">Enquire About This Property</h3>
                <form class="space-y-4" action="{{ route('hotPropertyEnquiry') }}" method="POST">
                    @csrf

                    <!-- Hidden Fields -->
                    <input type="hidden" name="hot_property_id" value="{{ $hotProperties->id }}">

                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Your Name</label>
                        <input type="text" name="name" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Phone</label>
                        <input type="text" name="number" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email Id</label>
                        <input type="email" name="email" required
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Type your message</label>
                        <textarea rows="4" name="message"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none"></textarea>
                    </div>

                    <!-- Captcha -->
                    <div class="border border-gray-300 rounded-lg p-4 text-center">
                        <div class="flex items-center justify-center gap-3 mb-3">
                            <span id="captcha-img">{!! captcha_img('flat') !!}</span>
                            <button type="button" id="reload" class="text-blue-600 underline">Refresh</button>
                        </div>

                        <label class="block text-gray-700 mb-1">Enter the code above here:</label>
                        <input type="text" name="captcha" required
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-700 transition">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Alpine.js (for thumbnail click functionality) -->
    <script src="https://unpkg.com/alpinejs" defer></script>

    <script>
        // Success Alert
        @if (session('success_enquiry'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#10B981', // green color
                color: '#fff',
                iconColor: '#fff',
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            Toast.fire({
                icon: 'success',
                title: '{{ session('success_enquiry') }}'
            });
        @endif
    </script>

    <!-- Refresh Captcha Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ route('reloadCaptcha') }}',
                success: function(data) {
                    $('#captcha-img').html(data.captcha);
                }
            });
        });
    </script>

    @if ($errors->any())
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Oops!',
                text: '{{ $errors->first() }}',
                confirmButtonColor: '#dc2626',
                background: '#EF4444', // red color
                color: '#fff',
                iconColor: '#fff',
                toast: true,
            });
        </script>
    @endif
@endsection
