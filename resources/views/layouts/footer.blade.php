<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex justify-center md:justify-start space-x-2 mb-4">
                    <img src="https://realestatethrissur.com/images/logo.png" alt=""
                        class="bg-white px-2 py-2 h-16 rounded-bl-2xl rounded-tr-2xl ">
                </div>
                <p class="text-gray-400">Your trusted partner in finding the perfect property. Making dreams come
                    true since 2010.</p>
            </div>

            <div class="text-center md:text-start">
                <h5 class="text-lg font-semibold  mb-4">Quick Links</h5>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-primary transition-colors">Properties</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">About Us</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact</a></li>
                </ul>
            </div>

            <div class="text-center md:text-start">
                <h5 class="text-lg font-semibold mb-4">Property Types</h5>
                <ul class="space-y-2 text-gray-400">
                    <li><a href="{{ route('viewAllVilla') }}" class="hover:text-primary transition-colors">Villas</a></li>
                    <li><a href="{{ route('viewAllFlat') }}" class="hover:text-primary transition-colors">Flats</a></li>
                    <li><a href="{{ route('viewAllPlot') }}" class="hover:text-primary transition-colors">Plots</a></li>
                    <li><a href="{{ route('viewAllCommercial') }}" class="hover:text-primary transition-colors">Commercial</a></li>
                </ul>
            </div>

            <div class="text-center md:text-start">
                <h5 class="text-lg font-semibold mb-4">Contact Info</h5>
                <div class="space-y-2 text-gray-400">
                    <p class="text-2xl">RealestateThrissur.com</p>
                    <p>Powered By</p>
                    <p>GOD's OWN Properties & Developers Pvt. Ltd.</p>
                    <p>Ground Floor, N.P.Tower,</p>
                    <p>Punkunnam Road, Westfort</p>
                    <p>Thrissur - 680 004</p>
                    <!-- <p>📞 +91 98765 43210</p>
                        <p>✉️ info@redstoneproperties.com</p>
                        <p>📍 Bangalore, Karnataka</p> -->
                </div>
            </div>
        </div>

        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; 2024 GOD's OWN Properties. All rights reserved.</p>
        </div>
    </div>
</footer>
