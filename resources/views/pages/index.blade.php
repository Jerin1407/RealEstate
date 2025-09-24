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
                <button class="text-primary font-semibold hover:text-red-secondary transition-colors">View All 245+
                    →</button>
            </div>

            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    <!-- Villa 1 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                        <a href="{{ route('luxury-villa-in-kolazhy') }}">
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
                    <!-- Villa 2 -->
                    <a href="{{ route('moder-villa-in-koorkenchery') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/e434.jpg" alt=""
                                    class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 md:h-48">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Koorkanchery Villa </h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Villa</span>
                                </div>
                                <p class="text-gray-600 mb-4">4 BHK • 2260 sq ft • Pool • Gym</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹1.8 Cr</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Villa 3 -->
                    <a href="{{ route('koorkenchery-4bhk') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/e4554.jpg" alt=""
                                    class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 md:h-48">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Villa in koorkanchery</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Villa</span>
                                </div>
                                <p class="text-gray-600 mb-4">4 BHK • 2360 sq ft • Terrace • Security</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹95 L</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Villa 4 -->
                    <a href="{{ route('peramangalam-villa') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/432323.jpg" alt=""
                                    class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 md:h-48">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Peramangalam </h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Villa</span>
                                </div>
                                <p class="text-gray-600 mb-4">4 BHK • 2800 sq ft • Duplex • Garden</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹1.4 Cr</span>
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
    </section>

    <!-- Flats Section -->
    <section id="flats" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Modern Flats</h3>
                    <p class="text-gray-600">Contemporary apartments in prime locations</p>
                </div>
                <button class="text-primary font-semibold hover:text-red-secondary transition-colors">View All 380+
                    →</button>
            </div>

            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    <!-- Flat 1 -->
                    <a href="{{ route('flat-punkunnam') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/xfdfdfe.jpg" alt=""
                                    class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Punkunnam</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Flat</span>
                                </div>
                                <p class="text-gray-600 mb-4">2 BHK • 940 sq ft • Balcony • Gym</p>
                                <br>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹85 L</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Flat 2 -->
                    <a href="{{ route('luxury-flat-patturaikkal') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/2e0dbb48-1bca-4646-aa79-65693f747b22.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Luxury Flat Patturaikkal</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Flat</span>
                                </div>
                                <p class="text-gray-600 mb-4">3 BHK • 1745 sq ft • Furnished • Bus Stop</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹65 L</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Flat 3 -->
                    <a href="{{ route('kuriachira-flat') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/34925fa6-9bd8-4d3b-a7bb-27b60f0da90e.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Kuriachira near New Flat </h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Flat</span>
                                </div>
                                <p class="text-gray-600 mb-4">2 BHK • 2200 sq ft • Terrace • Pool</p>
                                <br>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹1.1 Cr</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Flat 4 -->
                    <a href="{{ route('luxuriant-near-eastfort') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/02afed07-38f0-49af-84f0-c98a3064dc5f.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Luxuriant 1200 SqFt</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Flat</span>
                                </div>
                                <p class="text-gray-600 mb-4">3 BHK • 1200 sq ft • Furnished • Central</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹45 L</span>
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
    </section>

    <!-- Plots Section -->
    <section id="plots" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Premium Plots</h3>
                    <p class="text-gray-600">Ready-to-build land parcels in prime locations</p>
                </div>
                <button class="text-primary font-semibold hover:text-red-secondary transition-colors">View All 156+
                    →</button>
            </div>

            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    <!-- Plot 1 -->
                    <a href="{{ route('plot-in-viyyur') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/2121_02082024134448.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 md:h-54">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Plot in Viyyur</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Plot</span>
                                </div>
                                <p class="text-gray-600 mb-4">10cent • Plot • Panchayat Approved</p>
                                <br>
                                <br>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹45 L</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Plot 2 -->
                    <a href="{{ route('residential-plot-in-kolazhy') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/12_02082024135736.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 md:54">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Residential Plot in Kolazhy</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Plot</span>
                                </div>
                                <p class="text-gray-600 mb-4">2400 sq ft • Gated Community • Highway Access</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹72 L</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Plot 3 -->
                    <a href="{{ route('residential-land-thiroor') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/9a94dcf9-8449-4321-bfb7-23e721ca1742.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 ">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Residential Land for sale in Thiroor</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Plot</span>
                                </div>
                                <p class="text-gray-600 mb-4">1800 sq ft • Corner • Clear Title • Railway Station</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹58 L</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Plot 4 -->
                    <a href="{{ route('villa-plot-in-kottekadu') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/WhatsApp%20Image%202024-02-02%20at%204.00.30%20PM.jpeg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6 h-54">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Villa Plot in Kottekad</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Plot</span>
                                </div>
                                <p class="text-gray-600 mb-4">3000 sq ft • Villa Plot • River View • Peaceful</p>
                                <br>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹85 L</span>
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
    </section>

    <!-- Commercial Section -->
    <section id="commercial" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h3 class="text-3xl font-bold text-gray-800 mb-2">Commercial Properties</h3>
                    <p class="text-gray-600">Office spaces and retail properties for business</p>
                </div>
                <button class="text-primary font-semibold hover:text-red-secondary transition-colors">View All 89+
                    →</button>
            </div>

            <div class="overflow-x-auto">
                <div class="flex space-x-6 pb-4" style="width: max-content;">
                    <!-- Commercial 1 -->
                    <a href="{{ route('amalanagar-2-bhk') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/a9e7deed-eff4-443a-88f8-d8d962f1c82b_01082024082623.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Amalanagar 2 BHK Fully Furnitured</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Commercial</span>
                                </div>
                                <p class="text-gray-600 mb-4">2500 sq ft • Furnished • IT Park • Parking</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹15000</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Commercial 2 -->
                    <a href="{{ route('westfort-2bhk') }}">

                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/asaw.jpg" alt=""
                                    class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Westfort 2bhk</h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Commercial</span>
                                </div>
                                <p class="text-gray-600 mb-4">1200 sq ft • Ground Floor • High Footfall</p>
                                <br>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹20000</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Commercial 3 -->
                    <a href="{{ route('westfort-2bhk-1000SqFt') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/tyty_09082024114406.jpg"
                                    alt="" class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Westfort 2bhk, 1000SqFt, </h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Commercial</span>
                                </div>
                                <p class="text-gray-600 mb-4">5000 sq ft • Industrial • Loading Bay</p>
                                <br>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹20000</span>
                                    <button
                                        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-secondary transition-colors">
                                        View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Commercial 4 -->
                    <a href="{{ route('railway-station-near-pootole') }}">
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 w-80 flex-shrink-0">
                            <div class="h-48 bg-gradient-to-br from-red-100 to-red-200 flex items-center justify-center">
                                <img src="https://realestatethrissur.com/uploads/property/544.jpg" alt=""
                                    class="h-56 w-full object-cover">
                            </div>
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-2">
                                    <h4 class="text-xl font-bold text-gray-800">Railway station Near pootole Commerc...
                                    </h4>
                                    <span class="bg-primary text-white px-2 py-1 rounded text-sm">Commercial</span>
                                </div>
                                <p class="text-gray-600 mb-4">1200 sq ft • Modern • Cafeteria • WiFi</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-2xl font-bold text-primary">₹32000</span>
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
@endsection
