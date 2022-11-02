<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Faq;
use App\Models\PriceList;
use App\Models\Review;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        $customers = Customer::all();
        $priceLists = PriceList::all();
        $reviews = Review::all();
        $faqs = Faq::all();

        return view('home', compact(
            'services',
            'customers',
            'priceLists',
            'reviews',
            'faqs'
        ));
    }
}