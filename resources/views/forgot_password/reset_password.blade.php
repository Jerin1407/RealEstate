@extends('layouts.app')

@section('content')
    <section id="about" class="bg-white py-16 text-center md:text-start flex justify-center">
        <div class="w-80 max-w-sm p-6 bg-white shadow-md rounded-md ">
            <h2 class="text-2xl font-bold text-red-600 mb-6 text-center">Reset Password</h2>

            <form id="resetForm" action="{{ route('updateResetPassword') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Hidden Fields -->
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div>
                    <!-- Password -->
                    <label class="block text-sm text-gray-700 mb-1">New Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter new password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <div>
                    <!-- Confirm Password -->
                    <label class="block text-sm text-gray-700 mb-1">Confirm Password</label>
                    <input type="password" id="confirm-password" name="password_confirmation" placeholder="Enter Confirm password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                    <p id="error-message" class="text-red-600 text-sm mt-1 hidden">Passwords do not match</p>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md transition duration-200">
                    Submit
                </button>
            </form>

        </div>
    </section>
    <script>
        // Error alert
        @if (session('error'))
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                background: '#EF4444', // red color
                color: '#fff',
                iconColor: '#fff',
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            });
        @endif

        // validation
        document.getElementById("resetForm").addEventListener("submit", function(e) {
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
