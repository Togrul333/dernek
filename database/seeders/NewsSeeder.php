<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Language;
use App\Models\News;
use App\Services\UploadImagesService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('news')->delete();
        $langs = Language::get();
        $news = News::create([
            'id' => 1,
            'show_on_home' => 0,
            'news_type' => 'some type',
            'action_date' => '2022-04-15 12:08:18',
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        foreach ($langs as $lang) {
            $news->translations()->create([
                'locale' => $lang->code,
                'title' => 'Sünnet Organizasyonu Için Hazırlıklar Tamamlandı',
                'content' => 'Afrika Çad’da Yapılacak Sünnet Organizasyonu için Hazırlıklar Tamamlandı',
                'description' => 'Afrika’nın kalbinde yer alan Çad’ın başkenti Ndjamena’da Safa Derneği’nin ev sahipliğinde gerçekleşecek olan sünnet organizasyonuna Hedef Derneği olarak gönüllü sağlık ekibi ve gönüllülerimizle beraber biz de katılıyoruz. Gerçekleştirilecek anlamlı sünnet etkinliği için planlamalar yapıldı. Ekibimiz, 27-29 Kasım 2023 tarihleri arasındaki etkinliğin her yönüyle iyi bir şekilde yerine getirilmesi için özenle çalıştılar. Afrika Çad’da yapılacak sünnet organizasyonu için hazırlıklar tamamlandı.',
                'slug' => Str::uuid(),
            ]);
        }

        $news = News::create([
            'id' => 2,
            'show_on_home' => 0,
            'news_type' => 'some type',
            'action_date' => '2022-04-15 12:08:18',
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        foreach ($langs as $lang) {
            $news->translations()->create([
                'locale' => $lang->code,
                'title' => 'Afrika’da Hedef Derneği Ile Kurban Sevinci Ve Dayanışma',
                'content' => 'Afrika’da Hedef Derneği ile Kurban Sevinci ve Dayanışma',
                'description' => 'Hedef Derneği olarak, toplumsal dayanışma ve iyilik duygusunu en güzel şekilde yaşatan özel zamanlardan biri olan Kurban Bayramı’nda, Afrika Çad Ülkesi’ndeki hayırseverlerin bağışladığı kurbanları ihtiyaç sahiplerine dağıttık. Gönüllülerimizin bir olması sayesinde, binlerce Afrikalı insanın yüzünü güldürdük.
Afrika Çad Ülkesi, yaşam şartlarının zor olduğu bölgelerden biri olarak bilinir. Bu nedenle, Hedef Derneği olarak bu yanlarında olmak ve destek olmak amacıyla kurban yardımı çalışmaları düzenledik.
Kurban eti dağıtımı sırasında, insanların sevinç dolu yüz ifadelerini görmek bize ayrı bir mutluluk verdi. Afrikalı kardeşlerimizin duaları ve teşekkürleri, yaptığımız çalışmanın ne kadar anlamlı ve değerli olduğunu bizlere hatırlattı.',
                'slug' => Str::uuid(),
            ]);
        }

        $news = News::create([
            'id' => 3,
            'show_on_home' => 0,
            'news_type' => 'some type',
            'action_date' => '2022-04-15 12:08:18',
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        foreach ($langs as $lang) {
            $news->translations()->create([
                'locale' => $lang->code,
                'title' => 'Türkiye’den Sevgi Dolu Kalpler: Afrika’da Su Kuyuları',
                'content' => 'Türkiye’den Sevgi Dolu Kalpler: Afrika’da Su Kuyuları',
                'description' => 'Hedef Derneği olarak, Afrika’nın birçok ülkesinde susuzlukla mücadele eden insanların yaşamlarını değiştirmek için önemli bir misyon üstleniyoruz. Türkiye’den gelen gönüllülerimizin destekleriyle, Burkina Faso, Çad ve Mali gibi ülkelerde su kuyuları açarak, insanlara suya erişim imkanı sağladık. Bu sayede, insanların hayatlarını kolaylaştırıyor ve umut ışığı oluyoruz.
Afrika’nın bazı bölgeleri, uzun yıllardır susuzlukla mücadele etmektedir. Özellikle çöl ve kurak bölgelerde su kaynakları oldukça sınırlıdır ve insanlar temiz ve içilebilir suya erişmekte büyük zorluklar yaşarlar. Bu zorluklarla mücadele etmek ve insanlara destek olmak amacıyla Hedef Derneği olarak su kuyuları açtık.
Gönüllülerimizin desteğiyle, Burkina Faso, Çad ve Mali gibi ülkelerde insanlar temiz suya kavuştu. Su kuyuları, insanların temiz ve içilebilir suya erişimini kolaylaştırırken, aynı zamanda tarım ve hayvancılık gibi faaliyetleri de destekleyerek ekonomik açıdan da önemli faydalar sağlar.
Su kuyuları projemiz, yerel halkla işbirliği içerisinde gerçekleştirilir. Böylece, projelerin sürdürülebilirliği ve uzun vadeli etkisi sağlanır. Ayrıca, su kuyularının bakım ve onarımı da düzenli olarak yapılır, böylece kuyuların ömrü uzatılır ve sürekli su temin edilir',
                'slug' => Str::uuid(),
            ]);
        }
    }
}
