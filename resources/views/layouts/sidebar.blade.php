<!-- Sidebar Menu -->
<div :class="{ '!translate-x-0': open }" class="fixed top-0 left-0 z-20 w-9/12 h-screen overflow-y-auto transition duration-300 ease-in-out transform -translate-x-full bg-white shadow-2xl sm:w-64 md:translate-x-0">

    <!-- Profile Section -->
    <div class="divide-y divide-gray-100 divide-solid">
        <div class="p-5 text-center">
            <!-- Profile Picture -->
            <a href="/dashboard" class="inline-block w-auto p-1 bg-white rounded-full">
                <img src="{{ asset('img/feuc.png') }}" alt="" class="scale-105 object-contain object-top w-28 h-28 align-top rounded-full">
            </a>
            <!-- Profile Info -->
            <div>
                <h3 class="mb-2 overflow-hidden text-2xl font-bold whitespace-nowrap overflow-ellipsis text-gray-800">{{ auth()->user()->name }}</h3>
            </div>
        </div>
    </div>
    <!-- Dashboard -->
    <div class="flex flex-col mb-0 ml-0">
        <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="2 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </x-slot>
            <span class="ml-2">Dashboard</span>
        </x-sidebar-nav-link>

        <div class="border-b-2 border-neutral-100 px-6 py-1 dark:border-black/20 mb-2"></div>

        <b><div class="flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                </svg>
                <h1 class="pr-5 py text-sm mb-2">Information Technology Services</h1>
            </div>
        </b>

        <!-- ITS Inventory -->

		<button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="ItsInventory" data-collapse-toggle="ItsInventory">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap text-lg md:text-sm" sidebar-toggle-item>Inventory</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="ItsInventory" class="hidden py-2 space-y-2">
			<li>
				<a href="/device"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Devices</a>
			</li>
			<li>
				<a href="/cablesandperipherals"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Cables & Peripherals</a>
			</li>
			<li>
				<a href="/consumables"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Consumables</a>
			</li>
		</ul>
        <!-- ITS Management -->
        <button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="ItsManagement" data-collapse-toggle="ItsManagement">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
              </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap text-lg md:text-sm" sidebar-toggle-item>Management</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="ItsManagement" class="hidden py-2 space-y-2">
			<li>
				<a href="/itsemployeeaccountabilitydevice"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Devices</a>
			</li>
			<li>
				<a href="/managementcablesandperipherals"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Cables & Peripherals</a>
			</li>
			<li>
				<a href="/managementconsumables"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Consumables</a>
			</li>
		</ul>

        <!-- ITS Accountability -->

        <button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="ItsEmployeeAccount" data-collapse-toggle="ItsEmployeeAccount">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
            </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap text-lg md:text-sm" sidebar-toggle-item>Accountability</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="ItsEmployeeAccount" class="hidden py-2 space-y-2">
            <li>
				<a href="/itsaccountabilitystudent"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Students</a>
			</li>
			<li>
				<a href="/itsemployeeaccountabilityemployee"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Employees</a>
			</li>
		</ul>

        <!-- Report Generation -->



		<button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="ReportGeneration" data-collapse-toggle="ReportGeneration">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 27 27" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
            </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap text-lg md:text-sm" sidebar-toggle-item>Report Generation</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="ReportGeneration" class="hidden py-2 space-y-2">
			<li>
				<a href="/report"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Devices</a>
			</li>
			<li>
				<a href="/cpreport"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Cables & Peripherals</a>
			</li>
		</ul>

        <!-- Allied Health Inventory -->

        {{-- <div class="border-b-2 border-neutral-100 px-6 py-1 dark:border-black/20 mb-2"></div>

        <b><div class="flex justify-between">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                </svg>
                <h1 class="pr-36 py text-sm mb-2">Allied Health</h1>
            </div>
        </b>

		<button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="AhInventory" data-collapse-toggle="AhInventory">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap text-lg md:text-sm" sidebar-toggle-item>Inventory</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>

		<ul id="AhInventory" class="hidden py-2 space-y-2">
			<li>
				<a href="/equipments"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Equipments</a>
			</li>
			<li>
				<a href="/reagents"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Reagents</a>
			</li>
			<li>
				<a href="/ahconsumables"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Consumables</a>
			</li>
		</ul>

        <!-- Allied Health Management -->

        <button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="AhManagement" data-collapse-toggle="AhManagement">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
              </svg>

            <span class="flex-1 ml-3 text-left whitespace-nowrap text-lg md:text-sm" sidebar-toggle-item>Management</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="AhManagement" class="hidden py-2 space-y-2">
			<li>
				<a href="/managementequipments"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Equipments</a>
			</li>
			<li>
				<a href="/managementreagents"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Reagents</a>
			</li>
			<li>
				<a href="/ahmanagementconsumables"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Consumables</a>
			</li>
		</ul> --}}

        <!-- SYSTEM -->

        <div class="border-b-2 border-neutral-100 px-6 py-1 dark:border-black/20 mb-2"></div>



        <!--                    -->

		<button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="system" data-collapse-toggle="system">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 27 27" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>

            <span class="flex-1 ml-2 text-left whitespace-nowrap text-lg md:text-sm font-bold" sidebar-toggle-item>System</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="system" class="hidden py-2 space-y-2">
			<li>
				<a href=""
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Users</a>
			</li>
			<li>
				<a href="/location"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Locations</a>
			</li>
		</ul>

        <!-- DELETED -->

        <div class="border-b-2 border-neutral-100 px-6 py-1 dark:border-black/20 mb-2"></div>

		<button type="button" class="flex items-center w-full p-2 text-black-600 transition duration-75 hover:bg-green-700 hover:text-gray-100 text-black-800 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-700" aria-controls="deleted" data-collapse-toggle="deleted">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 27 27" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>

            <span class="flex-1 ml-2 text-left whitespace-nowrap text-lg md:text-sm font-bold" sidebar-toggle-item>Removed Inventory Items</span>
            <svg sidebar-toggle-item class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
		<ul id="deleted" class="hidden py-2 space-y-2">
			<li>
				<a href="/removedevice"
                    class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Devices</a>
			</li>
			<li>
				<a href="/removecp"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Cables & Peripherals</a>
			</li>
            <li>
				<a href="/removecons"
					class="flex items-center w-full p-2 text-lg md:text-sm text-black-900 transition duration-75  hover:bg-green-700 hover:text-gray-100 text-black-800 pl-11">Consumables</a>
			</li>
		</ul>

        <div class="border-b-2 border-neutral-100 px-6 py-1 dark:border-black/20 mb-2"></div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-sidebar-nav-link onclick="event.preventDefault();this.closest('form').submit();" class="cursor-pointer">
                <x-slot name="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                      </svg>

                </x-slot>
                <span class="ml-3">Sign Out</span>
            </x-sidebar-nav-link>
        </form>

    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</div>
<div :class="{ '!inline': open }" class="z-10 fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-30 hidden md:!hidden transition ease-in-out duration-300"></div>

