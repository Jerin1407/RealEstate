<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="../assets/images/logo 1.svg" />
    <link href="../assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-2 md:p-2 space-y-6 overflow-x-auto">

        <!-- Detail Panels -->

        <section class="bg-gray-100 ">
            <div class="max-w-full mx-auto bg-white shadow-lg">
                <!-- Header -->
                <div class="bg-primary text-white px-2 md:px-6 py-4">
                    <div class=" md:flex justify-between items-center">
                        <h1 class="text-xl font-semibold">Property Details ({{ $property->property_code }})</h1>
                        <div class="flex items-center space-x-4">
                            <!-- <div class="relative">
                        <input type="text" placeholder="Search..." class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                    </div> -->
                            <!-- <button class="flex items-center text-white hover:text-blue-100">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        <span class="text-sm">View All</span>
                    </button> -->
                            <h1 class="font-bold">Status <span class="font-bold text-gray-300">Approved</span></h1>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-200   p -2 md:px-6 py-3 border-b">
                    <div class="md:flex justify-between items-center">
                        <div class="flex space-x-0 md:space-x-4">
                            {{-- <button class="flex items-center text-gray-600  hover:text-primary text-sm">
                                <i class="far fa-eye mr-2"></i>
                                Approved propery
                            </button> --}}
                            <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                <i class="fas fa-edit mr-2"></i>
                                Edit
                            </button>
                            <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                <i class="fas fa-download mr-2"></i>
                                Export
                            </button>
                            <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                <i class="fas fa-trash mr-2"></i>
                                Refresh
                            </button>
                        </div>
                        <button onclick="window.location.href='add_property.html'"
                            class="flex items-center text-gray-600 hover:text-primary 800 text-sm font-medium">
                            <i class="fas fa-plus mr-2"></i>
                            Add Property
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: '{{ asset('uploads/' . ($property->images->where('is_cover', 1)->first()->filename ?? 'images/no-image.jpg')) }}' }">
                        <div class="max-w-7xl mx-auto grid lg:grid-cols-1 gap-8">

                            <!-- Left Side: Image + Property Description -->
                            <div class="lg:col-span-1 space-y-6">

                                <!-- Image Slider -->
                                <div class="relative">
                                    <!-- Main Image -->
                                    <img :src="selectedImage" alt="Property Image"
                                        class="rounded-lg shadow w-full h-[400px] object-cover">

                                    <!-- Thumbnails -->
                                    <div class="flex mt-2 gap-2 overflow-x-auto">
                                        @foreach ($property->images as $img)
                                            <img src="{{ asset('uploads/' . $img->filename) }}"
                                                @click="selectedImage = '{{ asset('uploads/' . $img->filename) }}'"
                                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                                :class="selectedImage === '{{ asset('uploads/' . $img->filename) }}' ?
                                                    'border-red-500' :
                                                    'border-gray-200'">
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Property Title -->
                                <div class="mt-6 rounded-2xl border  p-6 md:p-8">
                                    <h3 class="text-red-600 font-bold text-lg mb-2">{{ $property->property_code }} </h3>
                                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                        {{ $property->property_title }}
                                    </h2>

                                    <div class="max-w-4xl mx-auto px-4">
                                        <!-- Badge -->
                                        <div class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-3 py-1">
                                            <span class="text-white text-sm font-semibold tracking-wide">KEY
                                                FACTS</span>
                                        </div>

                                        <!-- Card -->
                                        <div>
                                            @php
                                                if ($property->price >= 10000000) {
                                                    $formattedPrice = round($property->price / 10000000, 2) . ' Cr';
                                                } elseif ($property->price >= 100000) {
                                                    $formattedPrice = round($property->price / 100000, 2) . ' L';
                                                } else {
                                                    $formattedPrice = number_format($property->price, 0);
                                                }
                                            @endphp

                                            <!-- Price -->
                                            <p class="text-gray-900 font-semibold">
                                                Expected Price: <span class="font-bold">₹ {{ $formattedPrice }}</span>
                                                (negotiable)
                                            </p>

                                            <!-- Description -->
                                            <p class="mt-4 text-gray-700 leading-relaxed">
                                                {{ strip_tags($property->property_description) }}.
                                            </p>

                                            <!-- Contact -->
                                            <div class="mt-6">
                                                <h3 class="text-lg font-semibold text-gray-900">Contact</h3>
                                                <p class="mt-2 text-gray-700 leading-relaxed">
                                                    For professional assistance and better deals contact <span
                                                        class="font-semibold">{{ $property->contact_name }}</span>
                                                    @ <a href=""
                                                        class="text-blue-600 hover:underline font-medium">{{ $property->contact_number }}</a>.
                                                </p>
                                            </div>

                                            <!-- Loan -->
                                            <p class="mt-6 text-gray-700 leading-relaxed">
                                                Loan facility with flexible & lowest interest rates available from all
                                                leading banks.
                                            </p>

                                            <!-- Authenticity -->
                                            <div class="mt-6 rounded-lg bg-gray-50 p-4">
                                                <p class="text-gray-900 font-semibold">Our Picture Perfect Authenticity
                                                </p>
                                                <p class="text-gray-700 mt-1">
                                                    We make sure that the actual property listed is what is actually
                                                    pictured.
                                                </p>
                                            </div>

                                            <!-- Link -->
                                            <p class="mt-6 text-gray-700">
                                                Search More Villas / Flats @
                                                <a href="https://www.realestatethrissur.com" target="_blank"
                                                    class="font-medium text-blue-600 hover:underline">
                                                    www.realestatethrissur.com
                                                </a>
                                            </p>
                                        </div>
                                    </div>


                                    {{-- <div class="flex justify-between items-center mt-8">

                                        <!-- Price -->
                                        <p class="text-xl font-bold">
                                            Rs. <span class="text-red-600">{{ $property->price }}</span>
                                        </p>

                                        <!-- Location -->
                                        <p class="text-xl font-bold text-red-600">
                                            {{ $property->locality->locality_name ?? 'N/A' }}
                                        </p>
                                    </div>
                                    <div class="mt-6 space-y-2">

                                        <!-- Contact -->
                                        <p class="font-semibold text-gray-800">Contact: <span
                                                class="font-normal">{{ $property->contact_name }}</span></p>
                                        <p class="font-semibold text-gray-800">Contact Number:
                                            <span class="font-normal">{{ $property->contact_number }}</span>
                                        </p>
                                    </div> --}}

                                    <div class="mt-8">

                                        <!-- Price & Location -->
                                        <div class="flex justify-between items-center">
                                            <p class="text-xl font-bold">
                                                Rs. <span class="text-red-600">{{ $property->price }}</span>
                                            </p>
                                            <p class="text-xl font-bold text-red-600">
                                                {{ $property->locality->locality_name ?? 'N/A' }}
                                            </p>
                                        </div>

                                        <!-- Contact -->
                                        <div class="flex justify-between items-center mt-6">
                                            <div>
                                                <p class="font-semibold text-gray-800">
                                                    Contact: <span
                                                        class="font-normal">{{ $property->contact_name }}</span>
                                                </p>
                                                <p class="font-semibold text-gray-800">
                                                    Contact Number: <span
                                                        class="font-normal">{{ $property->contact_number }}</span>
                                                </p>
                                            </div>

                                            <!-- Approve Button -->
                                            <a href="{{ route('propertyEnquiry', ['id' => $property->property_id]) }}"
                                                class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-lg shadow-md transition">
                                                Approve
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Alpine.js (for thumbnail click functionality) -->
                    <script src="https://unpkg.com/alpinejs" defer></script>

                </div>

            </div>

        </section>

    </main>

    </div>

    </section>

    <!-- footer -->
    @include('layouts.footer')

    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'96bd42c5b3397f9d',t:'MTc1NDYzNzcyOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

<script src="../assets/js/script.js"></script>

</html>
