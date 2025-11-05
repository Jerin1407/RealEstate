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
            <div class="bg-white  shadow-lg overflow-hidden ">

                <!-- Header -->
                <div class="bg-red-600 text-white px-6 py-4">
                    <h1 class="text-xl font-semibold">Hot Property</h1>
                </div>

                <!-- Form -->
                <div class="p-6">
                    <form class="space-y-6">

                        <!-- Title Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Title <span class="text-red-500">*</span></label>
                            <input type="text"
                                class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Description Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Description <span
                                    class="text-red-500">*</span></label>
                            <textarea rows="6"
                                class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>

                        <!-- Type Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Type <span class="text-red-500">*</span></label>
                            <select
                                class="flex-1 border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option>Ordinary</option>
                            </select>
                        </div>

                        <!-- Url Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Url</label>
                            <input type="text"
                                class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Upload Images Section -->
                        <div class="flex items-start gap-4">
                            <div class="w-32"></div>
                            <div class="flex-1">
                                <div class="flex items-center">
                                    <div class="bg-red-300 text-gray-500 font-semibold px-6 py-3 rounded-l">
                                        Upload Images
                                    </div>
                                    <label for="imageUpload"
                                        class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-r cursor-pointer">
                                        Add Image
                                    </label>
                                    <input type="file" id="imageUpload" accept="image/*" multiple class="hidden">
                                </div>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="flex items-start gap-4">
                            <div class="w-32"></div>
                            <div class="flex-1">
                                <button type="submit"
                                    class="bg-white hover:bg-gray-50 text-gray-600 font-semibold px-6 py-2 rounded border border-gray-300 flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-save-icon lucide-save">
                                        <path
                                            d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" />
                                        <path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7" />
                                        <path d="M7 3v4a1 1 0 0 0 1 1h7" />
                                    </svg>
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
    </script>
</body>

<script src="assets/js/script.js"></script>

</html>
