<!doctype html>
    <html lang="en">
        <head>
            <title>ITS / Inventory</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        Cables & Peripherals Edit
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
                                        EDIT CABLES & PERIPHERALS DETAILS
                                    </h3>
                                    <button type="button" onclick="location.href='{{ url('cablesandperipherals') }}'" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="{{ url('update_cablesandperipherals/'.$cps->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                            </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            CABLES AND PERIPHERALS
                                        </h3>

                                    <div class="col-span-2 mt-5">
                                        <label for="CPType" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Type</label>
                                        <select name="CPType" id="CPType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"style="width:181px">
                                            <option name="CPType" value="Cable" @if ($cps->CPType == 'Cable') selected @endif>Cable</option>
                                            <option name="CPType" value="Adapter" @if ($cps->CPType == 'Adapter') selected @endif>Adapter</option>
                                            <option name="CPType" value="Converter" @if ($cps->CPType == 'Converter') selected @endif>Converter</option>
                                            <option name="CPType" value="Charger" @if ($cps->CPType == 'Charger') selected @endif>Charger</option>
                                            <option name="CPType" value="Keyboard" @if ($cps->CPType == 'Keyboard') selected @endif>Keyboard</option>
                                            <option name="CPType" value="Mouse" @if ($cps->CPType == 'Mouse') selected @endif>Mouse</option>
                                            <option name="CPType" value="AVR" @if ($cps->CPType == 'AVR') selected @endif>AVR</option>
                                            <option name="CPType" value="Webcam" @if ($cps->CPType == 'Webcam') selected @endif>Webcam</option>
                                            <option name="CPType" value="Barcode Scanner" @if ($cps->CPType == 'Barcode Scanner') selected @endif>Barcode Scanner</option>
                                            <option name="CPType" value="Microphone" @if ($cps->CPType == 'Microphone') selected @endif>Microphone</option>
                                            <option name="CPType" value="Headset" @if ($cps->CPType == 'Headset') selected @endif>Headset</option>
                                            <option name="CPType" value="Tripod" @if ($cps->CPType == 'Tripod') selected @endif>Tripod</option>
                                        </select>
                                    </div>

                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="CPID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">ID</label>
                                            <input type="text" name="CPID" id="CPID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps->CPID}}" placeholder="Input ID" required="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Name</label>
                                                <input type="text" name="CPName" id="CPName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps->CPName}}" placeholder="Input Name" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="CPBrand" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Brand</label>
                                            <input type="text" name="CPBrand" id="CPBrand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps->CPBrand}}" placeholder="Input Brand" required="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPModel" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Model</label>
                                                <input type="text" name="CPModel" id="CPModel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps->CPModel}}" placeholder="Input Model" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="CPQuantity" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Quantity</label>
                                            <input type="text" name="CPQuantity" id="CPQuantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps->CPQuantity}}" placeholder="Input Quantity" required="">
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="CPStatus" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Status</label>
                                                <select name="CPStatus" id="CPStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"style="width:181px" value="{{$cps->CPStatus}}">
                                                    <option name="CPStatus" value="Working" @if ($cps->CPStatus == 'Working') selected @endif>Working</option>
                                                    <option name="CPStatus" value="Not Working" @if ($cps->CPStatus == 'Not Working') selected @endif>Not Working</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="CPRemarks" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase mt-3">Remarks</label>
                                        <input type="text" name="CPRemarks" id="CPRemarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="height:100px; width:375px"  value="{{$cps->CPRemarks}}" placeholder="Write Remarks here">
                                    </div>
                                    </div>
                                    <!-- Device Requirements End Here! -->

                                    <div class="float-right">

                                        <!-- Device Purchase Details -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            CABLES & PERIPHERALS PURCHASE DETAILS
                                        </h3>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPPriceprunit" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Price per unit</label>
                                                <input type="text" name="CPPriceprunit" id="CPPriceprunit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps_purchasedetails->CPPriceprunit}}" placeholder="Input Price per unit" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="CPSupplier" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Supplier</label>
                                                    <input type="text" name="CPSupplier" id="CPSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps_purchasedetails->CPSupplier}}" placeholder="Input Supplier" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="CPDateOfPurch" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Date of Purchase</label>
                                                <input type="text" name="CPDateOfPurch" id="CPDateOfPurch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps_purchasedetails->CPDateOfPurch}}" placeholder="Input Date of Purchase" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="CPWarranty" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Warranty</label>
                                                    <input type="text" name="CPWarranty" id="CPWarranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$cps_purchasedetails->CPWarranty}}" placeholder="Input Warranty">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:687px">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </x-app-layout>
        </body>
    </html>
