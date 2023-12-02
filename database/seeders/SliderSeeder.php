<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Document;
use App\Models\Language;
use App\Models\News;
use App\Models\Slider;
use App\Services\UploadImagesService;
use GuzzleHttp\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('sliders')->delete();
        $langs = Language::get();
//        slider 1    -------------------------------------------------------------------------------------
        $slider = Slider::create([
            'id' => 1,
            'show_on_home' => 1,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/main-slider/slider-2-1.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'We Can Make <br> A Difference',
            ]);
        }

//        slider 2 ---------------------------------------------------------------------------------------

        $slider = Slider::create([
            'id' => 2,
            'show_on_home' => 1,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/main-slider/slider-2-2.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'We Can Make <br> A Difference',
            ]);
        }

//        slider 3 ---------------------------------------------------------------------------------------

        $slider = Slider::create([
            'id' => 3,
            'show_on_home' => 1,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/main-slider/slider-2-1.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'We Can Make <br> A Difference',
            ]);
        }


//        slider 4 ---------------------------------------------------------------------------------------

        $slider = Slider::create([
            'id' => 4,
            'show_on_home' => 0,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/gallery/gallery-two-img-1.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'Small Help',
            ]);
        }
//        slider 5 ---------------------------------------------------------------------------------------

        $slider = Slider::create([
            'id' => 5,
            'show_on_home' => 0,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/gallery/gallery-two-img-2.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'Small Help',
            ]);
        }
//        slider 6 ---------------------------------------------------------------------------------------
        $slider = Slider::create([
            'id' => 6,
            'show_on_home' => 0,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/gallery/gallery-two-img-3.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'Small Help',
            ]);
        }
//        slider 7 ---------------------------------------------------------------------------------------

        $slider = Slider::create([
            'id' => 7,
            'show_on_home' => 0,
            'created_at' => '2022-04-15 12:08:18',
            'updated_at' => '2022-04-15 12:08:18',
        ]);
        $imageUrl = asset('frontend/assets/images/gallery/gallery-two-img-4.jpg');
        $client = new Client();
        $response = $client->get($imageUrl);

        $imageName = pathinfo($imageUrl, PATHINFO_BASENAME);
        $path = 'public/documents/slider_image/' . $imageName;
        Document::create([
            'manipulationable_type' => 'slider',
            'manipulationable_id' => $slider->id,
            'document' => 'slider_image/'.$imageName,
            'collection_name' => 'slider_image',
        ]);
        Storage::put($path, $response->getBody());

        foreach ($langs as $lang) {
            $slider->translations()->create([
                'locale' => $lang->code,
                'name' => 'Helping Them Today',
                'text' => 'Small Help',
            ]);
        }
//        slider  ---------------------------------------------------------------------------------------
//        slider  ---------------------------------------------------------------------------------------

    }
}
