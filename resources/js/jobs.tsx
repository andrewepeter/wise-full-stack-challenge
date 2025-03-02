//Displays jobs on the dashboard
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
    fetchJobs: () => Promise<void>;
}

window.addEventListener('DOMContentLoaded', () => {
    Alpine.store('jobList', {
        jobs: [] as JobPosting[],
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
            } catch (err) {
                this.error = (err instanceof Error) ? err.message : 'An unknown error occurred';
            } finally {
                this.isLoading = false;
            }
        },
    } as JobStore);

    Alpine.start();
});
