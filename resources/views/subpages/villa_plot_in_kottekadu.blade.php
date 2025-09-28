@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50" x-data="{ selectedImage: 'https://www.realestatethrissur.com/uploads/property/WhatsApp%20Image%202024-02-02%20at%204.00.30%20PM.jpeg' }">
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
     'https://www.realestatethrissur.com/uploads/property/WhatsApp%20Image%202024-02-02%20at%204.00.30%20PM.jpeg',
            'https://www.realestatethrissur.com/uploads/property/0f1eb1d7-e6f2-49c0-90a1-554e6e47b755.jpg',
            'https://www.realestatethrissur.com/uploads/property/ad080452-6235-4e70-966e-7e428dc477f4.jpg',
            'https://www.realestatethrissur.com/uploads/property/kottakade%20center.png',
            ]"
                            :key="img">
                            <img :src="img" @click="selectedImage = img"
                                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
                        </template>
                    </div>
                </div>

                <!-- Property Description -->
                <section class="bg-white py-10 px-6">
                    <div class="max-w-4xl mx-auto">

                        <!-- Property ID -->
                        <p class="text-red-600 font-bold mb-2">RT4748</p>

                        <!-- Title -->
                        <h2 class="text-2xl font-extrabold text-gray-900 leading-snug mb-6">
                            GATED COMMUNITY RESIDENTIAL LAND VERY CLOSE TO THRISSUR TOWN
                        </h2>

                        <!-- Section Heading -->
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Property Description</h3>

                        <!-- Description -->
                        <div class="text-gray-700 leading-relaxed space-y-4">
                            <p>
                                Gated community residential land available in a good residential area near Kottekad Mary
                                Matha church,
                                Thrissur just 4km off from Thrissur-Shornur highway and 6km (10min drive) away from Thrissur
                                town. Easy
                                accessibility from multiple roads to this great location. You can reach this location via
                                Thrissur-Viyyur Kottekad road or you can access Pookunnam MLA road while coming from
                                Thrissur town. From
                                Kunnamkulam or Guruvayur if you travelling then you can reach this location via Mundur –
                                Kottekad main
                                road and also people from Wadakancherry or Shornur can reach here through Thiroor-Kottekad
                                road.
                            </p>

                            <p>
                                Institutions like Bharthiya Vidhya Mandhir CBSE School, Parmakavu Vidhya Mandhir, Westfort
                                Higher
                                education Academy, Chinmaya School & College, Vimala College, Thrissur Govt. Menical College
                                & Amala
                                Medical college, Govt. Engineering college all are reachable in 10mins drive from this
                                property.
                            </p>

                            <p>
                                All basic essentials like Temple, Church, Mosque, Supermarket, Bank & ATMs, Grocery shop,
                                Health
                                clinics, Textile shops, Food & bakery, Beauty salons available within walkable distance
                            </p>

                            <p>
                                <span class="font-semibold">Available Plot Sizes:</span> 18.5cents, 9cents & 6cents
                            </p>

                            <p>
                                <span class="font-semibold">Asking Price:</span> For this Gated community land ₹ 4.10 lakh
                                per cent
                            </p>

                            <p>
                                <span class="font-semibold">For Professional assistance</span> and for Better Deals contact
                                <span class="italic">GOD’s OWN Properties Pvt. Ltd</span> @
                                <span class="font-bold">9447111233</span>.
                            </p>
                        </div>
                        <div
                            class="mt-8 flex flex-col md:flex-row md:justify-between items-start md:items-center border-t border-gray-200 pt-6">

                            <!-- Price -->
                            <p class="text-lg font-bold text-gray-900">
                                Rs. <span class="text-red-600 text-xl">410000</span>
                            </p>

                            <!-- Location -->
                            <p class="text-lg font-bold text-red-600 mt-2 md:mt-0">Kottekad</p>
                        </div>

                        <!-- Contact Details -->
                        <div class="mt-6 space-y-2">
                            <p class="text-gray-700 font-medium">
                                <span class="font-semibold">Contact</span> : GOD’s OWN Properties
                            </p>
                            <p class="text-gray-700 font-medium">
                                <span class="font-semibold">Contact Number</span> :
                                <a href="tel:+919447112333" class="text-gray-900 font-bold">9447112333</a>
                            </p>
                        </div>
                    </div>
                </section>




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
                        <input type="text" value="RT4748" readonly
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
