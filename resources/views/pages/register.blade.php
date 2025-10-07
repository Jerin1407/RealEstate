@extends('layouts.app')

@section('content')
    <section id="about" class="bg-white py-16 text-center md:text-start flex justify-center">
        <div class="w-80 max-w-sm p-6 bg-white shadow-md rounded-md ">
            <h2 class="text-2xl font-bold text-red-600 mb-6 text-center">Register</h2>

            <form id="registerForm" action="{{ route('registerUser') }}" method="POST" class="space-y-4"
                onsubmit="return validateForm()">
                @csrf

                <!-- Full Name -->
                <div>
                    <label for="fullname" class="block text-sm text-gray-700 mb-1">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter full name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <!-- Username -->
                <div>
                    <label for="username" class="block text-sm text-gray-700 mb-1">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter username" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm text-gray-700 mb-1">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="confirm-password" class="block text-sm text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" id="confirm-password" name="confirm_password"
                        placeholder="Enter confirm password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                    <p id="error-message" class="text-red-600 text-sm mt-1 hidden">Passwords do not match</p>
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md transition duration-200">
                        Register
                    </button>
                </div>
            </form>

            <div class="mt-2 text-center">
                <span>Already have an account?</span><a href="{{ route('login') }}"
                    class="text-red-600 hover:underline text-sm ml-2">Sign In</a>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("registerForm").addEventListener("submit", function(e) {
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;
            const errorMessage = document.getElementById("error-message");

            if (password !== confirmPassword) {
                e.preventDefault(); // Stop form submission
                errorMessage.classList.remove("hidden");
            } else {
                errorMessage.classList.add("hidden");
            }
        });
    </script>
@endsection
