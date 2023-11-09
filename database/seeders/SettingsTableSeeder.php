<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
            0 =>
            array (
                'id' => 2,
                'name' => 'location',
                'slug' => NULL,
                'created_at' => '2022-04-15 12:08:18',
                'updated_at' => '2022-04-15 12:08:18',
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'phone',
                'slug' => '456546546546',
                'created_at' => '2022-04-15 12:08:18',
                'updated_at' => '2022-11-13 13:17:57',
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'email',
                'slug' => 'ecommers@gmail.com',
                'created_at' => '2022-04-15 12:08:18',
                'updated_at' => '2022-11-13 13:22:23',
            ),
            3 =>
            array (
                'id' => 7,
                'name' => 'facebook',
                'slug' => 'https://www.facebook.com/',
                'created_at' => '2022-04-15 12:08:18',
                'updated_at' => '2022-11-13 13:09:42',
            ),
            4 =>
            array (
                'id' => 8,
                'name' => 'twitter',
                'slug' => 'https://twitter.com/',
                'created_at' => '2022-04-15 12:08:18',
                'updated_at' => '2022-11-13 13:09:51',
            ),
            5 =>
            array (
                'id' => 11,
                'name' => 'linkedin',
                'slug' => 'https://www.linkedin.com/',
                'created_at' => '2022-11-13 13:10:21',
                'updated_at' => '2022-11-13 13:10:21',
            ),
            6 =>
            array (
                'id' => 12,
                'name' => 'instagram',
                'slug' => 'https://www.instagram.com/',
                'created_at' => '2022-11-13 13:10:52',
                'updated_at' => '2022-11-13 13:10:52',
            ),
        ));


    }
}
