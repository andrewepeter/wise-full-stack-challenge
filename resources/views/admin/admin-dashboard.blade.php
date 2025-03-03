<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-bold">Admin Account</h1>
    </x-slot>

    <div x-data="{ jobList: $store.jobList }" x-init="jobList.fetchJobs()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-10">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Job Postings by Company</h3>

                    <template x-if="$store.jobList.isLoading">
                        <p>Loading...</p>
                    </template>

                    <template x-if="$store.jobList.error">
                        <p class="text-red-500" x-text="$store.jobList.error"></p>
                    </template>
                    
                     <!-- Company Counts -->
                    <ul>
                        <template x-for="company in [...new Set($store.jobList.jobs.map(job => job.company))]" :key="company">
                            <li class="py-2">
                                <strong x-text="company"></strong>
                                <span x-text="$store.jobList.jobs.filter(job => job.company === company).length + ' jobs available'"></span>
                                <button class="ml-4 px-3 py-1 bg-gray-400 text-white rounded hover:bg-gray-600 transition">
                                    View Company
                                </button>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/jobs.tsx')
</x-app-layout>
