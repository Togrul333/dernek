<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Language;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;


if (!function_exists('locale')) {
    function locale()
    {
        return app()->getlocale();
    }
}
if (!function_exists('getPhoneMask')) {
    function getPhoneMask($mask_phone): string
    {
        $number = explode(' ', $mask_phone);
        $phone = str_replace(' ', '', $number);

        $prefix = str_replace(array('(', ')'), '', $phone[0] ?? '');
        $suffix = str_replace('()', '', $phone[1] ?? '');


        return '994' . $prefix . $suffix;
    }
}

if (!function_exists('getRightPhoneNumber')) {
    function getRightPhoneNumber($string)
    {
        if (str_contains($string, '+994')) {
            $result = str_replace("+994", "", trim($string));
        } else if (str_contains($string, '994')) {
            $result = str_replace("994", "", trim($string));

        } else if (str_contains($string, '0')) {
            $result = substr(trim($string), 1);
        } else $result = trim($string);

        return '994' . $result;
    }
}


if (!function_exists('curlGET')) {
    function curlGET($url)
    {

        $username = 'WebAdmin';
        $password = 'Web@dm1n123';

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'accept: text/plain',
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode($username . ':' . $password)
            ]
        ]);

        $data = curl_exec($curl);
        if ($data === false) {
            echo $result = 'Curl error: ' . curl_error($curl);
        } else {
            $result = array_values(json_decode($data, true));
        }
        curl_close($curl);
        return $result;
    }
}

if (!function_exists('httpPost')) {
    function httpPost($url, $order)
    {
        ini_set('memory_limit', '64M');

        $username = 'stockdata';
        $password = 'stock2022';

        $data = json_encode([
            'order' =>
                [
                    'user_id' => $order->user_id,
                    'user' => $order->user->full_name ?? null,
                    'total_price' => $order->total_price ?? null,
                    'total_discount_number' => $order->total_discount_number ?? null,
                    'total_amount' => $order->total_amount ?? null,
                    'address' => $order->address ?? null,
                    'more_info' => $order->more_info ?? null,
                    'delivery_method' => $order->deliveryMethod?->transname ?? null,
                    'store' => $order?->store?->transname ?? null,
                    'payment_method' => $order->paymentMethod?->transname ?? null,
                    'credit_month' => $order?->creditMonth?->month ?? null,
                    'installment_card' => $order->installmentCardMonth?->installmentCard?->transname ?? null,
                    'installment_card_month' => $order->installmentCardMonth?->month ?? null,
                    'order_status' => $order->orderStatus?->transname ?? null,
                ],
            'products' => $order->products->map(function ($product) {
                return [
                    'code' => \DB::table('color_product')->select('code')->where('product_id', $product->product_id)->where('color_id', $product->color_id)->first()?->code ?? null,
                    'product_id' => $product->product_id,
                    'name' => $product->name,
                    'color_id' => $product->color_id,
                    'type_id' => $product->type_id,
                    'quantity' => $product->quantity,
                    'price' => $product->price,
                    'discount_price' => $product->discount_price,
                    'discount_number' => $product->discount_number,
                    'subtotal_amount' => $product->subtotal_amount,
                ];
            })->toArray(),
        ], true);


        $curl = curl_init($url);

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => 300,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => [
                'accept: text/plain',
                'Content-Type: application/json',
                'Authorization: Basic ' . base64_encode($username . ':' . $password)
            ]
        ]);

        $data = curl_exec($curl);
        if ($data === false) {
            echo $result = 'Curl error: ' . curl_error($curl);
        } else {
            $result = array_values(json_decode($data, true));
        }
        curl_close($curl);
        return $result;
    }
}


if (!function_exists('get_parent_category')) {
    function get_parent_category($category)
    {
        $parent = $category['parent'];
        if ($parent) {
            return get_parent_category($parent);
        } else {
            return $category['id'];
        }
    }
}


