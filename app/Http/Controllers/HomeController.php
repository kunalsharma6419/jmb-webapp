<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Function for home page
    public function index()
    {
        return view('web.pages.home');
    }

    // Function for About Us page
    public function aboutus()
    {
        return view('web.pages.about-us');
    }

    // Function for Why Choose Us page
    public function whyus()
    {
        return view('web.pages.why-choose-us');
    }

    // Function for Help and FAQ page
    public function helpandfaq()
    {
        return view('web.pages.help-and-faq');
    }

    // Function for Our Products page
    public function ourproducts()
    {
        return view('web.pages.our-products');
    }

    // Function for Contact Us page
    public function contactus()
    {
        return view('web.pages.contact-us');
    }

    // Function for Request Quote page
    public function requestquote()
    {
        return view('web.pages.request-quote');
    }
}
