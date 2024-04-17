<!doctype html>
    <html lang="en">
        <head>
            <title>Edit Location</title>
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
                        Edit Location
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            System</li>
                        <li class="breadcrumb-item">Locations</li>
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
                                        EDIT LOCATION
                                    </h3>
                                    <button type="button" onclick="location.href='{{ url('location') }}'" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="{{ url('update_location/'.$location->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <div class="ml-12">
                                                <label for="Building" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase" style="width:181px">Building</label>
                                                <select name="Building" id="Building" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                                    <option value="HED" @if ($location->Building == 'HED') selected @endif>HED</option>
                                                    <option value="BED" @if ($location->Building == 'BED') selected @endif>BED</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3" id="Floor">
                                            <div class="ml-12">
                                                <label for="Floor" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Floor</label>
                                                <input type="text" name="Floor" id="Floor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$location->Floor}}" placeholder="Input Floor (E.g. 1st Floor)" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3" id="RoomNo">
                                            <div class="ml-12">
                                                <label for="RoomNo" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Room No.</label>
                                                <input type="text" name="RoomNo" id="RoomNo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$location->RoomNo}}" placeholder="Input Room No.">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3" id="RoomName">
                                            <div class="ml-12">
                                                <label for="RoomName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Room Name</label>
                                                <input type="text" name="RoomName" id="RoomName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-80 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$location->RoomName}}" placeholder="Input Room Name" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 mt-3" style="margin-left:260px">
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
