@extends('layouts.app')

@section('content')
<section class="px-6 py-10 bg-gray-50"
    x-data="{ selectedImage: 'https://www.realestatethrissur.com/uploads/property/2121_02082024134448.jpg' }">
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
     'https://www.realestatethrissur.com/uploads/property/2121_02082024134448.jpg',
            'https://www.realestatethrissur.com/uploads/property/2323.jpg',
            ]" :key="img">
              <img :src="img" @click="selectedImage = img"
                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
            </template>
          </div>
        </div>

        <!-- Property Description -->
        <section class="bg-white py-10">
          <div class="max-w-4xl mx-auto px-4 space-y-6">
            <!-- Reference ID -->
            <p class="text-lg font-bold text-red-600">RT5759</p>

            <!-- Title -->
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900 leading-snug">
              VIYYUR 10CENT RESIDENTIAL LAND FOR SALE - THRISSUR
            </h1>

            <!-- Key Facts -->
            <div>
              <h2 class="text-lg font-bold text-gray-800 uppercase tracking-wide">Key Facts</h2>
              <p class="mt-2 text-gray-700 leading-relaxed">
                10 cents residential land available in a good residential area near Attore near Viyyur.
                Hardly 3.5 KM from Aswani junction. All facilities available in close radius.
              </p>
            </div>

            <!-- Quoted Price -->
            <p class="text-gray-900 font-semibold">
              Quoted Price: <span class="font-bold">₹6 lakhs per cent (negotiable)</span>
            </p>

            <!-- Contact Info -->
            <p class="text-gray-700 leading-relaxed">
              For professional assistance contact
              <span class="font-semibold">GOD’s OWN Properties Pvt. Ltd</span>
              @ <a href="tel:+919447112333" class="text-blue-600 hover:underline font-medium">9447112333</a>.
            </p>

            <!-- Website -->
            <p class="text-gray-700">
              Search More Villa / Flats
              <a href="https://www.realestatethrissur.com" target="_blank"
                class="text-blue-600 hover:underline font-medium">
                www.realestatethrissur.com
              </a>
            </p>

            <!-- Company Address -->
            <p class="text-gray-700 leading-relaxed">
              GODs OWN Properties & Developers Pvt. Ltd., Ground Floor, N.P. Tower, Guruvayur Road, Westfort, Thrissur
            </p>

            <!-- Price + Location -->
            <div
              class="mt-8 flex flex-col md:flex-row md:justify-between items-start md:items-center border-t border-gray-200 pt-6">
              <!-- Price -->
              <p class="text-lg font-bold text-gray-900">
                Rs. <span class="text-red-600 text-xl">600000</span>
              </p>
              <!-- Location -->
              <p class="text-lg font-bold text-red-600 mt-2 md:mt-0">Viyyur</p>
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
            <input type="text" value="RT5759" readonly
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