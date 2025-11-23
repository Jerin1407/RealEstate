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
                            <form method="GET" action="{{ route('filterUser') }}" class="flex items-center gap-2">
                                <div class="relative">
                                    <input type="text" name="search" value="{{ request('search') }}"
                                        placeholder="Search..."
                                        class="md:px-3 py-1 rounded border bg-white border-gray-300 text-black text-sm">
                                </div>
                                <button
                                    class="flex items-center bg-white-600 hover:bg-white-700 text-white px-3 py-1 rounded text-sm">
                                    <i class="fas fa-search mr-1"></i>
                                    View
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="bg-gray-200   p -2 md:px-6 py-3 border-b">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-1 md:space-x-4">
                        </div>
                        <a href="{{ route('addUser') }}">
                            <button class="flex items-center text-gray-600 hover:text-primary 800 text-sm font-medium">
                                <i class="fas fa-plus mr-2"></i>
                                Add User
                            </button>
                        </a>
                    </div>
                </div>

                <!-- Table -->
                <div class="overflow-x-auto">
                    <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
                        <thead class="bg-gray-300 text-black">
                            <tr>
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
                            @forelse ($users as $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-50">
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->fullname }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->login_name }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->email }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $user->userType->type_name ?? 'N/A' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $user->userDetails->package->package_name ?? 'N/A' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        {{ $user->userDetails->register_date ?? 'N/A' }}
                                    </td>
                                    <td class="px-4 py-3 text-sm text-gray-900">{{ $user->status ?? 'N/A' }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-900">
                                        <div class="flex items-center gap-3">

                                            <!-- Edit -->
                                            <a href="{{ route('editUser', $user->user_id) }}">
                                                <i
                                                    class="fa-solid fa-pen-to-square cursor-pointer hover:text-blue-600"></i>
                                            </a>

                                            <!-- View -->
                                            <a href="{{ route('viewUser', $user->user_id) }}">
                                                <i class="fa-solid fa-eye cursor-pointer hover:text-green-600"></i>
                                            </a>

                                            <!-- Delete -->
                                            <form action="{{ route('deleteUser', $user->user_id) }}" method="POST"
                                                class="delete-form">
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
                                        No users found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Custom Pagination -->
            <div class="px-6 py-4 border-t border-gray-200 bg-gray-50">
                <div class="flex items-center justify-between flex-wrap gap-4">

                    <!-- Results info -->
                    <div class="text-sm text-gray-700">
                        Showing
                        <span class="font-medium">{{ $users->firstItem() ?? 0 }}</span> to
                        <span class="font-medium">{{ $users->lastItem() ?? 0 }}</span> of
                        <span class="font-medium">{{ $users->total() }}</span> results
                    </div>

                    <!-- Pagination controls -->
                    <div class="flex items-center gap-1">

                        <!-- First -->
                        @if ($users->onFirstPage())
                            <span
                                class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">&laquo;
                                First</span>
                            <span
                                class="px-3 py-2 rounded-md text-sm font-medium text-gray-400 cursor-not-allowed">&lsaquo;
                                Prev</span>
                        @else
                            <a href="{{ $users->url(1) }}"
                                class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">&laquo;
                                First</a>
                            <a href="{{ $users->previousPageUrl() }}"
                                class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">&lsaquo;
                                Prev</a>
                        @endif

                        <!-- Page Numbers -->
                        @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                            @if ($page == $users->currentPage())
                                <span
                                    class="px-3 py-2 rounded-md text-sm font-medium bg-primary text-white">{{ $page }}</span>
                            @elseif ($page > $users->currentPage() - 2 && $page < $users->currentPage() + 2)
                                <a href="{{ $url }}"
                                    class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">{{ $page }}</a>
                            @endif
                        @endforeach

                        <!-- Next -->
                        @if ($users->hasMorePages())
                            <a href="{{ $users->nextPageUrl() }}"
                                class="px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-200">Next
                                &rsaquo;</a>
                            <a href="{{ $users->url($users->lastPage()) }}"
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

        // Delete Alert
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                let form = this.closest('form');

                Swal.fire({
                    position: 'top',
                    title: 'Are you sure?',
                    text: 'You want to delete this user?',
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
