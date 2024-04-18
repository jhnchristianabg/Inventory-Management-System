<!doctype html>
    <html lang="en">
        <head>
            <title>Accountability / Employees</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        EMPLOYEES
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

                    NEW EMPLOYEE
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="black" class="w-5 h-5 ml-1">
                        <path d="M10 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM1.615 16.428a1.224 1.224 0 0 1-.569-1.175 6.002 6.002 0 0 1 11.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 0 1 7 18a9.953 9.953 0 0 1-5.385-1.572ZM16.25 5.75a.75.75 0 0 0-1.5 0v2h-2a.75.75 0 0 0 0 1.5h2v2a.75.75 0 0 0 1.5 0v-2h2a.75.75 0 0 0 0-1.5h-2v-2Z" />
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
                            <p class="text-sm">Success! The Employee details has been saved.</p>
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
                            <p class="text-sm">Success! The Employee details has been Updated.</p>
                        </div>
                    </div>
                </div>

                {{ Session::get('update')}}

                @endif

                <!-- Notification for RETURN -->

                @if(Session::get('return'))

                <div class="mb-3 bg-green-100 border-t-4 border-green-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold">Inventory Management System</p>
                            <p class="text-sm">Success! The Device has been returned.</p>
                        </div>
                    </div>
                </div>

                {{ Session::get('return')}}

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

                <!-- MODAL FOR ADD BUTTON (CREATING DATA) -->

                <!-- Main modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-md max-h-full" style="margin-right:250px">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:650px">
                            <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-blueGray-700 text-xl font-bold">
                                        ADD EMPLOYEE
                                    </h3>
                                    <button type="button" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white" data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="add_employee" method="POST">
                                {{ csrf_field() }}
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            EMPLOYEE DETAILS
                                        </h3>

                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="EmployeeID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Employee ID</label>
                                                <input type="text" name="EmployeeID" id="EmployeeID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Employee ID" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="Department" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Department</label>
                                                <select name="Department" id="Department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                                    <option name="Department" value="HED - ACCOUNTING">HED - ACCOUNTING</option>
                                                    <option name="Department" value="HED - ADMIN">HED - ADMIN</option>
                                                    <option name="Department" value="HED - AFA">HED - AFA</option>
                                                    <option name="Department" value="HED - CASHIER">HED - CASHIER</option>
                                                    <option name="Department" value="HED - CLINIC">HED - CLINIC</option>
                                                    <option name="Department" value="HED - CS">HED - CS</option>
                                                    <option name="Department" value="HED - DEAN">HED - DEAN</option>
                                                    <option name="Department" value="HED - FACULTY">HED - FACULTY</option>
                                                    <option name="Department" value="HED - FTS">HED - FTS</option>
                                                    <option name="Department" value="HED - GCCO">HED - GCCO</option>
                                                    <option name="Department" value="HED - HR">HED - HR</option>
                                                    <option name="Department" value="HED - IT">HED - IT</option>
                                                    <option name="Department" value="HED - LIBRARY">HED - LIBRARY</option>
                                                    <option name="Department" value="HED - MCO">HED - MCO</option>
                                                    <option name="Department" value="HED - PURCHASING">HED - PURCHASING</option>
                                                    <option name="Department" value="HED - REGISTRAR">HED - REGISTRAR</option>
                                                    <option name="Department" value="HED - SAO">HED - SAO</option>
                                                    <option name="Department" value="BED - ADMIN">BED - ADMIN</option>
                                                    <option name="Department" value="BED - CASHIER">BED - CASHIER</option>
                                                    <option name="Department" value="BED - CLINIC">BED - CLINIC</option>
                                                    <option name="Department" value="BED - COORDINATOR">BED - COORDINATOR</option>
                                                    <option name="Department" value="BED - FACULTY">BED - FACULTY</option>
                                                    <option name="Department" value="BED - GCCO">BED - GCCO</option>
                                                    <option name="Department" value="BED - K-10">BED - K-10</option>
                                                    <option name="Department" value="BED - LIBRARY">BED - LIBRARY</option>
                                                    <option name="Department" value="BED - REGISTRAR">BED - REGISTRAR</option>
                                                    <option name="Department" value="BED - SENIOR HIGH SCHOOL">BED - SENIOR HIGH SCHOOL</option>
                                                    <option name="Department" value="SHS - CLINIC">SHS - CLINIC</option>
                                                    <option name="Department" value="SHS - COORDINATOR">SHS - COORDINATOR</option>
                                                    <option name="Department" value="SHS - FACULTY">SHS - FACULTY</option>
                                                    <option name="Department" value="SHS - GCCO">SHS - GCCO</option>
                                                    <option name="Department" value="SHS - REGISTRAR">SHS - REGISTRAR</option>
                                                </select>
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="Status" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase"style="width:181px">Status</label>
                                                <select name="Status" id="Status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                                    <option name="Status" value="Employed">Employed</option>
                                                    <option name="Status" value="Resigned">Resigned</option>
                                                    <option name="Status" value="Unemployed">Unemployed</option>
                                                </select>
                                        </div>

                                    </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="EmployeeFName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">First Name</label>
                                                <input type="text" name="EmployeeFName" id="EmployeeFName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input First Name" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="EmployeeIName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Middle Initial</label>
                                                <input type="text" name="EmployeeIName" id="EmployeeIName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Middle Initial" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="EmployeeLName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Last Name</label>
                                                <input type="text" name="EmployeeLName" id="EmployeeLName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" placeholder="Input Last Name" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="Email" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Email</label>
                                            <input type="text" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:565px" placeholder="Input Email" required="">
                                        </div>

                                    </div>
                                    <!-- Device Requirements End Here! -->

                                </div>
                                <div class="mt-10">
                                    <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:385px">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Add new employee
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <form action="search_employee" method="GET">
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

                <!-- TABLE FOR VIEW-->
                    <div class="relative overflow-x-auto mt-14">

                        <!-- COLUMN TABLE SORTING -->

                        <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                            <thead class="text-xs uppercase bg-gray-200 font-bold">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        <a href="{{ route('itsemployeeaccountabilityemployee.show', ['column' => 'id', 'direction' => ($column == 'id' && $direction == 'asc') ? 'desc' : 'asc']) }}">
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
                                        <a href="{{ route('itsemployeeaccountabilityemployee.show', ['column' => 'EmployeeID', 'direction' => ($column == 'EmployeeID' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                            EMPLOYEE ID
                                            @if($column == 'EmployeeID')
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
                                        <a href="{{ route('itsemployeeaccountabilityemployee.show', ['column' => 'EmployeeFName', 'direction' => ($column == 'EmployeeFName' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                            EMPLOYEE'S NAME
                                            @if($column == 'EmployeeFName')
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
                                        <a href="{{ route('itsemployeeaccountabilityemployee.show', ['column' => 'Department', 'direction' => ($column == 'Department' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                            DEPARTMENT
                                            @if($column == 'Department')
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
                                        <a href="{{ route('itsemployeeaccountabilityemployee.show', ['column' => 'Email', 'direction' => ($column == 'Email' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                            EMAIL
                                            @if($column == 'Email')
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
                                        <a href="{{ route('itsemployeeaccountabilityemployee.show', ['column' => 'Status', 'direction' => ($column == 'Status' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                            STATUS
                                            @if($column == 'Status')
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
                                @foreach($employeeview as $itsemployeeaccountabilityemployee)
                                <tr class="bg-white border-b dark:border-gray-300 text-black">
                                    <td class="px-6 py-4">{{$itsemployeeaccountabilityemployee->id}}</td>
                                    <td class="px-6 py-4 font-bold uppercase">{{$itsemployeeaccountabilityemployee->EmployeeID}}</td>
                                    <td class="px-6 py-4">{{$itsemployeeaccountabilityemployee->EmployeeFName}}<a class="ml-1">{{$itsemployeeaccountabilityemployee->EmployeeIName}}. <a class="ml-1">{{$itsemployeeaccountabilityemployee->EmployeeLName}}</td>
                                    <td class="px-6 py-4">{{$itsemployeeaccountabilityemployee->Department}}</td>
                                    <td class="px-6 py-4">{{$itsemployeeaccountabilityemployee->Email}}</td>
                                    <td class="px-6 py-4">{{$itsemployeeaccountabilityemployee->Status}}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-center gap-2">
                                            <button type="button" onclick="location.href='{{ url('empaccview/'.$itsemployeeaccountabilityemployee->id) }}'">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="w-5 h-5">
                                                    <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                    <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <button type="button" onclick="location.href='{{ url('employeeedit/'.$itsemployeeaccountabilityemployee->id) }}'">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="blue" class="w-5 h-5">
                                                    <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!-- DISPLAYING OF DATA TABLE Ends Here -->
                        </table>

                        <!-- PAGINATION -->

                        <div class="mt-3">
                            {{ $employeeview->appends(['column' => $column, 'direction' => $direction])->links() }}
                        </div>

                        <!-- PAGINATION Ends Here -->
                    </div>




            </x-app-layout>
        </body>
    </html>
