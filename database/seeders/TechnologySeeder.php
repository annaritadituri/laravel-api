<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $technologies = ['HTML', 'CSS', 'Javascript', 'Vue', 'Bootstrap', 'PHP', 'SQL', 'Laravel'];
        foreach ($technologies as $technology) {
            
            $db_technology = new Technology();

            $db_technology->name = $technology;
            $db_technology->slug = Str::of($technology)->slug();

            $db_technology->save();

        }
        
    }
}