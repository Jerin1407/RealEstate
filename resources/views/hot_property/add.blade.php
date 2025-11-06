<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo 1.svg" />
    <link href="./assets/css/output_2.css" rel="stylesheet" />
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
                    <h1 class="text-xl font-semibold">Add Hot Property</h1>
                </div>

                <!-- Form -->
                <div class="p-6">
                    <form class="space-y-6">

                        <!-- Title Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Title <span class="text-red-500">*</span></label>
                            <input type="text" name="title" required
                                class="w-80 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Description Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Description <span
                                    class="text-red-500">*</span></label>
                            <textarea rows="6" name="description" id="description"
                                class="flex-1 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>

                        <!-- Type Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Type <span class="text-red-500">*</span></label>
                            <select name="type" required
                                class="w-80 border border-gray-300 rounded px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select Type</option>
                                <option value="Ordinary">Ordinary</option>
                            </select>
                        </div>

                        <!-- Url Field -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Url</label>
                            <input type="text" name="url" required
                                class="w-80 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <!-- Upload Images Section -->
                        <div class="flex items-start gap-4">
                            <label class="w-32 pt-2 text-gray-700">Upload Images</label>
                            <div class="w-72">
                                <div class="border border-gray-300 rounded p-4">
                                    <div
                                        class="md:flex items-center justify-between bg-gradient-to-b from-red-400 to-primary px-4 py-3 rounded mb-3">
                                        <span class="text-gray-800 font-medium">Upload Images</span>

                                        <!-- Hidden File Input -->
                                        <input type="file" id="imageUpload" accept="image/*" class="hidden" required
                                            name="images[]" multiple onchange="previewImage(event)">

                                        <!-- Trigger Button -->
                                        <button type="button" onclick="document.getElementById('imageUpload').click()"
                                            class="bg-white hover:bg-primary text-primary hover:text-white px-6 mt-2 md:mt-0 md:py-2 rounded font-medium">
                                            Add Image
                                        </button>
                                    </div>

                                    <!-- Preview Uploaded Image -->
                                    <div id="previewContainer" class="mt-3 flex flex-wrap gap-3"></div>

                                    <div class="bg-primary text-white px-4 py-2 rounded text-sm">
                                        <span class="font-medium">Maximum : Unlimited</span>
                                        <span class="md:ml-8 font-medium">Remaining : Unlimited</span>
                                    </div>
                                </div>
                            </div>
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
    </script>
</body>

<script src="assets/js/script.js"></script>

</html>
