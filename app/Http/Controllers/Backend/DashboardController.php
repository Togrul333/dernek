<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
//        $counts = Cache::rememberForever('counts', function () {
//            return [
//                'menus' => Menu::count(),
//                'stores' => Store::count(),
//                'sliders' => Slider::count(),
//                'users' => User::count(),
//                'orders' => Order::count(),
//                'categories' => Category::count(),
//                'product_statuses' => ProductStatus::count(),
//                'brands' => Brand::count(),
//                'products' => Product::count(),
//                'faqs' => Faq::count(),
//                'campaigns' => Campaign::count(),
//                'settings' => Setting::count(),
//            ];
//        });

        return view('backend.dashboard.index', [
//            'totalMenus' => $counts['menus'],
//            'totalStores' => $counts['stores'],
//            'totalSliders' => $counts['sliders'],
//            'totalUsers' => $counts['users'],
//            'totalBrands' => $counts['brands'],
//            'totalCategories' => $counts['categories'],
//            'totalProductStatuses' => $counts['product_statuses'],
//            'totalProducts' => $counts['products'],
//            'totalOrders' => $counts['orders'],
//            'totalFaqs' => $counts['faqs'],
//            'totalCampaigns' => $counts['campaigns'],
//            'totalSettings' => $counts['settings']
        ]);

    }
}
