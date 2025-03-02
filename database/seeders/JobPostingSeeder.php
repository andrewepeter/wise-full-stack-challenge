<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class JobPostingSeeder extends Seeder
{
    public function run(): void
    {
        // Load the JSON file
        $json = File::get(database_path('data/jobs.json'));
        $jobs = json_decode($json, true);

        // Insert each job into the database
        foreach ($jobs as $job) {
            DB::table('job_postings')->insert([
                'title' => $job['title'],
                'company' => $job['company'],
                'location' => $job['location'],
                'salary' => $job['salary'],
                'description' => $job['description'],
                'requirements' => json_encode($job['requirements']),
                'position_type' => $job['position_type'],
                'date_posted' => $job['date_posted'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
