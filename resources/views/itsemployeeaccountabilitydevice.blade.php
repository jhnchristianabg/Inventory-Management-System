<!doctype html>
    <html lang="en">
        <head>
            <title>ITS / Accountability</title>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <!-- Select2 CSS -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
            <style>
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
                        ASSIGNED DEVICES
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

                <!-- Modal Button toggle -->
                <button class="relative overflow-x-auto inline-flex items-center px-3 py-2 text-sm font-bold text-center text-black bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500 float-right mx-1" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button">

                    ASSIGN
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5 ml-1">
                        <path fill-rule="evenodd" d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm1.5 0a.75.75 0 0 1 .75-.75h11.5a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-.75.75H4.25a.75.75 0 0 1-.75-.75v-7.5Z" clip-rule="evenodd" />
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
                            <p class="text-sm">Success! Your Device details have been Saved.</p>
                        </div>
                    </div>
                </div>

                {{ Session::get('success')}}

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
                            <p class="text-sm">Success! Your Device has been Updated.</p>
                        </div>
                    </div>
                </div>

                {{ Session::get('update')}}

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
                            <p class="text-sm">Success! The selected data has been Deleted.</p>
                        </div>
                    </div>
                </div>

                {{ Session::get('delete')}}

                @endif

                <!-- Notification for FAILED -->

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

                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full" style="margin-right:500px">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:950px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        ASSIGN DEVICE
                                    </h3>
                                    <button type="button"
                                            class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white"
                                            data-modal-toggle="crud-modal"
                                            onclick="closeModal()">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                                <form action="search_acc_device" method="GET">
                                    <div class="pt-2 relative mx-auto text-gray-600 mr-6">
                                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_devicemodal" placeholder="Search">
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

                            <!-- Modal body -->
                            <form class="p-4 md:p-5 mt-8" action="{{ route('update.devices') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="grid gap-4 mb-4 grid-cols-2">

                                    <!-- Device Requirements -->
                                    <div class="float-left">

                                        <!-- TABLE FOR DEVICE VIEW-->
                                        <div class="relative overflow mb-5" style= "width:870px">

                                            <!-- COLUMN TABLE SORTING -->
                                            <div>
                                                <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                                                    <thead class="text-xs uppercase bg-gray-200 font-medium">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3 text-gray-200">
                                                                id
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                HOST ID
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Type
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Brand
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Model
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Serial #
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Location
                                                            </th>
                                                        </tr>

                                                        <!-- COLUMN TABLE SORTING Ends Here -->

                                                        <!-- DISPLAYING OF DATA TABLE -->

                                                    </thead>
                                                    <tbody>
                                                        @foreach($deviceview_acc as $devices)
                                                            <tr class="bg-white border-b dark:border-gray-300 text-black">
                                                                <td class="px-6 py-4 font-bold uppercase">
                                                                    <input type="checkbox" name="selected_device" value="{{ $devices->id }}">
                                                                </td>
                                                                <td class="px-6 py-4 font-bold uppercase">{{$devices->DeviceID}}</td>
                                                                <td class="px-6 py-4">{{$devices->DeviceType}}</td>
                                                                <td class="px-6 py-4">{{$devices->DeviceName}}</td>
                                                                <td class="px-6 py-4">{{$devices->DeviceBrand}}</td>
                                                                <td class="px-6 py-4">{{$devices->DeviceModel}}</td>
                                                                <td class="px-6 py-4">{{$devices->DeviceSerialNo}}</td>
                                                                <td class="px-6 py-4">{{$devices->DeviceLocation}}</td>
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

                                                    @if($deviceview_acc->total() > 0)
                                                        <p class="mr-4 text-gray-700 text-sm font-bold">Showing {{ $deviceview_acc->firstItem() }} to {{ $deviceview_acc->lastItem() }} of {{ $deviceview_acc->total() }} results</p>
                                                    @else
                                                        <p class="mr-4 text-gray-700">No entries found</p>
                                                    @endif

                                                    <div class="ml-auto"> <!-- Added ml-auto class here -->
                                                        @if($deviceview_acc->currentPage() > 1)
                                                            <a href="{{ $deviceview_acc->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2 font-bold">&laquo; Previous</a>
                                                        @endif

                                                        @php
                                                            // Calculate start and end page numbers for the loop
                                                            $startPage = max(1, $deviceview_acc->currentPage() - 1);
                                                            $endPage = min($deviceview_acc->lastPage(), $startPage + 2); // Show 5 links at a time

                                                            // If there are fewer than 5 pages remaining, adjust the start page
                                                            if ($endPage - $startPage < 1) {
                                                                $startPage = max(1, $endPage - 1);
                                                            }
                                                        @endphp

                                                        @for($i = $startPage; $i <= $endPage; $i++)
                                                            <a href="{{ $deviceview_acc->url($i) }}" class="px-3 py-1 {{ $i == $deviceview_acc->currentPage() ? 'bg-green-500 text-white font-bold' : 'bg-gray-200 text-gray-700' }} rounded-md mr-2">{{ $i }}</a>
                                                        @endfor

                                                        @if($deviceview_acc->currentPage() < $deviceview_acc->lastPage())
                                                            <a href="{{ $deviceview_acc->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md ml-2 font-bold">Next &raquo;</a>
                                                        @endif
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- PAGINATION Ends Here -->
                                        </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                            </svg>

                                            <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                                EMPLOYEE
                                            </h3>

                                            <div class="flex">
                                                <div class="col-span-2 sm:col-span-1 mt-3">
                                                    <label for="is_accountability" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Employee ID</label>
                                                    <select name="is_accountability" id="is_accountability" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                                        @if(isset($data))
                                                            @foreach ($data as $row)
                                                                <option value="{{ $row->EmployeeID }}">{{ $row->EmployeeID }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>

                                                <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                    <label for="newDeviceID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">HOST ID</label>
                                                    <input type="text" name="newDeviceID" id="newDeviceID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Host ID" required="">
                                                </div>

                                                <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                    <label for="newLocation" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Location</label>
                                                    <select name="newLocation" id="newLocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:250px">
                                                        @if(isset($data_location))
                                                            @foreach ($data_location as $row_location)
                                                                <option value="{{ $row_location->Building }} | {{ $row_location->Floor }}  | {{ $row_location->RoomNo }}  | {{ $row_location->RoomName }}">{{ $row_location->Building }} <a class="ml-1"> | {{ $row_location->Floor }} <a class="ml-1"> | {{ $row_location->RoomNo }} <a class="ml-1"> | {{ $row_location->RoomName }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Device Requirements End Here! -->
                                </div>
                                <div class="mt-10">
                                    <button type="submit" onclick="updateSelectedDevices()" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:760px">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        Assign
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                {{-- THIS IS THE TABLE OUTSIDE THE MODAL --}}

                <div id="notificationContainer">
                </div>

                <form action="search_acc_device" method="GET">
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_device" placeholder="Search">
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

                <div>
                    <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                        <thead class="text-xs uppercase bg-gray-200 font-medium">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'id', 'direction_acc_dev' => ($column_acc_dev == 'id' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        id
                                        @if($column_acc_dev == 'id')
                                            @if($direction_acc_dev == 'asc')
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
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'DeviceID', 'direction_acc_dev' => ($column_acc_dev == 'DeviceID' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        HOST ID
                                        @if($column_acc_dev == 'DeviceID')
                                            @if($direction_acc_dev == 'asc')
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
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'DeviceType', 'direction_acc_dev' => ($column_acc_dev == 'DeviceType' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        TYPE
                                        @if($column_acc_dev == 'DeviceType')
                                            @if($direction_acc_dev == 'asc')
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
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'DeviceBrand', 'direction_acc_dev' => ($column_acc_dev == 'DeviceBrand' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        BRAND
                                        @if($column_acc_dev == 'DeviceBrand')
                                            @if($direction_acc_dev == 'asc')
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
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'updated_at', 'direction_acc_dev' => ($column_acc_dev == 'updated_at' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        ISSUE DATE
                                        @if($column_acc_dev == 'updated_at')
                                            @if($direction_acc_dev == 'asc')
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
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'DeviceLocation', 'direction_acc_dev' => ($column_acc_dev == 'DeviceLocation' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        LOCATION
                                        @if($column_acc_dev == 'DeviceLocation')
                                            @if($direction_acc_dev == 'asc')
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
                                    <a href="{{ route('itsemployeeaccountabilitydevice.show', ['column_acc_dev' => 'is_accountability', 'direction_acc_dev' => ($column_acc_dev == 'is_accountability' && $direction_acc_dev == 'asc') ? 'desc' : 'asc']) }}">
                                        ACCOUNTABILITY
                                        @if($column_acc_dev == 'is_accountability')
                                            @if($direction_acc_dev == 'asc')
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
                            </tr>

                            <!-- COLUMN TABLE SORTING Ends Here -->

                            <!-- DISPLAYING OF DATA TABLE -->

                        </thead>
                        <tbody>
                            @foreach($dev_acc as $devacc)
                                <tr class="bg-white border-b dark:border-gray-300 text-black">
                                    <td class="px-6 py-4">{{$devacc->id}}</td>
                                    <td class="px-6 py-4 font-bold uppercase">{{$devacc->DeviceID}}</td>
                                    <td class="px-6 py-4">{{$devacc->DeviceType}}</td>
                                    <td class="px-6 py-4">{{$devacc->DeviceBrand}}</td>
                                    <td class="px-6 py-4 font-bold uppercase">{{$devacc->updated_at}}</td>
                                    <td class="px-6 py-4">{{$devacc->DeviceLocation}}</td>
                                    <td class="px-6 py-4">{{$devacc->is_accountability}}</td>
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

                        @if($dev_acc->total() > 0)
                            <p class="mr-4 text-gray-700 text-sm">Showing <span class="font-bold">{{ $dev_acc->firstItem() }}</span> to <span class="font-bold">{{ $dev_acc->lastItem() }}</span> of <span class="font-bold">{{ $dev_acc->total() }} Results</span></p>
                        @else
                            <p class="mr-4 text-gray-700">No entries found</p>
                        @endif

                        <div class="ml-auto"> <!-- Added ml-auto class here -->
                            @if($dev_acc->currentPage() > 1)
                                <a href="{{ $dev_acc->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2 font-bold">&laquo; Previous</a>
                            @endif

                            @php
                                // Calculate start and end page numbers for the loop
                                $startPage = max(1, $dev_acc->currentPage() - 1);
                                $endPage = min($dev_acc->lastPage(), $startPage + 2); // Show 5 links at a time

                                // If there are fewer than 5 pages remaining, adjust the start page
                                if ($endPage - $startPage < 1) {
                                    $startPage = max(1, $endPage - 1);
                                }
                            @endphp

                            @for($i = $startPage; $i <= $endPage; $i++)
                                <a href="{{ $dev_acc->url($i) }}" class="px-3 py-1 {{ $i == $dev_acc->currentPage() ? 'bg-green-500 text-white font-bold' : 'bg-gray-200 text-gray-700' }} rounded-md mr-2">{{ $i }}</a>
                            @endfor

                            @if($dev_acc->currentPage() < $dev_acc->lastPage())
                                <a href="{{ $dev_acc->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md ml-2 font-bold">Next &raquo;</a>
                            @endif
                        </div>

                    </div>
                </div>

                <!-- PAGINATION Ends Here -->

                <!-- JavaScript -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

                <script>
                    // Function to gather selected device IDs
                    function getSelectedDevices() {
                        const selectedDevices = [];
                        const checkboxes = document.querySelectorAll('input[type="checkbox"][name="selected_device"]:checked');
                        checkboxes.forEach(checkbox => {
                            selectedDevices.push(checkbox.value);
                        });
                        return selectedDevices;
                    }

                    // Function to update selected devices
                    function updateSelectedDevices() {
                        const selectedDevices = getSelectedDevices();
                        const newAcc = document.getElementById('is_accountability').value;
                        const newDeviceID = document.getElementById('newDeviceID').value;
                        const newLocation = document.getElementById('newLocation').value;

                        // Send AJAX request to update devices
                        $.ajax({
                            url: '{{ route("update.devices") }}',
                            method: 'POST',
                            data: {
                                selected_device: selectedDevices,
                                is_accountability: newAcc,
                                newDeviceID: newDeviceID,
                                newLocation: newLocation,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                // Handle success response
                                console.log(response);
                                // Store a flag indicating success in session storage
                                sessionStorage.setItem('updateSuccess', 'true');
                                // Reload the page
                                location.reload();
                            },
                            error: function(xhr, status, error) {
                                // Handle error response
                                console.error(error);
                                // You can show an error message here
                            }
                        });
                    }

                    // Check for success flag upon page load
                    document.addEventListener('DOMContentLoaded', function() {
                        const updateSuccess = sessionStorage.getItem('updateSuccess');
                        if (updateSuccess === 'true') {
                            // Create and append the success notification
                            const successNotification = `
                                <div class="mb-3 bg-green-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                                    <div class="flex">
                                        <div class="py-1">
                                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                        </div>
                                        <div>
                                            <p class="font-bold">Inventory Management System</p>
                                            <p class="text-sm">Success! The selected device has been assigned.</p>
                                        </div>
                                    </div>
                                </div>
                            `;
                            // Append the notification to a suitable container
                            $('#notificationContainer').append(successNotification);
                            // Clear the success flag from session storage
                            sessionStorage.removeItem('updateSuccess');
                        }
                    });

                    $(document).ready(function() {
                        $('#is_accountability').select2();
                    });
                </script>


            </x-app-layout>



        </body>
    </html>
