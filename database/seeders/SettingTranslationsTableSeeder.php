<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('setting_translations')->delete();
        
        \DB::table('setting_translations')->insert(array (
            0 => 
            array (
                'id' => 3,
                'setting_id' => 2,
                'content' => 'Ü.Hacıbəyli 80,Hökumət Evi, IV Qapı',
                'locale' => 'az',
            ),
            1 => 
            array (
                'id' => 4,
                'setting_id' => 2,
                'content' => 'Ü.Hacıbəyli 80,Hökumət Evi, IV Qapı',
                'locale' => 'en',
            ),
            2 => 
            array (
                'id' => 5,
                'setting_id' => 3,
                'content' => NULL,
                'locale' => 'az',
            ),
            3 => 
            array (
                'id' => 6,
                'setting_id' => 3,
            'content' => '(+994 77) 333 98 00',
                'locale' => 'en',
            ),
            4 => 
            array (
                'id' => 7,
                'setting_id' => 4,
                'content' => NULL,
                'locale' => 'az',
            ),
            5 => 
            array (
                'id' => 8,
                'setting_id' => 4,
                'content' => 'orkhandev@gmail.com',
                'locale' => 'en',
            ),
            6 => 
            array (
                'id' => 13,
                'setting_id' => 7,
                'content' => NULL,
                'locale' => 'az',
            ),
            7 => 
            array (
                'id' => 14,
                'setting_id' => 7,
                'content' => 'https://www.facebook.com/AileQadinUsaqProblemleriUzreDovletKomitesi',
                'locale' => 'en',
            ),
            8 => 
            array (
                'id' => 15,
                'setting_id' => 8,
                'content' => NULL,
                'locale' => 'az',
            ),
            9 => 
            array (
                'id' => 16,
                'setting_id' => 8,
                'content' => 'https://twitter.com/aileqadinusaq',
                'locale' => 'en',
            ),
            10 => 
            array (
                'id' => 19,
                'setting_id' => 11,
                'content' => NULL,
                'locale' => 'az',
            ),
            11 => 
            array (
                'id' => 20,
                'setting_id' => 12,
                'content' => NULL,
                'locale' => 'az',
            ),
            12 => 
            array (
                'id' => 21,
                'setting_id' => 13,
                'content' => '<p>&nbsp; Lorem ipsum dolor sit amet, consectet ur adipiscing elit,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;sed do eiusmod tempor incididunt ut labore et.<br></p>',
                'locale' => 'az',
            ),
            13 => 
            array (
                'id' => 22,
                'setting_id' => 14,
                'content' => NULL,
                'locale' => 'az',
            ),
        ));
        
        
    }
}