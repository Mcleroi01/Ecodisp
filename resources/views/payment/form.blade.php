<!-- resources/views/payment/form.blade.php -->

@extends('public.layouts.app')

@section('contents')
    <!-- Card Section -->
    <div class="max-w-2xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Card -->
        <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-900">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-neutral-200">
                    Payment
                </h2>
                <p class="text-sm text-gray-600 dark:text-neutral-400">
                    Manage your payment methods.
                </p>

                <img src="https://docs.cinetpay.com/images/latest_rdc1.webp" alt="Logo CinetPay">

            </div>

            <form action="{{ route('payment.initiate') }}" method="POST">
                <!-- Section -->

                @csrf
                <div
                    class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                    <label for="af-payment-billing-contact" class="inline-block text-sm font-medium dark:text-white">
                        Billing contact
                    </label>

                    <div class="mt-2 space-y-3">
                        <input id="af-payment-billing-contact" type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="First Name" value="{{ $admission->demandeur->nom }}" disabled>
                        <input type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Last Name" value="{{ $admission->demandeur->prenom }}" disabled>
                        <input type="text"
                            class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                            placeholder="Phone Number" value="{{ $admission->demandeur->email }}" disabled>
                    </div>
                </div>
                <!-- End Section -->


                <div
                    class="py-6 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent ">
                    <label for="af-payment-payment-method" class="inline-block text-sm font-medium dark:text-white">
                        Payment Total
                    </label>



                    <h1 class=" text-end text-2xl md:text-3xl font-bold text-gray-800 dark:text-neutral-200">
                        {{ $admission->fee }} USD
                    </h1>
                    <input type="text" class=" hidden" value="{{ $admission->fee }}" name="amount">



                </div>

                <div class="mt-5 flex justify-end gap-x-2">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        Cancel
                    </button>
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
                <!-- Section -->

                <!-- End Section -->
            </form>


        </div>
        <!-- End Card -->
    </div>
    <!-- End Card Section -->
@endsection
