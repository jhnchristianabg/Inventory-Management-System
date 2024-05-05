<!doctype html>
    <html lang="en">
        <head>
            <title>Device Repair History</title>
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

                <div class="flex  ml-1 text-lg">
                    <a href="javascript:history.back()" class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />
                        </svg>
                        <span class="ml-2 mt-1 text-yellow-500 font-bold">BACK</span>
                    </a>
                </div>

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20 my-6">
                </div>

                <div class=" grid sm:grid-cols-3 relative overflow-x-auto">

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow dark:border-gray-200 dark:hover:bg-gray-200 text-center h-28 ml-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-black align">DEVICE TYPE</h5>
                        @if(isset($repairdevices) && is_countable($repairdevices) && count($repairdevices) > 0)
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-black">{{$repairdevices[0]->DeviceType}}</p>
                        @else
                            <p>No employee details found.</p>
                        @endif
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow dark:border-gray-200 dark:hover:bg-gray-200 text-center h-28 ml-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-black align">DEVICE NAME</h5>
                        @if(isset($repairdevices) && is_countable($repairdevices) && count($repairdevices) > 0)
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-black">{{$repairdevices[0]->DeviceName}}</p>
                        @else
                            <p>No employee details found.</p>
                        @endif
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow dark:border-gray-200 dark:hover:bg-gray-200 text-center h-28 ml-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-black align">SERIAL #</h5>
                        @if(isset($repairdevices) && is_countable($repairdevices) && count($repairdevices) > 0)
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-black">{{$repairdevices[0]->DeviceSerialNo}}</p>
                        @else
                            <p>No department information available.</p>
                        @endif
                    </div>

                </div>

                <!-- Search -->
                <form action="" method="GET" class="mt-10">
                    <div class="pt-2 relative mx-auto text-gray-600">
                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_devices" placeholder="Search">
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

                <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black border-collapse">
                    <thead class="text-xs uppercase bg-gray-200 font-bold">
                        <tr>
                            <th scope="col" class="px-6 py-3">ID</th>
                            <th scope="col" class="px-6 py-3">ISSUE FOR REPAIR DATE</th>
                            <th scope="col" class="px-6 py-3">REPAIRED DATE</th>
                            <th scope="col" class="px-6 py-3">REMARKS</th>
                            <th scope="col" class="px-6 py-3">DEFECT</th>
                            <th scope="col" class="px-6 py-3">STATUS</th>
                            <th scope="col" class="px-6 py-3 flex justify-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($repairdetails)
                        @foreach($repairdetails as $repairdetails_dev)
                            @if(!empty($repairdevices) && $repairdetails_dev->SerialNo == $repairdevices[0]->DeviceSerialNo)
                                <tr class="bg-white border-b dark:border-gray-300 text-black">
                                    <td class="px-6 py-4">
                                        {{$repairdetails_dev->id}}
                                    </td>
                                    <td class="px-6 py-4">{{$repairdetails_dev->issue_date}}</td>
                                    <td class="px-6 py-4">{{$repairdetails_dev->repair_date}}</td>
                                    <td class="px-6 py-4 font-bold uppercase">{{$repairdetails_dev->Remarks}}</td>
                                    <td class="px-6 py-4">{{$repairdetails_dev->Defect}}</td>
                                    <td class="px-6 py-4">{{$repairdetails_dev->Status}}</td>
                                    <td class="px-6 py-4">
                                        @if($repairdetails_dev->repair_date == NULL)
                                            <div class="flex justify-center">
                                                <button type="button" class="bg-green-800 hover:bg-green-600 text-white py-2 w-20 rounded" onclick="location.href='{{ url('repairhistoryedit/'.$repairdetails_dev->id) }}'">
                                                    UPDATE
                                                </button>
                                            </div>
                                        @endif
                                    </td>
                                </tr>
                            @endif
                    @endforeach
                    @endisset
                    </tbody>
                </table>

            </x-app-layout>
        </body>
    </html>
