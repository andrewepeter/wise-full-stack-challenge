<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-start gap-4">
            <!-- Dark Mode Toggle -->
            <div x-data="{ darkMode: false }"
                x-init="darkMode = localStorage.getItem('darkMode') === 'true'; if (darkMode) document.documentElement.classList.add('dark')"
                @click="darkMode = !darkMode; document.documentElement.classList.toggle('dark'); localStorage.setItem('darkMode', darkMode)">
                
                <buttons
                    class="p-2 bg-gray-300 dark:bg-gray-600 text-black dark:text-white rounded transform transition-transform duration-300 ease-in-out hover:scale-105 hover:ring-4 hover:ring-indigo-500">
                    <span x-text="darkMode ? 'Light Mode' : 'Dark Mode'"></span>
                </button>
            </div>
        </div>
    </x-slot>

    <!-- Job Listings with Filters -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div x-init="$store.jobList.fetchJobs()">
                    <div x-data="{
                            showPosition: false,
                            showLocation: false,
                            showCompany: false,
                            jobList: $store.jobList
                        }" 
                        class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">

                        <!-- Horizontal Filter Bar -->
                        <h3 class="text-lg font-semibold mb-2">Filters</h3>
                        <div class="flex space-x-4 mb-4 border-b pb-2">
                            <button @click="showPosition = !showPosition" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                                Position Type
                            </button>
                            <button @click="showLocation = !showLocation" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                                Location
                            </button>
                            <button @click="showCompany = !showCompany" class="px-4 py-2 bg-gray-200 dark:bg-gray-700 rounded hover:bg-gray-300 dark:hover:bg-gray-600 transition">
                                Company
                            </button>
                        </div>

                        <!-- Dropdown Panels for Filters -->
                        <div class="mb-6">
                            <!-- Position Type Dropdown -->
                            <template x-if="showPosition">
                                <div class="mb-4 p-4 bg-white dark:bg-gray-800 rounded shadow">
                                    <h4 class="mb-2 font-semibold">Position Type</h4>
                                    <template x-for="type in ['Remote', 'Hybrid', 'On-Site']" :key="type">
                                        <label class="flex items-center space-x-2">
                                            <input type="checkbox" :value="type" x-model="jobList.filters.position_type">
                                            <span x-text="type"></span>
                                            <span class="ml-auto text-sm text-gray-500"
                                                x-text="jobList.jobs.filter(job => job.position_type === type).length + ' jobs'"></span>
                                        </label>
                                    </template>
                                </div>
                            </template>

                            <!-- Location Dropdown -->
                            <template x-if="showLocation">
                                <div class="mb-4 p-4 bg-white dark:bg-gray-800 rounded shadow">
                                    <h4 class="mb-2 font-semibold">Location</h4>
                                    <template x-for="location in jobList.uniqueLocations()" :key="location">
                                        <label class="flex items-center space-x-2">
                                            <input type="checkbox" :value="location" x-model="jobList.filters.location">
                                            <span x-text="location"></span>
                                            <span class="ml-auto text-sm text-gray-500"
                                                x-text="jobList.jobs.filter(job => job.location === location).length + ' jobs'"></span>
                                        </label>
                                    </template>
                                </div>
                            </template>

                            <!-- Company Dropdown -->
                            <template x-if="showCompany">
                                <div class="mb-4 p-4 bg-white dark:bg-gray-800 rounded shadow">
                                    <h4 class="mb-2 font-semibold">Company</h4>
                                    <template x-for="company in jobList.uniqueCompanies()" :key="company">
                                        <label class="flex items-center space-x-2">
                                            <input type="checkbox" :value="company" x-model="jobList.filters.company">
                                            <span x-text="company"></span>
                                            <span class="ml-auto text-sm text-gray-500"
                                                x-text="jobList.jobs.filter(job => job.company === company).length + ' jobs'"></span>
                                        </label>
                                    </template>
                                </div>
                            </template>
                        </div>

                        <!-- Job Listings -->
                        <div class="mt-6">
                        <h3 class="text-lg font-semibold mb-2">Job Postings</h3>
                            <template x-if="$store.jobList.isLoading">
                                <p>Loading jobs...</p>
                            </template>
                            <template x-if="$store.jobList.error">
                                <p class="text-red-500" x-text="$store.jobList.error"></p>
                            </template>
                            <ul>
                                <template x-for="job in $store.jobList.filteredJobs()" :key="job.id">
                                    <li class="py-2">
                                        <strong x-text="job.title"></strong>
                                        <span x-text="job.company"></span>
                                        <span x-text="job.location"></span>
                                        <br>
                                        <em x-text="job.salary"></em>
                                        <span x-text="job.position_type"></span>
                                        <p x-text="job.description"></p>
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/jobs.tsx')
</x-app-layout>
