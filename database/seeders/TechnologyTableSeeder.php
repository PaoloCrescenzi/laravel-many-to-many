<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $technologies = ["php", "html", "vue", "vue+vite", "laravel"];

        foreach($technologies as $technology){
            Technology::create([
                "name"=> $technology
            ]);
        }
    }
}
