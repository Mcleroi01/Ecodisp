<x-app-layout>


    <!-- Invoice -->
    <div class="px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
        <!-- Grid -->
        <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-neutral-700">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Traitement Admission</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                    href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                        <polyline points="7 10 12 15 17 10" />
                        <line x1="12" x2="12" y1="15" y2="3" />
                    </svg>
                    Invoice PDF
                </a>
                <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 6 2 18 2 18 9" />
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2" />
                        <rect width="12" height="8" x="6" y="14" />
                    </svg>
                    Print
                </a>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <!-- Grid -->
        <div class="grid md:grid-cols-2 gap-3">
            <div>
                <div class="grid space-y-3">
                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Billed to:
                        </dt>
                        <dd class="text-gray-800 dark:text-neutral-200">
                            <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                href="#">
                                {{ $admission->demandeur->email }}
                            </a>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Billing details:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-neutral-200">
                            <span class="block font-semibold">Sara Williams</span>
                            <address class="not-italic font-normal">
                                280 Suzanne Throughway,<br>
                                Breannabury, OR 45801,<br>
                                United States<br>
                            </address>
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Shipping details:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-neutral-200">
                            <span class="block font-semibold">Sara Williams</span>
                            <address class="not-italic font-normal">
                                {{ $admission->adressse }}
                            </address>
                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->

            <div>
                <div class="grid space-y-3">
                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Invoice number:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-neutral-200">
                            {{ $admission->demandeur->nom }}
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Currency:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-neutral-200">
                            {{ $admission->demandeur->prenom }}
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Due date:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-neutral-200">
                            @php
                                $date = new DateTimeImmutable($admission->demandeur->date_naisssance);
                                $format = date_format($date, 'jS \o\f F Y');
                            @endphp
                            {{ $format }}
                        </dd>
                    </dl>

                    <dl class="flex flex-col sm:flex-row gap-x-3 text-sm">
                        <dt class="min-w-36 max-w-[200px] text-gray-500 dark:text-neutral-500">
                            Billing method:
                        </dt>
                        <dd class="font-medium text-gray-800 dark:text-neutral-200">
                            {{ $admission->statut }}
                        </dd>
                    </dl>
                </div>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <!-- Table -->
        <div class="mt-6 border border-gray-200 p-4 rounded-lg space-y-4 dark:border-neutral-700">
            <div class="hidden sm:grid sm:grid-cols-5">
                <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Document
                </div>
                <div class="text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Type</div>
                <div class="text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Rate</div>
                <div class="text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</div>
            </div>

            <div class="hidden sm:block border-b border-gray-200 dark:border-neutral-700"></div>

            <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
                @foreach ($admission->documents as $item)
                    <div class="col-span-full sm:col-span-2">
                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Item
                        </h5>
                        <p class="font-medium text-gray-800 dark:text-neutral-200">Design UX and UI</p>
                    </div>
                    <div>
                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Qty</h5>
                        <p class="text-gray-800 dark:text-neutral-200">1</p>
                    </div>
                    <div>
                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Rate
                        </h5>
                        <p class="text-gray-800 dark:text-neutral-200">5</p>
                    </div>
                    <div>
                        <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action
                        </h5>
                        <a class="sm:text-end text-gray-800 dark:text-neutral-200"
                            href="{{ asset('storage/' . $item->chemin_fichier) }}" target="_blank">View</a>

                    </div>
                @endforeach
            </div>


        </div>
        <!-- End Table -->

        <!-- Flex -->
        <div class="mt-8 flex sm:justify-end">
            <div class="w-full max-w-2xl  space-y-2">
                <!-- Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                    <dl class="grid sm:grid-cols-5 gap-x-3 ">
                        <form action="{{ route('admissions.updateStatus', $admission->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="statut" value="accepté" class=" hidden">
                            <button type="submit"
                                class="py-3 px-4 text-center inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-teal-500 text-white hover:bg-teal-600 focus:outline-none focus:bg-teal-600 disabled:opacity-50 disabled:pointer-events-none">
                                Accepter
                            </button>
                        </form>


                        <button type="button"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                            Button
                        </button>
                    </dl>


                </div>
                <!-- End Grid -->
            </div>
        </div>
        <!-- End Flex -->
    </div>
    {{-- <button type="button"
        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
        aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-scale-animation-modal"
        data-hs-overlay="#hs-scale-animation-modal">
        Open modal
    </button>

    <div id="hs-scale-animation-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-scale-animation-modal-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
            <div
                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 id="hs-scale-animation-modal-label" class="font-bold text-gray-800 dark:text-white">
                        Modal title
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                        aria-label="Close" data-hs-overlay="#hs-scale-animation-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-gray-800 dark:text-neutral-400">
                        This is a wider card with supporting text below as a natural lead-in to additional content.
                    </p>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        data-hs-overlay="#hs-scale-animation-modal">
                        Close
                    </button>
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
