@props(['job'])

<div x-data="{ job: selectedJob }" x-show="job" x-transition.opacity.scale.duration.300ms>
    <!-- Job Title and Back Button -->
    <div class="flex justify-between items-center mt-4">
        <h3 class="text-xl font-bold" x-text="job.title"></h3>
        <button @click="selectedJob = null" 
            class="px-3 py-1 bg-gray-400 text-white rounded hover:bg-gray-600 transition-all duration-200">
            Close
        </button>
    </div>

    <!-- Job Details -->
    <div class="mt-4 space-y-2">
        <p><strong>Company:</strong> <span x-text="job.company"></span></p>
        <p><strong>Location:</strong> <span x-text="job.location"></span></p>
        <p><strong>Position Type:</strong> <span x-text="job.position_type"></span></p>
        <p><strong>Salary:</strong> <span x-text="`${job.salary} /yr`"></span></p>
        <p><strong>Date Posted:</strong> <span x-text="job.date_posted"></span></p>
        <p><strong>About the Job</strong>
        <p class="mt-4" x-text="job.description"></p>
        <p><strong>Requirements:</strong></p>
        <ul class="list-disc pl-6">
            <template x-for="requirement in job.requirements">
                <li x-text="requirement"></li>
            </template>
        </ul>
    </div>
</div>
