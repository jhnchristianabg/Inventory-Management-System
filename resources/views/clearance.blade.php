<!doctype html>
    <html lang="en">
        <head>
            <title>Clearance</title>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <style>
                #dataTable th{
                    background-color: #e5e7eb;
                    padding: 10px;
                    text-align: center;
                }
                #dataTable td{
                    padding: 10px;
                    text-align: center;
                }
                /* THIS STYLE IS FOR ASSIGNED AND DEPLOYED TABS */
                    [data-tabs-target].active {
                            display: inline-block;
                            padding: 1rem; /* Equivalent to p-4 */
                            border-bottom-width: 2px; /* Equivalent to border-b-2 */
                            border-bottom-style: solid; /* Border style is always solid */
                            border-bottom-color: #38a169; /* Initial border color */
                            border-radius: 0.5rem 0.5rem 0 0; /* Equivalent to rounded-t-lg */
                            color: #38a169;
                            font-weight: bold;
                        }

                        [data-tabs-target].active:hover {
                            color: #38a169; /* Equivalent to hover:text-gray-600 */
                            border-bottom-color: #38a169; /* Equivalent to hover:border-green-800 */
                        }
            </style>

        </head>
        <body>
            <x-app-layout>
                <x-slot name="header">
                    <h2 class="text-lg text-blue-100 md:text-2xl">
                        CLEARANCE
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            ITS</li>
                        <li class="breadcrumb-item">Clearance</li>
                    </ol>
                </x-slot>

                <div class="">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-green-800 dark:hover:green-800" id="student-tab" data-tabs-target="#student" type="button" role="tab" aria-controls="student" aria-selected="false">Student</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-green-800 dark:hover:green-800" id="employee-tab" data-tabs-target="#employee" type="button" role="tab" aria-controls="employee" aria-selected="false">Employee</button>
                        </li>
                    </ul>
                </div>

                <div id="default-tab-content">
                    {{-- THIS IS FOR STUDENT --}}
                        <div class="" id="student" role="tabpanel" aria-labelledby="student-tab">
                            <div class="flex justify-between mt-7">
                                <h1 class="mt-4 uppercase font-bold">Student Clearance</h1>
                                <!-- Search -->
                                <form action="search_clearance" method="GET">
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
                            </div>

                            <div>
                                <!-- TABLE FOR DEVICE VIEW-->
                                <div class="relative overflow-x-auto">

                                    <!-- COLUMN TABLE SORTING -->

                                    <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                                        <thead class="text-xs uppercase bg-gray-200 font-bold">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    <a href="{{ route('clearance.show', ['column' => 'StudentID', 'direction' => ($column == 'StudentID' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                                        ID No.
                                                        @if($column == 'StudentID')
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
                                                    <a href="{{ route('clearance.show', ['column' => 'StudentFName', 'direction' => ($column == 'StudentFName' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                                        Name
                                                        @if($column == 'StudentFName')
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
                                                    <a href="{{ route('clearance.show', ['column' => 'Email', 'direction' => ($column == 'Email' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                                        Email
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
                                                    <a href="{{ route('clearance.show', ['column' => 'Department', 'direction' => ($column == 'Department' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                                        Department
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
                                                    <a href="{{ route('clearance.show', ['column' => 'id', 'direction' => ($column == 'id' && $direction == 'asc') ? 'desc' : 'asc']) }}">
                                                        Accountable Devices
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
                                                    Status
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-center">
                                                    Action
                                                </th>
                                            </tr>

                                            <!-- COLUMN TABLE SORTING Ends Here -->

                                            <!-- DISPLAYING OF DATA TABLE -->

                                        </thead>
                                        <tbody>
                                            @foreach($clearanceview as $clearance)
                                            <tr class="bg-white border-b dark:border-gray-300 text-black">
                                                <td class="px-6 py-4 font-bold uppercase">{{$clearance->StudentID}}</td>
                                                <td class="px-6 py-4">{{$clearance->StudentFName}}<span class="ml-1">{{$clearance->StudentIName}}</span><span class="ml-1">{{$clearance->StudentLName}}</span></td>
                                                <td class="px-6 py-4">{{$clearance->Email}}</td>
                                                <td class="px-6 py-4">{{$clearance->Department}}</td>
                                                <td class="px-6 py-4">
                                                    <?php
                                                        $countDevice = DB::table('devices')
                                                            ->whereNotNull('is_accountability')
                                                            ->where('is_accountability', $clearance->StudentID)
                                                            ->count();
                                                    ?>
                                                    {{$countDevice}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if($countDevice != 0)
                                                        <span class="bg-yellow-500 text-white font-bold rounded-full px-2 py-1">Pending</span>
                                                    @else
                                                        <span class="font-bold">Cleared</span>
                                                    @endif
                                                </td>

                                                <td class="px-6 py-4">
                                                    <div class="flex justify-center">
                                                        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-1">
                                                            <button type="button" onclick="location.href='{{ url('studaccview/'.$clearance->id) }}'">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="w-5 h-5">
                                                                    <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                                    <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!-- DISPLAYING OF DATA TABLE Ends Here -->
                                    </table>
                                </div>
                            </div>

                            <!-- PAGINATION -->

                                <div class="mt-3 font-medium">
                                    <!-- Modify the pagination links here -->
                                    <div class="items-center mt-4 text-sm flex flex-wrap">

                                        @if($clearanceview->total() > 0)
                                        <p class="mr-4 text-gray-700 text-sm">Showing <span class="font-bold">{{ $clearanceview->firstItem() }}</span> to <span class="font-bold">{{ $clearanceview->lastItem() }}</span> of <span class="font-bold">{{ $clearanceview->total() }} Results</span></p>
                                        @else
                                            <p class="mr-4 text-gray-700">No entries found</p>
                                        @endif

                                        <div class="ml-auto"> <!-- Added ml-auto class here -->
                                            @if($clearanceview->currentPage() > 1)
                                                <a href="{{ $clearanceview->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2 font-bold">&laquo; Previous</a>
                                            @endif

                                            @php
                                                // Calculate start and end page numbers for the loop
                                                $startPage = max(1, $clearanceview->currentPage() - 1);
                                                $endPage = min($clearanceview->lastPage(), $startPage + 2); // Show 5 links at a time

                                                // If there are fewer than 5 pages remaining, adjust the start page
                                                if ($endPage - $startPage < 1) {
                                                    $startPage = max(1, $endPage - 1);
                                                }
                                            @endphp

                                            @for($i = $startPage; $i <= $endPage; $i++)
                                                <a href="{{ $clearanceview->url($i) }}" class="px-3 py-1 {{ $i == $clearanceview->currentPage() ? 'bg-green-500 text-white font-bold' : 'bg-gray-200 text-gray-700' }} rounded-md mr-2">{{ $i }}</a>
                                            @endfor

                                            @if($clearanceview->currentPage() < $clearanceview->lastPage())
                                                <a href="{{ $clearanceview->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md ml-2 font-bold">Next &raquo;</a>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                            <!-- PAGINATION Ends Here -->
                        </div>
                    {{-- END OF STUDENT --}}

                    {{-- THIS IS FOR EMPLOYEE --}}
                        <div class="hidden" id="employee" role="tabpanel" aria-labelledby="employee-tab">
                            <div class="flex justify-between mt-7">
                                <h1 class="mt-4 uppercase font-bold">Employee Clearance</h1>
                                <!-- Search -->
                                <form action="search_clearance" method="GET">
                                    <div class="pt-2 relative mx-auto text-gray-600">
                                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_emp" placeholder="Search">
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
                            </div>

                            <div>
                                <!-- TABLE FOR DEVICE VIEW-->
                                <div class="relative overflow-x-auto">

                                    <!-- COLUMN TABLE SORTING -->

                                    <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black ">
                                        <thead class="text-xs uppercase bg-gray-200 font-bold">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    <a href="{{ route('clearance.show', ['column1' => 'EmployeeID', 'direction1' => ($column1 == 'EmployeeID' && $direction1 == 'asc') ? 'desc' : 'asc']) }}">
                                                        ID No.
                                                        @if($column1 == 'EmployeeID')
                                                            @if($direction1 == 'asc')
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
                                                    <a href="{{ route('clearance.show', ['column1' => 'EmployeeFName', 'direction1' => ($column1 == 'EmployeeFName' && $direction1 == 'asc') ? 'desc' : 'asc']) }}">
                                                        Name
                                                        @if($column1 == 'EmployeeFName')
                                                            @if($direction1 == 'asc')
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
                                                    <a href="{{ route('clearance.show', ['column1' => 'Email', 'direction1' => ($column1 == 'Email' && $direction1 == 'asc') ? 'desc' : 'asc']) }}">
                                                        Email
                                                        @if($column1 == 'Email')
                                                            @if($direction1 == 'asc')
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
                                                    <a href="{{ route('clearance.show', ['column1' => 'Department', 'direction1' => ($column1 == 'Department' && $direction1 == 'asc') ? 'desc' : 'asc']) }}">
                                                        Department
                                                        @if($column1 == 'Department')
                                                            @if($direction1 == 'asc')
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
                                                    <a href="{{ route('clearance.show', ['column1' => 'id', 'direction1' => ($column1 == 'id' && $direction1 == 'asc') ? 'desc' : 'asc']) }}">
                                                        Accountable Devices
                                                        @if($column1 == 'id')
                                                            @if($direction1 == 'asc')
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
                                                    Status
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-center">
                                                    Action
                                                </th>
                                            </tr>

                                            <!-- COLUMN TABLE SORTING Ends Here -->

                                            <!-- DISPLAYING OF DATA TABLE -->

                                        </thead>
                                        <tbody>
                                            @foreach($clearance_emp_view as $clearance_emp)
                                            <tr class="bg-white border-b dark:border-gray-300 text-black">
                                                <td class="px-6 py-4 font-bold uppercase">{{$clearance_emp->EmployeeID}}</td>
                                                <td class="px-6 py-4">{{$clearance_emp->EmployeeFName}}<span class="ml-1">{{$clearance_emp->EmployeeIName}}</span><span class="ml-1">{{$clearance_emp->EmployeeLName}}</span></td>
                                                <td class="px-6 py-4">{{$clearance_emp->Email}}</td>
                                                <td class="px-6 py-4">{{$clearance_emp->Department}}</td>
                                                <td class="px-6 py-4">
                                                    <?php
                                                        $countDevice_emp = DB::table('devices')
                                                            ->whereNotNull('is_accountability')
                                                            ->where('is_accountability', $clearance_emp->EmployeeID)
                                                            ->count();
                                                    ?>
                                                    {{$countDevice_emp}}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if($countDevice_emp != 0)
                                                        <span class="bg-yellow-500 text-white font-bold rounded-full px-2 py-1">Pending</span>
                                                    @else
                                                        <span class="font-bold">Cleared</span>
                                                    @endif
                                                </td>

                                                <td class="px-6 py-4">
                                                    <div class="flex justify-center">
                                                        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-1">
                                                            <button type="button" onclick="location.href='{{ url('empaccview/'.$clearance_emp->id) }}'">
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="w-5 h-5">
                                                                    <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                                    <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!-- DISPLAYING OF DATA TABLE Ends Here -->
                                    </table>
                                </div>
                            </div>

                            <!-- PAGINATION -->

                                <div class="mt-3 font-medium">
                                    <!-- Modify the pagination links here -->
                                    <div class="items-center mt-4 text-sm flex flex-wrap">

                                        @if($clearance_emp_view->total() > 0)
                                        <p class="mr-4 text-gray-700 text-sm">Showing <span class="font-bold">{{ $clearance_emp_view->firstItem() }}</span> to <span class="font-bold">{{ $clearance_emp_view->lastItem() }}</span> of <span class="font-bold">{{ $clearance_emp_view->total() }} Results</span></p>
                                        @else
                                            <p class="mr-4 text-gray-700">No entries found</p>
                                        @endif

                                        <div class="ml-auto"> <!-- Added ml-auto class here -->
                                            @if($clearance_emp_view->currentPage() > 1)
                                                <a href="{{ $clearance_emp_view->previousPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md mr-2 font-bold">&laquo; Previous</a>
                                            @endif

                                            @php
                                                // Calculate start and end page numbers for the loop
                                                $startPage = max(1, $clearance_emp_view->currentPage() - 1);
                                                $endPage = min($clearance_emp_view->lastPage(), $startPage + 2); // Show 5 links at a time

                                                // If there are fewer than 5 pages remaining, adjust the start page
                                                if ($endPage - $startPage < 1) {
                                                    $startPage = max(1, $endPage - 1);
                                                }
                                            @endphp

                                            @for($i = $startPage; $i <= $endPage; $i++)
                                                <a href="{{ $clearance_emp_view->url($i) }}" class="px-3 py-1 {{ $i == $clearance_emp_view->currentPage() ? 'bg-green-500 text-white font-bold' : 'bg-gray-200 text-gray-700' }} rounded-md mr-2">{{ $i }}</a>
                                            @endfor

                                            @if($clearance_emp_view->currentPage() < $clearance_emp_view->lastPage())
                                                <a href="{{ $clearance_emp_view->nextPageUrl() }}" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md ml-2 font-bold">Next &raquo;</a>
                                            @endif
                                        </div>

                                    </div>
                                </div>

                            <!-- PAGINATION Ends Here -->
                        </div>
                    {{-- END OF EMPLOYEE --}}
                </div>

                <script>
                    // THIS IS FOR TABS OF ASSIGNED AND DEPLOYED
                    document.addEventListener('DOMContentLoaded', () => {
                            const studentTabButton = document.querySelector('[data-tabs-target="#student"]');
                            studentTabButton.click();
                        });
                        const tabButtons = document.querySelectorAll('[data-tabs-target]');

                        // Add click event listeners to each tab button
                        tabButtons.forEach(button => {
                            button.addEventListener('click', () => {
                                const target = document.querySelector(button.dataset.tabsTarget);
                                const allTabs = document.querySelectorAll('[data-tabs-target]');
                                const allTabContents = document.querySelectorAll('[role="tabpanel"]');

                                // Remove 'active' class from all buttons and 'active' class from all tab contents
                                allTabs.forEach(tab => {
                                    tab.classList.remove('active');
                                    tab.classList.add('inactive');
                                });
                                allTabContents.forEach(content => {
                                    content.classList.add('hidden');
                                });

                                // Add 'active' class to the clicked button and remove 'inactive' class from its corresponding tab content
                                button.classList.add('active');
                                button.classList.remove('inactive');
                                target.classList.remove('hidden');
                            });
                        });
                    //  TABS OF ASSIGNED AND DEPLOYED ENDS HERE
                </script>

            </x-app-layout>
        </body>
    </html>

