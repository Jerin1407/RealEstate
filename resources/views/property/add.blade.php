<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="./assets/images/logo 1.svg" />
    <link href="../assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <!-- Main Content -->
            <main class="flex-1 p-2 md:p-2 space-y-6 overflow-x-auto">

                <div class="max-w-7xl mx-auto bg-white shadow-lg">
                    <!-- Header -->
                    <div class="bg-primary text-white px-6 py-4 md:flex justify-between items-center">
                        <h1 class="text-xl font-semibold">Property Add</h1>
                        <div class="text-sm">
                            <span>Remaining Properties : </span>
                            <span class="text-white font-bold">Unlimited</span>
                        </div>
                    </div>

                    <!-- Form Container -->
                    <div class="p-6">
                        <form class="space-y-6">
                            <!-- Property Code -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Property Code</label>
                                <div class="col-span-4">
                                    <input type="text" value="RT6193"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Title -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Title <span
                                        class="text-red-500">*</span></label>
                                <div class="col-span-4">
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Category with Dropdown -->
                            <div class="md:grid grid-cols-12 gap-4 items-start">
                                <label class="col-span-2 text-sm text-gray-700 pt-2">Category <span
                                        class="text-red-500">*</span></label>
                                <div class="col-span-4 relative">
                                    <select id="categorySelect"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none bg-white cursor-pointer">
                                        <option value="">Select Any</option>
                                        <option value="commercial">Commercial Land/Room/Buildings</option>
                                        <option value="flats">Flats</option>
                                        <option value="house">House/Villas</option>
                                        <option value="rent">Rent/Lease Properties</option>
                                        <option value="residential">Residential Plots</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="md:grid grid-cols-12 gap-4 ">
                                <label class="col-span-2 text-sm text-gray-700">Description <span
                                        class="text-red-500">*</span></label>
                                <div class="col-span-10 md:w-1/2">
                                    <!-- Rich Text Editor Toolbar -->
                                    <textarea name="description" id="description" rows="5"
                                        class="  border rounded p-2"></textarea>

                                </div>
                            </div>

                            <!-- Youtube URL -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Youtube URL</label>
                                <div class="col-span-4">
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Location <span
                                        class="text-red-500">*</span></label>
                                <div class="col-span-4 flex items-center space-x-2">
                                    <select
                                        class="flex-1 px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">


                                        <option value="">Select Any</option>
                                        <option value="Adat">Adat</option>
                                        <option value="Amala">Amala</option>
                                        <option value="Anchery">Anchery</option>
                                        <option value="Aranatukara">Aranatukara</option>
                                        <option value="Arimboor">Arimboor</option>
                                        <option value="Athani">Athani</option>
                                        <option value="Attore">Attore</option>
                                        <option value="Avanur">Avanur</option>
                                        <option value="Ayyanthole">Ayyanthole</option>
                                        <option value="Chembukkavu">Chembukkavu</option>
                                        <option value="Cheroor">Cheroor</option>
                                        <option value="Chettupuzha">Chettupuzha</option>
                                        <option value="Chirakkakkode">Chirakkakkode</option>
                                        <option value="Chittilapilly">Chittilapilly</option>
                                        <option value="Chiyyaram">Chiyyaram</option>
                                        <option value="Choolissery">Choolissery</option>
                                        <option value="East fort">East fort</option>
                                        <option value="Elthuruth">Elthuruth</option>
                                        <option value="Eravu">Eravu</option>

                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>


                                </div>
                            </div>

                            <!-- Price Range -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Price Range <span
                                        class="text-red-500">*</span></label>
                                <div class="col-span-4">
                                    <select
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>Select Any</option>

                                    </select>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Price</label>
                                <div class="col-span-4">
                                    <select
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>Thousand</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Exact Price -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Exact Price</label>
                                <div class="col-span-4">
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Priority -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Priority</label>
                                <div class="col-span-4">
                                    <select
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>Select One</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Amount For -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Amount For</label>
                                <div class="col-span-4">
                                    <select
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option>Select One</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Upload Images Section -->
                            <div class="md:grid grid-cols-12 gap-4">
                                <label class="col-span-2 text-sm text-gray-700">Upload Images</label>
                                <div class="col-span-10 md:w-1/2">
                                    <div class="border border-gray-300 rounded p-4">
                                        <div
                                            class="md:flex items-center justify-between bg-gradient-to-b from-red-400 to-primary px-4 py-3 rounded mb-3">
                                            <span class="text-gray-800 font-medium">Upload Images</span>

                                            <!-- Hidden File Input -->
                                            <input type="file" id="imageUpload" accept="image/*" class="hidden"
                                                onchange="previewImage(event)">

                                            <!-- Trigger Button -->
                                            <button type="button"
                                                onclick="document.getElementById('imageUpload').click()"
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

                            <!-- Contact Person -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Contact Person</label>
                                <div class="col-span-4">
                                    <input type="text"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Contact Number -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700">Contact Number</label>
                                <div class="col-span-4">
                                    <input type="number"
                                        class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                </div>
                            </div>

                            <!-- Terms and Conditions -->
                            <div class="md:grid grid-cols-12 gap-4 items-center">
                                <label class="col-span-2 text-sm text-gray-700"></label>
                                <div class="col-span-10">
                                    <div class="flex items-center space-x-2">
                                        <input type="checkbox" id="terms" class="w-4 h-4 border-gray-300 rounded">
                                        <label for="terms" class="text-sm text-gray-700">
                                            Click to Agree <a href="#" class="text-blue-600 hover:underline">Terms and
                                                Conditions</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Save Button -->
                            <div class="md:grid grid-cols-12 gap-4">
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
