<!doctype html>
    <html lang="en">
        <head>
            <title>ITS / Accountability</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        Edit Employees
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            ITS</li>
                        <li class="breadcrumb-item">Accountability</li>
                    </ol>
                </x-slot>

                <div id="" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full mr-64">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:900px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        EDIT EMPLOYEE DETAILS
                                    </h3>
                                    <button type="button" onclick="location.href='{{ url('itsemployeeaccountabilityemployee') }}'" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="" method="POST">
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
                                            <select name="DeviceType" id="DeviceType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"style="width:181px">
                                                <option name="DeviceType" value="System Unit" >System Unit</option>
                                                <option name="DeviceType" value="Laptop" >Laptop</option>
                                                <option name="DeviceType" value="AIO Desktop" >AIO Desktop</option>
                                                <option name="DeviceType" value="IMAC" >IMAC</option>
                                                <option name="DeviceType" value="Monitor" >Monitor</option>
                                                <option name="DeviceType" value="Speaker" >Speaker</option>
                                                <option name="DeviceType" value="Projector" >Projector</option>
                                                <option name="DeviceType" value="Printer" >Printer</option>
                                                <option name="DeviceType" value="TV" >TV</option>
                                                <option name="DeviceType" value="IP Phone" >IP Phone</option>
                                                <option name="DeviceType" value="Network Switch" >Network Switch</option>
                                                <option name="DeviceType" value="Server">Server</option>
                                                <option name="DeviceType" value="Wireless Router" >Wireless Router</option>
                                                <option name="DeviceType" value="Tablet" >Tablet</option>
                                            </select>
                                        </div>

                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">HOST ID</label>
                                                <input type="text" name="DeviceID" id="DeviceID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" placeholder="Input Device ID" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Name</label>
                                                    <input type="text" name="DeviceName" id="DeviceName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" placeholder="Input Device Name" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceBrand" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Brand</label>
                                                <input type="text" name="DeviceBrand" id="DeviceBrand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" placeholder="Input Device Brand" required="">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceModel" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Model</label>
                                                    <input type="text" name="DeviceModel" id="DeviceModel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" placeholder="Input Device Model" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceSerialNo" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Serial Number</label>
                                                <input type="text" name="DeviceSerialNo" id="DeviceSerialNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" placeholder="Input Device Serial No" required="">
                                            </div>
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <div class="ml-3">
                                                    <label for="DeviceMacAdd" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">MAC Address</label>
                                                    <input type="text" name="DeviceMacAdd" id="DeviceMacAdd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="" placeholder="Input Device MAC Address" required="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceLocation" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase"style="width:181px">Location</label>
                                                <select name="DeviceLocation" id="DeviceLocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"style="width:181px">
                                                    <option name="DeviceLocation" value="Office" >Office</option>
                                                    <option name="DeviceLocation" value="Storage" >Storage</option>
                                                </select>
                                            </div>
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <div class="ml-3">
                                                    <label for="DeviceStatus" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Status</label>
                                                    <select name="DeviceStatus" id="DeviceStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"style="width:181px" value="">
                                                        <option name="DeviceStatus" value="Working" >Working</option>
                                                        <option name="DeviceStatus" value="Not Working" >Not Working</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="DeviceRemarks" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase mt-3">Remarks</label>
                                            <input type="text" name="DeviceRemarks" id="DeviceRemarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="height:100px; width:375px"  value="" placeholder="Write Device Remarks here">
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
