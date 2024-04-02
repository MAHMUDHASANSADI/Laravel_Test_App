<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Chat;
use App\Models\Hero;
use App\Models\Pricing;
use App\Models\Services;
use App\Models\Work;
use Illuminate\Http\Request;

class guestViewController extends Controller
{

    public function index()
    {
        $heroSection = Hero::first();
        $aboutSection = About::first();
        $servicetSection = Services::first();
        $workSection = Work::first();
        $pricingSection = Pricing::first();
        $chatSection = Chat::first();

        return view("frontend.pages.home", compact([
            "aboutSection",
            "heroSection",
            "servicetSection",
            "workSection",
            "pricingSection",
            "chatSection"
        ]));
    }
    // function about()
    // {
    // }
    // public function chat()
    // {
    // }
}
