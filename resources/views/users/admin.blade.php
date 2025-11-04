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
    <main class="flex-1 p-6 space-y-6">

        <!-- Detail Panels -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

            <!-- Profile Details -->
            <div class="bg-white shadow-2xl rounded-md overflow-hidden">
                <div class="bg-gray-700 text-white px-4 py-2 font-semibold">Profile Details</div>
                <div class="p-4 space-y-3 text-sm">
                    <div class="flex justify-between"><span>Full Name</span><span
                            class="text-red-600">{{ $user->fullname ?? 'N/A' }}</span></div>
                    <div class="flex justify-between"><span>Address</span><span
                            class="text-red-600">{{ $user->contact_address ?? 'N/A' }}</span></div>
                    <div class="flex justify-between"><span>Contact Number</span><span
                            class="text-red-600">{{ $user->contact_number ?? 'N/A' }}</span></div>
                    <div class="flex justify-between"><span>Email</span><span
                            class="text-red-600">{{ $user->email ?? 'N/A' }}</span></div>
                    <div class="flex justify-between"><span>Type</span><span
                            class="text-red-600">{{ $user->userType->type_name ?? 'N/A' }}</span>
                    </div>
                </div>
            </div>

            <!-- Package Details -->
            <div class="bg-white shadow-2xl rounded-md overflow-hidden">
                <div class="bg-gray-700 text-white px-4 py-2 font-semibold">Package Details</div>
                <div class="p-4 space-y-3 text-sm">
                    <div class="flex justify-between"><span>Package Name</span><span class="text-red-600">Admin</span>
                    </div>
                    <div class="flex justify-between"><span>Renewal Date</span><span
                            class="text-red-600">Unlimited</span></div>
                    <div class="flex justify-between"><span>Allowed Properties</span><span
                            class="text-red-600">Unlimited</span></div>
                    <div class="flex justify-between"><span>Remaining Properties</span><span
                            class="text-red-600">Unlimited</span></div>
                    <div class="flex justify-between"><span>My Properties</span><span class="text-red-600">529</span>
                    </div>
                    <div class="flex justify-between"><span>Approved Properties</span><span
                            class="text-red-600">529</span></div>
                    <div class="flex justify-between"><span>Not Approved Properties</span><span
                            class="text-red-600">0</span></div>
                </div>
            </div>

            <!-- My Properties -->
            <div class="bg-white shadow-2xl rounded-md overflow-hidden">
                <div class="bg-gray-700 text-white px-4 py-2 font-semibold">My Properties</div>
                <div class="p-4 space-y-2 text-sm max-h-96 overflow-y-auto">
                    <div class="text-red-600">RT6173 - Ollur 5cent,1800 Sqft, New Villa</div>
                    <div class="text-red-600">RT6172 - Olari 1500 Sqft, 3cent,5 BHK</div>
                    <div class="text-red-600">RT6171 - Punkunnam 1000SqFt, 2BHK flat</div>
                    <div class="text-red-600">RT6170 - 2bhk Semi furnished flat near...</div>
                    <div class="text-red-600">RT6169 - Semifurnished 1000Sqft, 3bhk</div>
                    <div class="text-red-600">RT6168 - Mannuthy 2100 SqFt, 5 cent, 4bhk</div>
                    <div class="text-red-600">RT6167 - Stunning 1720 SqFt 4bhk, 4.1...</div>
                    <div class="text-red-600">RT6166 - 2bhk Semi Furnished 820SqFt...</div>
                </div>
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

        // success message
        @if (session('success_login'))
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
                title: '{{ session('success_login') }}'
            });
        @endif
    </script>
</body>

<script src="assets/js/script.js"></script>

</html>
