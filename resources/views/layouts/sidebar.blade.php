<!-- Header -->
<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <img src="https://realestatethrissur.com/images/logo.png" alt="Logo" class="h-12">
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8">
            <a href="index.html" class="text-gray-700 hover:text-primary transition-colors">Home</a>
            <a href="about.html" class="text-gray-700 hover:text-primary transition-colors">About Us</a>
            <a href="#properties" class="text-gray-700 hover:text-primary transition-colors">Properties</a>
            <a href="service.html" class="text-gray-700 hover:text-primary transition-colors">Service</a>
            <a href="home-loan.html" class="text-gray-700 hover:text-primary transition-colors">Home loan</a>
            <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Contact Us</a>
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
            <h1 id="admin" class="font-bold text-primary">Welcome {{ session('username') }}</h1>

            <!-- List Property Button (desktop only) -->
            <form action="{{ route('logout') }}" method="POST"
                onsubmit="return confirm('Are you sure you want to logout?');">
                @csrf
                <button
                    class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors hidden md:block">
                    Logout
                </button>
            </form>
            <!-- <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors hidden md:block">
        List Property
      </button> -->
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <nav id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-lg z-40">
        <div class="flex flex-col space-y-4 p-6 text-center">

            <a href="index.html" class="text-gray-700 hover:text-primary transition-colors">Home</a>
            <a href="about.html" class="text-gray-700 hover:text-primary transition-colors">About Us</a>
            <a href="#properties" class="text-gray-700 hover:text-primary transition-colors">Properties</a>
            <a href="service.html" class="text-gray-700 hover:text-primary transition-colors">Service</a>
            <a href="home-loan.html" class="text-gray-700 hover:text-primary transition-colors">Home loan</a>
            <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Contact Us</a>

            <!-- Add "List Property" for mobile -->
            <!-- <button class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors">
        List Property
      </button> -->
        </div>
    </nav>
</header>

<script>
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
    });
</script>

<!-- Hero Section -->
<section class="bg-white font-sans">

    <div class="flex">

        <!-- Sidebar -->
        <div class="relative">
            <div class="w-60 bg-gradient-to-b from-primary to-secondary text-white min-h-screen p-5">
                <nav class="flex flex-col space-y-2">

                    <a href="{{ route('admin') }}" class="hover:text-gray-300 px-3 py-2 rounded">Dashboard</a>
                    <a href="{{ route('properties') }}" class="hover:text-gray-300 px-3 py-2 rounded">Properties</a>

                    <!-- Ads with Popup Submenu -->
                    <div class="relative">
                        <button id="adsButton"
                            class="w-full flex justify-between items-center px-3 py-2 hover:text-gray-300 rounded focus:outline-none">
                            <span>Ads</span>
                            <svg id="adsArrow" class="w-4 h-4 transform transition-transform duration-200"
                                fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <!-- Popup Submenu -->
                        <div id="adsSubMenu"
                            class="absolute left-full top-0 mt-0 ml-2 w-48 bg-white text-gray-800 rounded shadow-lg  hidden">
                            <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Hot
                                Properties</a>
                            <!-- Add more items here -->
                        </div>
                    </div>

                    <a href="#" class="hover:text-gray-300 px-3 py-2 rounded">Users</a>
                    <a href="#" class="hover:text-gray-300 px-3 py-2 rounded">Localities</a>
                    <a href="#" class="hover:text-gray-300 px-3 py-2 rounded">Change Password</a>
                </nav>
            </div>
        </div>
