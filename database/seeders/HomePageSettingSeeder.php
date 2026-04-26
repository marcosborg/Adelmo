<?php

namespace Database\Seeders;

use App\Models\HomePageSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomePageSetting::query()->firstOrCreate([], HomePageSetting::defaults());
    }
}
