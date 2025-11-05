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
                        <h1 class="text-xl font-semibold">Users List</h1>
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" placeholder="Search..."
                                    class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                            </div>
                            <button class="flex items-center text-white hover:text-blue-100">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                <span class="text-sm">View All</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-200   p -2 md:px-6 py-3 border-b">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1 md:space-x-4">
                            {{-- <button class="flex items-center text-gray-600 hover:text-primary text-sm">
                                        <i class="far fa-eye mr-2"></i>
                                        View User
                                    </button>
                                    <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                        <i class="fas fa-edit mr-2"></i>
                                        Edit User
                                    </button>

                                    <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm">
                                        <i class="fas fa-trash mr-2"></i>
                                        Delete User
                                    </button> --}}
                        </div>
                        <button onclick="window.location.href='add_property.html'"
                            class="flex items-center text-gray-600 hover:text-primary 800 text-sm font-medium">
                            <i class="fas fa-plus mr-2"></i>
                            Add User
                        </button>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                        <thead class="bg-gray-300 text-black">
                            <tr>
                                {{-- <th class="px-4 py-3 text-left text-sm font-medium">
                                            <input type="checkbox" id="selectAll" class="rounded">
                                        </th> --}}
                                <th class="px-4 py-3 text-left text-sm font-medium">Full Name</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Login Name</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Email</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">User Type</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Package</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Register Date</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Status</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($users as $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    {{-- <td class="px-4 py-3"><input type="checkbox" class="rowCheckbox rounded"></td> --}}
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->fullname }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->login_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->email }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $user->userType->type_name ?? 'N/A' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $user->package_name ?? 'Guest Package' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->created_at ?? 'N/A' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->status ?? 'Active' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        <div class="flex items-center gap-3">

                                            <!-- Edit -->
                                            <a href="">
                                                <i
                                                    class="fa-solid fa-pen-to-square cursor-pointer hover:text-blue-600"></i>
                                            </a>

                                            <!-- View -->
                                            <a href="">
                                                <i class="fa-solid fa-eye cursor-pointer hover:text-green-600"></i>
                                            </a>

                                            <!-- Delete -->
                                            <button type="button" class="delete-btn">
                                                <i class="fa-solid fa-trash cursor-pointer hover:text-red-600"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <div class="flex items-center justify-between flex-wrap gap-4">

                    <!-- Results info -->
                    <div class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to
                        <span class="font-medium">10</span> of
                        <span class="font-medium">45</span> results
                    </div>

                    <!-- Pagination controls -->
                    <div class="flex items-center gap-1">
                        <!-- First page (disabled state) -->
                        <!-- <span class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">
                                &laquo; First
                            </span> -->

                        <!-- Previous page (disabled state) -->
                        <span class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">
                            &lsaquo; Prev
                        </span>

                        <!-- Page 1 (active) -->
                        <span class="px-3 py-2 rounded-md text-sm font-medium bg-primary text-white">
                            1
                        </span>

                        <!-- Page 2 -->
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">
                            2
                        </a>

                        <!-- Page 3 -->
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">
                            3
                        </a>

                        <!-- Ellipsis -->
                        <span class="px-3 py-2 text-gray-500">...</span>

                        <!-- Last page -->
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">
                            5
                        </a>

                        <!-- Next page (enabled) -->
                        <a href="#"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">
                            Next &rsaquo;
                        </a>

                        <!-- Last page (enabled) -->
                        <!-- <a href="#" class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">
                                Last &raquo;
                            </a> -->
                    </div>
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
