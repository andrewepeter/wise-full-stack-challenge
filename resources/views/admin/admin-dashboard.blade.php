<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Admin Account</h1>
    </x-slot>

    <div x-data="{
        jobList: $store.jobList,
        selectedCompany: null,
        selectedJob: null,
        companySearchQuery: '',
        jobSearchQuery: ''}"
        x-init="jobList.fetchJobs()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-10">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <!-- Loading & Error States -->
                    <template x-if="jobList.isLoading">
                        <p class="animate-pulse text-gray-500">Loading...</p>
                    </template>
                    <template x-if="jobList.error">
                        <p class="text-red-500" x-text="jobList.error"></p>
                    </template>

                    <!-- Company Search Bar -->
                    <template x-if="!selectedCompany">
                        <div class="mt-4">
                            <input type="text" x-model="companySearchQuery" placeholder="Search companies..."
                                class="w-full p-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
                        </div>
                    </template>

                    <!-- Company List (Filtered) -->
                    <template x-if="!selectedCompany && !selectedJob">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                            <template x-for="[company, jobs] in Object.entries(
                                jobList.jobs.reduce((acc, job) => {
                                    acc[job.company] = (acc[job.company] || []).concat(job);
                                    return acc;
                                }, {}))
                                .filter(([company]) => company.toLowerCase().includes(companySearchQuery.toLowerCase()))" 
                                :key="company">
                                
                                <div @click="selectedCompany = company"
                                    class="p-4 border rounded cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 transition-transform transform hover:scale-105 hover:shadow-lg"
                                    x-transition.opacity.duration.300ms>
                                    <h3 x-text="company" class="font-semibold"></h3>
                                    <p x-text="`${jobs.length} job(s) available`" class="text-sm text-gray-500"></p>
                                </div>
                            </template>
                        </div>
                    </template>

                    <!-- Job List for Selected Company (Filtered) -->
                    <template x-if="selectedCompany && !selectedJob">
                        <div x-transition.opacity.duration.300ms>
                            <div class="flex justify-between items-center mt-4">
                                <h2 x-text="selectedCompany" class="text-lg font-semibold"></h2>
                                <button @click="selectedCompany = null" 
                                    class="px-3 py-1 bg-gray-400 text-white rounded hover:bg-gray-600 transition-all duration-200">
                                    Back to Companies
                                </button>
                            </div>

                            <!-- Job Search Bar -->
                            <div class="mt-4">
                                <input type="text" x-model="jobSearchQuery" placeholder="Search jobs..."
                                    class="w-full p-2 border rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
                            </div>

                            <div class="mt-4 space-y-2">
                                <template x-for="job in jobList.jobs
                                    .filter(j => j.company === selectedCompany)
                                    .filter(j => j.title.toLowerCase().includes(jobSearchQuery.toLowerCase()))"
                                    :key="job.id">
                                    
                                    <div @click="selectedJob = job"
                                        class="p-4 border rounded cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 transition-transform transform hover:scale-105"
                                        x-transition.opacity.duration.300ms>
                                        <h3 x-text="job.title" class="font-semibold"></h3>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </template>

                    <!-- Job Card -->
                    <template x-if="selectedJob">
                    <div>
                        @include('components.job-details')

                        <div class="mt-6 space-x-4">
                            <button @click="$store.jobList.notify('Job Updated!')"
                                class="px-3 py-1 bg-gray-900 text-white rounded hover:bg-gray-700 transition-all duration-200">
                                Update
                            </button>
                            <button @click="$store.jobList.notify('Job Deleted!')"
                                class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-500 transition-all duration-200">
                                Delete
                            </button>
                        </div>
                    </div>
                </template>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/jobs.tsx')
</x-app-layout>
