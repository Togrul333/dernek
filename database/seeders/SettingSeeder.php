<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Models\SettingTranslation;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        activity()->withoutLogs(function () {

            $settings = [
                [
                    'name' => 'logo',
                    'content' => 'http://shop.globalsoft.az/frontend/img/logo.png'
                ],
                [
                    'name' => 'location',
                    'content' => '75 Albert Buildings 494 Queen Victoria Street London, EC4N 4SA United Kingdom'
                ],
                [
                    'name' => 'phone',
                    'content' => '+99412 310 87654 44'
                ],
                [
                    'name' => 'email',
                    'content' => 'contact@email.com'
                ],
                [
                    'name' => 'work_hour',
                    'content' => '7 Days a week from 10-00 am to 6-00 pm'
                ],
                [
                    'name' => 'youtube',
                    'content' => 'https://www.youtube.com/'
                ],
                [
                    'name' => 'facebook',
                    'content' => 'https://www.facebook.com/'
                ],
                [
                    'name' => 'instagram',
                    'content' => 'https://www.instagram.com/'
                ],
                [
                    'name' => 'dribbble',
                    'content' => 'https://www.dribbble.com/'
                ],
                [
                    'name' => 'linkedin',
                    'content' => 'https://www.linkedin.com/'
                ],
                [
                    'name' => 'twitter',
                    'content' => 'https://twitter.com/'
                ],
                [
                    'name' => 'footer_text',
                    'content' => 'Lorem ipsum dolor sit ame consect etur pisicing elit sed
                            do eiusmod tempor incididunt ut labore.'
                ],
                [
                    'name' => 'footer_support_text',
                    'content' => 'Lorem ipsum dolor sit ame consect etur pisicing
                            elit sed do eiusmod tempor incididunt ut labore.'
                ],

                [
                    'name' => 'successful_campaigns',
                    'content' => 'Successful Campaigns'
                ],
                [
                    'name' => 'successful_campaigns_number',
                    'content' => '4850'
                ],


                [
                    'name' => 'raised_funds',
                    'content' => 'Raised Funds'
                ],
                [
                    'name' => 'raised_funds_number',
                    'content' => '3456'
                ],

                [
                    'name' => 'satisfied_donors',
                    'content' => 'Satisfied Donors'
                ],
                [
                    'name' => 'satisfied_donors_number',
                    'content' => '2060'
                ],


                [
                    'name' => 'best_volunteers',
                    'content' => 'Best Volunteers'
                ],
                [
                    'name' => 'best_volunteers_number',
                    'content' => '3456'
                ],

            ];

            foreach ($settings as $item) {
                $setting = Setting::create(['name' => $item['name']]);

                SettingTranslation::create(
                    [
                        'setting_id' => $setting->id,
                        'content' => $item['content'],
                        'locale' => 'az'
                    ]);

                SettingTranslation::create(
                    [
                        'setting_id' => $setting->id,
                        'content' => $item['content'],
                        'locale' => 'en'
                    ]);
            }
        });

    }
}
