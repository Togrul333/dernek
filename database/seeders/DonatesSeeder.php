<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Donation;
use App\Models\Language;
use App\Models\News;
use App\Services\UploadImagesService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DonatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('donations')->delete();
        $langs = Language::get();
        $donation = Donation::create([
            'id' => 1,
            'donation_type' => 'some type',
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        foreach ($langs as $lang) {
            $donation->translations()->create([
                'locale' => $lang->code,
                'title' => 'Şefkatli Sağlık Hizmeti Sunumu',
                'content' => 'Başarının sırrı yoktur. Bu hazırlık, sıkı çalışma ve öğrenme başarısızlığının sonucudur.',
                'description' => 'Gönüllülerimizin desteği ve bağışlarınızla, bu projelere katkısı olan herkese çok teşekkür ediyoruz. Siz de Hedef Derneği’ne katılarak, gönüllümüz olabilir yapılan bu çalışmaların bir paydaşı olabilirsiniz. Bu değişimin bir gönüllüsü olarak, Afrikalı kardeşlerimize umut olabilirsiniz.',
                'slug' => Str::uuid(),
            ]);
        }

        $donation = Donation::create([
            'id' => 2,
            'donation_type' => 'some type',
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        foreach ($langs as $lang) {
            $donation->translations()->create([
                'locale' => $lang->code,
                'title' => 'Çocukların Mutlu Bir Gelecek Kurmasına Yardımcı Olalım',
                'content' => 'Başarının sırrı yoktur. Bu hazırlık, sıkı çalışma ve öğrenme başarısızlığının sonucudur.',
                'description' => 'Gönüllülerimizin desteği ve bağışlarınızla, bu projelere katkısı olan herkese çok teşekkür ediyoruz. Siz de Hedef Derneği’ne katılarak, gönüllümüz olabilir yapılan bu çalışmaların bir paydaşı olabilirsiniz. Bu değişimin bir gönüllüsü olarak, Afrikalı kardeşlerimize umut olabilirsiniz.',
                'slug' => Str::uuid(),
            ]);
        }


        $donation = Donation::create([
            'id' => 3,
            'donation_type' => 'some type',
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        foreach ($langs as $lang) {
            $donation->translations()->create([
                'locale' => $lang->code,
                'title' => 'Küçük Yardım Büyük Fark Yaratabilir',
                'content' => 'Başarının sırrı yoktur. Bu hazırlık, sıkı çalışma ve öğrenme başarısızlığının sonucudur.',
                'description' => 'Gönüllülerimizin desteği ve bağışlarınızla, bu projelere katkısı olan herkese çok teşekkür ediyoruz. Siz de Hedef Derneği’ne katılarak, gönüllümüz olabilir yapılan bu çalışmaların bir paydaşı olabilirsiniz. Bu değişimin bir gönüllüsü olarak, Afrikalı kardeşlerimize umut olabilirsiniz.',
                'slug' => Str::uuid(),
            ]);
        }
    }
}
