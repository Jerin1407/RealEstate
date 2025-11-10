<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="../assets/images/logo 1.svg" />
    <link href="../assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/ec593fe317.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-2 md:p-2 space-y-6 overflow-x-auto ">
        <div class="bg-white border-t-2 mt-4">
            <!-- Header -->
            <div class="bg-primary text-white px-6 py-3 flex items-center justify-between">
                <h1 class="text-lg font-medium">User Details</h1>
            </div>

            <!-- Content Area -->
            <div class="p-6 border-2 border-gray-300">
                <!-- Action Buttons -->
                <div class="flex justify-end gap-2 mb-6">
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                    </div>
                    <button class="px-4 py-1 border border-gray-400 bg-white text-sm hover:bg-gray-50">
                        Search
                    </button>
                    <button class="px-4 py-1 border border-gray-400 bg-white text-sm hover:bg-gray-50">
                        View All
                    </button>
                </div>

                <!-- User Details Box -->
                <div class="">
                    <div class="p-6 space-y-3">
                        <div class="text-sm">
                            <span class="font-medium">Full Name :</span>
                            <span class="ml-2">{{ $user->fullname }}</span>
                        </div>

                        <div class="text-sm">
                            <span class="font-medium">Login Name :</span>
                            <span class="ml-2">{{ $user->login_name }}</span>
                        </div>

                        <div class="text-sm">
                            <span class="font-medium">Email :</span>
                            <span class="ml-2">{{ $user->email }}</span>
                        </div>

                        <div class="text-sm">
                            <span class="font-medium">User Type:</span>
                            <span class="ml-2">{{ $user->userType->type_name }}</span>
                        </div>

                        <div class="text-sm">
                            <span class="font-medium">Contact Number :</span>
                            <span class="ml-2">{{ $user->contact_number }}</span>
                        </div>

                        <div class="text-sm">
                            <span class="font-medium">Address:</span>
                            <span class="ml-2">{{ $user->contact_address }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
