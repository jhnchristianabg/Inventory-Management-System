<!doctype html>
    <html lang="en">
        <head>
            <title>Dashboard</title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js" integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
        </head>
        <body>
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

                <!-- This Field is for ITS Quick Dash -->


                    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="relative overflow-hidden rounded-lg bg-gray-300 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                            <dt>
                                <div class="absolute rounded-md bg-green-600 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-black font-bold uppercase">Total Devices</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-black font-bold">{{ $totaldevices }}</p>
                                <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                    <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Increased by </span>
                                        {{ $totaldevices}}
                                </p>
                                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                                    <div class="text-sm">
                                        <a href="device" class="font-medium text-yellow-500 hover:text-yellow-300">View all<span class="sr-only"> Total Subscribers stats</span></a>
                                    </div>
                                </div>
                            </dd>
                        </div>
                        <div class="relative overflow-hidden rounded-lg bg-gray-300 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                            <dt>
                                <div class="absolute rounded-md bg-yellow-500 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.098 19.902a3.75 3.75 0 0 0 5.304 0l6.401-6.402M6.75 21A3.75 3.75 0 0 1 3 17.25V4.125C3 3.504 3.504 3 4.125 3h5.25c.621 0 1.125.504 1.125 1.125v4.072M6.75 21a3.75 3.75 0 0 0 3.75-3.75V8.197M6.75 21h13.125c.621 0 1.125-.504 1.125-1.125v-5.25c0-.621-.504-1.125-1.125-1.125h-4.072M10.5 8.197l2.88-2.88c.438-.439 1.15-.439 1.59 0l3.712 3.713c.44.44.44 1.152 0 1.59l-2.879 2.88M6.75 17.25h.008v.008H6.75v-.008Z" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-black font-bold uppercase">Total Cables & Peripherals</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-black font-bold uppercase">{{ $totalcp}}</p>
                                <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                    <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Increased by </span>
                                    {{ $totalcp}}
                                </p>
                                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                                    <div class="text-sm">
                                        <a href="cablesandperipherals" class="font-medium text-yellow-500 hover:text-yellow-300">View all<span class="sr-only"> Avg. Open Rate stats</span></a>
                                    </div>
                                </div>
                            </dd>
                        </div>
                        <div class="relative overflow-hidden rounded-lg bg-gray-300 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                            <dt>
                                <div class="absolute rounded-md bg-green-600 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-black font-bold uppercase">Total Consumables</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-black font-bold uppercase">{{ $totalcons }}</p>
                                <p class="ml-2 flex items-baseline text-sm font-semibold text-red-600">
                                    <svg class="h-5 w-5 flex-shrink-0 self-center text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Decreased by </span>
                                    {{ $totalcons }}
                                </p>
                                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                                    <div class="text-sm">
                                        <a href="consumables" class="font-medium text-yellow-500 hover:text-yellow-300">View all<span class="sr-only"> Avg. Click Rate stats</span></a>
                                    </div>
                                </div>
                            </dd>
                        </div>
                        <div class="relative overflow-hidden rounded-lg bg-gray-300 px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                            <dt>
                                <div class="absolute rounded-md bg-yellow-500 p-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </div>
                                <p class="ml-16 truncate text-sm font-medium text-black font-bold uppercase">TOTAL DEVICES ASSIGNED</p>
                            </dt>
                            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                                <p class="text-2xl font-semibold text-black font-bold uppercase">{{ $totalaccountability }}</p>
                                <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
                                    <svg class="h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only"> Increased by </span>
                                        {{ $totalaccountability }}
                                </p>
                                <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                                    <div class="text-sm">
                                        <a href="itsemployeeaccountabilitydevice" class="font-medium text-yellow-500 hover:text-yellow-300">View all<span class="sr-only"> Avg. Open Rate stats</span></a>
                                    </div>
                                </div>
                            </dd>
                        </div>
                    </dl>

                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 max-w-full">
                    {{-- This is for Graph Cards --}}

                        <div class="p-6">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Devices</h5>
                                </div>
                                <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Get the count of system units from PHP and pass it to JavaScript
                                            var countSys = <?php echo $countsys; ?>;
                                            var countlap = <?php echo $countlap; ?>;
                                            var countaio = <?php echo $countaio; ?>;
                                            var countimac = <?php echo $countimac; ?>;
                                            new Chart(document.getElementById("chartjs-4"), {
                                                "type": "doughnut",
                                                "data": {
                                                    "labels": ["System Unit", "Laptop", "AIO Desktop", "IMAC"],
                                                    "datasets": [{
                                                        "label": "Issues",
                                                        // Pass the count value to the corresponding data index
                                                        "data": [countSys, countlap, countaio, countimac], // Fill in other counts accordingly
                                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                                    }]
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                        <div class="p-6 float-right">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Cables & Peripherals</h5>
                                </div>
                                <div class="p-5"><canvas id="cables" class="chartjs" width="undefined" height="undefined"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Get the count of system units from PHP and pass it to JavaScript
                                            var countcable = <?php echo $countcable; ?>;
                                            var countadapter = <?php echo $countadapter; ?>;
                                            var countconverter = <?php echo $countconverter; ?>;
                                            var countcharger = <?php echo $countcharger; ?>;
                                            new Chart(document.getElementById("cables"), {
                                                "type": "doughnut",
                                                "data": {
                                                    "labels": ["Cables", "Adapter", "Converter", "Charger"],
                                                    "datasets": [{
                                                        "label": "Issues",
                                                        // Pass the count value to the corresponding data index
                                                        "data": [countcable, countadapter, countconverter, countcharger], // Fill in other counts accordingly
                                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                                    }]
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>

                        <div class="p-6 float-right">
                            <!--Graph Card-->
                            <div class="bg-white border-transparent rounded-lg shadow-xl">
                                <div class="bg-gradient-to-b from-gray-300 to-gray-100 uppercase text-gray-800 border-b-2 border-gray-300 rounded-tl-lg rounded-tr-lg p-2">
                                    <h5 class="font-bold uppercase text-gray-600">Consumables</h5>
                                </div>
                                <div class="p-5"><canvas id="consumables" class="chartjs" width="undefined" height="undefined"></canvas>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            // Get the count of system units from PHP and pass it to JavaScript
                                            var countink = <?php echo $countink; ?>;
                                            var counttoner = <?php echo $counttoner; ?>;

                                            new Chart(document.getElementById("consumables"), {
                                                "type": "doughnut",
                                                "data": {
                                                    "labels": ["Ink", "Toner"],
                                                    "datasets": [{
                                                        "label": "Issues",
                                                        // Pass the count value to the corresponding data index
                                                        "data": [countink, counttoner], // Fill in other counts accordingly
                                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                                    }]
                                                }
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                            <!--/Graph Card-->
                        </div>
                </div>
            </x-app-layout>
        </body>
    </html>
