@extends('layouts.app')

@section('content')
<section class="px-6 py-10 bg-gray-50"
    x-data="{ selectedImage: 'https://www.realestatethrissur.com/uploads/property/9a94dcf9-8449-4321-bfb7-23e721ca1742.jpg' }">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-8">

      <!-- Left Side: Image + Property Description -->
      <div class="lg:col-span-2 space-y-6">

        <!-- Image Slider -->
        <div class="relative">
          <!-- Main Image -->
          <img :src="selectedImage" alt="Property Image" class="rounded-lg shadow w-full h-[400px] object-cover">

          <!-- Thumbnails -->
          <div class="flex mt-2 gap-2 overflow-x-auto">
            <template x-for="img in [
     'https://www.realestatethrissur.com/uploads/property/9a94dcf9-8449-4321-bfb7-23e721ca1742.jpg',
            'https://www.realestatethrissur.com/uploads/property/0ef634d9-ce58-4703-91f9-2f299257e38e.jpg',
            'https://www.realestatethrissur.com/uploads/property/06745a70-6692-4326-a5e7-c88a98baeef1.jpg',
            'https://www.realestatethrissur.com/uploads/property/7171c317-3b1b-4f99-a8db-ef70d1781c2b.jpg',
            'https://www.realestatethrissur.com/uploads/property/a03367d9-1988-4822-8a61-7caeb0a8ed53.jpg',
            ]" :key="img">
              <img :src="img" @click="selectedImage = img"
                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
            </template>
          </div>
        </div>

        <!-- Property Description -->
        <section class="flex justify-center py-10 bg-gray-50">
          <div class="max-w-4xl w-full bg-white rounded-2xl  p-6 border border-gray-200">

            <!-- Property ID -->
            <p class="text-red-600 font-semibold text-sm mb-2">RT3978</p>

            <!-- Title -->
            <h2 class="text-xl font-bold text-gray-800 mb-4">
              RESIDENTIAL LAND FOR SALE AT THIROOR - 3.65 LACS PER CENT
            </h2>

            <!-- Description -->
            <p class="text-gray-600 leading-relaxed mb-4">
              11 cents land with option to divide in 2 pieces of 5.5 cents residential land available
              for sale near Thiroor, Thrissur. The land is in a good residential area with a scenic view
              surrounded by coconut trees. Abundant water supply. 600 mt away from Thiroor centre and
              7 km from Thrissur town. All major facilities are available in walkable distance.
            </p>

            <p class="text-gray-800 font-medium mb-4">
              <span class="font-semibold">Asking Price:</span> ₹ 3.65 lacs per cent
            </p>

            <!-- Price + Location -->
            <div class="flex justify-between items-center  py-4 mb-4">
              <p class="text-lg font-bold text-gray-800">
                Rs. <span class="text-red-600">365000</span>
              </p>
              <p class="text-lg font-bold text-red-600">Thiroor</p>
            </div>

            <!-- Contact Info -->
            <div class="space-y-2">
              <p class="text-gray-700">
                <span class="font-semibold">Contact:</span> Gods Own Properties Pvt Ltd
              </p>
              <p class="text-gray-700">
                <span class="font-semibold">Contact Number:</span>
                <a href="tel:9447111233" class="text-blue-600 font-semibold hover:underline">
                  9447111233
                </a>
              </p>
            </div>
          </div>
        </section>



      </div>

      <!-- Right Side: Enquiry Form -->
      <div class="bg-white rounded-lg shadow-lg p-6 md:h-5/6 ">
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
            <input type="text" value="RT3978" readonly
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