@extends('layouts.app')

@section('content')
    <section id="plots" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="overflow-x-auto">
                <div class="flex flex-wrap gap-6 justify-center">

                    <!-- Plots Cards -->
                    @foreach ($plots as $plot)
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80">
                            <a href="{{ route('viewPlotProperty', $plot->property_id) }}">
                                <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                    @php
                                        $coverImage = $plot->images->where('is_cover', 1)->first();
                                    @endphp
                                    <img src="{{ $coverImage ? asset('uploads/property/' . $coverImage->filename) : asset('images/no-image.jpg') }}"
                                        alt="{{ $plot->property_title }}" class="h-56 w-full object-cover">
                                </div>

                                <div class="p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <h4 class="text-xl font-bold text-gray-800">{{ $plot->property_title }}</h4>
                                        <span class="bg-primary text-white px-2 py-1 rounded text-sm">
                                            Plot
                                        </span>
                                    </div>

                                    <p class="text-gray-600 mb-4">
                                        {{ strip_tags(Str::limit($plot->property_description, 50)) }}
                                    </p>

                                    @php
                                        if ($plot->price >= 10000000) {
                                            $formattedPrice = round($plot->price / 10000000, 2) . ' Cr';
                                        } elseif ($plot->price >= 100000) {
                                            $formattedPrice = round($plot->price / 100000, 2) . ' L';
                                        } else {
                                            $formattedPrice = number_format($plot->price, 0);
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
