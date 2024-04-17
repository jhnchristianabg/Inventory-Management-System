<!doctype html>
    <html lang="en">
        <head>
            <title>Accountability / Edit Employee</title>
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
                    <div class="relative p-4 w-full max-w-md max-h-full mr-64" style="margin-right:250px">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow-lg dark:bg-blueGray-100 px-4" style="width:650px">
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
                            <form class="p-4 md:p-5" action="{{ url('update_employee/'.$employee->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            EMPLOYEE
                                        </h3>

                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="EmployeeID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Employee ID</label>
                                                <input type="text" name="EmployeeID" id="EmployeeID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$employee->EmployeeID}}" placeholder="Input Employee ID" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="Department" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Department</label>
                                                <select name="Department" id="Department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                                    <option name="Department" value="HED - ACCOUNTING" @if ($employee->Department == 'HED - ACCOUNTING') selected @endif>HED - ACCOUNTING</option>
                                                    <option name="Department" value="HED - ADMIN" @if ($employee->Department == 'HED - ADMIN') selected @endif>HED - ADMIN</option>
                                                    <option name="Department" value="HED - AFA" @if ($employee->Department == 'HED - AFA') selected @endif>HED - AFA</option>
                                                    <option name="Department" value="HED - CASHIER" @if ($employee->Department == 'HED - CASHIER') selected @endif>HED - CASHIER</option>
                                                    <option name="Department" value="HED - CLINIC" @if ($employee->Department == 'HED - CLINIC') selected @endif>HED - CLINIC</option>
                                                    <option name="Department" value="HED - CS" @if ($employee->Department == 'HED - CS') selected @endif>HED - CS</option>
                                                    <option name="Department" value="HED - DEAN" @if ($employee->Department == 'HED - DEAN') selected @endif>HED - DEAN</option>
                                                    <option name="Department" value="HED - FACULTY" @if ($employee->Department == 'HED - FACULTY') selected @endif>HED - FACULTY</option>
                                                    <option name="Department" value="HED - FTS" @if ($employee->Department == 'HED - FTS') selected @endif>HED - FTS</option>
                                                    <option name="Department" value="HED - GCCO" @if ($employee->Department == 'HED - GCCO') selected @endif>HED - GCCO</option>
                                                    <option name="Department" value="HED - HR" @if ($employee->Department == 'HED - HR') selected @endif>HED - HR</option>
                                                    <option name="Department" value="HED - IT" @if ($employee->Department == 'HED - IT') selected @endif>HED - IT</option>
                                                    <option name="Department" value="HED - LIBRARY" @if ($employee->Department == 'HED - LIBRARY') selected @endif>HED - LIBRARY</option>
                                                    <option name="Department" value="HED - MCO" @if ($employee->Department == 'HED - MCO') selected @endif>HED - MCO</option>
                                                    <option name="Department" value="HED - PURCHASING" @if ($employee->Department == 'HED - PURCHASING') selected @endif>HED - PURCHASING</option>
                                                    <option name="Department" value="HED - REGISTRAR" @if ($employee->Department == 'HED - REGISTRAR') selected @endif>HED - REGISTRAR</option>
                                                    <option name="Department" value="HED - SAO" @if ($employee->Department == 'HED - SAO') selected @endif>HED - SAO</option>
                                                    <option name="Department" value="BED - ADMIN" @if ($employee->Department == 'BED - ADMIN') selected @endif>BED - ADMIN</option>
                                                    <option name="Department" value="BED - CASHIER" @if ($employee->Department == 'BED - CASHIER') selected @endif>BED - CASHIER</option>
                                                    <option name="Department" value="BED - CLINIC" @if ($employee->Department == 'BED - CLINIC') selected @endif>BED - CLINIC</option>
                                                    <option name="Department" value="BED - COORDINATOR" @if ($employee->Department == 'BED - COORDINATOR') selected @endif>BED - COORDINATOR</option>
                                                    <option name="Department" value="BED - FACULTY" @if ($employee->Department == 'BED - FACULTY') selected @endif>BED - FACULTY</option>
                                                    <option name="Department" value="BED - GCCO" @if ($employee->Department == 'BED - GCCO') selected @endif>BED - GCCO</option>
                                                    <option name="Department" value="BED - K-10" @if ($employee->Department == 'BED - K-10') selected @endif>BED - K-10</option>
                                                    <option name="Department" value="BED - LIBRARY" @if ($employee->Department == 'BED - LIBRARY') selected @endif>BED - LIBRARY</option>
                                                    <option name="Department" value="BED - REGISTRAR" @if ($employee->Department == 'BED - REGISTRAR') selected @endif>BED - REGISTRAR</option>
                                                    <option name="Department" value="BED - SENIOR HIGH SCHOOL" @if ($employee->Department == 'BED - SENIOR HIGH SCHOOL') selected @endif>BED - SENIOR HIGH SCHOOL</option>
                                                    <option name="Department" value="SHS - CLINIC" @if ($employee->Department == 'SHS - CLINIC') selected @endif>SHS - CLINIC</option>
                                                    <option name="Department" value="SHS - COORDINATOR" @if ($employee->Department == 'SHS - COORDINATOR') selected @endif>SHS - COORDINATOR</option>
                                                    <option name="Department" value="SHS - FACULTY" @if ($employee->Department == 'SHS - FACULTY') selected @endif>SHS - FACULTY</option>
                                                    <option name="Department" value="SHS - GCCO" @if ($employee->Department == 'SHS - GCCO') selected @endif>SHS - GCCO</option>
                                                    <option name="Department" value="SHS - REGISTRAR" @if ($employee->Department == 'SHS - REGISTRAR') selected @endif>SHS - REGISTRAR</option>
                                                </select>
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="Status" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase"style="width:181px">Status</label>
                                                <select name="Status" id="Status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:181px">
                                                    <option name="Status" value="Employed" @if ($employee->Status == 'Employed') selected @endif>Employed</option>
                                                    <option name="Status" value="Resigned" @if ($employee->Status == 'Resigned') selected @endif>Resigned</option>
                                                    <option name="Status" value="Unemployed" @if ($employee->Status == 'Unemployed') selected @endif>Unemployed</option>
                                                </select>
                                        </div>

                                    </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="EmployeeFName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">First Name</label>
                                                <input type="text" name="EmployeeFName" id="EmployeeFName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$employee->EmployeeFName}}" placeholder="Input First Name" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="EmployeeIName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Middle Initial</label>
                                                <input type="text" name="EmployeeIName" id="EmployeeIName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$employee->EmployeeIName}}" placeholder="Input Middle Initial" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="EmployeeLName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Last Name</label>
                                                <input type="text" name="EmployeeLName" id="EmployeeLName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$employee->EmployeeLName}}" placeholder="Input Last Name" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="Email" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Email</label>
                                            <input type="text" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:565px" value="{{$employee->Email}}" placeholder="Input Email" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="mt-10">
                                    <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:390px">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Update employee
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </x-app-layout>
        </body>
    </html>
