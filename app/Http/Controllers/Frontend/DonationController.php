<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donation;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::get();
        return view('frontend.pages.donations.index',compact('donations'));
    }
    public function donate()
    {
        $donations = Donation::get();
        return view('frontend.pages.donations.index_2',compact('donations'));
    }
    public function makeDonate(Donation $donation)
    {
        $donations = Donation::get();
        return view('frontend.pages.donations.index',compact('donations'));
    }
    public function detail($donationSlug)
    {
        $donation = Donation::active()->whereHas('translation', function ($query) use ($donationSlug) {
            $query->where('slug', $donationSlug);
        })->firstOrFail();
        $some_donations = Donation::limit(7)->get();
        return view('frontend.pages.donations.detail',compact('donation','some_donations'));
    }
}
