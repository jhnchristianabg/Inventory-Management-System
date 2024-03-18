<!doctype html>
    <html lang="en">
        <head>
            <title>ITS / Inventory</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        Devices
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

                <!-- Notification -->

                @if(Session::get('success'))
                <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
                    </div>
                </div>
                {{ Session::get('success')}}

                @endif

                @if(Session::get('fail'))
                <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                      <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
                    </div>
                </div>
                        {{ Session::get('fail')}}

                @endif

                <!-- Modal Button toggle -->
                <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500 float-right mx-1" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">

                    ADD
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </button>

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20 my-6">
                </div>

                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full mr-96">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 px-4" style="width:1000px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        ADD NEW DEVICE
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>



                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="add" method="POST">
                                {{ csrf_field() }}
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">
                                            DEVICE
                                        </h3>
                                    <div class="col-span-2 mt-5">
                                        <label for="DeviceID" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Device ID</label>
                                        <input type="text" name="DeviceID" id="DeviceID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Device ID" required="">
                                    </div>
                                    <div class="col-span-2 mt-3">
                                        <label for="DeviceName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Device Name</label>
                                        <input type="text" name="DeviceName" id="DeviceName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Device Name" required="">
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceBrand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                                            <input type="text" name="DeviceBrand" id="DeviceBrand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Device Brand" required="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceModel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Model</label>
                                                <input type="text" name="DeviceModel" id="DeviceModel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Device Model" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceSerialNo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serial Number</label>
                                            <input type="text" name="DeviceSerialNo" id="DeviceSerialNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Device Serial No.">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="DeviceMacAdd" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">MAC Address</label>
                                                <input type="text" name="DeviceMacAdd" id="DeviceMacAdd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Device MAC Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceLocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"style="width:181px">Location</label>
                                            <select name="DeviceLocation" id="DeviceLocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"style="width:181px">
                                                <option name="DeviceLocation" value="Office">Office</option>
                                                <option name="DeviceLocation" value="Storage">Storage</option>
                                            </select>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="DeviceStatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                <select name="DeviceStatus" id="DeviceStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"style="width:181px">
                                                    <option name="DeviceStatus" value="Working">Working</option>
                                                    <option name="DeviceStatus" value="Not Working">Not Working</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="DeviceRemarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white  mt-3">Remarks</label>
                                        <textarea name="DeviceRemarks" id="DeviceRemarks" rows="5" cols="46"class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write Device Remarks here"></textarea>
                                    </div>
                                    </div>
                                    <!-- Device Requirements End Here! -->

                                    <!-- Device Specs -->
                                    <div class="float-right">
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">
                                            DEVICE SPECIFICATION
                                        </h3>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceOperatingSys" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Operating System</label>
                                                <input type="text" name="DeviceOperatingSys" id="DeviceOperatingSys" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Operating System">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceProductKey" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Key</label>
                                                    <input type="text" name="DeviceProductKey" id="DeviceProductKey" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Product Key">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceProcessor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Processor</label>
                                                <input type="text" name="DeviceProcessor" id="DeviceProcessor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Processor">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceMemory" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Memory</label>
                                                    <input type="text" name="DeviceMemory" id="DeviceMemory" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Memory">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceStorage1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Storage 1</label>
                                                <input type="text" name="DeviceStorage1" id="DeviceStorage1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Storage 1">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3 mb-7">
                                                    <label for="DeviceStorage2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Storage 2</label>
                                                    <input type="text" name="DeviceStorage2" id="DeviceStorage2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Storage 2">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Device Specs Ends Here!-->

                                        <!-- Device Purchase Details -->
                                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">
                                            DEVICE PURCHASE DETAILS
                                        </h3>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DevicePriceprunit" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price per unit</label>
                                                <input type="text" name="DevicePriceprunit" id="DevicePriceprunit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Price per unit" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceSupplier" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier</label>
                                                    <input type="text" name="DeviceSupplier" id="DeviceSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Supplier" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceDateOfPurch" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Purchase</label>
                                                <input type="text" name="DeviceDateOfPurch" id="DeviceDateOfPurch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Date of Purchase" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceWarranty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warranty</label>
                                                    <input type="text" name="DeviceWarranty" id="DeviceWarranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Input Warranty">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" style="margin-left:685px">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Add new device
                                </button>
                            </form>
                        </div>
                    </div>
                </div>



            </x-app-layout>
        </body>
    </html>
