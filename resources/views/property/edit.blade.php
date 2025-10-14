<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Thrissur - Find Your Dream Home</title>
    <link rel="icon" type="image/svg+xml" href="../assets/images/logo 1.svg" />
    <link href="../assets/css/output_2.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <form class="space-y-6" action="{{ route('updateproperty', $property->property_id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Property Code -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Property Code</label>
                        <div class="col-span-4">
                            <input type="text" value="{{ $property->property_code }}" name="property_code" readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Title <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4">
                            <input type="text" name="title" value="{{ $property->property_title }}" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Category with Dropdown -->
                    <div class="md:grid grid-cols-12 gap-4 items-start">
                        <label class="col-span-2 text-sm text-gray-700 pt-2">Category <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4 relative">
                            <select id="categorySelect" name="category" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 appearance-none bg-white cursor-pointer">
                                <option value="0">Select Any</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_id }}"
                                        {{ $category->category_id == $property->category_id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
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
                            <textarea name="description" id="description" rows="5" class="border rounded p-2">{{ $property->property_description }}</textarea>
                        </div>
                    </div>

                    <!-- Youtube URL -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Youtube URL</label>
                        <div class="col-span-4">
                            <input type="text" name="youtube_url" value="{{ $property->youtubeurl }}" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Location <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4 flex items-center space-x-2">
                            <select name="location" required
                                class="flex-1 px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select Any</option>
                                @foreach ($locations as $location)
                                    <option value="{{ $location->locality_id }}"
                                        {{ $location->locality_id == $property->locality_id ? 'selected' : '' }}>
                                        {{ $location->locality_name }}
                                    </option>
                                @endforeach
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
                            <select name="price_range" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select Any</option>
                                @foreach ($priceRanges as $priceRange)
                                    <option value="{{ $priceRange->price_range_id }}"
                                        {{ $priceRange->price_range_id == $property->price_range_id ? 'selected' : '' }}>
                                        {{ $priceRange->price_range }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Price</label>
                        <div class="col-span-4">
                            <select name="price" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select Any</option>
                                @foreach ($priceUnits as $priceUnit)
                                    <option value="{{ $priceUnit->price_unit_id }}"
                                        {{ $priceUnit->price_unit_id == $property->price_unit_id ? 'selected' : '' }}>
                                        {{ $priceUnit->unit_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Exact Price -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Exact Price</label>
                        <div class="col-span-4">
                            <input type="text" name="exact_price" value="{{ $property->price }}" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Priority -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Priority</label>
                        <div class="col-span-4">
                            <select name="priority" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select One</option>
                                @for ($i = 1; $i <= 20; $i++)
                                    <option value="{{ $i }}"
                                        {{ $property->priority == $i ? 'selected' : '' }}>P{{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <!-- Amount For -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Amount For</label>
                        <div class="col-span-4">
                            <select name="amount_for" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select One</option>
                                @foreach ($areaUnits as $areaUnit)
                                    <option value="{{ $areaUnit->area_unit_id }}"
                                        {{ $areaUnit->area_unit_id == $property->area_unit_id ? 'selected' : '' }}>
                                        {{ $areaUnit->unit_name }}
                                    </option>
                                @endforeach
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
                                    <input type="file" id="imageUpload" accept="image/*" class="hidden" required
                                        name="images[]" multiple onchange="previewImage(event)">

                                    <!-- Trigger Button -->
                                    <button type="button" onclick="document.getElementById('imageUpload').click()"
                                        class="bg-white hover:bg-primary text-primary hover:text-white px-6 mt-2 md:mt-0 md:py-2 rounded font-medium">
                                        Add Image
                                    </button>
                                </div>

                                <!-- Preview Uploaded Image -->
                                <div id="previewContainer" class="mt-3 flex flex-wrap gap-3">
                                    @foreach ($property->images as $image)
                                        <div class="relative group">
                                            <img src="{{ asset('uploads/' . $image->filename) }}"
                                                alt="Property Image" class="w-24 h-24 object-cover rounded border">

                                            <!-- Delete Image -->
                                            {{-- <form
                                                action="{{ route('deletePropertyImage', $image->property_thumb_id) }}"
                                                method="POST" class="absolute top-1 right-1">
                                                @csrf
                                                @method('POST')
                                                <button type="submit"
                                                    class="bg-red-500 text-black text-xs px-2 py-1 rounded">✕</button>
                                            </form> --}}
                                            <button type="button"
                                                onclick="deleteImage('{{ route('deletePropertyImage', $image->property_thumb_id) }}')"
                                                class="bg-red-500 text-black text-xs px-2 py-1 rounded">
                                                ✕
                                            </button>

                                        </div>
                                    @endforeach
                                </div>

                                <div class="bg-primary text-white px-4 py-2 rounded text-sm">
                                    <span class="font-medium">Maximum : Unlimited</span>
                                    <span class="md:ml-8 font-medium">Remaining : Unlimited</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Person -->
                    <div class="md:grid grid-cols-12 gap-4 items-center mt-6">
                        <label class="col-span-2 text-sm text-gray-700">Contact Person</label>
                        <div class="col-span-4">
                            <input type="text" name="contact_person" value="{{ $property->contact_name }}"
                                required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Contact Number -->
                    <div class="md:grid grid-cols-12 gap-4 items-center mt-6">
                        <label class="col-span-2 text-sm text-gray-700">Contact Number</label>
                        <div class="col-span-4">
                            <input type="number" name="contact_number" value="{{ $property->contact_number }}"
                                required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="md:grid grid-cols-12 gap-4 items-center mt-6">
                        <label class="col-span-2 text-sm text-gray-700"></label>
                        <div class="col-span-10">
                            <div class="flex items-center space-x-2">
                                <input type="checkbox" id="terms" class="w-4 h-4 border-gray-300 rounded"
                                    required>
                                <label for="terms" class="text-sm text-gray-700">
                                    Click to Agree <a href="#" class="text-blue-600 hover:underline">Terms and
                                        Conditions</a>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="md:grid grid-cols-12 gap-4 mt-6">
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
                <!-- Hidden delete form (used by JS dynamically) -->
                <form id="deleteImageForm" method="POST" style="display:none;">
                    @csrf
                    @method('POST')
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

        // Delete Property Image
        function deleteImage(actionUrl) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'Are you want to delete this image?',
                icon: 'warning',
                toast: true,
                position: 'top',
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: 'Yes',
                cancelButtonText: 'No',
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                timerProgressBar: true,
                width: '380px', // smaller toast size
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('deleteImageForm');
                    form.action = actionUrl;
                    form.submit();
                }
            });
        }

        // alert success
        @if (session('success_deleteImage'))
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                background: '#10B981', // green color
                color: '#fff',
                iconColor: '#fff',
                title: '{{ session('success_deleteImage') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif

        // alert success
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
    </script>
</body>

<script src="../assets/js/script.js"></script>

</html>