if (!function_exists('checkInCampaign')) {
    function checkInCampaign($productsArray, $month)
    {
        $campaigns = \App\Models\Campaign::with(['detail' => function ($query) {
            return $query->where('ended_at', '>', now());
        }])->active()->get();

        foreach ($campaigns as $campaign) {
            if (optional($campaign->detail)->campaign_type_id == \App\Enums\CampaignType::InterestFree) // daxili kredit faizsiz
            {

                if ($campaign->detail->belong_type == '1') {
                    // Kateqoriya görə
                    if ($campaign->detail->categories()->whereIn('category_id', $productsArray->pluck('category_id')->toArray())->exists() && optional($campaign->detail)->credits->where('month', $month)->count() > 0) {
                        return true;
                    }
                }

                if ($campaign->detail->belong_type == '2') {
                    // Brende görə
                    if ($campaign->detail->brands()->whereIn('brand_id', $productsArray->pluck('brand_id')->toArray())->exists() && optional($campaign->detail)->credits->where('month', $month)->count() > 0) {
                        return true;
                    }
                }

                if ($campaign->detail->belong_type == '3') {
                    // Brende və Kateqoriya görə
                    if (optional($campaign->detail)->categories()->whereIn('category_id', $productsArray->pluck('category_id')->toArray()) && optional($campaign->detail)->brands()->whereIn('brand_id', $productsArray->pluck('brand_id')->toArray())->exists() && optional($campaign->detail)->credits->where('month', $month)->count() > 0) {
                        return true;
                    }
                }

                if ($campaign->detail->belong_type == '4') {
                    // Məhsula görə
                    if (optional($campaign->detail)->products()->whereIn('product_id', $productsArray->pluck('id')->toArray())->exists() && optional($campaign->detail)->credits->where('month', $month)->count() > 0) {
                        return true;
                    }
                }

                if ($campaign->detail->belong_type == '5') {
                    // Ana kateqoriyaya görə

                    foreach ($productsArray as $product) {
                        if (optional($campaign->detail)->categories()->where('category_id', get_parent_category($product['category']))->exists() && optional($campaign->detail)->credits->where('month', $month)->count() > 0) {
                            return true;
                        }
                    }

                }
            }
        }

        return false;
    }
}

if (!function_exists('checkInstallmentCardsInCampaign')) {
    function checkInstallmentCardsInCampaign($productsArray)
    {
        $campaigns = \App\Models\Campaign::with(['detail' => function ($query) {
            $query->where('ended_at', '>', now())->with(['categories', 'brands', 'products'])->where('campaign_type_id', \App\Enums\CampaignType::InstallmentCrads);
        }])->active()->get();

        foreach ($campaigns as $campaign) {
            if (!is_null($campaign->detail)) {
                if (optional($campaign->detail)->belong_type == '1') {
                    // Kateqoriya görə
                    if (optional($campaign->detail)->categories()->whereIn('category_id', $productsArray->pluck('category_id')->toArray())->exists()) {
                        return true;
                    }
                }

                if (optional($campaign->detail)->belong_type == '2') {
                    // Brende görə
                    if (optional($campaign->detail)->brands()->whereIn('brand_id', $productsArray->pluck('brand_id')->toArray())->exists()) {
                        return true;
                    }
                }

                if (optional($campaign->detail)->belong_type == '3') {
                    // Brende və Kateqoriya görə
                    if (optional($campaign->detail)->categories()->whereIn('category_id', $productsArray->pluck('category_id')->toArray())->exists() && optional($campaign->detail)->brands()->whereIn('brand_id', $productsArray->pluck('brand_id')->toArray())->exists()) {
                        return true;
                    }
                }

                if ($campaign->detail->belong_type == '4') {
                    // Məhsula görə
                    if (optional($campaign->detail)->products()->whereIn('product_id', $productsArray->pluck('id')->toArray())->exists()) {
                        return true;
                    }
                }

                if ($campaign->detail->belong_type == '5') {
                    // Ana kateqoriyaya görə

                    foreach ($productsArray as $product) {
                        if (optional($campaign->detail)->categories()->where('category_id', $product->category->parent->id)->exists()) {
                            return true;
                        }
                    }

                }
            }
        }


        return false;
    }
}

if (!function_exists('getBrands')) {
    function getBrands($category_id)
    {
        $brandIds = collect(\DB::table('products')->select('category_id', 'brand_id')->where('category_id', $category_id)->pluck('brand_id'))->unique()->toArray();
        return \DB::table('brands')->select('id', 'name', 'slug')->whereIn('id', $brandIds)->where('status', '1')->get();
    }
}

