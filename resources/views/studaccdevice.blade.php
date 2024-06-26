<!doctype html>
    <html lang="en">
        <head>
            <title>Accountability Return</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        Student Accountability Device
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
                <div id="details_stud" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full mr-64">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:900px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        DEVICE DETAILS
                                    </h3>
                                    <button type="button" onclick="window.history.back();" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="{{ url('return_device_stud/'.$studaccdev_details->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                            </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            DEVICE
                                        </h3>

                                    <div class="col-span-2 mt-5">
                                        <label for="DeviceType" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Device Type</label>
                                        <select name="DeviceType" id="DeviceType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px" onchange="toggleInput()">
                                            <option name="DeviceType" value="System Unit" @if ($studaccdev_details->DeviceType == 'System Unit') selected @endif>System Unit</option>
                                            <option name="DeviceType" value="Laptop" @if ($studaccdev_details->DeviceType == 'Laptop') selected @endif>Laptop</option>
                                            <option name="DeviceType" value="AIO Desktop" @if ($studaccdev_details->DeviceType == 'AIO Desktop') selected @endif>AIO Desktop</option>
                                            <option name="DeviceType" value="IMAC" @if ($studaccdev_details->DeviceType == 'IMAC') selected @endif>IMAC</option>
                                            <option name="DeviceType" value="Monitor" @if ($studaccdev_details->DeviceType == 'Monitor') selected @endif>Monitor</option>
                                            <option name="DeviceType" value="Speaker" @if ($studaccdev_details->DeviceType == 'Speaker') selected @endif>Speaker</option>
                                            <option name="DeviceType" value="Projector" @if ($studaccdev_details->DeviceType == 'Projector') selected @endif>Projector</option>
                                            <option name="DeviceType" value="Printer" @if ($studaccdev_details->DeviceType == 'Printer') selected @endif>Printer</option>
                                            <option name="DeviceType" value="TV" @if ($studaccdev_details->DeviceType == 'TV') selected @endif>TV</option>
                                            <option name="DeviceType" value="IP Phone" @if ($studaccdev_details->DeviceType == 'IP Phone') selected @endif>IP Phone</option>
                                            <option name="DeviceType" value="Network Switch" @if ($studaccdev_details->DeviceType == 'Network Switch') selected @endif>Network Switch</option>
                                            <option name="DeviceType" value="Server" @if ($studaccdev_details->DeviceType == 'Server') selected @endif>Server</option>
                                            <option name="DeviceType" value="Wireless Router" @if ($studaccdev_details->DeviceType == 'Wireless Router') selected @endif>Wireless Router</option>
                                            <option name="DeviceType" value="Tablet" @if ($studaccdev_details->DeviceType == 'Tablet') selected @endif>Tablet</option>
                                        </select>
                                    </div>

                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">HOST ID</label>
                                            <input type="text" name="DeviceID" id="DeviceID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->DeviceID}}" placeholder="Input Device ID" required="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="col-span-2 sm:col-span-1 mt-3" id="DeviceNameContainer">
                                                <label for="DeviceName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Name</label>
                                                <input type="text" name="DeviceName" id="DeviceName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->DeviceName}}" placeholder="Input Device Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceBrand" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Brand</label>
                                            <input type="text" name="DeviceBrand" id="DeviceBrand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->DeviceBrand}}" placeholder="Input Device Brand" required="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceModel" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Model</label>
                                                <input type="text" name="DeviceModel" id="DeviceModel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->DeviceModel}}" placeholder="Input Device Model" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceSerialNo" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Serial Number</label>
                                            <input type="text" name="DeviceSerialNo" id="DeviceSerialNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->DeviceSerialNo}}" placeholder="Input Device Serial No" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="DeviceMacAdd" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">MAC Address</label>
                                                <input type="text" name="DeviceMacAdd" id="DeviceMacAdd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->DeviceMacAdd}}" placeholder="Input Device MAC Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceLocation" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase"style="width:181px">Location</label>
                                            <input type="text" name="DeviceLocation" id="DeviceLocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:230px" value="{{$studaccdev_details->DeviceLocation}}" placeholder="Input Device Location" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="DeviceStatus" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Status</label>
                                                <select name="DeviceStatus" id="DeviceStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:130px" value="{{$studaccdev_details->DeviceStatus}}">
                                                    <option name="DeviceStatus" value="Working" @if ($studaccdev_details->DeviceStatus == 'Working') selected @endif>Working</option>
                                                    <option name="DeviceStatus" value="Under Repair" @if ($studaccdev_details->DeviceStatus == 'Under Repair') selected @endif>Under Repair</option>
                                                    <option name="DeviceStatus" value="Defective" @if ($studaccdev_details->DeviceStatus == 'Defective') selected @endif>Defective</option>
                                                    <option name="DeviceStatus" value="Missing" @if ($studaccdev_details->DeviceStatus == 'Missing') selected @endif>Missing</option>
                                                    <option name="DeviceStatus" value="Disposed" @if ($studaccdev_details->DeviceStatus == 'Disposed') selected @endif>Disposed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="DeviceRemarks" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase mt-3">Remarks</label>
                                        <input type="text" name="DeviceRemarks" id="DeviceRemarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="height:100px; width:375px"  value="{{$studaccdev_details->DeviceRemarks}}" placeholder="Write Device Remarks here">
                                    </div>
                                    </div>
                                    <!-- Device Requirements End Here! -->

                                    <!-- Device Specs -->
                                    <div class="float-right">
                                        <div id="floorDropdown">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 0 0 2.25-2.25V6.75a2.25 2.25 0 0 0-2.25-2.25H6.75A2.25 2.25 0 0 0 4.5 6.75v10.5a2.25 2.25 0 0 0 2.25 2.25Zm.75-12h9v9h-9v-9Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            DEVICE SPECIFICATION
                                        </h3>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceOperatingSys" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Operating System</label>
                                                <input type="text" name="DeviceOperatingSys" id="DeviceOperatingSys" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_specs->DeviceOperatingSys}}" placeholder="Input Operating System">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceProductKey" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Product Key</label>
                                                    <input type="text" name="DeviceProductKey" id="DeviceProductKey" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_specs->DeviceProductKey}}" placeholder="Input Product Key">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceProcessor" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Processor</label>
                                                <input type="text" name="DeviceProcessor" id="DeviceProcessor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_specs->DeviceProcessor}}" placeholder="Input Processor">
                                            </div>
                                            <div class="flex h-15 w-10">
                                                <div class="ml-3 mt-3">
                                                    <div>
                                                        <label for="DeviceMemory" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Memory</label>
                                                        <div class="relative mt-2 rounded-md shadow-sm"style="width:180px">
                                                            <input type="text" name="DeviceMemory" id="DeviceMemory" class="block w-full h-10 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-500 sm:text-sm sm:leading-6 dark:bg-gray-50" value="{{$studaccdev_specs->DeviceMemory}}" placeholder="Memory">
                                                            <div class="absolute inset-y-0 right-0 flex items-center">
                                                                <select name="DeviceSize" id="DeviceSize" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-green-500 sm:text-sm">
                                                                    <option name="DeviceSize" value="TB" @if ($studaccdev_specs->DeviceSize == 'TB') selected @endif>TB</option>
                                                                    <option name="DeviceSize" value="GB" @if ($studaccdev_specs->DeviceSize == 'GB') selected @endif>GB</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceStorage1" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Storage 1</label>
                                                <input type="text" name="DeviceStorage1" id="DeviceStorage1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_specs->DeviceStorage1}}" placeholder="Input Storage 1">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3 mb-7">
                                                    <label for="DeviceStorage2" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Storage 2</label>
                                                    <input type="text" name="DeviceStorage2" id="DeviceStorage2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_specs->DeviceStorage2}}" placeholder="Input Storage 2">
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Device Specs Ends Here!-->

                                        <!-- Device Purchase Details -->
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            DEVICE PURCHASE DETAILS
                                        </h3>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DevicePriceprunit" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Price per unit</label>
                                                <input type="text" name="DevicePriceprunit" id="DevicePriceprunit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_pd->DevicePriceprunit}}" placeholder="Input Price per unit">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceSupplier" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Supplier</label>
                                                    <input type="text" name="DeviceSupplier" id="DeviceSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_pd->DeviceSupplier}}" placeholder="Input Supplier">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceDateOfPurch" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Date of Purchase</label>
                                                <input type="text" name="DeviceDateOfPurch" id="DeviceDateOfPurch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_pd->DeviceDateOfPurch}}" placeholder="Input Date of Purchase">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceWarranty" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Warranty</label>
                                                    <input type="text" name="DeviceWarranty" id="DeviceWarranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_pd->DeviceWarranty}}" placeholder="Input Warranty">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="issue_date" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Issue Date</label>
                                                <input type="text" name="issue_date" id="issue_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->issue_date}}" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="is_accountability" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Accountability</label>
                                                    <input type="text" name="is_accountability" id="is_accountability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$studaccdev_details->is_accountability}}" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:687px">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                    </svg>
                                        Return
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function toggleInput() {
                        var deviceType = document.getElementById("DeviceType").value;
                        var deviceNameContainer = document.getElementById("DeviceNameContainer");

                        if (deviceType === "Monitor" || deviceType === "Speaker" || deviceType === "Projector" || deviceType === "Printer" || deviceType === "TV" || deviceType === "IP Phone" || deviceType === "Network Switch" || deviceType === "Server" || deviceType === "Wireless Router" || deviceType === "Tablet") {
                            deviceNameContainer.style.display = "none";
                        } else {
                            deviceNameContainer.style.display = "block";
                        }
                    }

                    // Call toggleInput initially to set the initial state
                    toggleInput();

                    function updateFloorDropdown() {
                        var deviceTypeValue = document.getElementById('DeviceType').value;
                        var floorDropdown = document.getElementById('floorDropdown');

                        if (deviceTypeValue === 'System Unit' || deviceTypeValue === 'Laptop' || deviceTypeValue === 'AIO Desktop' || deviceTypeValue === 'IMAC') {
                            floorDropdown.style.display = 'block';
                        } else {
                            floorDropdown.style.display = 'none';
                        }
                    }

                    // Call the function once to initialize the state
                    updateFloorDropdown();
                </script>

            </x-app-layout>
        </body>
    </html>
