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
    selectedCompany: string | null,
    selectedJob: JobPosting | null;

    filters: {
        position_type: string[];
        location: string[];
        company: string[];
    };
    fetchJobs: () => Promise<void>;
    filteredJobs: () => JobPosting[];
    uniqueLocations: () => string[];
    uniqueCompanies: () => string[];
    loadedJobs: number;
    loadMoreJobs: () => void;
    isAdmin: boolean;
    handleScroll: () => void;
    selectJob: (job: JobPosting) => void;
    notify: (message: string) => void;
}

window.addEventListener('DOMContentLoaded', () => {
    Alpine.store('jobList', {
        jobs: [],
        isLoading: true,
        error: null,
        selectedCompany: null,
        selectedJob: null,
        filters: {
            position_type: [],
            location: [],
            company: [],
        },
        loadedJobs: 8,
        isAdmin: false,


        async fetchJobs() {
            this.isLoading = true;
            this.error = null;

            try {
                const response = await fetch('/jobs');
                if (!response.ok) throw new Error('Failed to fetch jobs');

                const jobs: JobPosting[] = await response.json();
                this.jobs = jobs;
                this.isLoading = false;
            } catch (err) {
                this.error = 'Failed to load jobs';
                this.isLoading = false;
            }
        },

        filteredJobs() {
            if (this.isAdmin) {
                return this.jobs;
            }
            return this.jobs
                .filter((job: JobPosting) =>
                    (!this.selectedCompany || job.company?.toLowerCase() === this.selectedCompany?.toLowerCase()) &&
                    (this.filters.position_type.length === 0 || this.filters.position_type.includes(job.position_type)) &&
                    (this.filters.location.length === 0 || this.filters.location.includes(job.location)) &&
                    (this.filters.company.length === 0 || this.filters.company.includes(job.company))
                )
                .slice(0, this.loadedJobs);
        },

        uniqueLocations() {
            return [...new Set(this.jobs.map((job: JobPosting) => job.location))];
        },

        uniqueCompanies() {
            return [...new Set(this.jobs.map((job: JobPosting) => job.company))];
        },

        loadMoreJobs() {
            if (this.isLoading) return;
            this.loadedJobs += 8;
        },

        handleScroll() {
            if (this.isAdmin || this.isLoading) return;

            const scrollPosition = window.innerHeight + window.scrollY;
            const documentHeight = document.documentElement.scrollHeight;

            if (scrollPosition >= documentHeight - 100) {
                this.loadMoreJobs();
            }
        },
        selectJob(job) {
            this.selectedJob = job;
        },

        notify(message) {
            alert(message);
        }
    } as JobStore);

    // Attach the scroll event listener
    window.addEventListener('scroll', () => {
        (Alpine.store('jobList') as { handleScroll: () => void }).handleScroll();
    });

    Alpine.start();
});