if (!function_exists('getPaymentMethodAlpineClass')) {
    function getPaymentMethodAlpineClass($payment_id)
    {
        $text = '';
        if ($payment_id == \App\Enums\PaymentType::BUY_ON_CREDİT) {
            $text = 'creditBuy';
        } elseif ($payment_id == \App\Enums\PaymentType::BUY_IN_INSTALLMENT) {
            $text = 'installment';
        }

        return $text;
    }
}


if (!function_exists('getDeliveryMethodAlpineClass')) {
    function getDeliveryMethodAlpineClass($id)
    {
        $text = '';
        if ($id == 1) {
            $text = 'delivery_method_1';
        } elseif ($id == 2) {
            $text = 'delivery_method_2';
        }

        return $text;
    }
}

if (!function_exists('services')) {
    function services($name)
    {
        switch ($name) {
            case "Saytların Hazırlanması":
                return "Sayt lazımdır?";
            case "Hazır proqramlar və Mobil Tətbiqlər":
                return "Tətbiq lazımdır?";
            case "Server Nəzarəti və Hostinq":
                return "Nəzarət lazımdır?";
            case "Texniki dəstək":
                return "Dəstək lazımdır?";
            case "SEO xidməti":
                return "SEO lazımdır?";
            case "CRM və Marketinq Avtomatlaşdırma":
                return "CRM lazımdır?";
            case "Ödəniş sistemlərinin qurulması":
                return "Ödəniş lazımdır?";
            case "İnteqrasiya xidməti":
                return "İnteqrasiya lazımdır?";
            default:
                return "Layihən var?";
        }
    }
}

if (!function_exists('settings')) {
    function settings($type = null)
    {
        $return = '';

        $settings = Cache::remember('settings', 1800, function () {
            return collect(Setting::with('translations')->get());
        });

        foreach ($settings as $setting) {
            if ($setting->name == $type) {
                return $setting->translations->where('locale', locale())->first()->content ?? '';
            }
        }

        return $return;
    }
}


if (!function_exists('admin')) {
    function admin()
    {
        return auth('admin')->user();
    }
}

if (!function_exists('user')) {
    function user()
    {
        return auth()->user();
    }
}

if (!function_exists('short_name')) {
    function short_name()
    {
        $array = explode(' ', admin()->name);

        if (count($array) < 2) {
            return strtoupper(substr($array[0], 0, 1));
        }

        return strtoupper(substr($array[0], 0, 1)) . strtoupper(substr($array[1], 0, 1));
    }
}

if (!function_exists('notify')) {
    function notify($type, $message)
    {
        return "Swal.fire(
                {
                    icon:  '$type',
                    title: '$message',
                    showConfirmButton: false,
                    timer: 3000
                });";
    }
}

if (!function_exists('confirm')) {
    function confirm()
    {
        return "Swal.fire(
                {
                    title: '" . trans('backend.mixins.are_you_sure') . "',
                    text:  '" . trans('backend.mixins.wont_revert') . "',
                    icon:  'warning',
                    showCancelButton:   true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor:  '#d33',
                    confirmButtonText:  '" . trans('backend.buttons.delete') . "',
                    cancelButtonText:   '" . trans('backend.buttons.cancel') . "'
                })";
    }
}


if (!function_exists('ipfind')) {
    function ipfind()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        return $ip;
    }
}

if (!function_exists('badge')) {
    function badge($value)
    {
        if ($value) {
            return '<span class="label label-lg label-inline label-light-success">' . trans('backend.mixins.active') . '</span>';
        }

        return '<span class="label label-lg label-inline label-light-danger">' . trans('backend.mixins.passive') . '</span>';
    }
}

if (!function_exists('prepare_for_createMany')) {
    function prepare_for_createMany($key, $array = [])
    {
        $result = [];

        foreach ($array as $item) {
            $result[] = [$key => $item];
        }

        return $result;
    }
}

if (!function_exists('image_url')) {
    function image_url($name)
    {
        return asset("uploads/$name");
    }
}

if (!function_exists('lang_url')) {
    function lang_url($locale)
    {
        $url = request()->segments();
        array_shift($url);
        $segments = implode('/', $url);

        return url("$locale/$segments");
    }
}

if (!function_exists('current_lang')) {
    function current_lang()
    {
        $result = '';

        foreach (active_langs() as $lang) {
            if (locale() == $lang->code) {
                $result = $lang->name;
                break;
            }
        }

        return $result;
    }
}

