@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-gray-50"
    x-data="{ selectedImage: 'https://realestatethrissur.com/uploads/property/34925fa6-9bd8-4d3b-a7bb-27b60f0da90e.jpg' }">
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
     'https://realestatethrissur.com/uploads/property/34925fa6-9bd8-4d3b-a7bb-27b60f0da90e.jpg',
            'https://realestatethrissur.com/uploads/property/cb09fc54-d610-4b95-acad-7a54b9a7a3e5.jpg',
            'https://realestatethrissur.com/uploads/property/c057ce93-c541-454b-8727-b5c8a1092270.jpg',
            'https://realestatethrissur.com/uploads/property/bd4a84c2-7e18-4f27-b6be-3871da9f53e2.jpg',
            'https://realestatethrissur.com/uploads/property/3336ec1d-747b-415f-aa1f-5dc9039b9b12.jpg',
            'https://realestatethrissur.com/uploads/property/769be6e3-fbca-464b-baed-fab5f9c30f5c.jpg'                    ]"
              :key="img">
              <img :src="img" @click="selectedImage = img"
                class="w-24 h-20 object-cover rounded cursor-pointer border-2"
                :class="selectedImage === img ? 'border-red-500' : 'border-gray-200'">
            </template>
          </div>
        </div>

        <!-- Property Description -->
        <div class="mt-6 rounded-2xl border  p-6 md:p-8">
          <h3 class="text-red-600 font-bold text-lg mb-2">RT5547 </h3>
          <h2 class="text-2xl font-bold text-gray-900 mb-4">

            KURIACHIRA NEAR NEW FLAT 2BHK ,1040 SQFT, THRISSUR

          </h2>

          <div class="max-w-4xl mx-auto ">
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 rounded-md bg-blue-600 px-3 py-1">
              <span class="text-white text-sm font-semibold tracking-wide">KEY FACTs</span>
            </div>

            <!-- Card -->
            <div>
              <!-- Title -->
              <h2 class="text-xl md:text-2xl font-semibold text-gray-900">
                2BHK (all attached) flat having 1040 SqFt built by reputed builder available near Kuriachira,,Thrissur .
                Exclusive car parking facility prevails








              </h2>
              <p class="text-gray-600 mt-1">Quoted Price � 62 lakhs</p>

              <hr class="my-6 border-gray-200">
              <p>Apartment facilities include 24 hours Security person, Maintenance staff, Open well & Corporation water
                supply, Passenger & Bed lift, Solid & Liquid waste management system etc. </p>
              <!-- Price -->
              <p class="text-gray-900 font-semibold">
                Expecting Price - 62 lakhs(negotiable)
              </p>

              <!-- Description -->
              <p class="mt-4 text-gray-700 leading-relaxed">
                Flat consist of 3 bedrooms, 3 wash rooms, Spacious Living, Dining, kitchen, balcony etc. Quality
                Construction from reputed builder.

              </p>
              <p class="mt-4 text-gray-700 leading-relaxed"> Apartment Amenities: Dedicated car parking slot available,
                liquid & solid waste management system, 24 hour security, cleaning staff, care taker, lift facility,
                generator back up.
              </p>
              <!-- Amenities -->


              <!-- Vicinity -->

              Places in Vicinity: Thiruvambady temple, Devamatha CMI Public School, Bismi hyper market, Aswini Hospital,
              Patturaikkal church, Bank & ATMs etc.

              <p class="text-gray-900 font-semibold">Expected Price � 1.12 Cr</p>

              <!-- Contact -->
              <div class="mt-6">
                <h3 class="text-lg font-semibold text-gray-900">Contact</h3>
                <p class="mt-2 text-gray-700 leading-relaxed">
                  For professional assistance and better deals contact <span class="font-semibold">GOD’s OWN Properties
                    Pvt. Ltd</span>
                  @ <a href="tel:+919447112333" class="text-blue-600 hover:underline font-medium">9447112333</a>.
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
              Rs. <span class="text-red-600">6200000</span>
            </p>
            <p class="text-xl font-bold text-red-600">Kuriachira
            </p>
          </div>
          <div class="mt-6 space-y-2">
            <p class="font-semibold text-gray-800">Contact: <span class="font-normal">GODs OWN Properties</span></p>
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
            <input type="text" value="RT5547" readonly
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