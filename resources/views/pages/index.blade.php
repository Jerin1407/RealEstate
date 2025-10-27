@extends('layouts.app')

@section('content')
    <!-- Villas Section -->
    <section id="villas" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Premium Villas</h3>
                    <p class="text-gray-600">Luxury independent houses with gardens</p>
                </div>

                @php
                    $villaCount = \App\Models\MyProperties::where('category_id', 1)->count();
                @endphp

                <a href="{{ route('viewAllVilla') }}"><button
                        class="text-primary font-semibold hover:text-red-secondary transition-colors">View
                        All {{ $villaCount }}+
                        →</button></a>
            </div>

            <!-- Villas Cards -->
            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    @foreach ($villas as $villa)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <a href="{{ route('viewVillaProperty', ['id' => $villa->property_id]) }}">
                                <div
                                    class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $villa->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $villa->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6 md:h-48">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $villa->property_title }}</h4>
                                        <span class="bg-primary text-white px-2 py-1 rounded text-sm">
                                            Villa
                                        </span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($villa->property_description, 10)) }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        @php
                                            if ($villa->price >= 10000000) {
                                                $formattedPrice = round($villa->price / 10000000, 2) . ' Cr';
                                            } elseif ($villa->price >= 100000) {
                                                $formattedPrice = round($villa->price / 100000, 2) . ' L';
                                            } else {
                                                $formattedPrice = number_format($villa->price, 0);
                                            }
                                        @endphp

                                        <span class="text-2xl font-bold text-primary">
                                            ₹{{ $formattedPrice }}
                                        </span>

                                        <button
                                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Flats Section -->
    <section id="flats" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Modern Flats</h3>
                    <p class="text-gray-600">Contemporary apartments in prime locations</p>
                </div>

                @php
                    $flatCount = \App\Models\MyProperties::where('category_id', 2)->count();
                @endphp

                <a href="{{ route('viewAllFlat') }}"><button
                        class="text-primary font-semibold hover:text-red-secondary transition-colors">View
                        All {{ $flatCount }}+
                        →</button></a>
            </div>

            <!-- Flats Cards -->
            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    @foreach ($flats as $flat)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <a href="{{ route('viewFlatProperty', ['id' => $flat->property_id]) }}">
                                <div
                                    class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $flat->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $flat->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6 md:h-48">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $flat->property_title }}</h4>
                                        <span class="bg-primary text-white px-2 py-1 rounded text-sm">
                                            Flat
                                        </span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($flat->property_description, 10)) }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        @php
                                            if ($flat->price >= 10000000) {
                                                $formattedPrice = round($flat->price / 10000000, 2) . ' Cr';
                                            } elseif ($flat->price >= 100000) {
                                                $formattedPrice = round($flat->price / 100000, 2) . ' L';
                                            } else {
                                                $formattedPrice = number_format($flat->price, 0);
                                            }
                                        @endphp

                                        <span class="text-2xl font-bold text-primary">
                                            ₹{{ $formattedPrice }}
                                        </span>

                                        <button
                                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Plots Section -->
    <section id="plots" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Premium Plots</h3>
                    <p class="text-gray-600">Ready-to-build land parcels in prime locations</p>
                </div>

                @php
                    $plotCount = \App\Models\MyProperties::where('category_id', 3)->count();
                @endphp

                <a href="{{ route('viewAllPlot') }}"><button
                        class="text-primary font-semibold hover:text-red-secondary transition-colors">View
                        All {{ $plotCount }}+
                        →</button></a>
            </div>

            <!-- Plots Cards -->
            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    @foreach ($plots as $plot)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <a href="{{ route('viewPlotProperty', ['id' => $plot->property_id]) }}">
                                <div
                                    class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $plot->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $plot->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6 md:h-48">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $plot->property_title }}</h4>
                                        <span class="bg-primary text-white px-2 py-1 rounded text-sm">
                                            Plot
                                        </span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($plot->property_description, 10)) }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        @php
                                            if ($plot->price >= 10000000) {
                                                $formattedPrice = round($plot->price / 10000000, 2) . ' Cr';
                                            } elseif ($plot->price >= 100000) {
                                                $formattedPrice = round($plot->price / 100000, 2) . ' L';
                                            } else {
                                                $formattedPrice = number_format($plot->price, 0);
                                            }
                                        @endphp

                                        <span class="text-2xl font-bold text-primary">
                                            ₹{{ $formattedPrice }}
                                        </span>

                                        <button
                                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Commercial Section -->
    <section id="commercial" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Commercial Properties</h3>
                    <p class="text-gray-600">Office spaces and retail properties for business</p>
                </div>

                @php
                    $commercialCount = \App\Models\MyProperties::where('category_id', 4)->count();
                @endphp

                <a href="{{ route('viewAllCommercial') }}"><button
                        class="text-primary font-semibold hover:text-red-secondary transition-colors">View
                        All {{ $commercialCount }}+
                        →</button></a>
            </div>

            <!-- Commercial Cards -->
            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    @foreach ($commercials as $commercial)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <a href="{{ route('viewcommercialProperty', ['id' => $commercial->property_id]) }}">
                                <div
                                    class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $commercial->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $commercial->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6 md:h-48">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $commercial->property_title }}</h4>
                                        <span class="bg-primary text-white px-2 py-1 rounded text-sm">
                                            Commercial
                                        </span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($commercial->property_description, 10)) }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        @php
                                            if ($commercial->price >= 10000000) {
                                                $formattedPrice = round($commercial->price / 10000000, 2) . ' Cr';
                                            } elseif ($commercial->price >= 100000) {
                                                $formattedPrice = round($commercial->price / 100000, 2) . ' L';
                                            } else {
                                                $formattedPrice = number_format($commercial->price, 0);
                                            }
                                        @endphp

                                        <span class="text-2xl font-bold text-primary">
                                            ₹{{ $formattedPrice }}
                                        </span>

                                        <button
                                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Featured Properties</h3>
                <p class="text-gray-600 text-lg">Handpicked premium properties just for you</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Property 1 -->
                <a href="{{ route('attractive-3bhk') }}">
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                            <img src="https://realestatethrissur.com/uploads/hotproperties/4e90e78c-154f-4b97-8740-647cf5b9772e.jpg"
                                alt="" class="h-56 w-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-800">Attractive 3BHK,2000SQFT,NEW..</h4>
                                <span class="bg-primary text-white px-2 py-1 rounded text-sm">Villa</span>
                            </div>
                            <p class="text-gray-600 mb-4">4 BHK • 2500 sq ft • Garden • Parking</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-primary">Furnitured</span>
                                <button
                                    class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Property 2 -->
                <a href="{{ route('modern-flat-in-koramangala') }}">
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                            <img src="https://realestatethrissur.com/uploads/hotproperties/2414aec8-9580-4c01-84fa-1609216e7085.jpg"
                                alt="" class="h-56 w-full object-cover">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-800">Modern Flat in Koramangala</h4>
                                <span class="bg-primary text-white px-2 py-1 rounded text-sm">Flat</span>
                            </div>
                            <p class="text-gray-600 mb-4">3 BHK • 1800 sq ft • Balcony • Gym</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-primary">Furnitured</span>
                                <button
                                    class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Property 3 -->
                <a href="{{ route('premium-plot-in-electronic-city') }}">
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                        <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                            <img src="https://realestatethrissur.com/uploads/hotproperties/470f452d-1440-4fa8-a544-d593c447a9fd.jpg"
                                alt="" class="h-56 w-full object-cover ">
                        </div>
                        <div class="p-6">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-800">Premium Plot in Electronic City</h4>
                                <span class="bg-primary text-white px-2 py-1 rounded text-sm">Plot</span>
                            </div>
                            <p class="text-gray-600 mb-4">1200 sq ft • Corner Plot • BMRDA Approved</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-primary">Furnitured</span>
                                <button
                                    class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-4xl font-bold text-gray-800 mb-4">Why Choose GOD's OWN Properties?</h3>
                <p class="text-gray-600 text-lg">Your trusted partner in real estate</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">✓</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Verified Properties</h4>
                    <p class="text-gray-600">All properties are legally verified and ready for immediate possession</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🏆</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Expert Guidance</h4>
                    <p class="text-gray-600">Our experienced team provides personalized assistance throughout your journey
                    </p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">💰</span>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800 mb-2">Best Prices</h4>
                    <p class="text-gray-600">Competitive pricing with transparent deals and no hidden charges</p>
                </div>
            </div>
        </div>
    </section>

    <script>

        // success alert
        @if (session('success'))
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
                title: '{{ session('success') }}'
            });
        @endif
    </script>
@endsection
