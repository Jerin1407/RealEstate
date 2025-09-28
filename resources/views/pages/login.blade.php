@extends('layouts.app')

@section('content')
    <!-- Success Alert -->
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

    <!-- Error Alert -->
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

                <!-- Submit Button -->
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
