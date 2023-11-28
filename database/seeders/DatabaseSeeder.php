<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employer;
use App\Models\Job;
use Database\Factories\JobFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users=\App\Models\User::factory(300)->create();

        $users =\App\Models\User::all()->shuffle();

        for($i=0;$i<20;$i++){
            Employer::factory(1)->create([
                'user_id'=>$users->pop()->id
            ]);
        }
        $employers = Employer::all();

        for($i=0;$i<100;$i++){
            Job::factory(1)->create([
                'employer_id'=>$employers->random()->id
            ]);
        }

    }
}
