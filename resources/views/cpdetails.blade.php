<!doctype html>
    <html lang="en">
        <head>
            <title>ITS / Inventory</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        Cables & Peripherals Details
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            ITS</li>
                        <li class="breadcrumb-item">Inventory</li>
                    </ol>
                </x-slot>

                <!-- Main modal -->
                <div id="cpdetails" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full mr-64">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:900px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        CABLES & PERIPHERALS DETAILS
                                    </h3>
                                    <button type="button" onclick="location.href='{{ url('cablesandperipherals') }}'" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="cp_details">
                                {{ csrf_field() }}
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Cables & Peripherals Requirements -->
                                    <div class="float-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            CABLES & PERIPHERALS
                                        </h3>
                                        <div class = "flex">
                                            <div class="col-span-2 mt-5">
                                                <label for="CPType" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Type</label>
                                                <input type="text" id="CPType" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPType}}" disabled readonly>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1 mt-5 ml-3">
                                                <label for="CPQuantity" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Quantity</label>
                                                <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPQuantity}}" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">ID</label>
                                                    {{-- value must set into 0 to read NULL --}}
                                                <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPID}}" disabled readonly>
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="CPName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Name</label>
                                                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPName}}" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPBrand" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Brand</label>
                                                <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPBrand}}" disabled readonly>
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="CPModel" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Model</label>
                                                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPModel}}" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="CPStatus" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Status</label>
                                                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_details[0]->CPStatus}}" disabled readonly>
                                            </div>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="CPRemarks" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase mt-3">Remarks</label>
                                            <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" style="height:100px; width:375px" value="{{$cps_details[0]->CPRemarks}}" disabled readonly>
                                        </div>
                                    </div>
                                    <!-- Cables & Peripherals Requirements End Here! -->

                                    <div class="float-right">

                                        <!-- Cables & Peripherals Purchase Details -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            PURCHASE DETAILS
                                        </h3>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-5">
                                                <label for="CPPriceprunit" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Price per unit</label>
                                                <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_purchasedetails[0]->CPPriceprunit}}" disabled readonly>
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-5">
                                                    <label for="CPSupplier" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Supplier</label>
                                                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_purchasedetails[0]->CPSupplier}}" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPDateOfPurch" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Date of Purchase</label>
                                                <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_purchasedetails[0]->CPDateOfPurch}}" disabled readonly>
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="CPWarranty" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Warranty</label>
                                                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 cursor-not-allowed dark:bg-green-50 dark:border-gray-300 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{$cps_purchasedetails[0]->CPWarranty}}" disabled readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </x-app-layout>
        </body>
    </html>
