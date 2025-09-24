@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-white text-gray-800">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-start">

            <!-- Left Side: Contact Form -->
            <div>
                <!-- Heading -->
                <h2 class="text-2xl font-bold text-red-600 mb-6">Contact US</h2>

                <form class="space-y-6">
                    <!-- Name -->
                    <div class="flex items-center justify-between">
                        <label for="name" class="w-1/3 font-medium text-gray-700">Name*</label>
                        <input type="text" id="name"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Email -->
                    <div class="flex items-center justify-between">
                        <label for="email" class="w-1/3 font-medium text-gray-700">Email*</label>
                        <input type="email" id="email"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Message -->
                    <div class="flex items-start justify-between">
                        <label for="message" class="w-1/3 font-medium text-gray-700">Message*</label>
                        <textarea id="message" rows="4"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-center justify-between">
                        <label for="phone" class="w-1/3 font-medium text-gray-700">Phone*</label>
                        <input type="text" id="phone"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Captcha -->
                    <div class="space-y-2">
                        <img src="https://realestatethrissur.com/captcha_code_file.php?rand=1126003486" alt="captcha"
                            class="rounded-md">
                        <div>
                            <label for="captcha" class="block font-medium text-gray-700">Enter the code above here
                                :</label>
                            <input type="text" id="captcha"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                        </div>
                        <p class="text-sm text-gray-600">Can't read the image? <a href="#"
                                class="text-blue-600 hover:underline">click here</a> to refresh</p>
                    </div>

                    <!-- Button -->
                    <div class="text-left">
                        <button type="submit"
                            class="bg-red-600 text-white font-semibold px-6 py-2 rounded-md hover:bg-red-700 transition">
                            Send
                        </button>
                    </div>
                </form>
            </div>

            <!-- Right Side: Map -->
            <div>
                <h2 class="text-2xl font-bold text-red-600 mb-6">Location Map</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.677640910976!2d76.19906897484121!3d10.526035963762688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee675fcc1961%3A0x3f984ee19eb33165!2sGOD%E2%80%99s%20OWN%20Properties%20%26%20Developers%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1756123089377!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-md shadow">
                </iframe>
            </div>

        </div>
    </section>
@endsection
