<!doctype html>
    <html lang="en">
        <head>
            <title>Removed / Devices</title>
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
                        <li class="breadcrumb-item">Removed Inventory Items</li>
                    </ol>
                </x-slot>

                <!-- Search -->
                    <form action="search_remove_device" method="GET">
                        <div class="pt-2 relative mx-auto text-gray-600">
                            <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_remove_device" placeholder="Search">
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
                <!-- -->

                <!-- TABLE FOR DEVICE VIEW-->
                <div class="relative overflow-x-auto mt-14">

                    <!-- COLUMN TABLE SORTING -->

                    <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                        <thead class="text-xs uppercase bg-gray-200 font-bold">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <a href="{{ route('removedevice.show', ['column' => 'id', 'direction' => ($column == 'id' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceID', 'direction' => ($column == 'DeviceID' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceType', 'direction' => ($column == 'DeviceType' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceName', 'direction' => ($column == 'DeviceName' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceBrand', 'direction' => ($column == 'DeviceBrand' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceModel', 'direction' => ($column == 'DeviceModel' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceSerialNo', 'direction' => ($column == 'DeviceSerialNo' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceMacAdd', 'direction' => ($column == 'DeviceMacAdd' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceLocation', 'direction' => ($column == 'DeviceLocation' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'DeviceStatus', 'direction' => ($column == 'DeviceStatus' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                    <a href="{{ route('removedevice.show', ['column' => 'is_accountability', 'direction' => ($column == 'is_accountability' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                            </tr>

                            <!-- COLUMN TABLE SORTING Ends Here -->

                            <!-- DISPLAYING OF DATA TABLE -->

                        </thead>
                        <tbody>
                            @foreach($deviceview_remove as $devices)
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

                            @if($deviceview_remove->total() > 0)
                            <p class="mr-4 text-gray-700 text-sm">Showing <span class="font-bold">{{ $deviceview_remove->firstItem() }}</span> to <span class="font-bold">{{ $deviceview_remove->lastItem() }}</span> of <span class="font-bold">{{ $deviceview_remove->total() }} Results</span></p>
                            @else
                                <p class="mr-4 text-gray-700">No entries found</p>
                            @endif

                            <div class="ml-auto"> <!-- Added ml-auto class here -->
                                @if($deviceview_remove->currentPage() > 1)
                                    <a href="{{ $deviceview_remove->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2 font-bold">&laquo; Previous</a>
                                @endif

                                @php
                                    // Calculate start and end page numbers for the loop
                                    $startPage = max(1, $deviceview_remove->currentPage() - 1);
                                    $endPage = min($deviceview_remove->lastPage(), $startPage + 2); // Show 5 links at a time

                                    // If there are fewer than 5 pages remaining, adjust the start page
                                    if ($endPage - $startPage < 1) {
                                        $startPage = max(1, $endPage - 1);
                                    }
                                @endphp

                                @for($i = $startPage; $i <= $endPage; $i++)
                                    <a href="{{ $deviceview_remove->url($i) }}" class="px-3 py-1 {{ $i == $deviceview_remove->currentPage() ? 'bg-green-500 text-white font-bold' : 'bg-gray-200 text-gray-700' }} rounded-md mr-2">{{ $i }}</a>
                                @endfor

                                @if($deviceview_remove->currentPage() < $deviceview_remove->lastPage())
                                    <a href="{{ $deviceview_remove->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md ml-2 font-bold">Next &raquo;</a>
                                @endif
                            </div>

                        </div>
                    </div>

                <!-- PAGINATION Ends Here -->

            </x-app-layout>
        </body>
    </html>
