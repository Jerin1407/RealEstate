{{-- <!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- header -->
@include('layouts.header')

<body style="margin: 0; padding: 0; background-color: #fff; font-family: Arial, sans-serif;">

    <section style="padding: 50px 100px; margin-bottom: 100px;">
        <h2 style="color: #e60000; font-size: 28px; font-weight: bold; margin-bottom: 30px;">Login</h2>

        <form method="POST" action="" style="max-width: 400px; margin-bottom: 50px;">
            @csrf

            <div style="margin-bottom: 20px;">
                <label for="username" style="display: block; margin-bottom: 5px;">Username</label>
                <input type="text" name="username" id="username" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="password" style="display: block; margin-bottom: 5px;">Password</label>
                <input type="password" name="password" id="password" required 
                       style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            </div>

            <button type="submit" style="background-color: #e60000; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
                Login
            </button>

            <div style="margin-top: 15px;">
                <a href="" style="color: #e60000; text-decoration: none;">Forgot Password</a>
            </div>
        </form>
    </section>

</body>

<!-- footer --> 
@include('layouts.footer')

</html> --}}

@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div id="success-alert"
            class="mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 text-sm font-medium flex items-center">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                let alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 3000);
        </script>
    @endif
    @if (session('error'))
        <div id="success-alert"
            class="mb-4 p-4 rounded-lg bg-green-50 border border-green-200 text-green-700 text-sm font-medium flex items-center">
            {{ session('error') }}
        </div>

        <script>
            setTimeout(() => {
                let alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.display = 'none';
                }
            }, 3000);
        </script>
    @endif


    <section id="about" class="bg-white py-16 text-center md:text-start flex justify-center">
        <div class="w-80 max-w-sm p-6 bg-white shadow-md rounded-md ">
            <h2 class="text-2xl font-bold text-red-600 mb-6 text-center">Login</h2>

            <form action="{{ route('loginUser') }}" method="POST" class="space-y-4" onsubmit="return validateForm()">
                @csrf

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm text-gray-700 mb-1">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter username" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md transition duration-200">
                        Login
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="#" class="text-red-600 hover:underline text-sm">Forgot Password</a>
            </div>
            <div class="mt-2 text-center">
                <span>Don't have an account?</span><a href="{{ route('register') }}"
                    class="text-red-600 hover:underline text-sm ml-2">Sign Up</a>
            </div>
        </div>
    </section>
@endsection
