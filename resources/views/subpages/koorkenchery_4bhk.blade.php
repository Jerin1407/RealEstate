@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: 'https://realestatethrissur.com/uploads/property/e4554.jpg' }">
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
            'https://realestatethrissur.com/uploads/property/e4554.jpg',
            'https://realestatethrissur.com/uploads/property/gtrtr.jpg',
            'https://realestatethrissur.com/uploads/property/rtertre.jpg',
            'https://realestatethrissur.com/uploads/property/sdsdw.jpg',
            'https://realestatethrissur.com/uploads/property/rtrtrt.jpg',
            'https://realestatethrissur.com/uploads/property/fgtr45tr.jpg',
            'https://realestatethrissur.com/uploads/property/dferfwe.jpg'
          ]"
                            :key="img">
                            <img :src="img" @click="selectedImage = img"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
                        </template>
                    </div>
                </div>

                <!-- Property Description -->
                <div>
                    <h3 class="text-red-600 font-bold text-lg mb-2">RT5772</h3>
                    <h2 class="text-2xl font-bold text-gray-900 mb-4">
                        KOORKENCHERY 4BHK,2360SQFT, 6CENT ,VILLA THRISSUR
                    </h2>

                    <h4 class="text-lg font-semibold text-gray-700 mb-2">Property Description</h4>
                    <p class="text-gray-700 leading-relaxed mb-4">
                        Ready to occupy 2360 SqFt 4 bedroom near Koorkenchery ,Thrissur. Land area - 6 cent.

                    </p>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Asking Price</span> � 1.30 Cr (negotiable)</p>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Contact</span> GOD�s OWN Properties Pvt. Ltd @
                        9447111233.

                    </p>

                    <p class="text-gray-700 leading-relaxed mb-4">
                        <strong>Villa comprises of:</strong><br>
                        Ground floor- Sitout, living area, dining hall, two bedrooms with attached Washrooms, one common
                        washroom,
                        kitchen, work area with smokeless stove, exists. High quality Kitchen cabinets & wardrobes work
                        completed
                        with necessary light fitting arrangements.

                        First floor � Living area, Two bedrooms with attached Washroom, one balcony and open terrace.
                    </p>

                    <p class="text-gray-700 leading-relaxed mb-4">
                        <strong>Other Highlights:</strong>Flooring completed using Stain free vitrified tiles, Compound wall
                        with
                        gate, Open well. Sufficient Water At All Seasons . All basic facilities available in walk able
                        distance.
                    </p>
                    <p class="text-gray-700 mb-2"><span class="font-semibold">Asking Price</span> � 1.30Cr (negotiable)</p>

                    <p class="text-gray-700 mb-4">
                        For Professional assistance and for Better Deals Contact GOD�s OWN Properties Pvt. Ltd @ 9447111233.
                    </p>
                    <p class="text-gray-700 mb-4">Loan facility with flexible & lowest interest rates available from all
                        leading
                        Banks. </p>
                    <p class="text-gray-700 mb-4">
                        <strong> Our Picture Perfect Authenticity</strong>: We make sure that the actual property listed is
                        what is
                        actually pictured.

                    </p>

                    <p class="mb-6">
                        Search More Villa / Flats @
                        <a href="https://www.realestatethrissur.com" target="_blank" class="text-blue-600 underline">
                            www.realestatethrissur.com
                        </a>
                    </p>
                    <p class="text-gray-700">
                        GODs OWN Properties & Developers Pvt. Ltd., Ground Floor, N.P.Tower, Guruvayur Road, Westfort,
                        Thrissur
                    </p>

                    <div class="flex justify-between items-center mt-8">
                        <p class="text-xl font-bold">
                            Rs. <span class="text-red-600">13000000</span>
                        </p>
                        <p class="text-xl font-bold text-red-600">Koorkenchery</p>
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
            <div class="bg-white rounded-lg shadow-lg p-6 md:h-3/4 ">
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
                        <input type="text" value="RT5771" readonly
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
