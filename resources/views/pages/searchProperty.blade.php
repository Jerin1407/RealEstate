@extends('layouts.app')

@section('content')
    <section id="villas" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="overflow-x-auto">
                <div class="flex flex-wrap gap-6 justify-center">
                    @forelse ($villas as $villa)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80">
                            <a href="{{ route('viewVillaProperty', $villa->property_id) }}">
                                <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $villa->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $villa->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6 md:h-48">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $villa->property_title }}</h4>
                                        <span
                                            class="bg-primary text-white px-2 py-1 rounded text-sm">{{ $villa->category->category_name ?? 'Villa' }}</span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($villa->property_description, 50)) }}
                                    </p>

                                    @php
                                        if ($villa->price >= 10000000) {
                                            $formattedPrice = round($villa->price / 10000000, 2) . ' Cr';
                                        } elseif ($villa->price >= 100000) {
                                            $formattedPrice = round($villa->price / 100000, 2) . ' L';
                                        } else {
                                            $formattedPrice = number_format($villa->price, 0);
                                        }
                                    @endphp

                                    <div class="flex justify-between items-center">
                                        <span class="text-2xl font-bold text-primary">₹{{ $formattedPrice }}</span>
                                        <button
                                            class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                            View Details
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center">No properties found for your search.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

@endsection

{{-- <section id="villas" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h3 class="text-3xl font-bold text-gray-800 mb-2">Premium Villas</h3>
                <p class="text-gray-600">Luxury independent houses with gardens</p>
            </div>
            <button class="text-primary font-semibold hover:text-red-secondary transition-colors"
                onclick="window.location.href='premiumvilla.html'">View All 245+ →</button>
        </div>

        <div class="overflow-x-auto">
            <div class="flex space-x-6 pb-4" style="width: max-content;">
                <!-- Villa 1 -->
                <div
                    class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                    <a href="luxury-villa-in-kolazhy.html">
                        <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                            <img src="https://realestatethrissur.com/uploads/property/dfdfv.jpg" alt=""
                                class="h-56 w-full object-cover">
                        </div>

                        <div class="p-6 md:h-48">
                            <div class="flex justify-between items-start mb-2">
                                <h4 class="text-xl font-bold text-gray-800">Luxury Villa in Kolazhy</h4>
                                <span class="bg-primary text-white px-2 py-1 rounded text-sm">Villa</span>
                            </div>
                            <p class="text-gray-600 mb-4">4 BHK • 2500 sq ft • Garden • Parking</p>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-primary">₹1.2 Cr</span>
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
    </div>
</section> --}}
