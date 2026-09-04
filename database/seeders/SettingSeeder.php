<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Poolito',
                'hero_title' => 'Cleaning Services For your city',
                'footer_details' => 'Provide detailed house cleaning sanitizing service...',

                'opening_day_from' => 'tuesday',
                'opening_day_to' => 'saturday',

                'opening_time_from' => '08:00:00',
                'opening_time_to' => '17:00:00',

                'header_logo' => null,
                'footer_logo' => null,
                'page_banner' => null,

                'about_image1' => null,
                'about_image2' => null,
                'about_description' => null,

                'phone' => null,
                'email' => null,
                'address' => null,
                'location' => null,
                'facebook' => null,
                'linkedin' => null,
                'instagram' => null,
            ]
        );
    }
}
