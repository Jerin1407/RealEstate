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
                        <h1 class="text-xl font-semibold">Property List</h1>
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
                            {{-- <button type="button" id="viewBtn"
                                class="flex items-center text-gray-600 hover:text-gray-950 text-sm">
                                <i class="far fa-eye mr-2"></i>
                                View
                            </button>
                            <button id="editPropertyBtn"
                                class="flex items-center text-gray-600 hover:text-gray-950 text-sm">
                                <i class="fas fa-edit mr-2"></i>
                                Edit
                            </button> --}}
                            <button class="flex items-center text-gray-600 hover:text-gray-950 800 text-sm">
                                <i class="fas fa-download mr-2"></i>
                                Export
                            </button>
                            {{-- <form id="deleteForm" action="{{ route('deleteproperty') }}" method="POST">
                                @csrf
                                @method('DELETE') --}}
                            {{-- <button type="button" id="deleteBtn"
                                    class="flex items-center text-gray-600 hover:text-gray-950 800 text-sm">
                                    <i class="fas fa-trash mr-2"></i>
                                    Delete
                                </button> --}}
                        </div>
                        {{-- </form> --}}
                        <a href="{{ route('addproperty') }}">
                            <button class="flex items-center text-gray-600 hover:text-gray-950 800 text-sm font-medium">
                                <i class="fas fa-plus mr-2"></i>
                                Add Property
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
                                {{-- <th></th> --}}
                                <th class="px-4 py-3 text-left text-sm font-medium">Property code</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Title</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Category</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Location</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Description</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Added By</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Added On</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Price</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Status</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Priority</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Action</th>
                            </tr>
                        </thead>

                        <!-- Table Body -->
                        <tbody class="bg-white">
                            @foreach ($properties as $property)
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    {{-- <td class="px-4 py-3">
                                        <input type="checkbox" name="selected_properties[]"
                                            value="{{ $property->property_id }}" class="property-checkbox rounded"
                                            onclick="event.stopPropagation();">
                                    </td> --}}
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->property_code }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->property_title }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $property->category->category_name ?? 'N/A' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $property->locality->locality_name ?? 'N/A' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ Str::limit(strip_tags($property->property_description), 50) }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->user->fullname ?? 'N/A' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $property->post_date }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        ₹{{ number_format($property->price, 2) }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $property->is_approved ? 'Active' : 'Inactive' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ ucfirst($property->priority) }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        <div class="flex items-center gap-3">

                                            <!-- Edit -->
                                            <a href="{{ route('editproperty', $property->property_id) }}">
                                                <i
                                                    class="fa-solid fa-pen-to-square cursor-pointer hover:text-blue-600"></i>
                                            </a>

                                            <!-- View -->
                                            <a href="{{ route('viewproperty', $property->property_id) }}">
                                                <i class="fa-solid fa-eye cursor-pointer hover:text-green-600"></i>
                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('deleteproperty', $property->property_id) }}"
                                                method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="delete-btn">
                                                    <i class="fa-solid fa-trash cursor-pointer hover:text-red-600"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    </div>

    <!-- Custom Pagination -->
    <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
        <div class="flex items-center justify-between flex-wrap gap-4">

            <!-- Results info -->
            <div class="text-sm text-gray-700">
                Showing
                <span class="font-medium">{{ $properties->firstItem() ?? 0 }}</span> to
                <span class="font-medium">{{ $properties->lastItem() ?? 0 }}</span> of
                <span class="font-medium">{{ $properties->total() }}</span> results
            </div>

            <!-- Pagination controls -->
            <div class="flex items-center gap-1">

                <!-- First -->
                @if ($properties->onFirstPage())
                    <span class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">&laquo;
                        First</span>
                    <span class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">&lsaquo;
                        Prev</span>
                @else
                    <a href="{{ $properties->url(1) }}"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">&laquo;
                        First</a>
                    <a href="{{ $properties->previousPageUrl() }}"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">&lsaquo;
                        Prev</a>
                @endif

                <!-- Page Numbers -->
                @foreach ($properties->getUrlRange(1, $properties->lastPage()) as $page => $url)
                    @if ($page == $properties->currentPage())
                        <span
                            class="px-3 py-2 rounded-md text-sm font-medium bg-primary text-white">{{ $page }}</span>
                    @elseif ($page > $properties->currentPage() - 2 && $page < $properties->currentPage() + 2)
                        <a href="{{ $url }}"
                            class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">{{ $page }}</a>
                    @endif
                @endforeach

                <!-- Next -->
                @if ($properties->hasMorePages())
                    <a href="{{ $properties->nextPageUrl() }}"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">Next
                        &rsaquo;</a>
                    <a href="{{ $properties->url($properties->lastPage()) }}"
                        class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">Last
                        &raquo;</a>
                @else
                    <span class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">Next
                        &rsaquo;</span>
                    <span class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">Last
                        &raquo;</span>
                @endif
            </div>
        </div>
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

        // success alert
        @if (session('success'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
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

        // success alert
        @if (session('success_update'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
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
                title: '{{ session('success_update') }}'
            });
        @endif

        // edit property
        // document.getElementById('editPropertyBtn').addEventListener('click', function(e) {
        //     e.preventDefault();

        //     // Get all selected checkboxes
        //     const selected = document.querySelectorAll('.property-checkbox:checked');

        //     // Validate selection
        //     if (selected.length === 0) {
        //         Swal.fire({
        //             icon: 'warning',
        //             title: 'No property selected!',
        //             text: 'Please select a property to edit.',
        //             position: 'top',
        //             background: '#EF4444', // red color
        //             color: '#fff',
        //             iconColor: '#fff',
        //             toast: true,
        //             showConfirmButton: false,
        //             timer: 4000,
        //         });
        //         return;
        //     }
        //     if (selected.length > 1) {
        //         Swal.fire({
        //             icon: 'error',
        //             title: ' Multiple properties selected!',
        //             text: 'Please select only one property to edit.',
        //             position: 'top',
        //             background: '#EF4444', // red color
        //             color: '#fff',
        //             iconColor: '#fff',
        //             toast: true,
        //             showConfirmButton: false,
        //             timer: 4000,
        //         });
        //         return;
        //     }

        //     // Get selected property ID
        //     const propertyId = selected[0].value;

        //     // Redirect to edit page
        //     window.location.href = `/editproperty/${propertyId}`;
        // });

        // Delete Property
        // document.getElementById('deleteBtn').addEventListener('click', function() {
        //     const selected = document.querySelectorAll('.property-checkbox:checked');
        //     const form = document.getElementById('deleteForm');

        //     if (selected.length === 0) {
        //         Swal.fire({
        //             position: 'top',
        //             icon: 'warning',
        //             title: 'Please select atleast one property!',
        //             showConfirmButton: false,
        //             timer: 4000,
        //             background: '#EF4444', // red color
        //             color: '#fff',
        //             iconColor: '#fff',
        //             toast: true,
        //         });
        //         return;
        //     }

        //     Swal.fire({
        //         position: 'top',
        //         title: 'Are you sure?',
        //         text: 'You want to delete selected property(s)?',
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#d33',
        //         cancelButtonColor: '#3085d6',
        //         confirmButtonText: 'Yes, delete!',
        //         cancelButtonText: 'Cancel',
        //         width: '380px',
        //         toast: true
        //     }).then(result => {
        //         if (result.isConfirmed) {
        //             // Remove previous hidden inputs
        //             form.querySelectorAll('input[name="selected_properties[]"]').forEach(el => el.remove());

        //             // Add selected IDs to form
        //             selected.forEach(cb => {
        //                 const input = document.createElement('input');
        //                 input.type = 'hidden';
        //                 input.name = 'selected_properties[]';
        //                 input.value = cb.value;
        //                 form.appendChild(input);
        //             });

        //             form.submit();
        //         }
        //     });
        // });

        // Success Alert
        @if (session('success_delete'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
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
                title: '{{ session('success_delete') }}'
            });
        @endif

        // Error Alert
        @if (session('error_delete'))
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: '{{ session('error_delete') }}',
                showConfirmButton: false,
                timer: 4000,
                width: '300px'
            });
        @endif

        // View Button
        // document.getElementById('viewBtn').addEventListener('click', function() {
        //     const selected = document.querySelectorAll('.property-checkbox:checked');

        //     if (selected.length === 0) {
        //         // No property selected
        //         Swal.fire({
        //             position: 'top',
        //             icon: 'warning',
        //             title: 'No property selected!',
        //             text: 'Please select a property to view.',
        //             showConfirmButton: false,
        //             timer: 4000,
        //             background: '#EF4444', // red color
        //             color: '#fff',
        //             iconColor: '#fff',
        //             toast: true,
        //         });
        //     } else if (selected.length > 1) {
        //         // More than one selected
        //         Swal.fire({
        //             position: 'top',
        //             icon: 'error',
        //             title: ' Multiple properties selected!',
        //             text: 'Please select only one property to view.',
        //             showConfirmButton: false,
        //             timer: 4000,
        //             background: '#EF4444', // red color
        //             color: '#fff',
        //             iconColor: '#fff',
        //             toast: true,
        //         });
        //     } else {
        //         // Exactly one selected — redirect to view page
        //         const propertyId = selected[0].value;
        //         window.location.href = `/viewproperty/${propertyId}`;
        //     }
        // });
    </script>

    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                let form = this.closest('form');

                Swal.fire({
                    position: 'top',
                    title: 'Are you sure?',
                    text: 'You want to delete this property?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'Cancel',
                    width: '380px',
                    toast: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>

</body>

<script src="assets/js/script.js"></script>

</html>
