<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}">
            <div class="flex items-center space-x-2">
                <img src="https://realestatethrissur.com/images/logo.png" alt="Logo" class="h-12">
            </div>
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8 items-center">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary transition-colors">Home</a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary transition-colors">About</a>

            <!-- Properties Dropdown (Desktop) -->
            <div class="relative">
                <button id="properties-btn"
                    class="text-gray-700 hover:text-primary transition-colors flex items-center">
                    Properties
                    <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="properties-menu" class="absolute left-0 mt-2 w-56 bg-white shadow-lg rounded-md hidden">
                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">House/Villas</a>
                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Rent/Lease Properties</a>
                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Flats</a>
                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Residential Plots</a>
                    <a href="" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">All</a>
                </div>
            </div>

            <a href="{{ route('service') }}" class="text-gray-700 hover:text-primary transition-colors">Service</a>
            <a href="{{ route('home-loan') }}" class="text-gray-700 hover:text-primary transition-colors">Home loan</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
        </nav>

        <!-- Right Side: List Property + Mobile Menu Button -->
        <div class="flex items-center space-x-4">

            <!-- Mobile Hamburger -->
            <button id="menu-btn" class="md:hidden text-gray-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- List Property Button (desktop only) -->
            <button
                class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors hidden md:block">
                List Property
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <nav id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-lg z-40">
        <div class="flex flex-col space-y-4 p-6 text-center">
            <a href="{{ route('home') }}" class="text-gray-700 hover:text-primary transition-colors">Home</a>
            <a href="{{ route('about') }}" class="text-gray-700 hover:text-primary transition-colors">About</a>

            <!-- Properties Dropdown (Mobile) -->
            <div class="relative">
                <button id="mobile-properties-btn"
                    class="w-full flex justify-center items-center text-gray-700 hover:text-primary transition-colors">
                    Properties
                    <svg class="w-4 h-4 ml-1 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div id="mobile-properties-menu" class="hidden mt-2 flex flex-col space-y-2">
                    <a href="" class="text-gray-700 hover:text-primary transition-colors">House/Villas</a>
                    <a href="" class="text-gray-700 hover:text-primary transition-colors">Rent/Lease
                        Properties</a>
                    <a href="" class="text-gray-700 hover:text-primary transition-colors">Flats</a>
                    <a href="" class="text-gray-700 hover:text-primary transition-colors">Residential Plots</a>
                    <a href="" class="text-gray-700 hover:text-primary transition-colors">All</a>
                </div>
            </div>

            <a href="{{ route('service') }}" class="text-gray-700 hover:text-primary transition-colors">Service</a>
            <a href="{{ route('home-loan') }}" class="text-gray-700 hover:text-primary transition-colors">Home loan</a>
            <a href="{{ route('contact') }}" class="text-gray-700 hover:text-primary transition-colors">Contact</a>

            <!-- Add "List Property" for mobile -->
            <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors">
                List Property
            </button>
        </div>
    </nav>
</header>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Desktop properties dropdown
        const desktopBtn = document.getElementById("properties-btn");
        const desktopMenu = document.getElementById("properties-menu");

        desktopBtn.addEventListener("click", () => {
            desktopMenu.classList.toggle("hidden");
        });

        document.addEventListener("click", (e) => {
            if (!desktopBtn.contains(e.target) && !desktopMenu.contains(e.target)) {
                desktopMenu.classList.add("hidden");
            }
        });

        // Mobile properties dropdown
        const mobileBtn = document.getElementById("mobile-properties-btn");
        const mobileMenu = document.getElementById("mobile-properties-menu");

        mobileBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        // Optional: close when clicking outside
        document.addEventListener("click", (e) => {
            if (!mobileBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.add("hidden");
            }
        });
    });
</script>


<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>



<!-- Hero Section -->
<section class="bg-gradient-to-r from-primary to-secondary text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-5xl font-bold mb-6">Find Your Dream Home</h2>
        <p class="text-xl mb-8 opacity-90">Discover the perfect property from our extensive collection of villas,
            flats, and plots</p>

        <!-- Search Bar -->
        <div class="bg-white rounded-lg p-6 max-w-4xl mx-auto shadow-xl">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <select
                    class="p-3 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-primary">
                    <option>Property Type</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" placeholder="Location"
                    class="p-3 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-primary"> --}}
                <div class="relative w-full max-w-sm">
                    <input type="text" id="locationInput" placeholder="Search Location..."
                        class="p-3 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-primary w-full">
                    <div id="suggestionsBox"
                        class="absolute bg-white text-gray-700 border border-gray-200 w-full mt-1 rounded-lg shadow-md hidden z-50">
                    </div>
                </div>
                <select
                    class="p-3 border border-gray-300 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-primary">
                    <option>Price Range</option>
                    @foreach ($priceRanges as $priceRange)
                        <option value="{{ $priceRange->price_range_id }}">{{ $priceRange->price_range }}
                        </option>
                    @endforeach
                </select>
                <button
                    class="bg-primary text-white px-6 py-3 rounded-lg hover:bg-secondary transition-colors font-semibold">
                    Search Properties
                </button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#locationInput').on('keyup', function() {
                let query = $(this).val();

                if (query.length >= 2) {
                    $.ajax({
                        url: "{{ route('searchLocation') }}",
                        type: "GET",
                        data: {
                            query: query
                        },
                        success: function(data) {
                            let html = '';
                            if (data.length > 0) {
                                data.forEach(function(item) {
                                    html +=
                                        `<div class="p-2 hover:bg-gray-100 cursor-pointer suggestion-item">${item.locality_name}</div>`;
                                });
                            } else {
                                html = `<div class="p-2 text-gray-500">No results found</div>`;
                            }
                            $('#suggestionsBox').html(html).removeClass('hidden');
                        }
                    });
                } else {
                    $('#suggestionsBox').addClass('hidden');
                }
            });

            // When user clicks a suggestion
            $(document).on('click', '.suggestion-item', function() {
                $('#locationInput').val($(this).text());
                $('#suggestionsBox').addClass('hidden');
            });

            // Hide suggestions when clicking outside
            $(document).click(function(e) {
                if (!$(e.target).closest('#locationInput, #suggestionsBox').length) {
                    $('#suggestionsBox').addClass('hidden');
                }
            });
        });
    </script>

</section>
