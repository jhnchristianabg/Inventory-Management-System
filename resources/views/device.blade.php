<!doctype html>
    <html lang="en">
        <head>
            <title>Inventory / Devices</title>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <!-- Select2 CSS -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
            <style>
                #dataTable th{
                    background-color: #e5e7eb;
                    padding: 10px;
                }
                #dataTable td{
                    padding: 10px;
                }
                .select2 {
                    font-weight: 600;
                    text-transform: uppercase;
                    font-size: 0.875rem;
                    border-radius: 0.375rem;
                    width: 181px;
                    text-align: center; /* Center the text */
                    margin: auto;
                }

                .select2-container .select2-selection--single {
                    box-sizing: border-box;
                    cursor: pointer;
                    display: block;
                    height: 40px;
                    user-select: none;
                    -webkit-user-select: none;
                    text-align: center; /* Center the text */
                    padding-top:5px;
                }
                .select2-container--default .select2-results__option--highlighted[aria-selected] {
                    font-size: 0.875rem;
                    color: white
                    text-align: center; /* Center the text */
                }
                .select2-results__options {
                    font-size: 0.800rem;
                    text-align: center; /* Center the text */
                }

                .select2-search--dropdown .select2-search__field {
                    font-size: 0.800rem;
                }
            </style>

        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        DEVICES
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



                <!-- Modal Button toggle -->
                <button class="relative overflow-x-auto inline-flex items-center px-3 py-2 text-sm font-bold text-center text-black bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500 float-right mx-1" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">

                    ADD
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5 ml-1">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20 my-6">
                </div>

                <!-- Notification -->

                    <!-- Notification for SUCCESS -->
                    @if(Session::get('success'))
                        <div class="mb-3 bg-green-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold">Inventory Management System</p>
                                    <p class="text-sm">Success! Your device details have been saved.</p>
                                </div>
                            </div>
                        </div>
                        {{ Session::get('success')}}
                    @endif

                    <!-- Notification for FAILED -->
                    @if(Session::get('failed'))
                        <div class="mb-3 bg-red-100 border-t-4 border-red-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold">Inventory Management System</p>
                                    <p class="text-sm">Failed! The device you entered is already exist.</p>
                                </div>
                            </div>
                        </div>
                        {{ Session::get('failed')}}
                    @endif

                    <!-- Notification for UPDATE -->
                    @if(Session::get('update'))
                        <div class="mb-3 bg-green-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold">Inventory Management System</p>
                                    <p class="text-sm">Success! The device has been updated.</p>
                                </div>
                            </div>
                        </div>
                        {{ Session::get('update')}}
                    @endif

                    <!-- Notification for FAILED UPDATE-->
                    @if(Session::get('failed_update'))
                        <div class="mb-3 bg-red-100 border-t-4 border-red-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold">Inventory Management System</p>
                                    <p class="text-sm">Failed to update! Change a few things up and try submitting again.</p>
                                </div>
                            </div>
                        </div>
                        {{ Session::get('failed_update')}}
                    @endif

                    <!-- Notification for DELETE -->
                    @if(Session::get('delete'))
                        <div class="mb-3 bg-green-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                            <div class="flex">
                                <div class="py-1">
                                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                </div>
                                <div>
                                    <p class="font-bold">Inventory Management System</p>
                                    <p class="text-sm">Success! The selected data has been deleted.</p>
                                </div>
                            </div>
                        </div>
                        {{ Session::get('delete')}}
                    @endif

                <!-- Notification Ends here-->

                <!-- MODAL FOR ADD BUTTON (CREATING DATA) -->

                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full" style="margin-right:500px">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:900px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        ADD NEW DEVICE
                                    </h3>
                                    <button type="button" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white" data-modal-toggle="crud-modal">
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                            </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            DEVICE
                                        </h3>

                                    <div class="col-span-2 mt-5">
                                        <label for="DeviceType" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Device Type</label>
                                        <select name="DeviceType" id="DeviceType" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500"style="width:181px" onchange="toggleInput()">
                                            <option name="DeviceType" value="System Unit">System Unit</option>
                                            <option name="DeviceType" value="Laptop">Laptop</option>
                                            <option name="DeviceType" value="AIO Desktop">AIO Desktop</option>
                                            <option name="DeviceType" value="IMAC">IMAC</option>
                                            <option name="DeviceType" value="Monitor">Monitor</option>
                                            <option name="DeviceType" value="Speaker">Speaker</option>
                                            <option name="DeviceType" value="Projector">Projector</option>
                                            <option name="DeviceType" value="Printer">Printer</option>
                                            <option name="DeviceType" value="TV">TV</option>
                                            <option name="DeviceType" value="IP Phone">IP Phone</option>
                                            <option name="DeviceType" value="Network Switch">Network Switch</option>
                                            <option name="DeviceType" value="Server">Server</option>
                                            <option name="DeviceType" value="Wireless Router">Wireless Router</option>
                                            <option name="DeviceType" value="Tablet">Tablet</option>
                                        </select>
                                    </div>

                                    <div class="flex">
                                        <div class="">
                                            <div class="col-span-2 sm:col-span-1 mt-3" id="DeviceNameContainer">
                                                <label for="DeviceName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Name</label>
                                                <input type="text" name="DeviceName" id="DeviceName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Device Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceBrand" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Brand</label>
                                            <input type="text" name="DeviceBrand" id="DeviceBrand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Device Brand" required="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceModel" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Model</label>
                                                <input type="text" name="DeviceModel" id="DeviceModel" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Device Model" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceSerialNo" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Serial Number</label>
                                            <input type="text" name="DeviceSerialNo" id="DeviceSerialNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Device Serial No." required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="DeviceMacAdd" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">MAC Address</label>
                                                <input type="text" name="DeviceMacAdd" id="DeviceMacAdd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Device MAC Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="DeviceLocation" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase" style="width:181px">Location</label>
                                            <select name="DeviceLocation" id="DeviceLocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:230px">
                                                @if(isset($data_location))
                                                    @foreach ($data_location as $row_location)
                                                        <option value="{{ $row_location->Building }} | {{ $row_location->Floor }}  | {{ $row_location->RoomNo }}  | {{ $row_location->RoomName }}">{{ $row_location->Building }} <a class="ml-1"> | {{ $row_location->Floor }} <a class="ml-1"> | {{ $row_location->RoomNo }} <a class="ml-1"> | {{ $row_location->RoomName }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-3">
                                                <label for="DeviceStatus" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Status</label>
                                                <select name="DeviceStatus" id="DeviceStatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:130px">
                                                    <option name="DeviceStatus" value="Working">Working</option>
                                                    <option name="DeviceStatus" value="Under Repair">Under Repair</option>
                                                    <option name="DeviceStatus" value="Defective">Defective</option>
                                                    <option name="DeviceStatus" value="Missing">Missing</option>
                                                    <option name="DeviceStatus" value="Disposed">Disposed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="DeviceRemarks" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase mt-3">Remarks</label>
                                        <textarea name="DeviceRemarks" id="DeviceRemarks" rows="5" cols="46"class="block p-2.5 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Write Device Remarks here"></textarea>
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
                                                <input type="text" name="DeviceOperatingSys" id="DeviceOperatingSys" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Operating System">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceProductKey" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Product Key</label>
                                                    <input type="text" name="DeviceProductKey" id="DeviceProductKey" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Product Key">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceProcessor" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Processor</label>
                                                <input type="text" name="DeviceProcessor" id="DeviceProcessor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Processor">
                                            </div>
                                            <div class="flex h-15 w-10">
                                                <div class="ml-3 mt-3">
                                                    <div>
                                                        <label for="DeviceMemory" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Memory</label>
                                                        <div class="relative mt-2 rounded-md shadow-sm"style="width:180px">
                                                          <input type="text" name="DeviceMemory" id="DeviceMemory" class="block w-full h-10 rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-500 sm:text-sm sm:leading-6 dark:bg-gray-50" placeholder="Memory">
                                                          <div class="absolute inset-y-0 right-0 flex items-center">
                                                            <select name="DeviceSize" id="DeviceSize" class="h-full rounded-md border-0 bg-transparent py-0 pl-2 pr-7 text-gray-500 focus:ring-2 focus:ring-inset focus:ring-green-500 sm:text-sm">
                                                              <option name="DeviceSize" value="TB">TB</option>
                                                              <option name="DeviceSize" value="GB">GB</option>
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
                                                <input type="text" name="DeviceStorage1" id="DeviceStorage1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Storage 1">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3 mb-7">
                                                    <label for="DeviceStorage2" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Storage 2</label>
                                                    <input type="text" name="DeviceStorage2" id="DeviceStorage2" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Storage 2">
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
                                                <input type="text" name="DevicePriceprunit" id="DevicePriceprunit" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Price per unit">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceSupplier" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Supplier</label>
                                                    <input type="text" name="DeviceSupplier" id="DeviceSupplier" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Supplier">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="DeviceDateOfPurch" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Date of Purchase</label>
                                                <input type="text" name="DeviceDateOfPurch" id="DeviceDateOfPurch" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Date of Purchase">
                                            </div>
                                            <div class="ml-3">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="DeviceWarranty" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Warranty</label>
                                                    <input type="text" name="DeviceWarranty" id="DeviceWarranty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Warranty">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Device Purchase Details Ends Here -->
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:635px">
                                    <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Add new device
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <form action="search_device" method="GET">
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search" placeholder="Search">
                            <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                                <svg class="text-gray-600 h-4 w-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                    width="512px" height="512px">
                                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </button>
                    </div>
                </form>

                <!-- TABLE FOR DEVICE VIEW-->
                <div class="relative overflow-x-auto mt-14">

                    <!-- COLUMN TABLE SORTING -->

                    <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                        <thead class="text-xs uppercase bg-gray-200 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'id', 'direction' => ($column == 'id' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        ID
                                        @if($column == 'id')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceID', 'direction' => ($column == 'DeviceID' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        HOST ID
                                        @if($column == 'DeviceID')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceType', 'direction' => ($column == 'DeviceType' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Type
                                        @if($column == 'DeviceType')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceName', 'direction' => ($column == 'DeviceName' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Name
                                        @if($column == 'DeviceName')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceBrand', 'direction' => ($column == 'DeviceBrand' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Brand
                                        @if($column == 'DeviceBrand')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceModel', 'direction' => ($column == 'DeviceModel' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Model
                                        @if($column == 'DeviceModel')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceSerialNo', 'direction' => ($column == 'DeviceSerialNo' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Serial #
                                        @if($column == 'DeviceSerialNo')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceMacAdd', 'direction' => ($column == 'DeviceMacAdd' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        MAC Address
                                        @if($column == 'DeviceMacAdd')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceLocation', 'direction' => ($column == 'DeviceLocation' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Location
                                        @if($column == 'DeviceLocation')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'DeviceStatus', 'direction' => ($column == 'DeviceStatus' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Status
                                        @if($column == 'DeviceStatus')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('device.show', ['column' => 'is_accountability', 'direction' => ($column == 'is_accountability' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                        Accountability
                                        @if($column == 'is_accountability')
                                            @if($direction == 'asc')
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                            </svg>
                                            @else
                                            <svg class="w-4 h-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                            </svg>
                                            @endif
                                        @endif
                                    </a>
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Action
                                </th>
                            </tr>

                            <!-- COLUMN TABLE SORTING Ends Here -->

                            <!-- DISPLAYING OF DATA TABLE -->

                        </thead>
                        <tbody>
                            @foreach($deviceview as $devices)
                            <tr class="bg-white border-b dark:border-gray-300 text-black">
                                <td class="px-6 py-4">{{$devices->id}}</td>
                                <td class="px-6 py-4 font-bold uppercase">{{$devices->DeviceID}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceType}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceName}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceBrand}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceModel}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceSerialNo}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceMacAdd}}</td>
                                <td class="px-6 py-4">{{$devices->DeviceLocation}}</td>
                                <td class="px-6 py-4 font-bold uppercase text-xs">{{$devices->DeviceStatus}}</td>
                                <td class="px-6 py-4">{{$devices->is_accountability}}</td>
                                <td class="px-6 py-4">
                                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-3">
                                    <button type="button" onclick="location.href='{{ url('devicedetails/'.$devices->id) }}'">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="w-5 h-5">
                                            <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                            <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button type="button" onclick="location.href='{{ url('deviceedit/'.$devices->id) }}'">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="blue" class="w-5 h-5">
                                            <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                            <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                        </svg>
                                    </button>
                                    <form method="POST" action="{{ route('devices.soft-delete', ['id' => $devices->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure you want to soft delete this data?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="red" class="w-5 h-5 mt-1">
                                                <path d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z" />
                                                <path fill-rule="evenodd" d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5Zm5.22 1.72a.75.75 0 0 1 1.06 0L10 10.94l1.72-1.72a.75.75 0 1 1 1.06 1.06L11.06 12l1.72 1.72a.75.75 0 1 1-1.06 1.06L10 13.06l-1.72 1.72a.75.75 0 0 1-1.06-1.06L8.94 12l-1.72-1.72a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!-- DISPLAYING OF DATA TABLE Ends Here -->
                    </table>

                </div>

                <!-- PAGINATION -->

                <div class="mt-3 font-medium">
                    <!-- Modify the pagination links here -->
                    <div class="items-center mt-4 text-sm flex flex-wrap">

                        @if($deviceview->total() > 0)
                        <p class="mr-4 text-gray-700 text-sm">Showing <span class="font-bold">{{ $deviceview->firstItem() }}</span> to <span class="font-bold">{{ $deviceview->lastItem() }}</span> of <span class="font-bold">{{ $deviceview->total() }} Results</span></p>
                        @else
                            <p class="mr-4 text-gray-700">No entries found</p>
                        @endif

                        <div class="ml-auto"> <!-- Added ml-auto class here -->
                            @if($deviceview->currentPage() > 1)
                                <a href="{{ $deviceview->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2 font-bold">&laquo; Previous</a>
                            @endif

                            @php
                                // Calculate start and end page numbers for the loop
                                $startPage = max(1, $deviceview->currentPage() - 1);
                                $endPage = min($deviceview->lastPage(), $startPage + 2); // Show 5 links at a time

                                // If there are fewer than 5 pages remaining, adjust the start page
                                if ($endPage - $startPage < 1) {
                                    $startPage = max(1, $endPage - 1);
                                }
                            @endphp

                            @for($i = $startPage; $i <= $endPage; $i++)
                                <a href="{{ $deviceview->url($i) }}" class="px-3 py-1 {{ $i == $deviceview->currentPage() ? 'bg-green-500 text-white font-bold' : 'bg-gray-200 text-gray-700' }} rounded-md mr-2">{{ $i }}</a>
                            @endfor

                            @if($deviceview->currentPage() < $deviceview->lastPage())
                                <a href="{{ $deviceview->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md ml-2 font-bold">Next &raquo;</a>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- PAGINATION Ends Here -->

                <!-- JavaScript -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
                <!-- JavaScript ENDS HERE -->

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

                    document.getElementById('DeviceType').addEventListener('change', function() {
                        var floorDropdown = document.getElementById('floorDropdown');
                        if (this.value === 'System Unit' || this.value === 'Laptop' || this.value === 'AIO Desktop' || this.value === 'IMAC') {
                            floorDropdown.style.display = 'block';
                        } else {
                            floorDropdown.style.display = 'none';
                        }
                    });

                     // Dropdown with search of Location
                     $(document).ready(function() {
                        $('#DeviceLocation').select2();
                    });
                </script>


            </x-app-layout>
        </body>
    </html>
