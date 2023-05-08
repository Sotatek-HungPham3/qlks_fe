<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage()
    {
        return view('pages.index');
    }
    public function listBuilding()
    {
        return view('pages.list_building');
    }
    public function detailBuilding()
    {
        return view('pages.detail_building');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function payment()
    {
        return view('pages.payment');
    }
    public function blog()
    {
        return view('pages.blog');
    }
    public function blogDetail()
    {
        return view('pages.blog_detail');
    }
    public function flight()
    {
        return view('pages.flight');
    }
    public function flightList()
    {
        return view('pages.flight_list');
    }
    public function car()
    {
        return view('pages.car');
    }
    public function carList()
    {
        return view('pages.car_list');
    }
    public function pakageDeals()
    {
        return view('pages.pakage_deals');
    }
    public function pakageDealsList()
    {
        return view('pages.pakage_deals_list');
    }
    public function cruises()
    {
        return view('pages.cruises');
    }
    public function cruisesList()
    {
        return view('pages.cruises_list');
    }
    public function cruisesDetail()
    {
        return view('pages.cruises_detail');
    }
    public function tours()
    {
        return view('pages.tours');
    }
    public function toursList()
    {
        return view('pages.tours_list');
    }
    public function toursDetail()
    {
        return view('pages.tours_detail');
    }
}
