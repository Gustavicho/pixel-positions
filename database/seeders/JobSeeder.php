<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(3)->create();

        Job::factory(9)->hasAttached($tags)->create(new Sequence(
            [
                'featured' => true,
                'schedule' => 'full-time',
            ],
            [
                'featured' => false,
                'schedule' => 'part-time',
            ],
            [
                'featured' => false,
                'schedule' => 'full-time',
            ],
        ));
    }
}
