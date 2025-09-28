@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: 'https://realestatethrissur.com/uploads/property/02afed07-38f0-49af-84f0-c98a3064dc5f.jpg' }">
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
     'https://realestatethrissur.com/uploads/property/02afed07-38f0-49af-84f0-c98a3064dc5f.jpg',
            'https://realestatethrissur.com/uploads/property/0e48aad8-9496-4485-a9bb-a571d0708d6a.jpg',
            'https://realestatethrissur.com/uploads/property/5be471eb-3862-4d6e-b441-98f71ddc6827.jpg',
            'https://realestatethrissur.com/uploads/property/5d5cc14d-3454-4ae7-90c4-442869310568.jpg',
            'https://realestatethrissur.com/uploads/property/11bc5b71-4e4a-4156-b2e9-ac36db495816.jpg',
            'https://realestatethrissur.com/uploads/property/078cb985-ff8f-4d35-b6b8-f883a3cf8253.jpg',                   
            'https://realestatethrissur.com/uploads/property/b53415b6-80a2-4144-b934-e415bb337cf7.jpg'                    ]"
                            :key="img">
                            <img :src="img" @click="selectedImage = img"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
                        </template>
                    </div>
                </div>

                <!-- Property Description -->
                <div class="max-w-4xl mx-auto px-4 space-y-6">

                    <!-- Reference ID -->
                    <p class="text-lg font-bold text-red-600">RT4782</p>

                    <!-- Title -->
                    <h1 class="text-2xl md:text-2xl font-bold text-gray-900 leading-snug">
                        LUXURIANT 1200 SQFT 3BHK FLAT NEAR EASTFORT, THRISSUR
                    </h1>

                    <!-- Property Description -->
                    <div>
                        <h2 class="text-lg font-bold text-gray-800">Property Description</h2>
                        <p class="mt-2 text-gray-700 leading-relaxed">
                            Ready to occupy 3 bedroom 1200 SqFt luxury flat available in an elegant HiRise
                            Apartment at Paravattani near East Fort Thrissur.
                        </p>
                    </div>

                    <!-- Asking Rate -->
                    <p class="text-gray-900 font-semibold">
                        Asking Rate: <span class="font-bold">₹66 Lakh</span>
                    </p>

                    <!-- Flat Details -->
                    <p class="text-gray-700 leading-relaxed">
                        Flat consists of 3 attached bedrooms, balcony, separate formal & family living spaces,
                        dining, and kitchen. Light & fittings, curtain & fittings, kitchen cabinets exist.
                    </p>

                    <!-- Amenities -->
                    <div class="rounded-lg bg-gray-50 p-4 border border-gray-200">
                        <h3 class="text-lg font-semibold text-gray-900">Apartment Amenities</h3>
                        <p class="mt-2 text-gray-700 leading-relaxed">
                            Landscaped area, Bed lift & passenger lift, meeting hall, Intercom,
                            Round-the-clock security, Gym, Recreation area, Generator backup,
                            all-around compound wall. Flat has stilt car parking area.
                        </p>
                    </div>

                    <!-- Asking Rate Repeat -->
                    <p class="text-gray-900 font-semibold">
                        Asking Rate: <span class="font-bold">₹66 Lakh</span>
                    </p>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Contact</h3>
                        <p class="mt-2 text-gray-700">
                            For professional assistance and better deals contact
                            <span class="font-semibold">GOD’s OWN Properties Pvt. Ltd</span>
                            @ <a href="tel:+919447112333" class="text-blue-600 hover:underline font-medium">9447112333</a>.
                        </p>
                    </div>

                    <!-- Loan Info -->
                    <p class="text-gray-700 leading-relaxed">
                        Loan facility with flexible & lowest interest rates available from all leading banks.
                    </p>

                    <!-- Authenticity -->
                    <div class="rounded-lg bg-gray-100 p-4">
                        <p class="text-gray-900 font-semibold">Our Picture Perfect Authenticity</p>
                        <p class="text-gray-700 mt-1">
                            We make sure that the actual property listed is what is actually pictured.
                        </p>
                    </div>
                    <div class="flex justify-between items-center mt-8">
                        <p class="text-xl font-bold">
                            Rs. <span class="text-red-600">6600000</span>
                        </p>
                        <p class="text-xl font-bold text-red-600">East fort</p>
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
                        <input type="text" value="RT4782" readonly
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
