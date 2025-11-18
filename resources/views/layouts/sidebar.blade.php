<!-- Header -->
<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}">
            <div class="flex items-center space-x-2">
                <img src="https://realestatethrissur.com/images/logo.png" alt="Logo" class="h-12">
            </div>
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('about') }}" class="nav-link">About Us</a>
            <a href="#properties" class="nav-link">Properties</a>
            <a href="{{ route('service') }}" class="nav-link">Service</a>
            <a href="{{ route('home-loan') }}" class="nav-link">Home loan</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
        </nav>

        <!-- Right Side -->
        <div class="flex items-center space-x-4">

            <!-- Mobile Hamburger -->
            <button id="menu-btn" class="md:hidden text-gray-800 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Desktop Welcome -->
            <h1 id="admin" class="font-bold text-primary hidden md:block">
                Welcome {{ session('fullname') }}
            </h1>

            <!-- Desktop Logout -->
            <form id="logoutForm" action="{{ route('logout') }}" method="POST" class="hidden md:block">
                @csrf
                <button type="button" id="logoutBtn"
                    class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-secondary transition-colors">
                    <i class="fa-solid fa-right-from-bracket mr-1"></i>
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Mobile Dropdown -->
    <nav id="mobile-menu"
        class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-lg z-40 transition-all duration-300 ease-in-out">

        <div class="flex flex-col space-y-4 p-6 text-center">

            <!-- MOBILE Welcome -->
            <h1 class="font-bold text-primary text-lg">
                Welcome {{ session('fullname') }}
            </h1>

            <!-- MOBILE Logout Button -->
            <form id="logoutForm_mobile" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="button" id="logoutBtn_mobile"
                    class="bg-primary text-white w-full py-2 rounded-lg hover:bg-secondary transition-colors">
                    <i class="fa-solid fa-right-from-bracket mr-1"></i>
                    Logout
                </button>
            </form>

            <hr>

            <!-- Mobile Menu Links -->
            <a href="{{ route('home') }}" class="mobile-link">Home</a>
            <a href="{{ route('about') }}" class="mobile-link">About Us</a>
            <a href="#properties" class="mobile-link">Properties</a>
            <a href="{{ route('service') }}" class="mobile-link">Service</a>
            <a href="{{ route('home-loan') }}" class="mobile-link">Home loan</a>
            <a href="{{ route('contact') }}" class="mobile-link">Contact Us</a>

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
            <div class="w-60 bg-gradient-to-b from-primary to-secondary text-white min-h-screen p-5"
                style="height: 100%">
                <nav class="flex flex-col space-y-2">

                    <!-- Dashboard with Dropdown -->
                    <div class="relative">
                        <button id="dashboardButton"
                            class="w-full flex justify-between items-center px-3 py-2 hover:text-gray-300 rounded focus:outline-none">
                            <span>Dashboard</span>
                        </button>

                        <!-- Dashboard Submenu (appears below) -->
                        <div id="dashboardSubMenu" class="ml-4 mt-1 flex flex-col space-y-1 hidden">
                            <a href="{{ route('dashboard') }}"
                                class="block px-4 py-2 rounded hover:text-gray-300 text-sm"><span
                                    class="mr-2 text-gray-400">-</span> Dashboard</a>
                            @if (session('user_id') == 1)
                                <a href="{{ route('requests') }}"
                                    class="block px-4 py-2 rounded hover:text-gray-300 text-sm">
                                    <span class="mr-2 text-gray-400">-</span> Admin Requests
                                </a>
                            @endif
                        </div>
                    </div>
                    <a href="{{ route('listproperty') }}" class="hover:text-gray-300 px-3 py-2 rounded">Properties</a>

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
                            <a href="{{ route('hotpropertylist') }}"
                                class="block px-4 py-2 hover:bg-primary hover:text-white">Hot
                                Properties</a>
                            <!-- Add more items here -->
                        </div>
                    </div>

                    <a href="{{ route('listUser') }}" class="hover:text-gray-300 px-3 py-2 rounded">Users</a>
                    <a href="{{ route('listlocality') }}"
                        class="hover:text-gray-300 px-3 py-2 rounded">Localities</a>
                    <a href="{{ route('showChangePassword') }}" class="hover:text-gray-300 px-3 py-2 rounded">Change
                        Password</a>
                </nav>
            </div>
        </div>

        <script>
            document.getElementById('logoutBtn').addEventListener('click', function(e) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, logout',
                    cancelButtonText: 'Cancel',
                    timerProgressBar: true,
                    background: '#EF4444', // red
                    color: '#fff',
                    iconColor: '#fff'
                });

                Toast.fire({
                    icon: 'warning',
                    title: 'Are you sure you want to logout?'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logoutForm').submit();
                    }
                });
            });
        </script>

        <script>
            document.getElementById('logoutBtn_mobile').addEventListener('click', function(e) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top',
                    showConfirmButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Yes, logout',
                    cancelButtonText: 'Cancel',
                    timerProgressBar: true,
                    background: '#EF4444', // red
                    color: '#fff',
                    iconColor: '#fff'
                });

                Toast.fire({
                    icon: 'warning',
                    title: 'Are you sure you want to logout?'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('logoutForm_mobile').submit();
                    }
                });
            });
        </script>

        <script>
            // Dashboard dropdown toggle
            const dashboardButton = document.getElementById('dashboardButton');
            const dashboardSubMenu = document.getElementById('dashboardSubMenu');
            const dashboardArrow = document.getElementById('dashboardArrow');

            dashboardButton.addEventListener('click', () => {
                dashboardSubMenu.classList.toggle('hidden');
                dashboardArrow.classList.toggle('rotate-90');
            });
        </script>
