// Displays jobs on the dashboard
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
    jobCounts: Record<string, number>;
    isLoading: boolean;
    error: string | null;
    fetchJobs: () => Promise<void>;
    calculateJobCounts: () => void;
}

window.addEventListener('DOMContentLoaded', () => {
    Alpine.store('jobList', {
        jobs: [] as JobPosting[],
        jobCounts: {} as Record<string, number>,
        isLoading: false,
        error: null as string | null,

        async fetchJobs() {
            this.isLoading = true;
            this.error = null;
            try {
                const response = await fetch('/jobs', {
                    headers: {
                        'Accept': 'application/json',
                    },
                });

                if (!response.ok) {
                    throw new Error('Failed to fetch jobs');
                }

                const jobs: JobPosting[] = await response.json();
                this.jobs = jobs;
                this.calculateJobCounts(); // Calculate counts after fetching jobs
            } catch (err) {
                this.error = (err instanceof Error) ? err.message : 'An unknown error occurred';
            } finally {
                this.isLoading = false;
            }
        },

        calculateJobCounts() {
            this.jobCounts = this.jobs.reduce((counts, job) => {
                counts[job.company] = (counts[job.company] || 0) + 1;
                return counts;
            }, {} as Record<string, number>);
        },
    } as JobStore);

    Alpine.start();
});
