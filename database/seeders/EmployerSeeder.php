<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Employer::factory(10)->create();
    }
}
