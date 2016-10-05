<?php

namespace App\Http\Controllers;
use Forecast\Forecast;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use App\Http\Requests;
use Torann\GeoIP\GeoIPServiceProvider;


class ForecastController extends Controller
{
    public function weatherForecast()
    {

        $ip  = '145.144.152.208';
        $lat = GeoIP::getLocation($ip)->lat;
        $lon = GeoIP::getLocation($ip)->lon;

        $forecast = new Forecast('7238b3673bf584023af69092d2a09754');
        $summary = $forecast->get( $lat ,$lon);

        //dd($summary);



        return view('home', compact('summary'));

    }
}
