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
</head>

<body class="bg-gray-50 font-sans">

    <!-- Sidebar -->
    @include('layouts.header')

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
                <form class="space-y-6" action="{{ route('saveProperty') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!-- Property Code -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Property Code</label>

                        @php
                            $lastProperty = \App\Models\MyProperties::orderBy('property_id', 'desc')->first();
                            $nextCode =
                                'RT' .
                                str_pad(
                                    $lastProperty ? intval(substr($lastProperty->property_code, 2)) + 1 : 1000,
                                    4,
                                    '0',
                                    STR_PAD_LEFT,
                                );
                        @endphp

                        <div class="col-span-4">
                            <input type="text" value="{{ $nextCode }}" name="property_code" readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Title -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Title <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4">
                            <input type="text" name="title" required
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
                                    <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
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
                            <textarea name="description" id="description" rows="5" class="border rounded p-2"></textarea>
                        </div>
                    </div>

                    <!-- Youtube URL -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Youtube URL</label>
                        <div class="col-span-4">
                            <input type="text" name="youtube_url" required
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
                                    <option value="{{ $location->locality_id }}">{{ $location->locality_name }}</option>
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
                                    <option value="{{ $priceRange->price_range_id }}">{{ $priceRange->price_range }}
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
                                    <option value="{{ $priceUnit->price_unit_id }}">{{ $priceUnit->unit_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Exact Price -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Exact Price</label>
                        <div class="col-span-4">
                            <input type="text" name="exact_price" required
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
                                <option value="1">P1</option>
                                <option value="2">P2</option>
                                <option value="3">P3</option>
                                <option value="4">P4</option>
                                <option value="5">P5</option>
                                <option value="6">P6</option>
                                <option value="7">P7</option>
                                <option value="8">P8</option>
                                <option value="9">P9</option>
                                <option value="10">P10</option>
                                <option value="11">P11</option>
                                <option value="12">P12</option>
                                <option value="13">P13</option>
                                <option value="14">P14</option>
                                <option value="15">P15</option>
                                <option value="16">P16</option>
                                <option value="17">P17</option>
                                <option value="18">P18</option>
                                <option value="19">P19</option>
                                <option value="20">P20</option>
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
                                    <option value="{{ $areaUnit->area_unit_id }}">{{ $areaUnit->unit_name }}
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
                                <div id="previewContainer" class="mt-3 flex flex-wrap gap-3"></div>


                                <div class="bg-primary text-white px-4 py-2 rounded text-sm">
                                    <span class="font-medium">Maximum : Unlimited</span>
                                    <span class="md:ml-8 font-medium">Remaining : Unlimited</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Name -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Your Name <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4">
                            <input type="text" name="your_name" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Email ID -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Email id <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4">
                            <input type="text" name="email_id" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Phone <span
                                class="text-red-500">*</span></label>
                        <div class="col-span-4">
                            <input type="number" name="phone" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                    </div>

                    <!-- Type -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
                        <label class="col-span-2 text-sm text-gray-700">Type</label>
                        <div class="col-span-4">
                            <select name="type" required
                                class="w-full px-3 py-2 border border-gray-300 rounded text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="0">Select One</option>
                                @foreach ($userTypes as $userType)
                                    <option value="{{ $userType->id }}">{{ $userType->type_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Captcha -->
                    {{-- <div class="border border-gray-300 rounded-lg p-4 text-center md:w-1/2">
                        <div class="flex items-center justify-center gap-3 mb-3">
                            <span id="captcha-img">{!! captcha_img('flat') !!}</span>
                            <button type="button" id="reload" class="text-blue-600 underline">Refresh</button>
                        </div>

                        <label class="block text-gray-700 mb-1">Enter the code above here:</label>
                        <input type="text" name="captcha" required
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div> --}}

                    <!-- Terms and Conditions -->
                    <div class="md:grid grid-cols-12 gap-4 items-center">
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    });
</script>

<!-- Refresh Captcha Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#reload').click(function() {
        $.ajax({
            type: 'GET',
            url: '{{ route('reloadCaptcha') }}',
            success: function(data) {
                $('#captcha-img').html(data.captcha);
            }
        });
    });
</script>

@if ($errors->any())
    <script>
        Swal.fire({
            position: 'top',
            icon: 'error',
            title: 'Oops!',
            text: '{{ $errors->first() }}',
            confirmButtonColor: '#dc2626',
            background: '#EF4444', // red color
            color: '#fff',
            iconColor: '#fff',
            toast: true,
        });
    </script>
@endif

</html>
