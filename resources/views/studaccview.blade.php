<!doctype html>
    <html lang="en">
        <head>
            <title>Student Accountability</title>
            <style>
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
                        Student Accountability
                    </h2>
                </x-slot>
                <x-slot name="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 35 35" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            ITS</li>
                        <li class="breadcrumb-item">Accountability</li>
                        <li class="breadcrumb-item">Student</li>
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
                            <p class="text-sm">Success! The Device has been returned.</p>
                        </div>
                    </div>
                </div>

                {{ Session::get('update')}}

                @endif

                <div class="flex  ml-1 text-lg">
                    <a href="{{ route('itsaccountabilitystudent.show') }}" class="inline-flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-yellow-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061A1.125 1.125 0 0 1 21 8.689v8.122ZM11.25 16.811c0 .864-.933 1.406-1.683.977l-7.108-4.061a1.125 1.125 0 0 1 0-1.954l7.108-4.061a1.125 1.125 0 0 1 1.683.977v8.122Z" />
                        </svg>
                        <span class="ml-2 mt-1 text-yellow-500 font-bold">BACK</span>
                    </a>
                </div>

                <button onclick="printTable()" class="relative overflow-x-auto inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500 float-right mx-1">
                    PRINT
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0 1 10.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0 .229 2.523a1.125 1.125 0 0 1-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0 0 21 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 0 0-1.913-.247M6.34 18H5.25A2.25 2.25 0 0 1 3 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 0 1 1.913-.247m10.5 0a48.536 48.536 0 0 0-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5Zm-3 0h.008v.008H15V10.5Z" />
                    </svg>
                </button>

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20 my-6">
                </div>

                <div class=" grid sm:grid-cols-3 relative overflow-x-auto">

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow dark:border-gray-200 dark:hover:bg-gray-200 text-center h-28 ml-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-black align">STUDENT NAME</h5>
                        @if(isset($studdetails) && is_countable($studdetails) && count($studdetails) > 0)
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-black">{{$studdetails[0]->StudentFName}}<span class="ml-1">{{$studdetails[0]->StudentIName}}. {{$studdetails[0]->StudentLName}}</span></p>
                        @else
                            <p>No employee details found.</p>
                        @endif
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow dark:border-gray-200 dark:hover:bg-gray-200 text-center h-28 ml-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-black align">STUDENT ID NUMBER</h5>
                        @if(isset($studdetails) && is_countable($studdetails) && count($studdetails) > 0)
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-black">{{$studdetails[0]->StudentID}}</p>
                        @else
                            <p>No employee details found.</p>
                        @endif
                    </div>

                    <div class="max-w-sm p-6 bg-white border border-gray-300 rounded-lg shadow dark:border-gray-200 dark:hover:bg-gray-200 text-center h-28 ml-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-black align">DEPARTMENT</h5>
                        @if(isset($studdetails) && is_countable($studdetails) && count($studdetails) > 0)
                            <p class="mb-3 text-sm font-normal text-gray-700 dark:text-black">{{$studdetails[0]->Department}}</p>
                        @else
                            <p>No department information available.</p>
                        @endif
                    </div>

                </div>

                {{-- THIS IS THE TABLE FOR SHOWING BORROWED AND RETURN --}}

                <div class="mt-10">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-green-800 dark:hover:green-800" id="borrowed-tab" data-tabs-target="#borrowed" type="button" role="tab" aria-controls="borrowed" aria-selected="false">Borrowed</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-green-800 dark:hover:green-800" id="returned-tab" data-tabs-target="#returned" type="button" role="tab" aria-controls="returned" aria-selected="false">Returned</button>
                        </li>
                    </ul>
                </div>

                <div id="default-tab-content">
                    <div class="" id="borrowed" role="tabpanel" aria-labelledby="borrowed-tab">
                        <div class="relative overflow-x-auto">
                            <div class="flex justify-between mt-7">
                                <h1 class="mt-4 uppercase font-bold">Borrowed Devices</h1>
                                <!-- Search -->
                                <form action="" method="GET">
                                    <div class="pt-2 relative mx-auto text-gray-600">
                                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_emp_details" placeholder="Search">
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

                            <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black border-collapse">
                                <thead class="text-xs uppercase bg-gray-200 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">ID</th>
                                        <th scope="col" class="px-6 py-3">HOST ID</th>
                                        <th scope="col" class="px-6 py-3">TYPE</th>
                                        <th scope="col" class="px-6 py-3">BRAND</th>
                                        <th scope="col" class="px-6 py-3">ISSUE DATE</th>
                                        <th scope="col" class="px-6 py-3">LOCATION</th>
                                        <th scope="col" class="px-6 py-3">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($stud_dev_acc)
                                    @foreach($stud_dev_acc as $studdevacc)
                                        @if(!empty($studdetails) && $studdevacc->is_accountability == $studdetails[0]->StudentID)
                                            <tr class="bg-white border-b dark:border-gray-300 text-black">
                                                <td class="px-6 py-4">
                                                    {{$studdevacc->id}}
                                                </td>
                                                <td class="px-6 py-4 font-bold uppercase">{{$studdevacc->DeviceID}}</td>
                                                <td class="px-6 py-4">{{$studdevacc->DeviceType}}</td>
                                                <td class="px-6 py-4">{{$studdevacc->DeviceBrand}}</td>
                                                <td class="px-6 py-4 font-bold uppercase">{{$studdevacc->issue_date}}</td>
                                                <td class="px-6 py-4">{{$studdevacc->DeviceLocation}}</td>
                                                <td class="px-6 py-4">
                                                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-1 ml-3">
                                                        <button type="button" onclick="location.href='{{ url('studaccdevice/'.$studdevacc->id) }}'">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="w-5 h-5">
                                                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                @endforeach
                                @endisset
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <div class="hidden" id="returned" role="tabpanel" aria-labelledby="returned-tab">
                        <div class="relative overflow-x-auto">
                            <div class="flex justify-between mt-7">
                                <h1 class="mt-4 uppercase font-bold">Returned Devices</h1>
                                <!-- Search -->
                                <form action="" method="GET">
                                    <div class="pt-2 relative mx-auto text-gray-600">
                                        <input class="focus:ring-green-500 focus:border-green-500 dark:focus:ring-green-500 dark:focus:border-green-500 border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm float-right mb-3 mr-1" type="search" name="search_emp_details_returned" placeholder="Search">
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

                            <table id="dataTable" class="w-full text-xs text-left rtl:text-right font-light text-surface text-black border-collapse">
                                <thead class="text-xs uppercase bg-gray-200 font-bold">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">ID</th>
                                        <th scope="col" class="px-6 py-3">HOST ID</th>
                                        <th scope="col" class="px-6 py-3">TYPE</th>
                                        <th scope="col" class="px-6 py-3">BRAND</th>
                                        <th scope="col" class="px-6 py-3">ISSUE DATE</th>
                                        <th scope="col" class="px-6 py-3">RETURN DATE</th>
                                        <th scope="col" class="px-6 py-3">LOCATION</th>
                                        <th scope="col" class="px-6 py-3">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @isset($stud_dev_acc_returned)
                                    @foreach($stud_dev_acc_returned as $studdevacc_returned)
                                        @if(!empty($studdetails) && $studdevacc_returned->is_accountability == $studdetails[0]->StudentID)
                                            <tr class="bg-white border-b dark:border-gray-300 text-black">
                                                <td class="px-6 py-4">
                                                    {{$studdevacc_returned->id}}
                                                </td>
                                                <td class="px-6 py-4 font-bold uppercase">{{$studdevacc_returned->HostID}}</td>
                                                <td class="px-6 py-4">{{$studdevacc_returned->Type}}</td>
                                                <td class="px-6 py-4">{{$studdevacc_returned->Brand}}</td>
                                                <td class="px-6 py-4 font-bold uppercase">{{$studdevacc_returned->issue_date}}</td>
                                                <td class="px-6 py-4 font-bold uppercase">{{$studdevacc_returned->return_date}}</td>
                                                <td class="px-6 py-4">{{$studdevacc_returned->Location}}</td>
                                                <td class="px-6 py-4">
                                                    <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1 gap-1 ml-3">
                                                        <button type="button" onclick="location.href='{{ url('studaccdevice/'.$studdevacc_returned->id) }}'">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="green" class="w-5 h-5">
                                                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                @endforeach
                                @endisset
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

            {{-- THIS IS THE TABLE FOR SHOWING BORROWED AND RETURN --}}

            <script>
                // THIS IS FOR TABS OF BORROWED AND RETURN
                    document.addEventListener('DOMContentLoaded', () => {
                        const borrowedTabButton = document.querySelector('[data-tabs-target="#borrowed"]');
                        borrowedTabButton.click();
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
                //  TABS OF BORROWED AND RETURN ENDS HERE
            </script>

            </x-app-layout>
        </body>
    </html>
