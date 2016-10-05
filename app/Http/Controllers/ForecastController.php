<?php

namespace App\Http\Controllers;
use Forecast\Forecast;
use Illuminate\Http\Request;

use App\Http\Requests;

class ForecastController extends Controller
{
    public function weatherForecast()
    {
        $forecast = new Forecast('7238b3673bf584023af69092d2a09754');
       $value = json_encode($forecast->get('37.8267','-122.423'), true);

        return view('home', compact('value'));

    }
}