if (!function_exists('active_langs')) {
    function active_langs()
    {
        return Language::active()->get();
    }
}

if (!function_exists('default_lang')) {
    function default_lang()
    {
        return optional(Language::default()->first())->code ?? config('app.locale');
    }
}

if (!function_exists('created_for_blog')) {
    function created_for_blog($datetime)
    {
        $date = explode(' ', $datetime)[0];
        $mon = explode('-', $date)[1];
        $day = explode('-', $date)[2];

        return "<b>$day</b> " . trans("frontend.months.$mon");
    }
}

if (!function_exists('created_for_order')) {
    function created_for_order($datetime)
    {
        $date = explode(' ', $datetime)[0];
        $year = explode('-', $date)[0];
        $mon = explode('-', $date)[1];
        $day = explode('-', $date)[2];

        return "$day/$mon/$year";
    }
}

if (!function_exists('setting')) {
    function setting($name)
    {
        $setting = Setting::whereName($name)->first();
        return $setting ? optional($setting->translate(locale()))->content ?? '' : '';
    }
}

if (!function_exists('category_tree')) {
    function category_tree()
    {
        $cats = Category::with('childrens')->parent()->active()->get();
        $html = '<ul class="megamenu">';

        foreach ($cats as $cat1) {
            $html .= '<li class="item-vertical with-sub-menu hover">';
            $html .= '<p class="close-menu"></p>';
            $html .= '<a href="' . url(locale() . '/category/' . $cat1->slug) . '" class="clearfix">';
            $html .= '<span>' . $cat1->translate(locale())->name . '</span>';

            if ($cat1->childrens->count()) {
                $html .= '<b class="fa-angle-right"></b>';
            }

            $html .= '</a>';

            if ($cat1->childrens->count()) {
                $html .= '<div class="sub-menu" data-subwidth="60">';
                $html .= '<div class="content">';
                $html .= '<div class="row">';
                $html .= '<div class="col-sm-12">';
                $html .= '<div class="row">';

                foreach ($cat1->childrens as $cat2) {
                    $html .= '<div class="col-md-4 static-menu">';
                    $html .= '<div class="menu">';
                    $html .= '<ul>';
                    $html .= '<li>';
                    $html .= '<a href="' . url(locale() . '/category/' . $cat1->slug . '/' . $cat2->slug) . '" class="main-menu">' . $cat2->translate(locale())->name . '</a>';

                    if ($cat2->childrens->count()) {
                        $html .= '<ul>';

                        foreach ($cat2->childrens as $cat3) {
                            $html .= '<li><a href="' . url(locale() . '/category/' . $cat1->slug . '/' . $cat2->slug . '/' . $cat3->slug) . '">' . $cat3->translate(locale())->name . '</a></li>';
                        }

                        $html .= '</ul>';
                    }

                    $html .= '</li>';
                    $html .= '</ul>';
                    $html .= '</div>';
                    $html .= '</div>';
                }

                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
                $html .= '</div>';
            }

            $html .= '</li>';
        }

        $html .= '</ul>';
        return $html;
    }
}

if (!function_exists('get_logo')) {
    function get_logo()
    {
        return asset("frontend/images/logo/globalsoft-logo.svg");
    }
}

if (!function_exists('get_white_logo')) {
    function get_white_logo()
    {
        return asset("frontend/images/logo/globalsoft-logo-white.svg");
    }
}


function menuTree($items = array(), $parent_id = 0): array
{
    $tree = array();
    foreach ($items as $key => $item) {
        if ($item->parent_id == $parent_id) {
            $tree[$key]['id'] = $item->id;
            $tree[$key]['name'] = $item->translate(locale())->title;
            $tree[$key]['url'] = $item->slug;
            $tree[$key]['childs'] = menuTree($items, $item->id);
        }
    }
    return $tree;
}
if (!function_exists('settings')) {
    function settings($type = null)
    {
        $return = '';

        $settings = Cache::remember('settings', 1800, function () {
            return collect(Setting::with('translations')->get());
        });

        foreach ($settings as $setting) {
            if ($setting->name == $type) {
                return $setting->translations->where('locale', locale())->first()->content ?? '';
            }
        }

        return $return;
    }
}

if (!function_exists('translation')) {
    function translation($model)
    {
        return $model?->translations->where('locale', locale())->first();
    }
}
