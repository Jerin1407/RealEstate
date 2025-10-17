@extends('layouts.app')

@section('content')
    <section id="commercials" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="overflow-x-auto">
                <div class="flex flex-wrap gap-6 justify-center">
                    @foreach ($commercials as $commercial)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80">
                            <a href="{{ route('viewcommercialProperty', $commercial->property_id) }}">
                                <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $commercial->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $commercial->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $commercial->property_title }}</h4>
                                        <span class="bg-primary text-white px-2 py-1 rounded text-sm">
                                            Commercial
                                        </span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($commercial->property_description, 50)) }}
                                    </p>

                                    @php
                                        if ($commercial->price >= 10000000) {
                                            $formattedPrice = round($commercial->price / 10000000, 2) . ' Cr';
                                        } elseif ($commercial->price >= 100000) {
                                            $formattedPrice = round($commercial->price / 100000, 2) . ' L';
                                        } else {
                                            $formattedPrice = number_format($commercial->price, 0);
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
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
