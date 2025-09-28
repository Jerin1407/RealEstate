@extends('layouts.app')

@section('content')
    <section id="services" class="bg-white py-16">
        <div class="container mx-auto px-6 md:px-12 lg:px-20">

            <!-- Title -->
            <h2 class="text-3xl md:text-4xl font-bold text-red-600 mb-6">SERVICES</h2>

            <!-- Service Links -->
            <ul class="space-y-2 mb-6 text-sm">
                <li>
                    <a href="#construction" class="text-blue-600 hover:underline font-medium">CONSTRUCTION</a>
                </li>
                <li>
                    <a href="#interior-design" class="text-blue-600 hover:underline font-medium">INTERIOR DESIGN</a>
                </li>
                <li>
                    <a href="#property-management" class="text-blue-600 hover:underline font-medium">
                        PROPERTY MANAGEMENT SERVICES
                    </a>
                </li>
                <li>
                    <a href="#home-loan" class="text-blue-600 hover:underline font-medium">HOME LOAN ASSISTANCE</a>
                </li>
            </ul>

            <!-- Intro -->
            <p class="text-gray-700 mb-10">
                RealestateThrissur.com powered by GODs OWN Properties & Developers Pvt. Ltd.
                It was less than a decade ago, that this Company began its foray into this business
                of construction. And Today, We are involved in:
            </p>

            <!-- Construction -->
            <div id="construction" class="mb-12">
                <h3 class="text-2xl md:text-3xl font-bold text-red-600 mb-4">CONSTRUCTION</h3>
                <p class="text-gray-700 mb-4">
                    GODs OWN Properties & Developers Pvt. Ltd. is a professionally managed real estate
                    development company engaged in development of residential projects in Thrissur, Kerala.
                    A beautiful house is a dream of every person and since our inception; we have helped
                    many families fulfill this dream.
                </p>
                <p class="text-gray-700">
                    For more details & enquiries, visit:
                    <a href="https://www.godsownhome.in" target="_blank" class="text-blue-600 hover:underline">
                        www.godsownhome.in
                    </a>
                    or contact:
                    <a href="tel:+919745432200" class="text-blue-600 hover:underline">974543 22 00</a>.
                </p>
            </div>

            <!-- Interior Design -->
            <div id="interior-design" class="mb-12">
                <h3 class="text-2xl md:text-3xl font-bold text-red-600 mb-4">INTERIOR DESIGN</h3>
                <p class="text-gray-700">
                    We understand how much you value your living space. That's why at GODs OWN,
                    we want to ensure that your living space resembles your character and taste.
                    GODs OWN is known for building eternally beautiful homes, but we also specialize
                    in creating stunning interiors. With the help of our in-house interior design team
                    and architects, we can customize your space to suit your need and style. Our services
                    extend from drawing room interiors, dining & kitchen interiors, bedroom interiors,
                    and dining areas.
                </p><br>
                <p>Something beautiful you look forward to loving is what we look forward to creating with You...</p><br>
                <p>

                    For more details & for enquiries, visit: www.godsownhome.in or contact: 974543 22 00.</p>
            </div>
        </div>
    </section>



    <section class="bg-white flex items-center justify-center min-h-screen w-full">
        <div class=" max-w-7xl bg-white rounded-xl shadow-lg p-4">

            <!-- Dynamic Heading -->
            <h2 id="mainHeading" class="text-2xl font-bold text-gray-900 mb-4 text-center">
                Living Room
            </h2>

            <!-- Main Image -->
            <div class="relative">
                <img id="mainImage" src="https://via.placeholder.com/900x500"
                    class="w-full h-[500px] object-cover rounded-lg" alt="Main Slide">

                <!-- Prev Button -->
                <button id="prevBtn"
                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-white p-3 rounded-full shadow-md hover:bg-gray-200">
                    &#10094;
                </button>

                <!-- Next Button -->
                <button id="nextBtn"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-white p-3 rounded-full shadow-md hover:bg-gray-200">
                    &#10095;
                </button>
            </div>

            <!-- Thumbnails by Department -->
            <div class="mb-6 space-y-8 mt-6">

                <!-- Living Room -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">Living Room</h3>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living1.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living2.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living3.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living4.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living5.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living6.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living7.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="https://realestatethrissur.com/images/LivingRoom/GODs%20Living8.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Living Room"
                            src="  https://realestatethrissur.com/images/LivingRoom/GODs%20Living9.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">

                    </div>
                </div>

                <!-- Dining Room -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">Dining Room</h3>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining1.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining2.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining3.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining4.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining5.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining5.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining7.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Dining Room"
                            src="https://realestatethrissur.com/images/DinningRoom/Gods%20Dining8.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">

                    </div>
                </div>

                <!-- Bedroom -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">Bedroom</h3>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <img data-category="Bedroom"
                            src="https://realestatethrissur.com/images/Bedroom/Gods%20Bedroom%201.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Bedroom"
                            src="https://realestatethrissur.com/images/Bedroom/Gods%20Bedroom%202.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Bedroom"
                            src="https://realestatethrissur.com/images/Bedroom/Gods%20Bedroom%203.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Bedroom"
                            src="https://realestatethrissur.com/images/Bedroom/Gods%20Bedroom%204.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Bedroom"
                            src="https://realestatethrissur.com/images/Bedroom/Gods%20Bedroom%205.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Bedroom"
                            src="https://realestatethrissur.com/images/Bedroom/Gods%20Bedroom%206.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">

                    </div>
                </div>

                <!-- Wardrobes -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">Wardrobes</h3>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/1.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/2.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/3.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/4.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/5.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/6.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/7.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/8.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="Wardrobes" src="https://realestatethrissur.com/images/Wardrobes/9.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">

                    </div>
                </div>

                <!-- kitchen -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">Kitchen</h3>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/1.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/2.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/3.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/4.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/5.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/6.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/7.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/8.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="kitchen" src="https://realestatethrissur.com/images/Kitchen/9.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">


                    </div>
                </div>

                <!-- False Ceiling -->
                <div>
                    <h3 class="text-lg font-semibold mb-3 text-gray-800">False Ceiling</h3>
                    <div class="flex flex-wrap gap-3 justify-center md:justify-start">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/1.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/2.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/3.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/4.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/5.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/6.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/7.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/8.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/9.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/10.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/11.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/12.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/13.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/14.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">
                        <img data-category="False-Ceiling" src="https://realestatethrissur.com/images/FalseCeiling/15.jpg"
                            class="thumbnail w-32 h-20 object-cover rounded-lg cursor-pointer border-2 border-transparent">


                    </div>
                </div>

                <section class="px-6 py-10 bg-white text-gray-800">

                    <!-- Property Management Services -->
                    <h2 class="text-2xl font-bold text-red-600 mb-4">
                        PROPERTY MANAGEMENT SERVICES
                    </h2>
                    <p class="mb-4">
                        RealestateThrissur.com powered by
                        <a href="#" class="text-blue-600 hover:underline">
                            GODs OWN Properties & Developers (P) Ltd.
                        </a>, provides professional real estate consultancy for residential & commercial properties.
                        The transactions include sales and purchase of commercial & residential properties including new
                        residential projects,
                        under construction residential projects, resale residential properties, commercial lands and
                        commercial buildings.
                        We cover the best locations when it comes to new commercial\residential projects.
                        RealestateThrissur.com helps you buy
                        and sell new residential properties including apartments, flats, luxury properties, villas,
                        bungalows, penthouses, row houses, etc.
                    </p>

                    <p class="mb-4">
                        We have tie-ups with most of the reputed real estate developers across Thrissur and provide you the
                        best possible
                        residential real estate investment options. For residential real estate and residential property
                        bookings in new projects,
                        trust RealestateThrissur.com to deliver the maximum number of property options for you.
                    </p>

                    <p class="mb-6">
                        If you are considering selling your home, <span class="font-semibold">We Offer FREE Home
                            Evaluations too.</span>
                    </p>

                    <!-- Home Loan Assistance -->
                    <h2 class="text-2xl font-bold text-red-600 mb-4">
                        HOME LOAN ASSISTANCE
                    </h2>

                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Home Loans
                    </h3>
                    <p class="mb-4">
                        We have ties with India's leading banks, foreign banks, and financial institutions including PNB
                        Housing Finance, HDFC, ICICI Bank,
                        ING Vysya Bank, Kotak Mahindra Bank, HSBC Bank, Axis Bank, etc. and facilitate home loans for
                        property buyer's at the most attractive
                        rates available in the market. Our home loan team provides complete support and guidance to you in
                        availing the best home loans.
                        Right from home loan sanction procedure to the actual home loan disbursal, we take care of all your
                        relevant paperwork,
                        documentation required for the same. For home loans and property finance,
                        <a href="#" class="text-blue-600 hover:underline">click here</a>.
                    </p>

                    <h3 class="text-lg font-semibold text-gray-900 mb-2">
                        Loan Against Property (LAP)
                    </h3>
                    <p class="mb-4">
                        If you are property owner, loan against property is one of the best ways to raise finance and
                        liquefy your real estate asset without selling it.
                        Loan against property is easily available for properties having clear title and without litigations.
                        Our ties with banks allow us to offer you the most attractive loan against property options at the
                        lowest interest rates applicable.
                        In case you are looking to raise finance in terms of loan against your property,
                        <a href="#" class="text-blue-600 hover:underline">click here’s</a>.
                        <br><br>
                        For more details & for enquiries, visit: <a href="#" class="text-blue-600 hover:underline">
                            www.godsownhome.in</a> or contact: 974543 22 00.
                    </p>

                </section>

            </div>
        </div>

        <script>
            const mainImage = document.getElementById("mainImage");
            const mainHeading = document.getElementById("mainHeading");
            const thumbnails = document.querySelectorAll(".thumbnail");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            let currentIndex = 0;
            const images = Array.from(thumbnails).map(img => ({
                src: img.src,
                category: img.dataset.category
            }));

            // Change main image + heading when clicking thumbnail
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener("click", () => {
                    currentIndex = index;
                    updateMainImage();
                });
            });

            // Prev button
            prevBtn.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                updateMainImage();
            });

            // Next button
            nextBtn.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % images.length;
                updateMainImage();
            });

            function updateMainImage() {
                mainImage.src = images[currentIndex].src;
                mainHeading.textContent = images[currentIndex].category;
                thumbnails.forEach((thumb, i) => {
                    thumb.classList.toggle("active", i === currentIndex);
                });
            }

            // Initialize
            updateMainImage();
        </script>
    </section>
@endsection
