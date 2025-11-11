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
                        <h1 class="text-xl font-semibold">Locality List</h1>
                        {{-- <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" placeholder="Search..."
                                    class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                            </div>
                            <button class="flex items-center text-white hover:text-blue-100">
                                <i class="fas fa-map-marker-alt mr-1"></i>
                                <span class="text-sm">View All</span>
                            </button>
                        </div> --}}
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-200   p -2 md:px-6 py-3 border-b">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1 md:space-x-4">
                            <div class="flex items-center space-x-4">
                                <form action="{{ route('addLocality') }}" method="POST"
                                    class="flex items-center gap-2">
                                    @csrf
                                    <div class="relative">
                                        <input type="text" name="locality_name" placeholder="Locality Name..."
                                            class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm"
                                            required>
                                    </div>
                                    <button type="submit"
                                        class="flex items-center text-white bg-red-600 px-3 py-1 rounded hover:bg-red-700">
                                        <span class="text-sm">Save</span>
                                    </button>
                                </form>
                            </div>
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
                        {{-- <a href="{{ route('addUser') }}">
                            <button 
                                class="flex items-center text-gray-600 hover:text-primary 800 text-sm font-medium">
                                <i class="fas fa-plus mr-2"></i>
                                Add User
                            </button>
                        </a> --}}
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-80 border border-gray-300 rounded-lg overflow-hidden">
                        <thead class="bg-gray-300 text-black">
                            <tr>
                                {{-- <th class="px-4 py-3 text-left text-sm font-medium">
                                            <input type="checkbox" id="selectAll" class="rounded">
                                        </th> --}}
                                <th class="px-4 py-3 text-left text-sm font-medium">Locality Name</th>
                                <th class="px-4 py-3 text-left text-sm font-medium">Action</th>
                            </tr>
                        </thead>

                        <div id="editModal"
                            class="hidden fixed inset-x-0 bottom-0 bg-white border-t border-gray-300 shadow-2xl rounded-t-2xl z-50 transition-transform duration-300 translate-y-full">
                            <div class="p-6">
                                <h2 class="text-lg font-semibold text-gray-800 mb-4">Edit Locality</h2>

                                <form id="editForm" method="POST" action="{{ route('updateLocality') }}">
                                    @csrf
                                    <input type="hidden" name="locality_id" id="edit_locality_id">

                                    <div class="mb-4">
                                        <label class="block text-gray-700 mb-1">Locality Name</label>
                                        <input type="text" name="locality_name" id="edit_locality_name"
                                            class="w-80 border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                            required>
                                    </div>

                                    <div class="flex justify-end gap-2 mt-4">
                                        <button type="button" id="closeModal"
                                            class="px-4 py-2 bg-red-400 text-black rounded hover:bg-gray-500">Cancel</button>
                                        <button type="submit"
                                            class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <tbody class="bg-white">
                            @forelse ($localities as $locality)
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    {{-- <td class="px-4 py-3"><input type="checkbox" class="rowCheckbox rounded"></td> --}}
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $locality->locality_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        <div class="flex items-center gap-3">

                                            <!-- Edit -->
                                            {{-- <a href="">
                                                <i
                                                    class="fa-solid fa-pen-to-square cursor-pointer hover:text-blue-600"></i>
                                            </a> --}}

                                            <button type="button" class="edit-btn text-blue-600 hover:text-blue-800"
                                                data-id="{{ $locality->locality_id }}"
                                                data-name="{{ $locality->locality_name }}">
                                                <i class="fa-solid fa-pen-to-square cursor-pointer"></i>
                                            </button>

                                            <!-- Delete -->
                                            <form action="{{ route('deleteLocality', $locality->locality_id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="delete-btn">
                                                    <i class="fa-solid fa-trash cursor-pointer hover:text-red-600"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center py-6 text-gray-600 text-lg">
                                        No Locality found
                                    </td>
                                </tr>
                            @endforelse
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

        // Success Alert
        @if (session('success_add'))
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
                title: '{{ session('success_add') }}'
            });
        @endif

        // Success Alert
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
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('editModal');
            const closeModal = document.getElementById('closeModal');
            const editButtons = document.querySelectorAll('.edit-btn');
            const inputId = document.getElementById('edit_locality_id');
            const inputName = document.getElementById('edit_locality_name');

            // Function to open modal
            const openModal = () => {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    modal.classList.remove('translate-y-full');
                }, 10);
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            };

            // Function to close modal
            const hideModal = () => {
                modal.classList.add('translate-y-full');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            };

            // On edit click
            editButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const id = btn.getAttribute('data-id');
                    const name = btn.getAttribute('data-name');
                    inputId.value = id;
                    inputName.value = name;
                    openModal();
                });
            });

            // On cancel click
            closeModal.addEventListener('click', hideModal);
        });
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
    </script>
</body>

<script src="assets/js/script.js"></script>

</html>
