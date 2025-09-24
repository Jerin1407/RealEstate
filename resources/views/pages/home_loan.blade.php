@extends('layouts.app')

@section('content')
    <section class="px-6 py-10 bg-white text-gray-800">
        <!-- Home Loan Assistance -->
        <h2 class="text-2xl font-bold text-red-600 mb-8">
            HOME LOAN ASSISTANCE
        </h2>

        <!-- Home Loans -->
        <h3 class="text-lg font-semibold text-red-600 underline mb-4">
            Home Loans
        </h3>
        <p class="mb-4 indent-8">
            Home Loan is convenient and affordable option to suit your financial needs. The interest rates on home loans
            have
            reached an all time low and the fewer procedures for home loans make the whole process quite hassle-free.
            We assist you to fulfill all your mortgage financing requirements, from buying your first home to constructing a
            new house,
            purchasing a plot/ land, renovate your home or get a balance transfer for your existing home loan, top-up loans
            etc.
            We cater all Salaried, Self-employed, NRIs and Professional individuals.
        </p>

        <p class="mb-4 indent-8">
            We have ties with India's leading banks, foreign banks, and financial institutions including PNB Housing
            Finance, HDFC,
            ICICI Bank, ING Vysya Bank, Kotak Mahindra Bank, HSBC Bank, Axis Bank, etc. and facilitate home loans for
            property buyer's
            at the most attractive rates available in the market.
        </p>

        <p class="mb-6 indent-8">
            Our home loan team provides complete support and guidance to you in availing the best home loans. Right from
            home loan
            sanction procedure to the actual home loan disbursal, we take care of all your relevant paperwork, documentation
            required for the same.
        </p>

        <!-- Loan Against Property -->
        <h3 class="text-lg font-semibold text-red-600 underline mb-4">
            Loan Against Property (LAP)
        </h3>
        <p class="mb-6 indent-8">
            If you are property owner, loan against property is one of the best ways to raise finance and liquefy your real
            estate
            asset without selling it. Loan against property is easily available for properties having clear title and
            without litigations.
            Our tie-ups with banks allow us to offer you the most attractive loan against property options at the lowest
            interest rates applicable.
            In case you are looking to raise finance in terms of loan against your property.
        </p>


        <section class="px-6 py-10 bg-white text-gray-800 border-2 border-red-500 rounded-sm">
            <div class=" rounded-md p-8 max-w-3xl mx-auto">

                <h2 class="text-2xl font-bold text-red-600 text-center mb-8">
                    HOME LOAN ENQUIRY
                </h2>

                <form class="space-y-6">
                    <div class="flex items-center justify-between">
                        <label for="name" class="w-1/3 font-medium text-gray-700">Name*</label>
                        <input type="text" id="name"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="mobile" class="w-1/3 font-medium text-gray-700">Mobile*</label>
                        <input type="text" id="mobile"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="email" class="w-1/3 font-medium text-gray-700">Email*</label>
                        <input type="email" id="email"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <div class="flex items-center justify-between">
                        <label for="loan" class="w-1/3 font-medium text-gray-700">Loan Amount*</label>
                        <input type="text" id="loan"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <div class="flex items-start justify-between">
                        <label for="comments" class="w-1/3 font-medium text-gray-700">Comments</label>
                        <textarea id="comments" rows="4"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    </div>

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

                    <div class="text-center">
                        <button type="submit"
                            class="bg-red-600 text-white font-semibold px-6 py-2 rounded-md hover:bg-red-700 transition">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </section>
@endsection
