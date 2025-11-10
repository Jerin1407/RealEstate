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
        <div class="bg-white">

            <!-- Header -->
            <div class="bg-primary text-white px-6 py-3">
                <h1 class="text-lg font-medium">Edit User Form</h1>
            </div>

            <!-- Form Content -->
            <div class="p-6">
                <form class="space-y-4">

                    <!-- Row 1 -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                        <!-- Full Name -->
                        <div>
                            <label class="block text-sm font-medium mb-1">Full Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="fullname" value="{{ $user->fullname }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>

                        <!-- Login Name -->
                        <div>
                            <label class="block text-sm font-medium mb-1">Login Name <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="login_name" value="{{ $user->login_name }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block text-sm font-medium mb-1">Email <span
                                    class="text-red-500">*</span></label>
                            <input type="email" name="email" value="{{ $user->email }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>

                    </div>

                    <!-- Row 2 -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                        <!-- Password -->
                        <div>
                            <label class="block text-sm font-medium mb-1">Password <span
                                    class="text-red-500">*</span></label>
                            <input type="password" name="password" value="{{ $user->password }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>

                        <!-- Contact Number -->
                        <div>
                            <label class="block text-sm font-medium mb-1">Contact Number <span
                                    class="text-red-500">*</span></label>
                            <input type="tel" name="contact_number" value="{{ $user->contact_number }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>

                        <!-- User Type -->
                        <div>
                            <label class="block text-sm font-medium mb-1">User Type <span
                                    class="text-red-500">*</span></label>
                            <select name="user_type_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                                <option value="0">Select User Type</option>
                                @foreach ($userTypes as $userType)
                                    <option value="{{ $userType->id }}"
                                        {{ $userType->id == $user->user_type_id? 'selected' : '' }}>
                                        {{ $userType->type_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                        <!-- Contact Address -->
                        <div>
                            <label class="block text-sm font-medium mb-1">Contact Address <span
                                    class="text-red-500">*</span></label>
                            <textarea name="contact_address" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-primary" required>{{ $user->contact_address }}</textarea>
                        </div>

                    </div>

                    <!-- Action Button -->
                    <div class="flex justify-end gap-2 pt-4">
                        <button type="reset"
                            class="px-6 py-2 border border-gray-400 bg-white text-sm hover:bg-gray-50 rounded">
                            Clear
                        </button>
                        <button type="submit" class="px-6 py-2 bg-primary text-white text-sm hover:bg-red-700 rounded">
                            Submit
                        </button>
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
