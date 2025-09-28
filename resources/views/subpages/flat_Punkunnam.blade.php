@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: 'https://realestatethrissur.com/uploads/property/xfdfdfe.jpg' }">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-8">

            <!-- Left Side: Image + Property Description -->
            <div class="lg:col-span-2 space-y-6">

                <!-- Image Slider -->
                <div class="relative">

                    <!-- Main Image -->
                    <img :src="selectedImage" alt="Property Image" class="rounded-lg shadow w-full h-[400px] object-cover">

                    <!-- Thumbnails -->
                    <div class="flex mt-2 gap-2 overflow-x-auto">
                        <template
                            x-for="img in [
            'https://realestatethrissur.com/uploads/property/xfdfdfe.jpg',
            'https://realestatethrissur.com/uploads/property/sewew_07082024132931.jpg',
            'https://realestatethrissur.com/uploads/property/trrtere.jpg',
            'https://realestatethrissur.com/uploads/property/trrtrtree.jpg',
            'https://realestatethrissur.com/uploads/property/fgterer.jpg',
            'https://realestatethrissur.com/uploads/property/rteer.jpg',
                    ]"
                            :key="img">
                            <img :src="img" @click="selectedImage = img"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
                        </template>
                    </div>
                </div>

                <!-- Property Description -->
                <div class="mt-6 rounded-2xl border  p-6 md:p-8">
                    <h3 class="text-red-600 font-bold text-lg mb-2">RT5785 </h3>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        PUNKUNNAM, 940SQFT 2BHK APPARTMENT THRISSUR
                    </h2>

                    <div class="max-w-4xl mx-auto px-4">

                        <!-- Badge -->
                        <div class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-3 py-1">
                            <span class="text-white text-sm font-semibold tracking-wide">KEY FACTS</span>
                        </div>

                        <!-- Card -->
                        <div>

                            <!-- Title -->
                            <h2 class="text-xl md:text-2xl font-bold text-gray-900">
                                Prime location 2 Bedroom flat – 940 SqFt @ Punkunnam, Thrissur
                            </h2>
                            <p class="text-gray-600 mt-1">Approx 2 KM from Thrissur round</p>

                            <hr class="my-6 border-gray-200">

                            <!-- Price -->
                            <p class="text-gray-900 font-semibold">
                                Expected Price: <span class="font-bold">₹58 lakhs</span> (negotiable)
                            </p>

                            <!-- Description -->
                            <p class="mt-4 text-gray-700 leading-relaxed">
                                This lovely flat consists of 2 bedrooms, 2 wash rooms, Living, Dining, Kitchen, Balcony,
                                etc.
                                Quality construction from reputed builder.
                            </p>

                            <!-- Amenities -->
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold text-gray-900">Apartment Amenities</h3>
                                <ul class="mt-3 space-y-2 text-gray-700 leading-relaxed list-disc pl-6">
                                    <li>Dedicated car parking slot</li>
                                    <li>Liquid & solid waste management system</li>
                                    <li>24-hour security, cleaning staff & caretaker</li>
                                    <li>Lift facility, generator backup</li>
                                </ul>
                            </div>

                            <!-- Vicinity -->
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold text-gray-900">Places in Vicinity</h3>
                                <p class="mt-2 text-gray-700 leading-relaxed">
                                    Thiruvambady Temple, Devamatha CMI Public School, Bismi Hyper Market, Aswini Hospital,
                                    Patturaikkal Church, Banks & ATMs etc.
                                </p>
                            </div>

                            <!-- Contact -->
                            <div class="mt-6">
                                <h3 class="text-lg font-semibold text-gray-900">Contact</h3>
                                <p class="mt-2 text-gray-700 leading-relaxed">
                                    For professional assistance and better deals contact <span class="font-semibold">GOD’s
                                        OWN Properties
                                        Pvt. Ltd</span>
                                    @ <a href="tel:+919447112333"
                                        class="text-blue-600 hover:underline font-medium">9447112333</a>.
                                </p>
                            </div>

                            <!-- Loan -->
                            <p class="mt-6 text-gray-700 leading-relaxed">
                                Loan facility with flexible & lowest interest rates available from all leading banks.
                            </p>

                            <!-- Authenticity -->
                            <div class="mt-6 rounded-lg bg-gray-50 p-4">
                                <p class="text-gray-900 font-semibold">Our Picture Perfect Authenticity</p>
                                <p class="text-gray-700 mt-1">
                                    We make sure that the actual property listed is what is actually pictured.
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

                    <div class="flex justify-between items-center mt-8">
                        <p class="text-xl font-bold">
                            Rs. <span class="text-red-600">5800000</span>
                        </p>
                        <p class="text-xl font-bold text-red-600">Punkunnam
                        </p>
                    </div>
                    <div class="mt-6 space-y-2">
                        <p class="font-semibold text-gray-800">Contact: <span class="font-normal">GODs OWN Properties</span>
                        </p>
                        <p class="font-semibold text-gray-800">Contact Number:
                            <span class="font-normal">9447111233</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Enquiry Form -->
            <div class="bg-white rounded-lg shadow-lg p-6 md:h-2/3 ">
                <h3 class="text-xl font-bold text-gray-900 my-4">Enquire About This Property</h3>
                <form class="space-y-4">

                    <!-- Name -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Your Name</label>
                        <input type="text"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Phone</label>
                        <input type="text"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Email Id</label>
                        <input type="email"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none">
                    </div>

                    <!-- Property ID (Prefilled) -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Property ID</label>
                        <input type="text" value="RT5785" readonly
                            class="w-full border border-gray-300 rounded-md px-3 py-2 bg-gray-100 cursor-not-allowed">
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-gray-700 font-medium mb-1">Type your message</label>
                        <textarea rows="4"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-red-500 focus:outline-none"></textarea>
                    </div>

                    <div class="border border-gray-300 rounded-lg p-4 text-center">
                        <img src="https://realestatethrissur.com/captcha_code_file.php?rand=1126003486" alt="captcha"
                            class="mx-auto mb-2">
                        <label class="block text-gray-700 mb-1">Enter the code above here:</label>
                        <input type="text"
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                        <p class="text-xs text-gray-500 mt-2">
                            Can't read the image?
                            <a href="#" class="text-blue-600 underline">click here</a> to refresh
                        </p>
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
@endsection
