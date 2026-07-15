<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'title' => 'Senior Manager',
            'salary' => '$55000',
        ]);

        Job::create([
            'title' => 'Software Engineer',
            'salary' => '$65000',
        ]);

        Job::create([
            'title' => 'Full Stack Developer',
            'salary' => '$60000',
        ]);

        Job::create([
            'title' => 'DevOps Engineer',
            'salary' => '$70000',
        ]);

        Job::create([
            'title' => 'Technical Support',
            'salary' => '$35000',
        ]);

        Job::create([
            'title' => 'UI/UX Designer',
            'salary' => '$50000',
        ]);

        Job::create([
            'title' => 'QA Engineer',
            'salary' => '$62000',
        ]);

        Job::create([
            'title' => 'Product Manager',
            'salary' => '$90000',
        ]);

        Job::create([
            'title' => 'Marketing Specialist',
            'salary' => '$52000',
        ]);

        Job::create([
            'title' => 'Data Analyst',
            'salary' => '$68000',
        ]);

        Job::create([
            'title' => 'Cloud Architect',
            'salary' => '$110000',
        ]);
    }
}
