<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Faq;
use App\Models\Post;
use App\Models\PriceList;
use App\Models\Review;
use App\Models\Service;

class HomeController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        $customers = Customer::all();
        $reviews = Review::all();
        $faqs = Faq::all();
        $posts = Post::query()->take(2)->get();
        $priceList = PriceList::query()
            ->where('language', app()->getLocale())
            ->first();

        return view('home', compact(
            'services',
            'customers',
            'priceList',
            'reviews',
            'faqs',
            'posts'
        ));
    }
}