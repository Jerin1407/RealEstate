@extends('layouts.app')

@section('content')
    <section id="about" class="bg-white py-16 text-center md:text-start flex justify-center">
        <div class="w-80 max-w-sm p-6 bg-white shadow-md rounded-md ">
            <h2 class="text-2xl font-bold text-red-600 mb-6 text-center">Forgot Password</h2>

            <form action="{{ route('saveforgotpassword') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Email ID -->
                <div>
                    <label for="email" class="block text-sm text-gray-700 mb-1">Email ID</label>
                    <input type="text" id="email" name="email" placeholder="Enter email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500" />
                </div>

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-md transition duration-200">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
