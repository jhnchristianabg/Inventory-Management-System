<!doctype html>
    <html lang="en">
        <head>
            <title>Repair History</title>
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
                        REPAIR HISTORY
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            ITS</li>
                        <li class="breadcrumb-item">Repair History</li>
                    </ol>
                </x-slot>

                <!-- Notification for UPDATE -->
                    @if(Session::get('update'))
                    <div class="mb-3 bg-green-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div class="py-1">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                            </div>
                            <div>
                                <p class="font-bold">Inventory Management System</p>
                                <p class="text-sm">Success! The selected Device has been Updated.</p>
                            </div>
                        </div>
                    </div>
                    {{ Session::get('update')}}
                    @endif
                <!-- END of Notification for UPDATE -->

                <!-- Search -->
                <form action="" method="GET">
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
                                <th scope="col" class="px-6 py-3 text-center">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Type
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    BRAND
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    MODEL
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    SERIAL #
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    STATUS
                                </th>
                                <th scope="col" class="px-6 py-3 text-center">
                                    REMARKS
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
                                <td class="px-6 py-4  text-center">{{$devices->id}}</td>
                                <td class="px-6 py-4 font-bold uppercase text-center">{{$devices->DeviceType}}</td>
                                <td class="px-6 py-4 text-center">{{$devices->DeviceName}}</td>
                                <td class="px-6 py-4 text-center">{{$devices->DeviceBrand}}</td>
                                <td class="px-6 py-4 text-center">{{$devices->DeviceModel}}</td>
                                <td class="px-6 py-4 text-center">{{$devices->DeviceSerialNo}}</td>
                                <td class="px-6 py-4 font-bold text-xs text-center">
                                    @if ($devices->DeviceStatus != 'Working')
                                    <span class="bg-yellow-500 text-white font-bold rounded-full px-2 py-1">{{$devices->DeviceStatus}}</span>

                                    @else
                                    {{$devices->DeviceStatus}}
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center">{{$devices->DeviceRemarks}}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center">
                                        <button type="button" class="bg-green-800 hover:bg-green-600 text-white py-2 w-32 rounded" onclick="location.href='{{ url('repairhistoryview/'.$devices->id) }}'">
                                            REPAIR HISTORY
                                        </button>
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

            </x-app-layout>
        </body>
    </html>
