import './bootstrap';
import Alpine from 'alpinejs';

interface JobPosting {
    id: number;
    title: string;
    company: string;
    location: string;
    salary: number;
    description: string;
    requirements: string[];
    position_type: string;
    date_posted: Date;
}

interface JobStore {
    jobs: JobPosting[];
    isLoading: boolean;
    error: string | null;
    filters: {
        position_type: string[];
        location: string[];
        company: string[];
    };
    fetchJobs: () => Promise<void>;
    filteredJobs: () => JobPosting[];
    uniqueLocations: () => string[];
    uniqueCompanies: () => string[];
}

window.addEventListener('DOMContentLoaded', () => {
    Alpine.store('jobList', {
        jobs: [],
        isLoading: true,
        error: null,
        filters: {
            position_type: [],
            location: [],
            company: [],
        },

        async fetchJobs() {
            this.isLoading = true;
            this.error = null;

            try {
                const response = await fetch('/jobs');

                if (!response.ok) {
                    throw new Error('Failed to fetch jobs');
                }

                const jobs: JobPosting[] = await response.json();
                this.jobs = jobs;
                this.isLoading = false;
            } catch (err) {
                this.error = 'Failed to load jobs';
                this.isLoading = false;
            }
        },

        filteredJobs() {
            return this.jobs.filter((job: JobPosting) =>
                (this.filters.position_type.length === 0 || this.filters.position_type.includes(job.position_type)) &&
                (this.filters.location.length === 0 || this.filters.location.includes(job.location)) &&
                (this.filters.company.length === 0 || this.filters.company.includes(job.company))
            );
        },

        uniqueLocations() {
            return [...new Set(this.jobs.map((job: JobPosting) => job.location))];
        },

        uniqueCompanies() {
            return [...new Set(this.jobs.map((job: JobPosting) => job.company))];
        },
    } as JobStore);

    Alpine.start();
});
