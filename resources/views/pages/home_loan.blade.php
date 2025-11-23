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

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <h2 class="text-2xl font-bold text-red-600 text-center mb-8">
                    HOME LOAN ENQUIRY
                </h2>

                <form class="space-y-6" action="{{ route('saveHomeLoan') }}" method="POST">
                    @csrf

                    <!-- Name -->
                    <div class="flex items-center justify-between">
                        <label for="name" class="w-1/3 font-medium text-gray-700">Name*</label>
                        <input type="text" id="name" name="name" required
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Mobile -->
                    <div class="flex items-center justify-between">
                        <label for="mobile" class="w-1/3 font-medium text-gray-700">Mobile*</label>
                        <input type="text" id="mobile" name="mobile" required
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Email -->
                    <div class="flex items-center justify-between">
                        <label for="email" class="w-1/3 font-medium text-gray-700">Email*</label>
                        <input type="email" id="email" name="email" required
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Loan Amount -->
                    <div class="flex items-center justify-between">
                        <label for="loan" class="w-1/3 font-medium text-gray-700">Loan Amount*</label>
                        <input type="text" id="loan" name="loan" required
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                    </div>

                    <!-- Comments -->
                    <div class="flex items-start justify-between">
                        <label for="comments" class="w-1/3 font-medium text-gray-700">Comments</label>
                        <textarea id="comments" rows="4" name="comments"
                            class="w-2/3 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                    </div>

                    <!-- Captcha -->
                    <div class="space-y-2">
                        <div class="flex items-center justify-center gap-3 mb-3">
                            <span id="captcha-img">{!! captcha_img('flat') !!}</span>
                            <button type="button" id="reload" class="text-blue-600 underline">Refresh</button>
                        </div>

                        <label class="block text-gray-700 mb-1">Enter the code above here:</label>
                        <input type="text" name="captcha" required
                            class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-red-500">
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

    <script>
        // Success Alert
        @if (session('success'))
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
                title: '{{ session('success') }}'
            });
        @endif
    </script>

    <!-- Refresh Captcha Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: '{{ route('reloadCaptcha') }}',
                success: function(data) {
                    $('#captcha-img').html(data.captcha);
                }
            });
        });
    </script>

    <!-- Error Alert -->
    @if ($errors->any())
        <script>
            Swal.fire({
                position: 'top',
                icon: 'error',
                title: 'Oops!',
                text: '{{ $errors->first() }}',
                confirmButtonColor: '#dc2626',
                background: '#EF4444', // red color
                color: '#fff',
                iconColor: '#fff',
                toast: true,
            });
        </script>
    @endif
@endsection
