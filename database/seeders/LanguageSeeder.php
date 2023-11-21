<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create(['name' => 'Français', 'code' => 'fr', 'native' => 'français', 'active' => true, 'default' => false]);
        Language::create(['name' => 'English', 'code' => 'en', 'native' => 'English', 'active' => true, 'default' => false]);

    }
}
