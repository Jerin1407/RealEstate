@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: 'https://www.realestatethrissur.com/uploads/property/12_02082024135736.jpg' }">
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
     'https://www.realestatethrissur.com/uploads/property/12_02082024135736.jpg',
            'https://www.realestatethrissur.com/uploads/property/13_02082024135736.jpg',
            ]"
                            :key="img">
                            <img :src="img" @click="selectedImage = img"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
                        </template>
                    </div>
                </div>

                <!-- Property Description -->
                <!-- ID -->
                <p class="text-red-600 font-bold text-sm mb-2">RT5760</p>

                <!-- Title -->
                <h1 class="text-2xl font-bold text-gray-900 mb-4">
                    KOLAZHY RESIDENTIAL LAND FOR SALE AT THRISSUR
                </h1>

                <!-- Property Description -->
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Property Description</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    10 cents residential land available for sale Pottore near Kolazhy, Thrissur.
                    The land available in a good residential area, abundant water supply.
                    600 mt away from Bus route and 7 km from Thrissur town.
                    All major facilities available in walkable distance.
                </p>

                <!-- Price -->
                <p class="text-gray-800 font-medium mb-4">
                    Asking Price: <span class="text-red-600 font-semibold">₹ 5 lacs per cent</span>
                </p>

                <!-- Assistance -->
                <p class="text-gray-700 mb-4">
                    For professional assistance and for better deals contact
                    <span class="font-semibold">GOD's OWN Properties Pvt. Ltd</span> @
                    <span class="text-gray-900 font-medium">9447111233</span>.
                </p>

                <p class="text-gray-700 mb-4">
                    Loan with lowest interest rates available.
                </p>

                <p class="text-gray-700 mb-6">
                    Search more Villa / Flats @
                    <a href="https://www.realestatethrissur.com" target="_blank" class="text-blue-600 hover:underline">
                        www.realestatethrissur.com
                    </a>
                </p>

                <!-- Company Info -->
                <div class="mb-6">
                    <p class="font-bold text-gray-900">
                        GODs OWN Properties & Developers Pvt. Ltd.,<br />
                        Ground Floor, N.P.Tower, Guruvayur Road, Westfort, Thrissur
                    </p>
                </div>

                <!-- Price + Location -->
                <div class="flex justify-between items-center mb-6">
                    <p class="text-lg font-bold text-gray-900">
                        Rs. <span class="text-red-600">500000</span>
                    </p>
                    <p class="text-red-600 font-semibold text-lg">Kolazhy</p>
                </div>

                <!-- Contact -->
                <div class="border-t pt-4 text-sm">
                    <p class="text-gray-700">
                        <span class="font-semibold">Contact</span> :
                        <span class="ml-2">GODs OWN Properties</span>
                    </p>
                    <p class="text-gray-700">
                        <span class="font-semibold">Contact Number</span> :
                        <span class="ml-2">9447111233</span>
                    </p>
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
                        <input type="text" value="RT5760" readonly
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
