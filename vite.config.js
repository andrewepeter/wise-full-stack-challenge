import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/jobs.tsx', 'resources/js/app.ts'],
            refresh: true,
        }),
    ],
});
