<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="../assets/images/logo 1.svg" />
    <link href="../assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/ec593fe317.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <main class="flex-1 p-2 md:p-2 space-y-6 overflow-x-auto">

        <!-- Detail Panels -->
        <section class="bg-gray-100 ">
            <div class="bg-white  shadow-lg overflow-hidden ">

                <!-- Header -->
                <div class="bg-red-600 text-white px-6 py-4">
                    <h1 class="text-xl font-semibold">Change Password</h1>
                </div>

                <!-- Form -->
                <div class="p-6">
                    <form class="space-y-6" action="{{ route('updatePassword') }}" method="POST">
                        @csrf

                        <!-- Password Fields -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Current Password</label>
                            <input type="password" name="current_password" required
                                class="w-80 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">New Password</label>
                            <input type="password" name="new_password" required
                                class="w-80 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Confirm Password</label>
                            <input type="password" name="new_password_confirmation" required
                                class="w-80 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Save Button -->
                        <div class="flex items-start gap-8">
                            <div class="col-span-2"></div>
                            <div class="col-span-10">
                                <button type="submit"
                                    class="bg-gray-200 hover:bg-gray-300 text-blue-600 px-6 py-2 rounded text-sm font-medium inline-flex items-center border border-gray-300">
                                    <i class="far fa-save mr-2"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            </div>

        </section>
    </main>

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

        // Success message
            @if (session('success'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    background: '#10B981', // green color
                    color: '#fff',
                    iconColor: '#fff',
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}'
                });
            @endif

            // Error message
            @if (session('error'))
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    background: '#EF4444', // red color
                    color: '#fff',
                    iconColor: '#fff',
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });
                Toast.fire({
                    icon: 'error',
                    title: '{{ session('error') }}'
                });
            @endif
    </script>
</body>

<script src="../assets/js/script.js"></script>

</html>
