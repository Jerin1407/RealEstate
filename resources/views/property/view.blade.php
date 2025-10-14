<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo 1.svg" />
    <link href="../assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
      <main class="flex-1 p-2 md:p-2 space-y-6 overflow-x-auto">

        <!-- Detail Panels -->

        <section class="bg-gray-100 ">
          <div class="max-w-full mx-auto bg-white shadow-lg">
            <!-- Header -->
            <div class="bg-primary text-white px-2 md:px-6 py-4">
              <div class=" md:flex justify-between items-center">
                <h1 class="text-xl font-semibold">Property Details(RT5785)</h1>
                <div class="flex items-center space-x-4">
                  <!-- <div class="relative">
                        <input type="text" placeholder="Search..." class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                    </div> -->
                  <!-- <button class="flex items-center text-white hover:text-blue-100">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        <span class="text-sm">View All</span>
                    </button> -->
                  <h1 class="font-bold">Status <span class="font-bold text-gray-300">Approved</span></h1>
                </div>
              </div>
            </div>

            <!-- Action Buttons -->
            <div class="bg-gray-200   p -2 md:px-6 py-3 border-b">
              <div class="md:flex justify-between items-center">
                <div class="flex space-x-0 md:space-x-4">
                  <button class="flex items-center text-gray-600  hover:text-primary text-sm">
                    <i class="far fa-eye mr-2"></i>
                    Approved propery
                  </button>
                  <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                    <i class="fas fa-edit mr-2"></i>
                    Edit
                  </button>
                  <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                    <i class="fas fa-download mr-2"></i>
                    Export
                  </button>
                  <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                    <i class="fas fa-trash mr-2"></i>
                    Refresh
                  </button>
                </div>
                <button onclick="window.location.href='add_property.html'"
                  class="flex items-center text-gray-600 hover:text-primary 800 text-sm font-medium">
                  <i class="fas fa-plus mr-2"></i>
                  Add Property
                </button>
              </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
              <section class="px-6 py-10 bg-gray-50"
                x-data="{ selectedImage: 'https://realestatethrissur.com/uploads/property/xfdfdfe.jpg' }">
                <div class="max-w-7xl mx-auto grid lg:grid-cols-1 gap-8">

                  <!-- Left Side: Image + Property Description -->
                  <div class="lg:col-span-1 space-y-6">

                    <!-- Image Slider -->
                    <div class="relative">
                      <!-- Main Image -->
                      <img :src="selectedImage" alt="Property Image"
                        class="rounded-lg shadow w-full h-[400px] object-cover">

                      <!-- Thumbnails -->
                      <div class="flex mt-2 gap-2 overflow-x-auto">
                        <template x-for="img in [
            'https://realestatethrissur.com/uploads/property/xfdfdfe.jpg',
            'https://realestatethrissur.com/uploads/property/sewew_07082024132931.jpg',
            'https://realestatethrissur.com/uploads/property/trrtere.jpg',
            'https://realestatethrissur.com/uploads/property/trrtrtree.jpg',
            'https://realestatethrissur.com/uploads/property/fgterer.jpg',
            'https://realestatethrissur.com/uploads/property/rteer.jpg',
                    ]" :key="img">
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
                              For professional assistance and better deals contact <span class="font-semibold">GOD’s OWN
                                Properties Pvt. Ltd</span>
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
                        <p class="font-semibold text-gray-800">Contact: <span class="font-normal">GODs OWN
                            Properties</span></p>
                        <p class="font-semibold text-gray-800">Contact Number:
                          <span class="font-normal">9447111233</span>
                        </p>
                      </div>


                    </div>

                  </div>



                </div>
              </section>

              <!-- Alpine.js (for thumbnail click functionality) -->
              <script src="https://unpkg.com/alpinejs" defer></script>

            </div>

          </div>

        </section>


      </main>

    </div>

    </section>

    <!-- footer -->
    @include('layouts.footer')

    <script>
        (function() {
            function c() {
                var b = a.contentDocument || a.contentWindow.document;
                if (b) {
                    var d = b.createElement('script');
                    d.innerHTML =
                        "window.__CF$cv$params={r:'96bd42c5b3397f9d',t:'MTc1NDYzNzcyOC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                    b.getElementsByTagName('head')[0].appendChild(d)
                }
            }
            if (document.body) {
                var a = document.createElement('iframe');
                a.height = 1;
                a.width = 1;
                a.style.position = 'absolute';
                a.style.top = 0;
                a.style.left = 0;
                a.style.border = 'none';
                a.style.visibility = 'hidden';
                document.body.appendChild(a);
                if ('loading' !== document.readyState) c();
                else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
                else {
                    var e = document.onreadystatechange || function() {};
                    document.onreadystatechange = function(b) {
                        e(b);
                        'loading' !== document.readyState && (document.onreadystatechange = e, c())
                    }
                }
            }
        })();
    </script>
</body>

<script src="../assets/js/script.js"></script>

</html>
