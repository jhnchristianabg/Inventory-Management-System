<!doctype html>
    <html lang="en">
        <head>
            <title>Edit Student</title>
        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        Edit Student
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
                                        EDIT STUDENT DETAILS
                                    </h3>
                                    <button type="button" onclick="location.href='{{ url('itsaccountabilitystudent') }}'" class="text-black-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-green-600 dark:hover:text-white">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>

                            <!-- Modal body -->
                            <form class="p-4 md:p-5" action="{{ url('update_student/'.$student->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('PUT')
                                <div class="grid gap-4 mb-4 grid-cols-2">
                                    <!-- Device Requirements -->
                                    <div class="float-left">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 float-left mr-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                        </svg>
                                        <h3 class="text-blueGray-900 text-lg font-bold uppercase mb-3">
                                            STUDENT
                                        </h3>

                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="StudentID" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Student ID</label>
                                                <input type="text" name="StudentID" id="StudentID" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$student->StudentID}}" placeholder="Input Student ID" style="width:130px" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="Department" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Department</label>
                                                <select name="Department" id="Department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:255px">
                                                    <option name="Department" value="BS Accountancy" @if ($student->Department == 'BS Accountancy') selected @endif>BS Accountancy</option>
                                                    <option name="Department" value="BS Accounting Information System" @if ($student->Department == 'BS Accounting Information System') selected @endif>BS Accounting Information System</option>
                                                    <option name="Department" value="BS Information Technology" @if ($student->Department == 'BS Information Technology') selected @endif>BS Information Technology</option>
                                                    <option name="Department" value="BS Psychology" @if ($student->Department == 'BS Psychology') selected @endif>BS Psychology</option>
                                                    <option name="Department" value="BS Medical Technology" @if ($student->Department == 'BS Medical Technology') selected @endif>BS Medical Technology</option>
                                                    <option name="Department" value="BS Nursing" @if ($student->Department == 'BS Nursing') selected @endif>BS Nursing</option>
                                                    <option name="Department" value="BS Business Administration" @if ($student->Department == 'BS Business Administration') selected @endif>BS Business Administration</option>
                                                    <option name="Department" value="BS Hospitality Management" @if ($student->Department == 'BS Hospitality Management') selected @endif>BS Hospitality Management</option>
                                                    <option name="Department" value="BS Tourism Management" @if ($student->Department == 'BS Tourism Management') selected @endif>BS Tourism Management</option>
                                                </select>
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="Year" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase"style="width:181px">Year</label>
                                                <input type="text" name="Year" id="Year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$student->Year}}" placeholder="Year Level (E.g. 1st Year)" style="width:160px" required="">
                                        </div>

                                    </div>
                                        <div class="flex">
                                            <div class="col-span-2 sm:col-span-1 mt-3">
                                                <label for="StudentFName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">First Name</label>
                                                <input type="text" name="StudentFName" id="StudentFName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$student->StudentFName}}" placeholder="Input First Name" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="StudentIName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Middle Initial</label>
                                                <input type="text" name="StudentIName" id="StudentIName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$student->StudentIName}}" placeholder="Input Middle Initial" required="">
                                            </div>

                                            <div class="col-span-2 sm:col-span-1 mt-3 ml-3">
                                                <label for="StudentLName" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Last Name</label>
                                                <input type="text" name="StudentLName" id="StudentLName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block w-30 p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" value="{{$student->StudentLName}}" placeholder="Input Last Name" required="">
                                            </div>
                                        </div>

                                        <div class="col-span-2 sm:col-span-1 mt-3">
                                            <label for="Email" class="block mb-2 text-sm font-semibold text-blueGray-900 uppercase">Email</label>
                                            <input type="text" name="Email" id="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-green-600 block p-2.5 dark:bg-gray-50 dark:border-gray-300 dark:placeholder-gray-400 dark:focus:ring-green-500 dark:focus:border-green-500" style="width:565px" value="{{$student->Email}}" placeholder="Input Email" required="">
                                        </div>

                                    </div>

                                </div>
                                <div class="mt-10">
                                    <button type="submit" class="inline-flex text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" style="margin-left:390px">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                            Update student
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </x-app-layout>
        </body>
    </html>

