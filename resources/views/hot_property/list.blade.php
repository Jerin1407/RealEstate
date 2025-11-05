<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo 1.svg" />
    <link href="./assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/ec593fe317.js"></script>
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
                <div class="bg-primary text-white px-6 py-4">
                    <div class=" md:flex justify-between items-center">
                        <h1 class="text-xl font-semibold">Hot Properties</h1>
                        <div class="flex items-center space-x-4">
                            <!-- <div class="relative">
                        <input type="text" placeholder="Search..." class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                    </div>
                    <button class="flex items-center text-white hover:text-blue-100">
                        <i class="fas fa-map-marker-alt mr-1"></i>
                        <span class="text-sm">View All</span>
                    </button> -->
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-200   p -2 md:px-6 py-3 border-b">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1 md:space-x-4">

                            {{-- <button onclick=""
                                class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                <i class="fas fa-edit mr-2"></i>
                                Add Hot Property
                            </button>
                            <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                <i class="fas fa-download mr-2"></i>
                                Edit
                            </button>
                            <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                <i class="fas fa-trash mr-2"></i>
                                Delete
                            </button> --}}
                        </div>
                        <a href="{{ route('addhotproperty') }}">
                            <button class="flex items-center text-gray-600 hover:text-gray-950 800 text-sm font-medium">
                                <i class="fas fa-plus mr-2"></i>
                                Add Hot Property
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <!-- Table Header -->
                        <thead class="bg-gray-300 text-black">
                            <tr>
                                {{-- <th class="px-4 py-3 text-left text-sm font-medium">
                                    <input type="checkbox" class="rounded">
                                </th> --}}
                                <!-- <th class="px-4 py-3 text-left text-sm font-medium">Property code</th> -->
                                <th class="px-4 py-3 text-left text-sm font-medium">Title</th>
                                <!-- <th class="px-4 py-3 text-left text-sm font-medium">Category</th> -->
                                <!-- <th class="px-4 py-3 text-left text-sm font-medium">Location</th> -->
                                <th class="px-4  text-left text-sm font-medium">Description</th>
                                <!-- <th class="px-4 py-3 text-left text-sm font-medium">Added By</th> -->
                                <!-- <th class="px-4 py-3 text-left text-sm font-medium">Added On</th> -->
                                <!-- <th class="px-4 py-3 text-left text-sm font-medium">Price</th> -->
                                <th class="px-4 py-3 text-left text-sm font-medium">Date</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Type</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Action</th>
                            </tr>
                        </thead>
                        <!-- Table Body -->
                        <tbody class="bg-white">
                            <tr class="border-b border-gray-200 hover:bg-gray-50">
                                {{-- <td class="px-4 py-3">
                                    <input type="checkbox" class="rounded">
                                </td> --}}
                                <!-- <td class="px-4 py-3 text-sm text-gray-900">PRP001</td> -->
                                <td class="px-4 py-3 text-sm text-gray-900">Veluthur near 1410 SqFt, 4.5 cent,
                                    3BHK Villa</td>
                                <!-- <td class="px-4 py-3 text-sm text-gray-900">Villa</td>
                        <td class="px-4 py-3 text-sm text-gray-900">Veluthur</td> -->
                                <td class="px-4 py-3 text-sm text-gray-900">Property Description</td>
                                <!-- <td class="px-4 py-3 text-sm text-gray-900">Realestate</td> -->
                                <td class="px-4 py-3 text-sm text-gray-900">2025-09-25</td>
                                <!-- <td class="px-4 py-3 text-sm text-gray-900">₹55,00,000</td> -->
                                <!-- <td class="px-4 py-3 text-sm text-gray-900">Active</td> -->
                                <td class="px-4 py-3 text-sm text-gray-900">Ordinary</td>
                                <td class="px-4 py-3 text-sm text-gray-900">
                                    <div class="flex items-center gap-3">

                                        <!-- Edit -->
                                        <a href="{{ route('edithotproperty') }}">
                                            <i class="fa-solid fa-pen-to-square cursor-pointer hover:text-blue-600"></i>
                                        </a>

                                        <!-- Delete -->
                                        <a href="">
                                            <i class="fa-solid fa-trash cursor-pointer hover:text-red-600"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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

<script src="assets/js/script.js"></script>

</html>
