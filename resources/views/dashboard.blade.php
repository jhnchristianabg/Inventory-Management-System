<x-app-layout>
<x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Dashboard
        </h2>
    </x-slot>
    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </x-slot>


    <!-- This Field is for ITS Inventory Quick Dash -->

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-800 dark:border-gray-700">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ITS Inventory Management System</h5>

        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500" style ="margin-top:20%">
        See All
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    <!-- This Field is for Devices Cards -->

    <div class="flex justify-left my-5">
        <div class="rounded-lg border border-[#332D2D] bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-black">
            <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20">
                <b>Devices</b>
                <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" style ="margin-left:25px">Add</button>
                <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Deploy</button>
                <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Pullout</button>
            </div>

            <div class="p-6">
                <table class="table-fixed">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Device</th>
                        <th>Location</th>
                        <th>Borrower</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>System Unit</td>
                        <td>HED</td>
                        <td>Abueg</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Desktop</td>
                        <td>HED</td>
                        <td>Anacay</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Speaker</td>
                        <td>BED</td>
                        <td>Paglinawan</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>


      <!-- Ends Here! -->

        <div class="flex justify-left" style ="margin-left:20px; float:right">
            <div class="rounded-lg border border-[#332D2D] bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-black">

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20">
                    <b>Cables & Peripherals</b>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" style ="margin-left:25px">Add</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Deploy</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Pullout</button>
                </div>

                <div class="p-6">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Location</th>
                                <th>Borrower</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Unit</td>
                                <td>HED</td>
                                <td>Abueg</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Desktop</td>
                                <td>HED</td>
                                <td>Anacay</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Speaker</td>
                                <td>BED</td>
                                <td>Paglinawan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex justify-left" style ="margin-left:20px; float:right">
            <div class="rounded-lg border border-[#332D2D] bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-black">

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20">
                    <b>Consumables</b>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" style ="margin-left:25px">Add</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Deploy</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Pullout</button>
                </div>

                <div class="p-6">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Location</th>
                                <th>Borrower</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Unit</td>
                                <td>HED</td>
                                <td>Abueg</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Desktop</td>
                                <td>HED</td>
                                <td>Anacay</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Speaker</td>
                                <td>BED</td>
                                <td>Paglinawan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- This Field is for Allied Health Inventory Quick Dash -->

    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-green-800 dark:border-gray-700 my-5">

        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Allied Health Inventory Management System</h5>

        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-yellow-500 dark:bg-yellow-500 dark:hover:bg-yellow-600 dark:focus:ring-yellow-500" style ="margin-top:20%">
        See All
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    <!-- This Field is for Devices Cards -->

    <div class="flex justify-left">
        <div class="rounded-lg border border-[#332D2D] bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-black">
            <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20">
                <b>Equipment</b>
                <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" style ="margin-left:17px">Add</button>
                <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Deploy</button>
                <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Pullout</button>
            </div>

            <div class="p-6">
                <table class="table-fixed">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Device</th>
                        <th>Location</th>
                        <th>Borrower</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>System Unit</td>
                        <td>HED</td>
                        <td>Abueg</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Desktop</td>
                        <td>HED</td>
                        <td>Anacay</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Speaker</td>
                        <td>BED</td>
                        <td>Paglinawan</td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>


      <!-- Ends Here! -->

        <div class="flex justify-left" style ="margin-left:20px; float:right">
            <div class="rounded-lg border border-[#332D2D] bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-black">

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20">
                    <b>Reagents</b>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" style ="margin-left:25px">Add</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Deploy</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Pullout</button>
                </div>

                <div class="p-6">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Location</th>
                                <th>Borrower</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Unit</td>
                                <td>HED</td>
                                <td>Abueg</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Desktop</td>
                                <td>HED</td>
                                <td>Anacay</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Speaker</td>
                                <td>BED</td>
                                <td>Paglinawan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="flex justify-left" style ="margin-left:20px; float:right">
            <div class="rounded-lg border border-[#332D2D] bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-black">

                <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-black/20">
                    <b>Consumables</b>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" style ="margin-left:25px">Add</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Deploy</button>
                    <button type="button" class="text-black-400 hover:text-black border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-black-300 dark:hover:text-black dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Pullout</button>
                </div>

                <div class="p-6">
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device</th>
                                <th>Location</th>
                                <th>Borrower</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>System Unit</td>
                                <td>HED</td>
                                <td>Abueg</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Desktop</td>
                                <td>HED</td>
                                <td>Anacay</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Speaker</td>
                                <td>BED</td>
                                <td>Paglinawan</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
