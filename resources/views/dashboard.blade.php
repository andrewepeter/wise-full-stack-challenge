<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <<div x-data="{ jobList: $store.jobList }" x-init="jobList.fetchJobs()">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3>Job Postings</h3>
                    <template x-if="$store.jobList.isLoading">
                        <p>Loading...</p>
                    </template>
                    <template x-if="$store.jobList.error">
                        <p class="text-red-500" x-text="$store.jobList.error"></p>
                    </template>
                    <ul>
                        <template x-for="job in $store.jobList.jobs" :key="job.id">
                            <li class="py-2">
                                <strong x-text="job.title"></strong> at <span x-text="job.company"></span> - <span x-text="job.location"></span>
                                <br>
                                <em x-text="job.salary"></em> | <span x-text="job.position_type"></span>
                                <p x-text="job.description"></p>
                                <ul>
                                    <template x-for="requirement in job.requirements" :key="requirement">
                                        <li x-text="requirement"></li>
                                    </template>
                                </ul>
                                <p x-text="'Posted on: ' + job.date_posted"></p>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @vite('resources/js/jobs.tsx')
</x-app-layout>
