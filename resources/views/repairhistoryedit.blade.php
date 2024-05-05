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

                <!-- Main modal -->
                <div id="devicedetails" tabindex="-1" class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full mr-20">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:490px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        UPDATE DEVICE REPAIR HISTORY
                                    </h3>
                                    <button type="button" onclick="window.location.href='javascript:history.back()'" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="{{ url('update/'.$repairhistory->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="grid gap-4 mb-4 grid-cols-2">

                                    <div>
                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-12">
                                                <label for="id" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase" style="width:181px">Repair ID</label>
                                                <input type="text" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$repairhistory->id}}" placeholder="Input ID" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-12">
                                                <label for="issue_date" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Issued Repair Date</label>
                                                <input type="text" name="issue_date" id="issue_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$repairhistory->issue_date}}" placeholder="Input Issued Date" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-12">
                                                <label for="Remarks" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Remarks</label>
                                                <input type="text" name="Remarks" id="Remarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Remarks">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-12">
                                                <label for="Defect" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Defect</label>
                                                <input type="text" name="Defect" id="Defect" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Defect" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-12">
                                                <label for="Status" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Status</label>
                                                <select name="Status" id="Status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:130px" value="{{$repairhistory->Status}}">
                                                    <option name="Status" value="Working" @if ($repairhistory->Status == 'Working') selected @endif>Working</option>
                                                    <option name="Status" value="Under Repair" @if ($repairhistory->Status == 'Under Repair') selected @endif>Under Repair</option>
                                                    <option name="Status" value="Defective" @if ($repairhistory->Status == 'Defective') selected @endif>Defective</option>
                                                    <option name="Status" value="Missing" @if ($repairhistory->Status == 'Missing') selected @endif>Missing</option>
                                                    <option name="Status" value="Disposed" @if ($repairhistory->Status == 'Disposed') selected @endif>Disposed</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-3" style="margin-left:280px">
                                        Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </x-app-layout>
        </body>
    </html>
