<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobListings = include database_path('seeders/data/job_listings.php');

        $testUserId = User::where('email', 'test@test.com')->value('id');

        // Get all other user ids from user model
        $userIds = User::where('email', '!=', 'test@test.com')->pluck('id')->toArray();

        foreach ($jobListings as $index => &$listing) {

            if ($index < 2) {
                $listing['user_id'] = $testUserId;
            } else {
                $listing['user_id'] = $userIds[array_rand($userIds)];
            }
            // Assign user id to listing
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        // Insert job listings
        DB::table('job_listings')->insert($jobListings);
        echo 'Jobs created successfully!';
    }
}
