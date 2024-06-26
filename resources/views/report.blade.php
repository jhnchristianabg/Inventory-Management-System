<!doctype html>
    <html lang="en">
        <head>
            <title>Devices Report</title>

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
                        Devices Report
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            ITS</li>
                        <li class="breadcrumb-item">Report Generation</li>
                    </ol>
                </x-slot>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg>

                    <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                        DEVICES
                    </h3>

                    <div class="border-b-2 border-neutral-100 dark:border-black/20 mb-5">
                    </div>

                    <div class="mb-20">
                        <!-- Search -->
                            <form action="search_device_report" method="GET" class="float-left">
                                <div class="pt-2 relative mx-auto text-gray-600">
                                    <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-left mb-3 mr-1" type="search" name="search" placeholder="Search">
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
                        {{-- END Search --}}

                        {{-- ACCOUNTABLE --}}
                            <form action="" class="float-left mt-2 ml-4">
                                <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                    <option value="all"> All </option>
                                    <option value="accountable">Accountability</option>
                                    <option value="no_accountable">No Accountability</option>
                                </select>
                            </form>
                        {{-- END OF ACCOUNTABLE --}}
                    </div>

                    {{-- CARDS FOR ALL --}}
                        <div id="all" class="grid sm:grid-cols-7 relative overflow-x-auto content-left float-left">
                            <a  class=" w-32 p-4 bg-white border bg-gray-300 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countsys'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">System Unit</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countlap'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Laptop</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countaio'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">AIO Desktop</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countimac'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">IMAC</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countmon'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Monitor</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countspkr'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Speaker</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countproj'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Projector</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countprint'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Printer</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['counttv'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">TV</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countip'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">IP Phone</p>
                            </a>

                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countswi'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Switch</p>
                            </a>

                            <a class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countsvr'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Server</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countrtr'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Router</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['counttblt'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Tablet</p>
                            </a>
                        </div>
                    {{-- END OF CARDS FOR ALL --}}

                    {{-- CARDS FOR ACCOUNTABLE --}}
                        <div id="acc" class="grid sm:grid-cols-7 relative overflow-x-auto content-left float-left" style="display: none;">
                            <a  class=" w-32 p-4 bg-white border bg-gray-300 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countsys_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">System Unit</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countlap_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Laptop</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countaio_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">AIO Desktop</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countimac_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">IMAC</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countmon_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Monitor</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countspkr_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Speaker</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countproj_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Projector</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countprint_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Printer</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['counttv_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">TV</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countip_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">IP Phone</p>
                            </a>

                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countswi_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Switch</p>
                            </a>

                            <a class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countsvr_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Server</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countrtr_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Router</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['counttblt_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Tablet</p>
                            </a>
                        </div>
                    {{-- END OF CARDS FOR ACCOUNTABLE --}}

                    {{-- CARDS FOR NO ACCOUNTABLE --}}
                        <div id="no_acc" class="grid sm:grid-cols-7 relative overflow-x-auto content-left float-left" style="display: none;">
                            <a  class=" w-32 p-4 bg-white border bg-gray-300 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countsys_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">System Unit</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countlap_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Laptop</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countaio_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">AIO Desktop</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countimac_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">IMAC</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countmon_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Monitor</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countspkr_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Speaker</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countproj_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Projector</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countprint_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Printer</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['counttv_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">TV</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countip_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">IP Phone</p>
                            </a>

                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countswi_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Switch</p>
                            </a>

                            <a class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countsvr_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Server</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['countrtr_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Router</p>
                            </a>

                            <a  class="block w-32 p-4 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-white dark:border-gray-300 dark:hover:bg-gray-200 ml-0.5 mt-1">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">{{ $counts['counttblt_no_acc'] }}</h5>
                                <p class="font-normal text-gray-700 dark:text-black text-sm">Tablet</p>
                            </a>
                        </div>
                    {{-- END OF CARDS FOR NO ACCOUNTABLE --}}

                    <!-- Details -->
                    <div class="mt-80">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>

                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-5">
                            DETAILS

                            <button onclick="printTable()" class="relative overflow-x-auto inline-flex items-center px-3 py-2 text-sm font-bold text-center text-black bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500 float-right mx-1">
                                PRINT
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="black" class="w-5 h-5 ml-1">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                                </svg>
                            </button>

                        </h3>

                        <div class="border-b-2 border-neutral-100 dark:border-black/20 mb-5">
                        </div>

                    </div>

                    <!-- TABLE FOR Consumables VIEW-->
                    <div class="relative overflow-x-auto mt-8">

                        <!-- COLUMN TABLE SORTING -->

                        <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black border-collapse">
                            <thead class="text-xs uppercase bg-gray-200 font-bold">
                                <tr>
                                    <th scope="col" class="px-6 py-3">ID</th>
                                    <th scope="col" class="px-6 py-3">HOST ID</th>
                                    <th scope="col" class="px-6 py-3">TYPE</th>
                                    <th scope="col" class="px-6 py-3">BRAND</th>
                                    <th scope="col" class="px-6 py-3">MODEL</th>
                                    <th scope="col" class="px-6 py-3">SERIAL #</th>
                                    <th scope="col" class="px-6 py-3">MAC ADDRESS</th>
                                    <th scope="col" class="px-6 py-3">LOCATION</th>
                                    <th scope="col" class="px-6 py-3">STATUS</th>
                                    <th scope="col" class="px-6 py-3">ACCOUNTABILITY</th>
                                </tr>
                            </thead>
                            <tbody>
                                @isset($devicereport)
                                @foreach($devicereport as $reports)
                                <tr class="bg-white border-b dark:border-gray-300 text-black">
                                    <td class="px-6 py-4">{{$reports->id}}</td>
                                    <td class="px-6 py-4 font-bold uppercase">{{$reports->DeviceID}}</td>
                                    <td class="px-6 py-4">{{$reports->DeviceType}}</td>
                                    <td class="px-6 py-4">{{$reports->DeviceBrand}}</td>
                                    <td class="px-6 py-4">{{$reports->DeviceModel}}</td>
                                    <td class="px-6 py-4">{{$reports->DeviceSerialNo}}</td>
                                    <td class="px-6 py-4">{{$reports->DeviceMacAdd}}</td>
                                    <td class="px-6 py-4">{{$reports->DeviceLocation}}</td>
                                    <td class="px-6 py-4 font-bold uppercase text-xs">{{$reports->DeviceStatus}}</td>
                                    <td class="px-6 py-4">{{$reports->is_accountability}}</td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>

                    <script>
                        function printTable() {
                            // Clone the table
                            var table = document.getElementById('dataTable').cloneNode(true);

                            // Add border-collapse style to the cloned table
                            table.classList.add("border-collapse");

                            // Remove the last column (Actions)
                            var rows = table.getElementsByTagName('tr');

                            // Open a new window and write the table content
                            var newWin = window.open('', 'Print-Window');
                            newWin.document.open();
                            // Add landscape orientation style
                            newWin.document.write('<html><head><title>Inventory Management System</title><style>@page { size: landscape; }</style><style>#dataTable {border-collapse: collapse;} #dataTable th, #dataTable td {padding: 8px; text-align: center;}</style><style>#dataTable th { background-color: #e5e7eb; }</style></head><body>' + table.outerHTML + '</body></html>');
                            newWin.document.close();

                            // Print the content
                            newWin.print();
                        }

                        // FOR REPORT CARDS
                            const selectElement = document.getElementById('category');
                            const allDiv = document.getElementById('all');
                            const accDiv = document.getElementById('acc');
                            const noaccDiv = document.getElementById('no_acc');

                            selectElement.addEventListener('change', (event) => {
                                if (event.target.value === 'all') {
                                    allDiv.style.display = 'grid';
                                    accDiv.style.display = 'none';
                                    noaccDiv.style.display = 'none';
                                } else if (event.target.value === 'accountable') {
                                    allDiv.style.display = 'none';
                                    accDiv.style.display = 'grid';
                                    noaccDiv.style.display = 'none';
                                } else if (event.target.value === 'no_accountable') {
                                    allDiv.style.display = 'none';
                                    accDiv.style.display = 'none';
                                    noaccDiv.style.display = 'grid';
                                }
                            });
                    </script>

            </x-app-layout>
        </body>
    </html>
