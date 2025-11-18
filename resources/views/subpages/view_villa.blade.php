@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: '{{ asset('uploads/property/' . ($villa->images->where('is_cover', 1)->first()->filename ?? 'images/no-image.jpg')) }}' }">

        <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-8">

            <!-- Left Side: Image + Property Description -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Image Slider -->
                <div class="relative">
                    <img :src="selectedImage" alt="Property Image" class="rounded-lg shadow w-full h-[400px] object-cover">

                    <!-- Thumbnails -->
                    <div class="flex mt-2 gap-2 overflow-x-auto">
                        @foreach ($villa->images as $img)
                            <img src="{{ asset('uploads/property/' . $img->filename) }}"
                                @click="selectedImage = '{{ asset('uploads/property/' . $img->filename) }}'"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === '{{ asset('uploads/property/' . $img->filename) }}' ?
                                    'border-red-500' :
                                    'border-gray-200'">
                        @endforeach
                    </div>
                </div>

                <div>

                    <!-- Property Code -->
                    <h3 class="text-red-600 font-bold text-lg mb-2">{{ $villa->property_code }}</h3>

                    <!-- Property Title -->
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        {{ $villa->property_title }}
                    </h2>

                    <!-- Property Description -->
                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Property Description</h4>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        {{ strip_tags($villa->property_description) }}
                    </p>

                    <!-- Price -->
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Asking Price:</span> @php
                        if ($villa->price >= 10000000) {
                            $formattedPrice = round($villa->price / 10000000, 2) . ' Cr';
                        } elseif ($villa->price >= 100000) {
                            $formattedPrice = round($villa->price / 100000, 2) . ' L';
                        } else {
                            $formattedPrice = number_format($villa->price, 0);
                        }
                    @endphp
                        ₹ {{ $formattedPrice }} (Negotiable)</p>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Contact:</span> For professional assistance
                        and better deals contact <span class="font-semibold">{{ $villa->contact_name }}</span>
                    </p>
                    <p class="text-gray-700 mb-4">Loan with lowest interest rates available.</p>
                    @if ($villa->youtubeurl)
                        @php
                            // Extract YouTube Video ID from URL
                            preg_match(
                                '/(?:youtu\.be\/|youtube\.com\/(?:watch\?v=|embed\/))([\w\-]+)/',
                                $villa->youtubeurl,
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
                        GODs OWN Properties & Developers Pvt. Ltd., Ground Floor, N.P.Tower, Guruvayur Road, Westfort,
                        Thrissur
                    </p>
                    </div>

                    <div class="flex justify-between items-center mt-8">
                        <p class="text-xl font-bold">
                            Rs. <span class="text-red-600">{{ $villa->price }}</span>
                        </p>
                        <p class="text-xl font-bold text-red-600">{{ $villa->locality->locality_name ?? 'N/A' }}</p>
                    </div>

                    <!-- Contact -->
                    <div class="mt-6 space-y-2">
                        <p class="font-semibold text-gray-800">Contact: <span
                                class="font-normal">{{ $villa->contact_name }}</span>
                        </p>
                        <p class="font-semibold text-gray-800">Contact Number:
                            <span class="font-normal">{{ $villa->contact_number }}</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Enquiry Form -->
            <div class="bg-white rounded-lg shadow-lg p-6 lg:h-2/3 ">
                <h3 class="text-xl font-bold text-gray-900 my-4">Enquire About This Property</h3>
                <form class="space-y-4" action="{{ route('propertyEnquiry') }}" method="POST">
                    @csrf

                    <!-- Hidden Fields -->
                    <input type="hidden" name="property_id" value="{{ $villa->property_id }}">
                    <input type="hidden" name="property_code" value="{{ $villa->property_code }}">

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

                    <!-- Property ID (Prefilled) -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Property ID</label>
                        <input type="text" value="{{ $villa->property_code }}" readonly
                            class="w-full border border-gray-300 rounded-md px-3 py-2 bg-gray-100 cursor-not-allowed">
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

                    {{-- <div class="border border-gray-300 rounded-lg p-4 text-center">
                        <img src="https://realestatethrissur.com/captcha_code_file.php?rand=1126003486" alt="captcha"
                            class="mx-auto mb-2">
                        <label class="block text-gray-700 mb-1">Enter the code above here:</label>
                        <input type="text" name="captcha_code" required
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                        <p class="text-xs text-gray-500 mt-2">
                            Can't read the image?
                            <a href="#" class="text-blue-600 underline">click here</a> to refresh
                        </p>
                    </div> --}}

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-red-600 text-white py-2 rounded-md font-semibold hover:bg-red-700 transition">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </section>

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
