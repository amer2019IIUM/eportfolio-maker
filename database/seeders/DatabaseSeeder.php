<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            InterestSeeder::class,
            ProfileSeeder::class,
            ProjectSeeder::class,
            ProjectTechnologySeeder::class,
            SkillSeeder::class,
            TechnologySeeder::class,
            AttachmentSeeder::class
        ]);
    }
}
