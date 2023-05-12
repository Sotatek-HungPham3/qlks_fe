<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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

    public function detailBuilding($slug)
    {
        return view('pages.detail_building')->with([
            'slug' => $slug
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function booking(Request $request)
    {
        return view('pages.booking')->with([
            'roomType' => $request->room_type,
            'checkIn' => $request->check_in,
            'checkOut' => $request->check_out,
            'guest' => $request->guest
        ]);
    }

    public function payments()
    {
        return view('pages.payment');
    }

    public function pay()
    {
        return view('pages.vnpay.pay');
    }

    public function createPayment()
    {
        return view('pages.vnpay.create_payment');
    }

    public function paymentReturn(Request $request)
    {
        return view('pages.vnpay_return')->with([
            "vnp_ResponseCode" => $request->vnp_ResponseCode,
        ]);
    }

    public function paymentVnPay()
    {
        return view('pages.vnpay.index');
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

    public function images($slug)
    {
        return view('pages.images')->with([
            'slug' => $slug
        ]);
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
